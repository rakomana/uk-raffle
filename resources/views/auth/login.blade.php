@extends('layouts.app')

@section('content')
<style>
    html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 470px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

</style>
<!-- contact-section start -->
<section class="inner-hero-section bg_img" data-background="assets/images/bg-img/inner-hero.jpg">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header"><h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<a href="{{url('login/facebook')}}"><span><i class="fab fa-facebook-square"></i></span></a>
					<a href="{{url('login/google')}}"><span><i class="fab fa-google-plus-square"></i></span></a>
					<a href="{{url('login/twitter')}}"><span><i class="fab fa-twitter-square"></i></span></a>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="{{ route('login') }}">
				@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"" placeholder="email address">
						@error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
						@error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
						
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
                    <div class="d-flex justify-content-center">
					<span style="color: white;">Don't have an account?</span>
						<a href="{{Route('register')}}}">
							<span style="color: white;">Sign Up</span>
						</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{Route('password.request')}}">
                        	<span style="color: white;">Forgot your password?</a></span>
                    </div>
			</div>
		</div>
	</div>
</div>
  </section>
  <!-- contact-section end -->
@endsection
