@extends('layouts.app')

@section('content')
    <h2 style="text-align: center; padding-top: 160px;">Orders</h2>
    <div id="implement" class="container">
    <div class="row">
        <div class="col-12">
            @if(count($product) != 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Status</th>
                            <th scope="col">Track</th>
                            <th scope="col">Address</th>
                            <th scope="col">Product</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $product)
                        <tr>
                            <td><img src="{{ Voyager::image( $product->image ) }}" style="width: 50px; height: 50px;" /> </td>
                            <td>{{$product->pivot->status}}</td>
                            <td>{{$product->pivot->track}}</td>
                            <td>
                                <?php
                                    $address = DB::table('accounts')->whereUserId(auth()->user()->id)->first();
                                ?>
                                <small>{{$address->address}}</small><br>
                                <small>{{$address->unit}}, {{$address->city}}</small>
                                <small>{{$address->state}}, {{$address->post_code}}</small>
                            </td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->pivot->quantity}}</td>
                            <td class="text-right">£{{$product->entry_price}}.00</td>
                            @if($product->pivot->status == 'failed')
                            <td class="text-right"><a href="{{url('update/order')}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> </a> </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{url('checkout')}}" class="btn btn-success">Continue to Checkout</a>
                </div>
            </div>
            @else
                <h2 style="text-align: center;"><a href="{{url('/')}}" class="btn btn-success">You have no orders!, see the Competitions/Cart</a></h2>
            @endif
        </div>
    </div>
    </div>



@endsection