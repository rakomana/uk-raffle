@extends('layouts.app')

@section('content')

  <!-- inner-hero-section start -->
  <section style="height: 350px;" class="inner-hero-section bg_img" data-background="assets/images/bg-img/inner-hero.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" style="text-align: center;">
          <img style="border-radius: 50%;" src="images/picture.jpg">
          <h2 class="page-title">{{$user['name']}}</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

    <!-- faq-section start -->
  <div class="faq-section pt-120 pb-120 section-bg-two">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="faq-area">
            <ul class="nav justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="general-tab" data-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="true">Personal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="about-tab" data-toggle="pill" href="#about" role="tab" aria-controls="about" aria-selected="false">Address</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="ticket-tab" data-toggle="pill" href="#ticket" role="tab" aria-controls="ticket" aria-selected="false">Billings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wining-tab" data-toggle="pill" href="#wining" role="tab" aria-controls="wining" aria-selected="false">Winnings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="result-tab" data-toggle="pill" href="#result" role="tab" aria-controls="result" aria-selected="false">Results</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="faq-item">
                  <h4 class="title">Update personal details</h4>
                  @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li style="color: black;">{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                  @endif
                  <form class="contact-form" method="post" action="{{url('/account/update')}}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user['name']}}" id="contact-name" placeholder="Full name">

                        @error('name')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$user['email']}}" id="contact-email" placeholder="Email address">

                        @error('email')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="tel" name="password" class="form-control @error('password') is-invalid @enderror" id="contact-phone" placeholder="password">

                        @error('password')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="contact-subject" placeholder="confirm password">

                        @error('confirm_password')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="col-lg-12">
                        <input name="file" type="file" placeholder="Upload avatar"/>
                      </div>
                      <div class="col-lg-12">
                        <button type="submit" class="cmn-btn">Update</button>
                      </div>
                    </div>
                  </form>
                
                </div><!-- faq-item end -->
              </div>
              <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="faq-item">
                <h4 class="title">Update physical address</h4>
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li style="color: black;">{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                  @endif
                  <form class="contact-form" method="post" action="{{url('/address')}}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{$user->billing['first_name']}}" id="contact-name" placeholder="Full names">

                        @error('first_name')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{$user->billing['last_name']}}" id="contact-email" placeholder="Last name">

                        @error('last_name')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="tel" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{$user->billing['phone_number']}}" id="contact-phone" placeholder="Phone Number">

                        @error('phone_number')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="company_name" class="form-control @error('company_name') is-invalid @enderror" value="{{$user->billing['company_name']}}" id="contact-subject" placeholder="Company Name">

                        @error('company_name')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{$user->billing['country']}}" id="contact-name" placeholder="Country">

                        @error('country')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="street_address" class="form-control @error('street_address') is-invalid @enderror" value="{{$user->billing['street_address']}}" id="contact-email" placeholder="Street Address ">

                        @error('street_address')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{$user->billing['city']}}" id="contact-phone" placeholder="City">

                        @error('city')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="post_code" class="form-control @error('post_code') is-invalid @enderror" value="{{$user->billing['post_code']}}" id="contact-subject" placeholder="Post Code">

                        @error('post_code')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group col-lg-12">
                        <input type="text" name="location_link" class="form-control @error('location_link') is-invalid @enderror" value="{{$user->billing['location_link']}}" id="contact-subject" placeholder="Attatch Location ">

                        @error('location_link')
                            <span style="color: red" class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="col-lg-12">
                        <button type="submit" class="cmn-btn">Save</button>
                      </div>
                    </div>
                  </form>
                </div><!-- faq-item end -->
              </div>
              <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                <div class="faq-item">
                  <h4 class="title">Credit or Debit Card </h4>
                  <form class="contact-form">
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <input type="text" name="name*" id="contact-name" placeholder="Name on Card*">
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="email" name="number" id="contact-email" placeholder="Card Number*">
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="expiry-m" id="contact-phone" placeholder="Expiry date* - Month">
                      </div>
                      <div class="form-group col-lg-6">
                        <input type="text" name="expiry-y" id="contact-subject" placeholder="Expiry date* - Year*">
                      </div>
                      <div class="form-group col-lg-12">
                        <input name="cvc-number" id="contact-message" placeholder="CVC number*">
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="cmn-btn">Save</button>
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="cmn-btn">Paypal</button>
                      </div>
                      <div class="col-lg-4">
                        <button type="submit" class="cmn-btn">Bitcoin</button>
                      </div>
                    </div>
                  </form>
                </div><!-- faq-item end -->
              </div>
              <div class="tab-pane fade" id="wining" role="tabpanel" aria-labelledby="wining-tab">
                <div class="faq-item">
                  <h4 class="title">Competition Details </h4>
                  <form class="contact-form">
                    <div class="form-row">
                    @foreach($competition as $compete)
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Product : </label> 
                      </div> 
                      <div class="form-group col-lg-6">
                        <label id="contact-name">{{$compete->name}}</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Amount :</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">€{{$compete->entry_price}}</label> 
                      </div>                      
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Tickets :</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">{{$compete->no_of_tickets}}</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Question : Maximum operating voltage for fridge</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">250V</label> 
                      </div>
                      @endforeach
                      <div>{{$competition->links()}}</div>
                      <div style="padding-top: 10px;" class="col-lg-12">
                        <button type="submit" class="cmn-btn">Save</button>
                      </div>
                    </div>
                  </form>
                </div><!-- faq-item end -->
              </div>
              <div class="tab-pane fade" id="result" role="tabpanel" aria-labelledby="result-tab">
                <div class="faq-item">
                  <h4 class="title">Competition Results </h4>
                  <form class="contact-form">
                    <div class="form-row">
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Product :</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Fridge</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Winners :</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">15</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">Question : Maximum operating voltage for fridge</label> 
                      </div>
                      <div class="form-group col-lg-6">
                        <label id="contact-name">250V</label> 
                      </div>
                      <div class="col-lg-12">
                        <button type="submit" class="cmn-btn">Save</button>
                      </div>
                    </div>
                  </form>
                </div><!-- faq-item end -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- faq-section end -->

  
@endsection