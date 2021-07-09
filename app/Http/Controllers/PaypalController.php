<?php

namespace App\Http\Controllers;

use App\Notifications\User\Order\Success;
use Illuminate\Http\Request;
use App\Enums\ProductStatus;
use App\Enums\Payment;
use App\Order;

class PaypalController extends Controller
{
    /**
     * @var $order
    */
    private $order;

    /**
     * Inject models into the constructor
     * @param Order $order
    */
    public function __construct(Order $order)
    {
        $this->order= $order;
    }

    /**
     * transaction cancelled
     * @return \Illuminate\Http\View
    */
    public function indexCancel()
    {
        return view('cancel');
    }

    /**
     * transaction succesful
     * @return \Illuminate\Http\View
    */
    public function indexSuccess(Request $request, string $uuid)
    {
        $order = $this->order->whereName($uuid)->first();

        $user = $request->user();
        
        $cart = $user->product;
        
        foreach($cart as $item)
        {
            if($item->pivot->order_id != $order->id)
            {
                $item->pivot->status = Payment::Failed;
                $item->pivot->update();
            }else{
                $item->pivot->status = Payment::Paid;
                $item->pivot->update();

                #decrement the quantity of product if transaction is complete
                $item->decrement('quantity',$item->pivot->quantity);
    
                #change the status of the product to Out of Stock if the quantity is zero
                if($item->quantity == 0)
                {
                    $item->status = ProductStatus::OutOfStock;
                }

                // Send successful payment notification to the seller
                // $user->notify(new Success(
                //     $uuid
                // ));
            }
        }

        return view('success');
    }
}
