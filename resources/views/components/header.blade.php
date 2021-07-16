<header class="header-one">
    <!-- Start top bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class=" col-md-8 col-sm-8 col-xs-12">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="tel:02743 598025"><i class="fa fa-phone"></i>Support</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@ukgiveaways.com</a></li> 
                        </ul>  
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="topbar-right">
                                          <ul>
                            @guest
                            <li><a href="#"><img src="{{asset('img\icon\w1.png')}}" alt="">English</a>
                            </li>
                            <li><a href="{{route('login')}}"><img src="{{asset('img\icon\login.png')}}" alt="">Login</a></li>
                            @else
                              <li><a href="#"><img src="{{asset('img\icon\login.png')}}" alt="">{{ Auth::user()->name }}</a>
                                <ul>
                                  <li><a href="{{url('orders')}}">Orders</a></li><br>
                                  <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                                </ul>
                             </li>
                            @endguest
                      </ul>
                                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->
    <!-- header-area start -->
    <div id="sticker" class="header-area header-area-2 hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <!-- Brand -->
                    <a class="navbar-brand " href="{{url('/')}}">
                            <img src="{{asset('img\logo\ukgiveawayslogo.PNG')}}" style="width: 50%; height: 50%;" alt="">
                        </a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="header-right-link">
                        <!-- search option end -->
                        @guest
                        <a class="s-menu" href="{{url('login')}}">Join now</a>
                        @endguest
                    </div>
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="pages" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li><a class="pages" href="{{url('about')}}">About</a></li>
                                    <li><a class="pages" href="#">Winners</a></li>
                                    <li><a class="pages" href="{{url('/')}}">Competitions</a></li>
                                    <li><a href="{{url('contact')}}">contacts</a></li>
                                    @guest
                                    @else 
                                      <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i><sup>
                                        {{count($product)}}  
                                        </sup></a></li>   
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('img\logo\ukgiveawayslogo.PNG')}}" style="width: 100%; height: 100%;" alt=""></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a class="pages" href="{{url('/')}}">Home</a></li>
                                <li><a class="pages" href="{{url('about')}}">About</a></li>
                                <li><a class="pages" href="#">Results</a></li>
                                <li><a class="pages" href="#">Blog</a></li>
                                <li><a href="{{url('/')}}">contacts</a></li>
                                @guest
                                @else 
                                  <li><a href="{{url('/')}}"><i class="fa fa-shopping-cart"></i><sup>00</sup></a></li>   
                                @endguest
                            </ul>
                        </nav>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->		
</header>
<!-- header end -->