<?php

namespace App\Contracts;

interface ReaderInterface
{
    public function read($source, $min_price=null, $max_price=null, $isFile, $vendor_id=null);
}