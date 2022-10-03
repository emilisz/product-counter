<?php

namespace App\Log;

use App\Contracts\OfferCollection;

class Counter implements OfferCollection
{
    /**
     * Counts items
     */
    public function countData($data, $min_price=null, $max_price=null, $vendor_id= null)
    {
        $query = collect($data)->where('inStock');
        
        if ($vendor_id) {
            $filteredProducts = $query->where('vendorId', $vendor_id);
        } else {
            $filteredProducts = $query->whereBetween('price', [$min_price, $max_price]);
        }
        
        return (new Offer)->show($filteredProducts);
    }
}
