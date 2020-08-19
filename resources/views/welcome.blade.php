@extends('layouts.app')

@section('content')

  <!-- hero-section start -->
  <section class="hero-section bg_img" data-background="{{asset('images/2.jpg')}}">    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="hero-content">
            <h4 class="sub-title">Explore</h4>
            <p>We specialise in buy to let mortgages and can match you to the right lenders (as requirements for getting a BTL mortgage vary by lender).  We also handle the process from start to finish saving you time, money and effort.</p>
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
            <div class="single-box">
              <h4>Dec 18, 2020</h4>
              <h2>5987 added</h2>
              <div class="number-count">
                <span>2</span>
                <span>23</span>
                <span class="active">56</span>
                <span>12</span>
                <span>49</span>
                <span>23</span>
              </div>
              <div class="single-box-content">
                <p><span>item:</span><strong>2365</strong></p>
                <p><span>ticket sale:</span><strong>1258</strong></p>
                <p><span>Winners:</span><strong>978</strong></p>
              </div>
            </div>
            <div class="single-box">
              <h4>Jan 28, 2020</h4>
              <h2>4918 added</h2>
              <div class="number-count">
                <span class="active">2</span>
                <span>23</span>
                <span>56</span>
                <span>12</span>
                <span>49</span>
                <span>23</span>
              </div>
              <div class="single-box-content">
                <p><span>item:</span><strong>2365</strong></p>
                <p><span>ticket sale:</span><strong>1258</strong></p>
                <p><span>Winners:</span><strong>978</strong></p>
              </div>
            </div>
            <div class="single-box">
              <h4>July 5, 2020</h4>
              <h2>3285 added</h2>
              <div class="number-count">
                <span>2</span>
                <span>23</span>
                <span>56</span>
                <span>12</span>
                <span class="active">49</span>
                <span>23</span>
              </div>
              <div class="single-box-content">
                <p><span>item:</span><strong>2365</strong></p>
                <p><span>ticket sale:</span><strong>1258</strong></p>
                <p><span>Winners:</span><strong>978</strong></p>
              </div>
            </div>
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
            <p>You can easily buy tickets online. With just a few clicks, you can buy a lucky ticket from the comfort of your home. Choose From Bellow.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30" id="implement">
        @foreach ($products as $product)
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="jackpot-item mb-30">
            <img style="
            width: 100%;
            height: 200px;
            " src="{{asset('storage/'.$product->image)}}" alt="icon-img">
            <h4 class="jackpot-name">{{$product->name}}</h4>
            @if (Auth::check())
            <a href="{{url('product/'.$product->id)}}" class="cmn-btn">Enter Now</a>
            @else
            <a href="#" @click="accountAlert()" class="cmn-btn">Enter Now</a>
            @endif
          </div>
        </div><!-- jackpot-item end -->
        @endforeach
      </div>
    </div>
  </section>
  <!-- jackpot-section end -->
  
  <!-- latest-winner-section start -->
  <section class="latest-winner-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-header text-center">
            <h2 class="section-title">Latest winners</h2>
            <p>You can easily buy tickets online. With just a few clicks, you can buy a lucky ticket from the comfort of your home. Choose From Bellow.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="lottery-winner-area">
            <h3 class="title">Latest winners</h3>
            <div class="lottery-winner-wrapper">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/1.png')}}" alt="image"></div>
                        <span class="winner-name">Graziano</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"></span>
                        <span class="country-name">United Kingdom</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€455 - </span>
                        <span class="jackpot-name">Powerball</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/2.png')}}" alt="image"></div>
                        <span class="winner-name">Stefan</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/2.jpg')}}" alt="flag"></span>
                        <span class="country-name">Australia</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€4,935 - </span>
                        <span class="jackpot-name">Super</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/3.png')}}" alt="image"></div>
                        <span class="winner-name">Majlinda</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/3.jpg')}}" alt="flag"></span>
                        <span class="country-name">United States</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€50,000 - </span>
                        <span class="jackpot-name">Eurojackpot</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/4.png')}}" alt="image"></div>
                        <span class="winner-name">Ezio</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"></span>
                        <span class="country-name">United Kingdom</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€706 - </span>
                        <span class="jackpot-name">UK</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/5.png')}}" alt="image"></div>
                        <span class="winner-name">Irish</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/2.jpg')}}" alt="flag"></span>
                        <span class="country-name">Australia</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€559 - </span>
                        <span class="jackpot-name">SuperEna</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/6.png')}}" alt="image"></div>
                        <span class="winner-name">Graziano</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/3.jpg')}}" alt="flag"></span>
                        <span class="country-name">United States</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€455 - </span>
                        <span class="jackpot-name">Powerball</span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="winner">
                        <div class="thumb"><img src="{{asset('images/jackpot/1.png')}}" alt="image"></div>
                        <span class="winner-name">Ezio</span>
                      </div>
                    </td>
                    <td>
                      <div class="winner-details">
                        <span class="country-flag"><img src="{{asset('images/flag/1.jpg')}}" alt="flag"></span>
                        <span class="country-name">United Kingdom</span>
                      </div>
                    </td>
                    <td>
                      <div class="jackpot">
                        <span class="price">€706 - </span>
                        <span class="jackpot-name">UK</span>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- latest-winner-section end -->

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

  <!-- action-section start -->
  <section class="action-section section-bg-two">
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