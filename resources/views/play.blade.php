@extends('layouts.app')

@section('content')

  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="{{asset('assets/images/bg-img/inner-hero.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">How to play</h2>
          <ol class="breadcum d-flex">
            <li><a href="{{url('/')}}">Home</a></li>
            <li>play</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-hero-section end -->

  <!-- how-work-section start -->
  <section class="how-work-section pt-120 pb-120 section-bg-two">
    <div class="line-element"><img src="{{asset('assets/images/line.png')}}" alt="line-imge"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">How it works</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus labore dignissimos quaerat cumque ullam, vel enim eum laudantium ipsum ratione. Corrupti aut numquam dicta tempora, quod culpa cumque totam. Maiores?</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="work-item mb-30">
            <img src="{{asset('assets/images/svg-icon/hand.svg')}}" alt="icon">
            <h4 class="caption">pick</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla nostrum enim deserunt repellat accusantium inventore et. Excepturi, laborum, dicta quidem temporibus vitae quos eius porro repellendus nulla similique impedit.</p>
          </div>
        </div><!-- work-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="work-item mb-30">
            <img src="{{asset('assets/images/svg-icon/lotto.svg')}}" alt="icon">
            <h4 class="caption">play</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde exercitationem ex quaerat tenetur, quibusdam labore dolorum nesciunt. Perspiciatis mollitia adipisci incidunt dolores nihil, ullam, cum quis delectus cumque aliquam hic?</p>
          </div>
        </div><!-- work-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="work-item mb-30">
            <img src="{{asset('assets/images/svg-icon/win.svg')}}" alt="icon">
            <h4 class="caption">Win</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas fugiat voluptatibus ratione iste minima alias illum itaque rem, quasi, commodi non nemo quibusdam consequatur nesciunt quos nobis, officiis vero adipisci?</p>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate non commodi ducimus ut. Quis consequuntur eligendi aut cumque? Hic consequuntur est beatae unde numquam magnam ea possimus, ex cupiditate aperiam?</p>
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