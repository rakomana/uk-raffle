@extends('layouts.app')

@section('content')
       <!-- Start contact Area -->
        <div class="contact-page area-padding-2">

			@if(session()->has('winner'.$product->id))
			<div class="alert alert-success alert-block" style="padding-top: 150px;">
				<button type="button" class="close" data-dismiss="alert">×</button>	
					<strong><span>({{session()->get('winner'.$product->id)['winner_id']}})</span> {{session()->get('winner'.$product->id)['winner_name']}} has Won!</strong>
			</div>
			@endif

            <div id="implement" class="container">
                <div style="padding-top: 80px;" class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-image">
								<img src="{{ Voyager::image( $product->image ) }}" alt="product">
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
						<div style="text-align: center;">
							<h4>{{$product['name']}}</h4><hr>
							<h6>{{$product->no_of_tickets}}</span>/{{$product->quantity}} tickets remaining</h6>
							<hr>
							<h4>Number of Entries&nbsp;({{count($competitors)}})</h4>
							<h5 style="padding-top: 10px;">Entry Price <span>£</span>@{{totalAmount}}</h5>
							<div style="padding-top: 10px;">
								<form method="post" action="{{url('random/'.$product->id)}}">
									@csrf
									<button style="width: 100%;" type="submit" class="btn btn-success">Generate a Winner</button>
								</form>
							</div>
                            <div style="padding-top: 10px;">
								@if(session()->has('winner'.$product->id))
								<h5 style="color: blue;">The winner is <span>({{session()->get('winner'.$product->id)['winner_id']}})</span> {{session()->get('winner'.$product->id)['winner_name']}}</h5>
								@endif
							<h5>List of Competitors</h5>
								<ul>
									@foreach($competitors as $competitor)
                                		<li><span>({{$competitor->id}})</span>&nbsp;{{$competitor->name}}</li>
									@endforeach
								</ul>
							</div>
						</div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
		<!-- End Contact Area -->
		
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