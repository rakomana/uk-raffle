<?php

namespace App\Http\Controllers;

use App\Product;
use App\Question;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $question;

    public function __construct(
        Product $product,
        Question $question
    )
    {
        $this->product = $product;
        $this->question = $question;
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
        $product = $this->product->where('id', $id)->get()->load('questions');

        $question = $this->question->where('product_id', $id)->get()->load('options');
        
        return view('product', compact('product', 'question'));
    }
}
