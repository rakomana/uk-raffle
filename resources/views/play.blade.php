@extends('layouts.app')

@section('content')

  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="assets/images/bg-img/inner-hero.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">How to play</h2>
          <ol class="breadcum d-flex">
            <li><a href="index.html">Home</a></li>
            <li>play</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- how-work-section start -->
  <section class="how-work-section pt-120 pb-120 section-bg-two">
    <div class="line-element"><img src="assets/images/line.png" alt="line-imge"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">How it works</h2>
            <p>You can easily buy lottery tickets online. With just a few clicks, you can buy a lucky ticket from the comfort of your home. Choose From Bellow.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="work-item mb-30">
            <img src="assets/images/svg-icon/hand.svg" alt="icon">
            <h4 class="caption">pick</h4>
            <p>World-famous lotteries, popular slots and stellar scratchcards are all just a swipe and tap away.</p>
          </div>
        </div><!-- work-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="work-item mb-30">
            <img src="assets/images/svg-icon/lotto.svg" alt="icon">
            <h4 class="caption">play</h4>
            <p>Choose from over 50+ games to keep the fun going.</p>
          </div>
        </div><!-- work-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="work-item mb-30">
            <img src="assets/images/svg-icon/win.svg" alt="icon">
            <h4 class="caption">Win</h4>
            <p>When you win you win it all. We take zero commissions.</p>
          </div>
        </div><!-- work-item end -->
      </div>
    </div>
  </section>
  <!-- how-work-section end -->

  
  <!-- action-section start -->
  <section class="action-section section-bg">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-8">
          <div class="action-content">
            <h2 class="title">Have you any questions?</h2>
            <p>If you have any questions or queries our helpful support team will be more than happy to assist.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="btn-area text-lg-right text-center">
            <a href="#0" class="cmn-btn">Contact with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- action-section end -->

   <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  @endsection