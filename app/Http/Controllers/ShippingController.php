<?php

namespace App\Http\Controllers;

use App\User;
use App\Shipping;
use Illuminate\Http\Request;
use App\Http\Requests\AddressStoreRequest;
use App\Http\Requests\AddressUpdateRequest;
use Illuminate\Database\ConnectionInterface as DB;

class ShippingController extends Controller
{
    private $shipping;
    private $user;
    private $db;

    /**
    * Inject models into the constructor
    *
    * @param Shipping $shipping
    * @param DB $db
    *
    */
    public function __construct(
        Shipping $shipping,
        User $user,
         DB $db
     )
    {
        $this->shipping = $shipping;
        $this->db = $db;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressStoreRequest $request)
    {
        $this->db->beginTransaction();

        $billing = new $this->shipping();
        $billing->first_name = $request->first_name;
        $billing->last_name = $request->last_name;
        $billing->phone_number = $request->phone_number;
        $billing->company_name = $request->company_name;
        $billing->location_link = $request->location_link;
        $billing->country = $request->country;
        $billing->street_address = $request->street_address;
        $billing->city = $request->city;
        $billing->post_code = $request->post_code;
        $billing->save();

        $user = $request->user();
        $user->billing()->associate($billing);
        $user->save();

        $this->db->commit();

        return redirect()->back()->with('success', 'Address saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function show(Shipping $shipping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipping $shipping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipping $shipping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipping $shipping)
    {
        //
    }
}
