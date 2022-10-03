<?php

namespace App\Log;

use App\Contracts\OfferInterface;

class Offer implements OfferInterface
{
    /**
     * Counts results
     */
    public function show($data)
    {
        echo $data->count();
    }
}
