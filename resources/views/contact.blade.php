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
                                <h3>Contact us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
       <!-- Start contact Area -->
        <div class="contact-page area-padding-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-image">
                            <img src="img\about\ab.jpg" alt="">
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">

                                <form method="POST" action="{{url('contact')}}">
                                    @csrf

                                    @if ($message = Session::get('success'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    @endif

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"" placeholder="Name" required="" data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" class="email form-control @error('email') is-invalid @enderror"" id="email" placeholder="Email" required="" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject" required="" data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" id="message" rows="7" placeholder="Message" class="form-control" required="" data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
        @endsection