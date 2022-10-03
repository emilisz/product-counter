<?php
namespace App\Log\Types;

use App\Contracts\Reader;
use App\Log\Counter;
use Illuminate\Support\Facades\Http;


class XmlLogger implements Reader
{
    /**
     * Reads Xml file
     */
    public function read($source, $min_price=null, $max_price=null, $isFile, $vendor_id = null)
    {
        
        if (!$isFile) {
            $res = Http::timeout(5)->get($source);
            $productsJson = $res->json();
        } else {
            $productsJson = file_get_contents($source);
        }

        $xml = simplexml_load_string(file_get_contents($source), "SimpleXMLElement", LIBXML_NOCDATA);
       
        if ($xml === false) {
            echo "Failed loading XML\n";
            foreach(libxml_get_errors() as $error) {
                echo "\t", $error->message;
            }
        }

        $json = json_encode($xml);
        $productsJson = json_decode($json,TRUE);
   
        return (new Counter)->countData($productsJson["products"], $min_price, $max_price, $vendor_id);
    }
}
