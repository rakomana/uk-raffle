@extends('layouts.app')

@section('content')

<!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="{{asset('images/bg-img/inner-hero.jpg')}}">
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
              <ul>
                <li style="color: black;">{!! \Session::get('success') !!}</li>
              </ul>
            </div>
          @endif
      <div class="row">
      	@foreach($product as $product)
        <div class="col-lg-6">
          <img style="width: 300px; heigh: 300px;" src="{{asset('storage/'.$product->image)}}">
        </div>
        <div class="col-lg-6">
          <h1 style="font-size: 25px;">{{$product->name}}</h1>
          <p>Availability: <span>{{$product->availability}}</span></p>
          <hr>
          <h2 style="font-size: 25px; padding-top: 10px;">{{$product->description}}</h2>
          <ul style="padding-top: 10px;">
          	<li>Start Entry: <span>£</span>{{$product->entry_price}}</li>
          	<li>Max Entry: <span>£</span>{{$product->max_price}}</li>
          </ul>
          <p style="padding-top: 10px;">Competition Details</p>
          <ul style="padding-top: 10px;">
          	<li>Total available tickets: {{$product->quantity}}</li>
          	<li>Maximum ticket per Individual: {{$product->no_of_tickets}}</li>
          	<li>Tickets sold: {{$product->no_of_tickets}}</li>
          </ul>
          <h3 style="font-size: 25px; padding-top: 10px;">Answer the question:</h3>

          <form method="post" action="{{url('/competition')}}">
            @csrf
          <div style="padding-top: 10px;">
            <input type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="please enter total number of tickets">

            @error('quantity')
                <span style="color: red;" class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
            <input type="hidden" name="product_id" value="{{$product->id}}">
          </div>
          <label>Total Amount : <span>£</span>{{$product->entry_price}}</label>
          <div style="padding-top: 10px;">
                <button type="submit" class="cmn-btn">Play</button>
           </div>
           </form>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->
  
@endsection