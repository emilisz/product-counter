<?php

namespace App\Contracts;

interface OfferCollection
{
    public function countData($source, $min_price, $max_price);
}