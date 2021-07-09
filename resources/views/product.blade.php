@extends('layouts.app')

@section('content')
       <!-- Start contact Area -->
        <div class="contact-page area-padding-2">
            <div id="implement" class="container">
                <div style="padding-top: 80px;" class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-image">
							@foreach($product as $product)
								<img src="{{asset('storage/'.$product->image)}}" alt="product">
							@endforeach
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
						<div style="text-align: center;">
							<h4>{{$product['name']}}</h4><hr>
							<h6>{{$product->no_of_tickets}}</span>/{{$product->quantity}} tickets remaining</h6>
							<hr>
							<h4>Number of Entries</h4>
							<div class="quantity buttons_added">
								<input type="button" value="-" class="btn btn-success" @click.prevent="minus">
									<input type="text"  title="Qty" class="input-text qty text" v-model="form.quantity" size="4" disabled>
								<input type="button" value="+" class="btn btn-success" @click.prevent="plus">
							</div>
							<h5 style="padding-top: 10px;">Total: <span>£</span>@{{totalAmount}}</h5>
							<div style="padding-top: 10px;">
								<button style="width: 100%;" class="btn btn-success" @click="cart"> 
									<span v-if="loading">
										<i class="fa fa-spinner fa-spin"></i> Adding...
										</span>
										<span v-else> Add to cart</span>
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