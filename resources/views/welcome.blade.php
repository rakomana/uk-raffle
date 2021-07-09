@extends('layouts.app')

@section('content')

<!-- Start Lottery area -->
        <div class="ticket-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3 style="padding-top: 50px;">{{$count_active_products}} Live Competitions</h3>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, debitis!</p>
						</div>
					</div>
				</div>
                 <div class="row">
                    <div class="ticket-content">
                        @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-ticket">
                                <span class="ticket-rate">£{{$product->entry_price}} per ticket</span>
                                <div style="padding-top: 9px;" class="ticket-image">
                                    <span class="win-price">{{$product->name}}</span>
                                    <img src="{{ Voyager::image( $product->image ) }}" alt="">
                                </div>
                                <div class="ticket-text">
                                    <h4 class="ticket-name">{{$product->no_of_tickets}}</span>/{{$product->quantity}} tickets remaining</h4>
                                    <span class="draw"><?php 
                                        $date1 = date_create($product->closing_date);
                                        $date2=date_create(date("Y-m-d"));
                                         echo date_diff($date2, $date1)->format("%R%a days");; ?> remaining</span>
                                        <a class="ticket-btn" href="{{url('product/'.$product->id)}}">ENTER</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Lottery area -->
        
 
@endsection