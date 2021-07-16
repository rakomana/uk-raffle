@extends('layouts.app')

@section('content')
<h2 style="text-align: center; padding-top: 160px;">Competitions</h2>
<div id="implement" class="container">
<div class="row">
    <div class="col-12">
        @if(count($product) != 0)
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col" class="text-right">Price</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $product)
                    <tr>
                        <td><img src="{{ Voyager::image( $product->image ) }}" style="width: 50px; height: 50px;" /> </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->quantity}}</td>
                        <td class="text-right">£{{$product->entry_price}}.00</td>
                        <td class="text-right">
                            <a href="{{url('competition-detail/'.$product->id)}}" class="btn btn-sm btn-primary" type="submit">Get a Winner</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <a href="{{url('checkout')}}" class="btn btn-success">Continue to Checkout</a>
            </div>
        </div>
        @else
            <h2 style="text-align: center;"><a href="{{url('/')}}" class="btn btn-success">Nothing in Cart, enter more Competitions</a></h2>
        @endif
    </div>
</div>
</div>   
@endsection