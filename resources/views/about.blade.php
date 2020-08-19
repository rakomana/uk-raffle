@extends('layouts.app')

@section('content')

  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="{{asset('images/bg-img/inner-hero.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">About Us</h2>
          <ol class="breadcum d-flex">
            <li><a href="{{url('welcome')}}">Home</a></li>
            <li>about us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- about-section start -->
  <section class="about-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 order-xl-1 order-2">
          <div class="about-content">
            <div class="section-header">
              <h2 class="section-title">Story about us</h2>
            </div>
            <p>The mortgage industry is constantly evolving from desktop valuations which can save weeks on your mortgage application, to open banking for income verification. Whatever the change we are commited to ensuring our customers benefit from these changes which is why not only do we offer a face to face service, we also offer telephone and face to face via webcam.</p>
            <p>Using technology we can offer a fantastic nationwide service meaning no matter where you are, were here to help.
              Get in touch using the buttons below and let one of our mortgage specialist call you to discuss your remortgage options.</p>
            <ul class="cmn-list">
              <li>FACE TO FACE</li>
              <li>TELEPHONE</li>
              <li>WEBCAM</li>
            </ul>
          </div>
        </div>
        <div class="col-xl-6 order-xl-2 order-1">
          <div class="about-thumb">
            <img src="{{asset('images/about.jpg')}}" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about-section end -->

    <!-- testimonial-section start -->
    <section class="testimonial-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title">Users testimonial</h2>
            <p>Tickets allows you to participate in the world’s biggest competitions. We give you the possibility of purchasing competition tickets in a safe and convenient manner from the comfort of your home. Let's see the competition players reveiws.</p>
          </div>
        </div>
      </div>
      <div class="testimonial-slider-area">
        <div class="testimonial-slider owl-carousel">
          <div class="testmonial-item">
            <div class="content">
              <p>Online Ticket! Which is made more easier and fun by competitors. Would definitely recommend. One of the best online competition sites!</p>
            </div>
            <div class="user-details">
              <div class="thumb"><img src="{{asset('images/testimonial/1.png')}}" alt="images"></div>
              <div class="details">
                <h6 class="name">John Doe</h6>
                <span class="designation">competition player</span>
              </div>
            </div>
          </div><!-- testmonial-item end -->
          <div class="testmonial-item">
            <div class="content">
              <p>Online competition! Which is made more easier and fun by competition. Would definitely recommend. One of the best online competition sites!</p>
            </div>
            <div class="user-details">
              <div class="thumb"><img src="{{asset('images/testimonial/2.png')}}" alt="images"></div>
              <div class="details">
                <h6 class="name">Barlin Aria</h6>
                <span class="designation">competition player</span>
              </div>
            </div>
          </div><!-- testmonial-item end -->
          <div class="testmonial-item">
            <div class="content">
              <p>Online competition! Which is made more easier and fun by competition. Would definitely recommend. One of the best online competition sites!</p>
            </div>
            <div class="user-details">
              <div class="thumb"><img src="{{asset('images/testimonial/1.png')}}" alt="images"></div>
              <div class="details">
                <h6 class="name">John Doe</h6>
                <span class="designation">competition player</span>
              </div>
            </div>
          </div><!-- testmonial-item end -->
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial-section end -->

   <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  @endsection