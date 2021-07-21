@extends('layouts.app')

@section('content')

<div class='container' style="margin-top: 150px;">
    <div id="implement" class='row'>
        <div class='col-md-12'>
            <div id='mainContentWrapper'>
                <div class="col-md-8 col-md-offset-2">
                    <h2 style="text-align: center;">
                        Review Your Order & Complete Checkout
                    </h2>
                    <hr/>
                    <a href="{{('/')}}" class="btn btn-info" style="width: 100%;">Enter More Competitions</a>
                    <hr/>
                    <div class="shopping_cart">
                        <form class="form-horizontal" role="form" action="" method="post" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                Review Your Order
                                            </a>
                                            
                                        </h4>

                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                                <strong>{{ $message }}</strong>
                                        </div>
                                        @endif

                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-9">
                                                    <table class="table table-striped">
                                                        <tr>
                                                            <td colspan="2">
                                                                <a class="btn btn-warning btn-sm pull-right"
                                                                   href="#"
                                                                   title="Remove Item">X</a>
                                                                <b>
                                                                    Order Summary</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    @foreach ($product as $item)
                                                                    <li>{{$item->name}}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>£{{$total}}.00</b>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-3">
                                                    <div style="text-align: center;">
                                                        <h3>Order Total</h3>
                                                        <h3><span style="color:green;">£{{$total}}.00</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center; width:100%;"><a style="width:100%;"
                                                                                        data-toggle="collapse"
                                                                                        data-parent="#accordion"
                                                                                        href="#collapseTwo"
                                                                                        class=" btn btn-success"
                                                                                        onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continue
                                            to Billing Information»</a></div>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Contact
                                            and Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        @if(count($account) > 0)
                                                <table class="table table-striped" style="font-weight: bold;">
                                                    <tr>
                                                        <td>Last Name</td>
                                                        <td>Email</td>
                                                        <td>Phone Number</td>
                                                        <td>Address</td>
                                                        <td>City</td>
                                                        <td>State</td>
                                                        <td>Postal Code</td>
                                                        <td>Action</td>
                                                    </tr>
                                                    @foreach ($account as $user)
                                                    <tr>
                                                        <td>{{$user->last_name}}</td>
                                                        <td>{{auth()->user()->email}}</td>
                                                        <td>{{$user->phone_number}}</td>
                                                        <td>{{$user->address}}</td>
                                                        <td>{{$user->city}}</td>
                                                        <td>{{$user->state}}</td>
                                                        <td>{{$user->post_code}}</td>
                                                        <td><a href="{{url('destroy/'.$user->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                </table>   
                                        @else
                                        <b>Help us keep your account safe and secure, please verify your billing
                                            information.</b>
                                        <br/><br/>

                                        
                                        <table class="table table-striped" style="font-weight: bold;">
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_email">Best Email:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_email" value="{{Auth::user()->email}}" name="email"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_first_name">First name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_first_name" value="{{Auth::user()->name}}" name="first_name"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_last_name">Last name:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_last_name" value="" v-model="form.last_name"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_1">Address:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_address" value=""
                                                           v-model="form.address" required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_address_line_2">Unit / Suite #:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_unit" value=""
                                                           v-model="form.unit" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_city">City:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_city" value="" v-model="form.city"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_state">State:</label></td>
                                                <td>
                                                    <select class="form-control" id="id_state" v-model="form.state">
                                                        <option value="UK">United Kingdom</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_postalcode">Postalcode:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_postalcode" value="" v-model="form.post_code"
                                                           required="required" type="text"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 175px;">
                                                    <label for="id_phone">Phone:</label></td>
                                                <td>
                                                    <input class="form-control" id="id_phone" value="" v-model="form.phone_number" type="text"/>
                                                </td>
                                            </tr>

                                        </table>
                                        <div class="text-center">
                                            <a class="btn btn-primary save_account" @click.prevent="saveAccount">
                                                <span v-if="loading">
                                                    <i class="fa fa-spinner fa-spin"></i> Saving...
                                                    </span>
                                                    <span v-else>Save Account Information</span>
                                            </a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div style="text-align: center;"><a data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#collapseThree"
                                                                            class=" btn   btn-success" id="payInfo"
                                                                            style="width:100%;display: none;" onclick="$(this).fadeOut();  
                   document.getElementById('collapseThree').scrollIntoView()">Enter Payment Information »</a>
                                        </div>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                            <b>Payment Information</b>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <span class='payment-errors'></span>
                                        <div style="width: 80%;
                                        margin: 0 auto;
                                        padding: 20px;">
                                            <div id="paypal-payment-button">
                                            </div>
                                        </div>

                                        <br/>
                                        <div style="text-align: left;"><br/>
                                            By submiting this order you are agreeing to our <a href="/legal/billing/">universal
                                                billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
                                            If you have any questions about our products or services please contact us
                                            before placing this order.
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
		<!-- calculation -->
		<script>
			const App = new Vue({
				el: "#implement",
				data: {
            		loading: false,
					form: {
						last_name: null,
                        address: null,
                        unit: null,
                        city: null,
                        state: null,
                        post_code: null,
                        phone_number: null,
					}
				},
				computed: {
				  totalAmount()
				  {
					return this.entry_price * this.form.quantity;
				  } 
				},
				methods: {
					saveAccount: function () {
					this.loading = true
					axios.post('/account', this.form)
					.then(response => {
						this.loading = false
                        swal("Well done!", "Saved", "success");
					})
					.catch(error => {
						this.loading = false
						swal("Oops!", "Something went wrong", "warning");
					})

					}
				}
			})
		</script>
        <script src="https://www.paypal.com/sdk/js?client-id=AXt58Y16q7q7xU7Mj7qriYhzMq1GzdesCfuCODnD5muiPfvds83GH3MLbts43Vm5t0QhkRELI9L9_xs3"></script>
        <script>paypal.Buttons({
            style:{
                color:'blue',
                shape: 'pill',
            },
            createOrder: function(data, actions)
            {
                return actions.order.create({
                    purchase_units: [{
                        invoice_id: <?php echo "'".$order_num."'"?>,
                        amount: {
                            value: <?php echo "'".$total."'"?>,
                            value: 0.1,
                            currency_code:'USD'
                        }
                    }]
                })
            },
            onApprove: function(data, actions){
                return actions.order.capture().then(function (details){
                   window.location.href = '/success/' + <?php echo "'".$order_num."'"?>;
                })
            },
            onCancel: function (data) {
                console.log(details)
                window.location.href = '/cancel';
            }
        }).render('#paypal-payment-button');</script>
@endsection