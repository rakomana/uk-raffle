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
                                <h3>About us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Start About Area -->
        <div class="about-area about-area-3 fix area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-video">
                            <img src="img\about\ab.jpg" alt="">
                            <div class="video-content">
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                            <div class="section-headline">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis consectetur saepe quaerat incidunt cupiditate, inventore soluta. Sapiente in, aliquid corporis tenetur quidem veniam modi assumenda eius tempora cumque officiis est quis voluptates necessitatibus eos quaerat, neque, adipisci debitis. In ducimus accusamus sapiente sequi voluptate saepe tenetur, iusto consequatur a quo fugit ipsa nobis assumenda impedit delectus distinctio eligendi perferendis nesciunt.</p>
                            </div>
                            <div class="about-company">
                                <div class="single-about">
									<span class="about-text">Professional team</span>
									<span class="about-text">Server secure payments</span>
									<span class="about-text">Live hat upport</span>
                                </div>
                                <div class="single-about">
									<span class="about-text">Goal achivment</span>
									<span class="about-text">Worldwide services company</span>
									<span class="about-text">Marketing expert policy</span>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!-- End About Area -->
        @endsection