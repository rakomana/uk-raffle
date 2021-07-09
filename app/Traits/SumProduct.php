<?php

namespace App\Traits;

class SumProduct{
    /**
     * Get sum of products which are not yet paid
     * @return float
    */
    public function total($products)
    {
        $total = 0;
        $sub_total = 0;
        if(empty($products))
        {
            $products = [];
        }
        
        foreach($products as $item)
        {
            $sub_total = $item->entry_price * $item->pivot->quantity;

            $total = $total + $sub_total;
        }

        return $total;
    }
}