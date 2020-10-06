
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Prince Rakomana">
  <title>UK giveaways</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="icon" type="image/jpg" href="{{asset('images/logo.jpg')}}" sizes="16x16">
  <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor/jqvmap.min.css')}}">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <link rel="stylesheet" href="{{asset('css/auto.css')}}">
</head>
<body>

  <div class="loader">
    <p>UK giveaways</p>
    <div class="wrap-ball">
      <div class="ball"></div>
    </div>
  </div>

<div class="dark-version">
  <!-- header section  -->
  <!-- header-section start  -->
<header class="header-section">
  <div class="header-top">
    <span class="close-btn"><i class="fa fa-times"></i></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="header-left-list">
            <li><a href="tel:02743 598025"><i class="fa fa-phone"></i>Support</a></li>
            <li><a href="mailto:info@ukgiveaways.com"><i class="fa fa-envelope"></i>info@ukgiveaways.com</a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <ul class="header-right-list">
          @guest
            <li><a href="{{Route('login')}}">Sign In</a></li>
            <li><a href="{{Route('register')}}">Sign Up</a></li>
          @else
          <div class="dropdown">
            <span style="color: red;"><a href="#0">{{ Auth::user()->name }}</a></span>
            <div class="dropdown-content">
              <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              <li><a href="{{ url('account') }}">{{ __('Account') }}</a></li>
            </div>
          </div>
          @endguest
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-xl p-0 align-items-center">
        <a class="site-logo site-title" href="{{url('/')}}"><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:320px;height:85px;object-fit:contain" alt="UK giveaways" data-type="image" itemprop="image" src="{{asset('images/logo.jpg')}}"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggle"></span>
        </button>
        <span class="header-top-open-btn"><i class="fa fa-tasks"></i></span>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav main-menu ml-auto">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('about')}}">About</a></li>
            <li class="menu_has_children">
              <a href="#0">Results</a>
              <ul class="sub-menu">
                <li><a href="{{url('result')}}">All Results</a></li>
              </ul>
            </li>
            <li class="menu_has_children"><a href="#0">Competitions</a>
              <ul class="sub-menu">
                <li><a href="{{url('active')}}">Active</a></li>
              </ul>
            </li>
            <li class="menu_has_children"><a href="#">faq</a>
              <ul class="sub-menu">
                <li><a href="{{url('play')}}">How to play</a></li>
              </ul>
            </li>
            <li><a href="{{url('contact')}}">contact us</a></li>
          </ul>
          <div class="nav-right">
            <button class="header-serch-btn toggle-close"><i class="fa fa-search"></i></button>
            <div class="header-top-search-area">
              <form class="header-search-form">
                <input type="search" name="header_search" id="header_search" placeholder="Search here...">
                <button class="header-search-btn"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div><!-- header-bottom end -->
</header>
<!-- header-section end  -->
            @yield('content')
<!--Footer Area-->
<footer class="footer-area pt-120 pb-120 section-bg wave-animation">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget footer-nav">
                  <h3>Regular links</h3>
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li><a href="{{url('play')}}">FAQ</a></li>
                        <li><a href="{{url('active')}}">Active Competitions</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget footer-nav">
                  <h3>Essentials</h3>
                    <ul>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('result')}}">All Results</a></li>
                        <li><a href="{{url('active')}}">Active Competitions</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget footer-nav">
                  <h3>Essentials</h3>
                    <ul>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('result')}}">All Results</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <a href=""><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:320px;height:85px;object-fit:contain" alt="UK giveaways" data-type="image" itemprop="image" src="{{asset('images/logo.jpg')}}"></a>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae a commodi nobis eaque unde tempore possimus aspernatur debitis magnam veniam ex hic quam, doloribus numquam facilis tempora voluptatibus dicta culpa.</p>
                    <div class="social">
                        <a href="" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 text-center cl-white copyright mt-50">
                <p class="mb-0">Copyright UK giveaways 2020 All Rights Reserved</p>
            </div>
        </div>
    </div>
  </footer><!--/Footer Area-->


   <!-- scroll-to-top start -->
 <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  
</div>

    <script src="{{asset('js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('js/vendor/waypoints.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('js/vendor/particles.min.js')}}"></script>
    <script src="{{asset('js/vendor/particle-app.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
  </body>
</html>
