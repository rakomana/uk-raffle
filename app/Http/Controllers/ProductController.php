<?php

namespace App\Http\Controllers;

use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $question;

    public function __construct(
        Product $product
    ) {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = $this->product->all();
        
        $count_active_products = 0;
        $products = [];

        //Count active products for the competition by checking the dates
        foreach($active as $product)
        {
            $closing_date = new Carbon($product->closing_date);
            $now = new Carbon();

            if($closing_date->gte($now))
            {
                $count_active_products++;
                $products[] = $product;

            }
        }
        //$count_active_products = $closing_date;
        return view('welcome', compact('products', 'count_active_products'));
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
        //$product = $this->product->where('id', $id)->get()->load('questions');
        $product = $this->product->where('id', $id)->get();
        //$question = $this->question->where('product_id', $id)->get()->load('options');

        return view('product', compact('product'));
    }
}
