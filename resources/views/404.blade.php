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
                                <h3>Error</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Error</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <div class="page-head area-padding">
			<div class="container">
				<div class="row">
				    <div class="col-md-12 col-sm-12 col-xs-12">
				        <div class="row">
		                    <div class="error-page">
								<!-- map area -->
								<div class="col-md-12 col-sm-12 col-xs-12">
								    <div class="error-main-text text-center">
								        <h2 class="error-easy-text">Page Not Found</h2>
								    	<h1 class="high-text">4<span class="color">0</span>4</h1>
								    	<h4 class="error-bot">Oops, the page you are looking for does not exit.</h4>
								    	<a class="error-btn" href="{{url('/')}}">Back Homepage</a>
								    </div>
								</div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
        @endsection