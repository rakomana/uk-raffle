<?php

namespace App\Traits;

class UpdateOrder{
    /**
     * Update the user product with order id
    */
    public function order($cart, $order)
    {
        foreach ($cart as $item) {
            if ($item->pivot->status == 'Nil') {
                $item->pivot->order_id = $order->id;
                $item->pivot->update();
            }
        }
    }
}