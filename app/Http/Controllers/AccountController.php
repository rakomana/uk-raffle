<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAccountRequest;

class AccountController extends Controller
{
    /**
     * @var $account
    */
    private $account;

    /**
     * Inject models into constructor
     * @param Account $account
    */
    public function __construct(Account $account)
    {
        $this->account = $account;    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountRequest $request)
    {
        $user = $request->user();

        $account = new $this->account();
        $account->last_name = $request->last_name;
        $account->address = $request->address;
        $account->unit = $request->unit;
        $account->city = $request->city;
        $account->state = $request->state;
        $account->post_code = $request->post_code;
        $account->phone_number = $request->phone_number;
        $account->user()->associate($user);
        $account->save();

        return response()->json([
            'message' => 'user account saved succesfully'
        ]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Account $account, Request $request)
    {
        $account->last_name = $request->last_name;
        $account->address = $request->address;
        $account->unit = $request->unit;
        $account->city = $request->city;
        $account->state = $request->state;
        $account->post_code = $request->post_code;
        $account->phone_number = $request->phone_number;
        $account->save();

        return response()->json([
            'message' => 'user account saved succesfully'
        ]);
    }
}
