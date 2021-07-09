<?php

namespace App\Traits;

class SortProduct{
    public function sort($carts)
    {
        $products = [];

        foreach($carts as $item)
        {
            if($item->pivot->status == 'Nil')
            {
                $products[] = $item;
            }
        }

        return $products;
    }
}