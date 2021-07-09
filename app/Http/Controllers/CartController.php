<?php

namespace App\Http\Controllers;

use App\Order;
use App\Account;
use App\Traits\SumProduct;
use App\Traits\SortProduct;
use App\Traits\UpdateOrder;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * @var $updateOrder
     * @var $sortProduct
     * @var $sumProduct
     * @var $account
     * @var $order
     */
    private $updateOrder;
    private $sortProduct;
    private $sumProduct;
    private $account;
    private $order;

    /**
     * Inject models into the constructor
     * @param Account $account
     */
    public function __construct(Account $account, Order $order, SumProduct $sumProduct, SortProduct $sortProduct, UpdateOrder $updateOrder)
    {
        $this->updateOrder = $updateOrder;
        $this->sortProduct = $sortProduct;
        $this->sumProduct = $sumProduct;
        $this->account = $account;
        $this->order = $order;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carts = $request->user()->product;
        
        $product = $this->sortProduct->sort($carts);
        
        $total = $this->sumProduct->total($product);

        return view('cart', compact('product', 'total'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountInformation(Request $request)
    {
        $order_num = uniqid();

        $order = new $this->order();
        $order->name = $order_num;
        $order->save();

        $user = $request->user();

        //get product which are still awaiting payment
        $product = $this->sortProduct->sort($user->product);

        //update user's product with order id
        $this->updateOrder->order($product, $order);

        $account = $user->account;

        //get sum of products awaiting payment
        $total = $this->sumProduct->total($product);

        return view('checkout', compact('account', 'product', 'total', 'order_num'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
