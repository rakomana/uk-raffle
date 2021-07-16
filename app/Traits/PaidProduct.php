<?php

namespace App\Traits;

class PaidProduct{
    public function sort($carts)
    {
        $products = collect([]);

        foreach($carts as $item)
        {
            if($item->pivot->status == 'paid')
            {
                $products[] = $item;
            }
        }

        return $products;
    }
}