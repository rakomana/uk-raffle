@extends('layouts.app')

@section('content')
       <style>
              img {
                     display: block;
                     margin-left: auto;
                     margin-right: auto;
                     width: 20%;
              }
       </style>
       <div style="margin-top: 200px;">
              <img src="{{asset('img/success.png')}}"/>
              <h2 style="text-align: center; margin-top: 50px;">Thank You!</h2>
              <h2 style="text-align: center; margin-top: 50px;">Payment Successful</h2>
       </div>
@endsection