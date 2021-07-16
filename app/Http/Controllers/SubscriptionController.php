<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscriptionRequest;

class SubscriptionController extends Controller
{
    /**
     * @var $subscription
     */
    private $subscription;

    /**
     * @param Subscription $subscription
    */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubscriptionRequest $request)
    {
        $subscription = new $this->subscription();
        $subscription->email = $request->email;
        $subscription->save();
        
        return redirect()->back()->with('subscription', 'Subscribed succesfully');
    }
}
