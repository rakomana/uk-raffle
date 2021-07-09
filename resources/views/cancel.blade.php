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
              <img src="{{asset('img/cancel.png')}}"/>
              <h2 style="text-align: center; margin-top: 50px;">Oops!</h2>
              <h2 style="text-align: center; margin-top: 50px;">Payment Cancelled for Some Reason</h2>
       </div>
@endsection