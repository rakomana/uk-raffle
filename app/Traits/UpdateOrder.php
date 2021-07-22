<?php

namespace App\Traits;

use App\Enums\Payment;

class UpdateOrder{
    /**
     * Update the user product with order id
    */
    public function order($cart, $order)
    {
        foreach ($cart as $item) {
            if ($item->pivot->status == Payment::Nil) {
                $item->pivot->order_id = $order->id;
                $item->pivot->update();
            }
        }
    }

    public function process($cart)
    {
        foreach ($cart as $item) {
            if ($item->pivot->status == Payment::Failed) {
                $item->pivot->status = Payment::Nil;
                $item->pivot->update();
            }
        }
    }
}