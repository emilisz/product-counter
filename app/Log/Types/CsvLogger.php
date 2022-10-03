<?php

namespace App\Log\Types;

use App\Contracts\Reader;
use App\Log\Counter;

class CsvLogger implements Reader
{
    /**
     * Reads Csv file
     */
    public function read($source, $min_price = 0, $max_price = 500, $isFile, $vendor_id = null)
    {
        $products = [];

        if (($open = fopen($source, "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $new = ([
                    'offerId' => $data[0],
                    'productTitle' => $data[1],
                    'vendorId' => $data[2],
                    'price' => $data[3],
                    'inStock' => $data[4],
                ]);
                $products[] = $new;
            }

            fclose($open);
        }


        return (new Counter)->countData($products, $min_price, $max_price, $vendor_id);
    }
}
