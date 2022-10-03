<?php

namespace App\Contracts;

interface Reader
{
    public function read($source, $min_price=null, $max_price=null, $isFile, $vendor_id=null);
}