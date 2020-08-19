@extends('layouts.app')

@section('content')
  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="assets/images/bg-img/inner-hero.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">Error page</h2>
          <ol class="breadcum d-flex">
            <li><a href="index.html">Home</a></li>
            <li>404</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- error-section start -->
  <section class="error-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="error-content">
            <h2 class="error-title glitch is-glitching" data-text="404">404</h2>
            <h3 class="error-sub-title glitch is-glitching" data-text="error">error</h3>
            <h5 class="error-footer-title">Oops! Page Is Not Found</h5>
            <a href="index.html" class="cmn-btn">Back to Home</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- error-section end -->

   <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  @endsection