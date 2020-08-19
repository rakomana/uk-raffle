<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(
        Product $product
    )
    {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->all();

        return view('welcome', compact('products'));
    }

    public function getActiveProducts()
    {
        $products = $this->product->all();

        return view('active', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->product->where('id', $id)->get();

        return view('product', compact('product'));
    }
}
