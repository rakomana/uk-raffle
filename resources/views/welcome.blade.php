@extends('layouts.app')

@section('content')

  <!-- hero-section start -->
  <section class="hero-section bg_img" data-background="{{asset('images/2.jpg')}}">    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="hero-content">
            <h4 class="sub-title">Explore</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae voluptatem nam veniam eum cupiditate sequi ab velit, autem consectetur voluptate, itaque ut sint repudiandae possimus ipsa, corporis rerum. Nulla, consequuntur.</p>
            <div class="btn-area">
              <a href="{{url('/active')}}" class="cmn-btn">Competitions</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero-section end -->


  <!-- boxes -->
  <section class="pt-120 pb-120 section-bg-two bg-overlay">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-6">
          <div class="section-header text-center">
            <h2 class="section-title">Past Competitions</h2>You can also win</p>
          </div>
        </div>
        <div class="col-xl-12">
          <div class="boxes owl-carousel">

            @foreach ($products as $product)
            @if(date_create($product->closing_date) < date_create(date("Y-m-d")))
            <div class="single-box">
              <h4>{{$product->closing_date}}</h4>
              <h2>{{$product->quantity}} added</h2>
              <div class="number-count">
                <span>1</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span class="active">{{$product->no_of_tickets}}</span>
              </div>
              <div class="single-box-content">
                <p><span>Product: </span><strong>{{$product->name}}</strong></p>
                <p><span>ticket sale:</span><strong><span style="padding-top: 5px; color: #2ecc71;">£{{$product->entry_price}}</span></strong></p>
              </div>
            </div>
            @endif
            @endforeach

          </div>
        </div>
        <div class="col text-center mt-4">
          <a href="#0" class="cmn-btn">Explore all</a>
        </div>
      </div>
    </div>
  </section><!-- /boxes -->

  <!-- jackpot-section start -->
  <section class="jackpot-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">Buy Tickets</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit nostrum fuga magnam dolorem quia illum reprehenderit quidem dignissimos recusandae necessitatibus, iusto labore animi, quae hic aspernatur eum error enim. Dolores!</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30" id="implement">
        @foreach ($products as $product)
        @if(date_create($product->closing_date) > date_create(date("Y-m-d")))
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="jackpot-item mb-30">
            <img style="
            width: 100%;
            height: 200px;
            " src="{{asset('storage/app/public/'.$product->image)}}" alt="icon-img">
            <h4 class="jackpot-name">{{$product->name}}</h4>
            <p><span style="padding-top: 5px; color: #2ecc71;">£{{$product->entry_price}}</span> per ticket</p>
            <p><span style="padding-top: 5px; color: #2ecc71;">{{$product->no_of_tickets}}</span>/{{$product->quantity}} tickets remaining</p> 
            @if (Auth::check())
            <a href="{{url('product/'.$product->id)}}" class="cmn-btn">Enter Now</a>
            @else
            <a href="#" @click="accountAlert()" class="cmn-btn">Enter Now</a>
            @endif
            <p><?php 
                     $date1 = date_create($product->closing_date);
                     $date2=date_create(date("Y-m-d"));
                      echo date_diff($date2, $date1)->format("%R%a days");; ?> remaining</p>
          </div>
        </div><!-- jackpot-item end -->
        @endif
        @endforeach
      </div>
    </div>
  </section>
  <!-- jackpot-section end -->
  
  <!-- testimonial-section start -->
  <section class="testimonial-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title">Users testimonial</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nesciunt accusantium in totam explicabo tempore dicta. Eum ea deserunt nulla veniam quis. Assumenda, consequuntur. Earum totam magnam laborum facilis aperiam.</p>
          </div>
        </div>
      </div>
      <div class="testimonial-slider-area">
        <div class="testimonial-slider owl-carousel">
          <div class="testmonial-item">
            <div class="content">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum atque impedit, explicabo facilis quis aspernatur, minima eligendi velit nemo debitis odio sint totam eaque esse necessitatibus odit est consequatur error?</p>
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
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi placeat quaerat quae sapiente dignissimos asperiores possimus, cumque assumenda itaque ut alias adipisci in veniam, voluptates mollitia a! Amet, perspiciatis repellendus.</p>
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
              <p></p>
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

  <!-- action-section start -->
  <section class="action-section section-bg-two">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-8">
          <div class="action-content">
            <h2 class="title">Have you any questions?</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo, dolorum pariatur assumenda perferendis repellendus error est doloremque doloribus omnis vero quam rem accusamus, ex voluptatem illo! Odio dolorum veritatis eveniet?</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="btn-area text-lg-right text-center">
            <a href="{{url('contact')}}" class="cmn-btn">Contact with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- action-section end -->
<script>
    const App = new Vue({
        el: "#implement",
        data: {
            step: 1,
            totalsteps: 3,
        },
        methods: {
            accountAlert: function() {
              swal({
                  title: "Account",
                  text: "Create account or login to enter competition",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
            }
        }
    })
</script>
  @endsection