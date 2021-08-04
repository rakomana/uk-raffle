@extends('layouts.app')

@section('content')
	<style>
		* {box-sizing: border-box}
		body {font-family: Verdana, sans-serif; margin:0}
		.mySlides {display: none}
		img {vertical-align: middle;}
		
		/* Slideshow container */
		.slideshow-container {
		max-width: 1000px;
		position: relative;
		margin: auto;
		}
		
		/* Next & previous buttons */
		.prev, .next {
		cursor: pointer;
		position: absolute;
		top: 50%;
		width: auto;
		padding: 16px;
		margin-top: -22px;
		color: white;
		font-weight: bold;
		font-size: 18px;
		transition: 0.6s ease;
		border-radius: 0 3px 3px 0;
		user-select: none;
		}
		
		/* Position the "next button" to the right */
		.next {
		right: 0;
		border-radius: 3px 0 0 3px;
		}
		
		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
		background-color: rgba(0,0,0,0.8);
		}
		
		/* Caption text */
		.text {
		color: #f2f2f2;
		font-size: 15px;
		padding: 8px 12px;
		position: absolute;
		bottom: 8px;
		width: 100%;
		text-align: center;
		}
		
		/* Number text (1/3 etc) */
		.numbertext {
		color: #f2f2f2;
		font-size: 12px;
		padding: 8px 12px;
		position: absolute;
		top: 0;
		}
		
		/* The dots/bullets/indicators */
		.dot {
		cursor: pointer;
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbb;
		border-radius: 50%;
		display: inline-block;
		transition: background-color 0.6s ease;
		}
		
		.active, .dot:hover {
		background-color: #717171;
		}
		
		/* Fading animation */
		.fade {
		-webkit-animation-name: fade;
		-webkit-animation-duration: 1.5s;
		animation-name: fade;
		animation-duration: 1.5s;
		}
		
		@-webkit-keyframes fade {
		from {opacity: .4} 
		to {opacity: 1}
		}
		
		@keyframes fade {
		from {opacity: .4} 
		to {opacity: 1}
		}
		
		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		.prev, .next,.text {font-size: 11px}
		}
		</style>
       <!-- Start contact Area -->
        <div class="contact-page area-padding-2">
            <div id="implement" class="container">
                <div style="padding-top: 80px;" class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-image">
							<div class="slideshow-container">
								<?php $count = 1; ?>
								@foreach(json_decode($product->image, true) as $image)
								<div class="mySlides">
								  <div class="numbertext">{{$count}} / 3</div>
									  <a href="{{asset(Voyager::image($image))}}"><img src="{{ Voyager::image($image) }}" style="width: 100%"/></a>
								  <div class="text">{{$product->name}}</div>
								</div>
								<?php $count++; ?>
								@endforeach
								
								
								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>
								
								</div>
								<br>
								
								<div style="text-align:center">
								  <span class="dot" onclick="currentSlide(1)"></span> 
								  <span class="dot" onclick="currentSlide(2)"></span> 
								  <span class="dot" onclick="currentSlide(3)"></span> 
								</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
						<div style="text-align: center;">
							<h4>{{$product['name']}}</h4><hr>
							<h6>Entry price: £{{$product['entry_price']}}</h6><hr>
							<h6>{{$product['description']}}</h6><hr>
							<h2>Entry price: £{{$product['entry_price']}}</h2>
							<hr>
							<div style="padding-top: 10px;">
								<button width="60%" class="btn btn-default" > 
									Sold Out
								</button>
							</div>
							<div style="padding-top: 10px;">
								<button style="width: 100%;" class="btn btn-success">Closing date: {{$product->closing_date}}</button>
							</div>
						</div>
                    </div>
                    <!-- End contact Form -->

                </div>
            </div>
        </div>
		<!-- End Contact Area -->

			<script>
			var slideIndex = 1;
			showSlides(slideIndex);
			
			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}
			
			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}
			
			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName("mySlides");
			  var dots = document.getElementsByClassName("dot");
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = "none";  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(" active", "");
			  }
			  slides[slideIndex-1].style.display = "block";  
			  dots[slideIndex-1].className += " active";
			}
			</script>
			
		
		<!-- calculation -->
		<script>
			const App = new Vue({
				el: "#implement",
				data: {
					entry_price: <?php echo "'".$product->entry_price."'"?>,
            		loading: false,
					form: {
						product_id: <?php echo "'".$product->id."'"?>,
						quantity: 1,
					}
				},
				computed: {
				  totalAmount()
				  {
					return this.entry_price * this.form.quantity;
				  } 
				},
				methods: {
					plus: function() {
						this.form.quantity++;
					},
					minus: function() {
						if(this.form.quantity > 1)
						{
							this.form.quantity--;
						}
					},
					cart: function () {
					this.loading = true
					axios.post('/cart', this.form)
					.then(response => {
						this.loading = false
						window.location.reload()
					})
					.catch(error => {
						this.loading = false
						swal("Oops!", "Already added to cart", "warning");
					})

					}
				}
			})
		</script>
        @endsection