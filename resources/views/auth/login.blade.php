<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="author" content="Prince Rakomana">
    	<title>UK giveaways</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img\logo\favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css\font-awesome.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css\responsive.css">

		<!-- modernizr css -->
		<script src="js\vendor\modernizr-2.8.3.min.js"></script>
	</head>
		<body data-spy="scroll" data-target="#navbar-example">		

        <!-- Start Slider Area -->
        <div class="login-area area-padding fix">
            <div class="login-overlay"></div>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12">
                                <div class="login-form">
                                    <div class="text-center" style="margin-bottom: 10%">
                                        <a href="{{url('/')}}"><img src="{{asset('img\logo\ukgiveawayslogo.PNG')}}" style="width: 50%; height: 50%;" alt=""></a>
                                    </div>
                                    <h4 class="login-title text-center">LOGIN</h4>
                                    <div class="row">

										<form method="POST" action="{{ route('login') }}">
											@csrf
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"" placeholder="email address">
												@error('email')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
												<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
												@error('password')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="check-group flexbox">
                                                    <label class="check-box">
                                                        <input type="checkbox" class="check-box-input" checked="">
                                                        <span class="remember-text">Remember me</span>
                                                    </label>

                                                    <a class="text-muted" href="#">Forgot password?</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <button type="submit" id="submit" class="slide-btn login-btn">Login</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="clear"></div>
                                                <div class="separetor text-center"><span>Or with Sign</span></div>
                                                <div class="sign-icon">
                                                    <ul>
                                                        <li><a class="facebook" href="{{url('login/facebook')}}"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                                        <li><a class="google" href="{{url('login/google')}}"><i class="fa fa-google-plus-square"></i>google</a></li>
                                                    </ul>
												<div class="acc-not">Don't have an account  <a href="{{route('register')}}">Sign up</a></div>
                                                </div> 
                                            </div> 
										</form>
										 
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
                </div>
        </div>
        <!-- End Slider Area -->
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="js\vendor\jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js\bootstrap.min.js"></script>
		<!-- Form validator js -->
		<script src="js\form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js\plugins.js"></script>
	</body>
</html>
