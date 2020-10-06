@extends('layouts.app')

@section('content')

   <!-- jackpot-section start -->
  <section class="jackpot-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 style="padding-top: 30px;" class="section-title">Buy Tickets</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem repellat quis asperiores nemo recusandae quae ducimus soluta, laborum ipsum ullam in et, deserunt pariatur ex fugiat numquam, dolores cumque similique.</p>
          </div>
        </div>
      </div>
      <div id="implement" class="row mb-none-30">
        @foreach ($products as $product)
        @if(date_create($product->closing_date) > date_create(date("Y-m-d")))
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="jackpot-item mb-30">
            <img style="
            width: 100%;
            height: 200px;
            " src="{{asset('storage/app/public/'.$product->image)}}" alt="icon-img">
            <h4 class="jackpot-name">{{$product->name}}</h4>
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