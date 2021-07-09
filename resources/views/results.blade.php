@extends('layouts.app')

@section('content')
        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline text-center">
                                <h3>Lottery Results</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Lottery Results</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
       <!-- Start Number area -->
        <div class="winner-area area-padding-2">
            <div class="container">
                 <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>Latest Winner</h3>
							<p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- Start latest winner -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="winner-results">
                            <div class="winner-inner">
                                <span class="draw-date">10 May</span>
                                <img class="winner-images" src="img\about\win.png" alt="">
                                <div class="winner-content">
                                    <h4>Latest daily draw</h4>
                                    <ul class="winning-number">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">23</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">26</a></li>
                                        <li><a href="#">31</a></li>
                                    </ul>
                                    <span class="jackpot">Win: $20000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start latest winner -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="winner-results">
                            <div class="winner-inner">
                                <span class="draw-date">12 May</span>
                                <img class="winner-images" src="img\about\win2.png" alt="">
                                <div class="winner-content">
                                    <h4>Latest weekly draw</h4>
                                    <ul class="winning-number">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">23</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">26</a></li>
                                        <li><a href="#">31</a></li>
                                    </ul>
                                    <span class="jackpot">Win: $20000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start latest winner -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="winner-results">
                            <div class="winner-inner">
                                <span class="draw-date">14 May</span>
                                <img class="winner-images" src="img\about\win3.png" alt="">
                                <div class="winner-content">
                                    <h4>Latest Monthly draw</h4>
                                    <ul class="winning-number">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">23</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">26</a></li>
                                        <li><a href="#">31</a></li>
                                    </ul>
                                    <span class="jackpot">Win: $20000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start latest winner -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="winner-results">
                            <div class="winner-inner">
                               <span class="draw-date">18 May</span>
                                <img class="winner-images" src="img\about\win4.png" alt="">
                                <div class="winner-content">
                                    <h4>Latest Jackpot draw</h4>
                                    <ul class="winning-number">
                                        <li><a href="#">12</a></li>
                                        <li><a href="#">23</a></li>
                                        <li><a href="#">24</a></li>
                                        <li><a href="#">26</a></li>
                                        <li><a href="#">31</a></li>
                                    </ul>
                                    <span class="jackpot">Win: $20000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start latest winner -->
                </div>
            </div>
        </div>
        <!-- End Number area -->
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color-2 fix area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>Lottery Results</h3>
							<p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Draw Date</th>
                                            <th>Winning Number</th>
                                            <th>Winning price</th>
                                            <th>Lottery name</th>
                                        </tr>
                                        <tr>
                                           <td><img src="img\icon\m.png" alt="">Ragner Lorth</td>
                                            <td>02-03-2019</td>
                                            <td>
                                               <ul class="self-number">
                                                    <li><a href="#">12</a></li>
                                                    <li><a href="#">23</a></li>
                                                    <li><a href="#">24</a></li>
                                                    <li><a href="#">26</a></li>
                                                    <li><a href="#">31</a></li>
                                                </ul>
                                            </td>
                                            <td>$150k</td>
                                            <td><img src="img\icon\j.png" alt="">Red Jackpot</td>
                                        </tr>
                                        <tr>
                                           <td><img src="img\icon\m1.png" alt="">Ragner Lorth</td>
                                            <td>02-03-2019</td>
                                            <td>
                                               <ul class="self-number">
                                                    <li><a href="#">12</a></li>
                                                    <li><a href="#">23</a></li>
                                                    <li><a href="#">24</a></li>
                                                    <li><a href="#">26</a></li>
                                                    <li><a href="#">31</a></li>
                                                </ul>
                                            </td>
                                            <td>$150k</td>
                                            <td><img src="img\icon\j1.png" alt="">Mega Millions</td>
                                        </tr>
                                        <tr>
                                           <td><img src="img\icon\m2.png" alt="">Ragner Lorth</td>
                                            <td>02-03-2019</td>
                                            <td>
                                               <ul class="self-number">
                                                    <li><a href="#">12</a></li>
                                                    <li><a href="#">23</a></li>
                                                    <li><a href="#">24</a></li>
                                                    <li><a href="#">26</a></li>
                                                    <li><a href="#">31</a></li>
                                                </ul>
                                            </td>
                                            <td>$150k</td>
                                            <td><img src="img\icon\j2.png" alt="">Miami Jackpot</td>
                                        </tr>
                                        <tr>
                                           <td><img src="img\icon\m3.png" alt="">Ragner Lorth</td>
                                            <td>02-03-2019</td>
                                            <td>
                                               <ul class="self-number">
                                                    <li><a href="#">12</a></li>
                                                    <li><a href="#">23</a></li>
                                                    <li><a href="#">24</a></li>
                                                    <li><a href="#">26</a></li>
                                                    <li><a href="#">31</a></li>
                                                </ul>
                                            </td>
                                            <td>$150k</td>
                                            <td><img src="img\icon\j3.png" alt="">Euro Jackpot</td>
                                        </tr>
                                        <tr>
                                           <td><img src="img\icon\m4.png" alt="">Ragner Lorth</td>
                                            <td>02-03-2019</td>
                                            <td>
                                               <ul class="self-number">
                                                    <li><a href="#">12</a></li>
                                                    <li><a href="#">23</a></li>
                                                    <li><a href="#">24</a></li>
                                                    <li><a href="#">26</a></li>
                                                    <li><a href="#">31</a></li>
                                                </ul>
                                            </td>
                                            <td>$150k</td>
                                            <td><img src="img\icon\j4.png" alt="">London Jackpot</td>
                                        </tr>
                                        <tr>
                                           <td><img src="img\icon\m5.png" alt="">Ragner Lorth</td>
                                            <td>02-03-2019</td>
                                            <td>
                                               <ul class="self-number">
                                                    <li><a href="#">12</a></li>
                                                    <li><a href="#">23</a></li>
                                                    <li><a href="#">24</a></li>
                                                    <li><a href="#">26</a></li>
                                                    <li><a href="#">31</a></li>
                                                </ul>
                                            </td>
                                            <td>$150k</td>
                                            <td><img src="img\icon\j5.png" alt="">Powerball</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start Subscribe area -->
        <div class="subscribe-area fix area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Subscribe Newsletter</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12">
                        <div class="subs-form">
							<form id="contactForm" method="POST" action="contact.php" class="contact-form">
								<input type="email" class="email form-control" id="email" placeholder="Email" required="" data-error="Please enter your email">
								<button type="submit" id="submit" class="add-btn">Subscribe</button>
							</form>  
                        </div>
                    </div>
                </div>
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="card-list payment-carousel">
                            <div class="single-card">
                                <a href="#"><img src="img\brand\1.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\2.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\3.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\4.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\5.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\6.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\7.png" alt=""></a>
                            </div>
                            <div class="single-card">
                                <a href="#"><img src="img\brand\8.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe area -->
        @endsection