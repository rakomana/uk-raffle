@extends('layouts.app')

@section('content')
  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="assets/images/bg-img/inner-hero.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Contact Us</h2>
          <ol class="breadcum d-flex">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- contact-section start -->
  <section class="contact-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row mb-none-30">
        
      </div>
      <div class="row mt-50">
        <div class="col-lg-12">
          <div class="contact-wrapper">
            <h3 class="title">Get in touch</h3>
            <form class="contact-form">
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="contact-name" id="contact-name" placeholder="Full name">
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" name="contact-email" id="contact-email" placeholder="Email address">
                </div>
                <div class="form-group col-lg-6">
                  <input type="tel" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                </div>
                <div class="form-group col-lg-6">
                  <input type="text" name="contact-subject" id="contact-subject" placeholder="Subject">
                </div>
                <div class="form-group col-lg-12">
                  <textarea name="contact-message" id="contact-message" placeholder="Your message"></textarea>
                </div>
                <div class="col-lg-12">
                  <button type="submit" class="cmn-btn">Submit Now</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact-section end -->

   <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  @endsection