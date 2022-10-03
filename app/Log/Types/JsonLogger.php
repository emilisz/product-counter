<?php

namespace App\Log\Types;

use App\Contracts\ReaderInterface;
use App\Log\Counter;
use Illuminate\Support\Facades\Http;

class JsonLogger implements ReaderInterface
{
    /**
     * Reads json file
     */
    public function read($source, $min_price=null, $max_price=null, $isFile, $vendor_id=null)
    {
        if (!$isFile) {
            $res = Http::timeout(5)->get($source);
            $productsJson = $res->json();
        } else {
            $productsJson = json_decode(file_get_contents($source), true);
        }

        return (new Counter)->countData($productsJson, $min_price, $max_price, $vendor_id);
    }
}
