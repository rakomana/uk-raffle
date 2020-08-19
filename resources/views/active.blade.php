@extends('layouts.app')

@section('content')

   <!-- jackpot-section start -->
  <section class="jackpot-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 style="padding-top: 30px;" class="section-title">Buy Tickets</h2>
            <p>You can easily buy tickets online. With just a few clicks, you can buy a lucky ticket from the comfort of your home. Choose From Bellow.</p>
          </div>
        </div>
      </div>
      <div id="implement" class="row mb-none-30">
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

   <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

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