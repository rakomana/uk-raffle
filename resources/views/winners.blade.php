@extends('layouts.app')

    @section('content')
        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline text-center">
                                <h3>Latest Winner</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Latest Winners</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
         <!-- Start Number area -->
         <div class="winner-area area-padding-2">
            <div class="container">
                <div class="row">
                    @foreach($competitions as $competition)
                    @if($competition->status == 'win')
                    <?php
                        $user = DB::table('users')->whereId($competition->user_id)->first();
                        $item = DB::table('products')->whereId($competition->product_id)->first();
                    ?>
                    <!-- Start latest winner -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="{{url('competition/'.$item->id)}}">
                        <div class="winner-results">
                            <div class="winner-inner">
                                <span class="draw-date"><small>finished</small></span>
                                <?php $count = 0; ?>
                                @foreach(json_decode($item->image, true) as $image)
                                <?php if($count == 1) break; ?>
                                    <img class="winner-images" src="{{ Voyager::image($image) }}">
                                <?php $count++; ?>
                                @endforeach
                                <div class="winner-content">
                                    <h4>{{$item->name}}</h4>
                                    <p>{{$item->description}}</p>
                                    <p>The winner has been selected, <b>{{$user->name}}</b> has won the <b>{{$item->name}}</b></p>
                                    <span class="jackpot">Winner chosen</span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Number area -->
@endsection