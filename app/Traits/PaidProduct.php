<?php

namespace App\Traits;

class PaidProduct{
    public function sort($carts)
    {
        $products = collect([]);

        foreach($carts as $item)
        {
            if($item->pivot->status == 'paid' || $item->pivot->status == 'win' || $item->pivot->status == 'lost' || $item->pivot->status == 'failed')
            {
                $products[] = $item;
            }
        }

        return $products;
    }
}