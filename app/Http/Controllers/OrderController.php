<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PaidProduct;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index(Request $request, PaidProduct $paidProduct)
    {
        $carts = $request->user()->product;
        
        $product = $paidProduct->sort($carts);

        return view('orders', compact('product'));
    }
}
