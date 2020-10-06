@extends('layouts.app')

@section('content')

  <!-- inner-hero-section start -->
  <section class="inner-hero-section bg_img" data-background="{{asset('images/bg-img/inner-hero.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-title">About Us</h2>
          <ol class="breadcum d-flex">
            <li><a href="{{url('/')}}">Home</a></li>
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
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil accusamus distinctio maiores, error voluptates ipsam quae, delectus debitis est cupiditate recusandae odit consectetur in natus rem voluptatibus ea minima quod!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea autem est blanditiis repellat sunt obcaecati nihil velit omnis assumenda ipsam vero consequuntur, ut pariatur distinctio iste rem totam temporibus ab?</p>
            <ul class="cmn-list">
              <li>EMAIL</li>
              <li>TELEPHONE</li>
              <li>CHAT</li>
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
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, quisquam culpa sit quo sint facilis ipsa perspiciatis distinctio earum nesciunt animi, voluptatem possimus aut reprehenderit dolores consequuntur sapiente autem similique?</p>
          </div>
        </div>
      </div>
      <div class="testimonial-slider-area">
        <div class="testimonial-slider owl-carousel">
          <div class="testmonial-item">
            <div class="content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit perspiciatis, ex ab hic accusantium delectus magni, ducimus laborum quas ullam facilis voluptas qui reiciendis in consequuntur quos quam sapiente distinctio.</p>
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
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quae minima repellendus est, harum vel! Aut veniam odio et rem, voluptatem nobis deserunt similique eaque consectetur provident expedita a corrupti.</p>
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
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum deserunt hic molestias id enim nihil nobis nostrum explicabo. Nostrum obcaecati suscipit natus unde maxime commodi itaque excepturi incidunt distinctio rerum.</p>
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