<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="Prince Rakomana">
    <title>UK giveaways</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img\logo\favicon.ico')}}">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="{{asset('css\owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('css\owl.transitions.css')}}">
       <!-- Animate css -->
        <link rel="stylesheet" href="{{asset('css\animate.css')}}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('css\meanmenu.min.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="{{asset('css\font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('css\themify-icons.css')}}">
		<!-- magnific css -->
        <link rel="stylesheet" href="{{asset('css\magnific.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('style.css')}}">
		<!-- responsive css -->
		<link rel="stylesheet" href="{{asset('css\responsive.css')}}">

		<!-- modernizr css -->
    <script src="{{asset('js\vendor\modernizr-2.8.3.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
		<body>
        <div id="preloader"></div>
        <x-header/>

        @yield('content')

               <!-- Start Subscribe area -->
               <div class="subscribe-area fix area-padding">
                <div class="container">
                    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                                <h3>Subscribe Newsletter</h3>
                                <p>Help agencies to define their new business objectives and then create professional software.</p>
                </div>
              </div>
            </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12">
                            <div class="subs-form">
                                <form method="POST" action="{{url('subscription')}}">
                                    @csrf

                                    @if ($message = Session::get('subscription'))
                                    <div class="alert alert-danger alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>	
                                            <strong>{{ $message }}</strong>
                                    </div>
                                    @endif

                                    <input type="email" name="email" class="email form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" data-error="Please enter your email" required="">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <button type="submit" id="submit" class="add-btn">Subscribe</button>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Subscribe area -->

        <!-- Start Footer Area -->
        <footer class="footer-1">
            <div class="footer-area">
                <div class="container">
                    <div class="row"><div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a class="footer-black-logo" href="#"><img src="{{asset('img\logo\ukgiveawayslogo.PNG')}}" style="width: 20%; height: 20%;" alt=""></a>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, debitis minus! Sunt, possimus cumque? Quasi, eos. Nisi nemo quia sed aliquid. Reiciendis quas sit debitis officiis numquam mollitia, rerum ab.  
                                    </p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Draw Date</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">Monday</a></li>
                                        <li><a href="#">Wednesday</a></li>
                                        <li><a href="#">Friday</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2 hidden-sm col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Payments</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">Pay pal</a></li>
                                        <li><a href="#">Credit Card</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-2 col-sm-3 col-xs-12">
                             <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Support</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Terms & Condition</a></li>
                                        <li><a href="{{url('contact')}}">Contact us </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom Area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2020
                                    <a href="{{url('/')}}">UK giveaways</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom Area -->
        </footer>
        <!-- End Footer Area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="{{asset('js\vendor\jquery-1.12.4.min.js')}}"></script>
		<!-- bootstrap js -->
		<script src="{{asset('js\bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
		<script src="{{asset('js\owl.carousel.min.js')}}"></script>
		<!-- magnific js -->
        <script src="{{asset('js\magnific.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('js\wow.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('js\jquery.meanmenu.js')}}"></script>
		<!-- Form validator js -->
		<script src="{{asset('js\form-validator.min.js')}}"></script>
		<!-- plugins js -->
		<script src="{{asset('js\plugins.js')}}"></script>
		<!-- main js -->
		<script src="{{asset('js\main.js')}}"></script>
	</body>
</html>