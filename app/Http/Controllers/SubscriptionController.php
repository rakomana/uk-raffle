<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Subscription;
use Illuminate\Http\Request;
use App\Notifications\Subscription\Message;
use App\Http\Requests\StoreSubscriptionRequest;

class SubscriptionController extends Controller
{
    /**
     * @var $campaign
     * @var $subscription
     */
    private $campaign;
    private $subscription;

    /**
     * @param Campaign $campaign
     * @param Subscription $subscription
    */
    public function __construct(Subscription $subscription, Campaign $campaign)
    {
        $this->subscription = $subscription;
        $this->campaign = $campaign;
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

    /**
     * Send bulk email subscription make use of queue to mitigate latency
    */
    public function sendSubcriptionEmails(Request $request)
    {
        #create migration and save the messages
        $subscriptions = $this->subscription->all();

        $campaign = new $this->campaign();
        $campaign->message = $request->message;
        $campaign->save();
        
        foreach($subscriptions as $subscription)
        {
            $subscription->notify(new Message(
                $campaign
            ));
        }

        return response()->json([
            'message' => 'emails are on the queue'
        ]);
    }

    /**
     * destroy resource in storage
    */
    public function destroy(Request $request)
    {
        $user = $request->user();

        $subscription = $this->subscription->whereEmail($user->email)->first();

        $subscription->delete();

        return redirect()->back();
    }
}