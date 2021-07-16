<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Traits\SortProduct;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(SortProduct $sortProduct)
    {
        $this->sortProduct = $sortProduct;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if(!auth()->check())
        {
            $product = [];
            return view('components.header', compact('product'));    
        }
        $carts = auth()->user()->product;

        $product = $this->sortProduct->sort($carts);

        return view('components.header', compact('product'));
    }
}
