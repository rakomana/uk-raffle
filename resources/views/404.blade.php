@extends('layouts.app')

@section('content')
      <!-- hero-section start -->
  <section class="hero-section bg_img" data-background="{{asset('images/2.jpg')}}">    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="hero-content">
            <h4 class="sub-title">404</h4>
            <p>OOPS! WE COULD NOT FIND THE PAGE YOU REQUESTED</p>
            <div class="btn-area">
              <a href="{{url('welcome')}}" class="cmn-btn">GO HOME</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero-section end -->

@endsection