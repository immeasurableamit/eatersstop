<?php
	$res_addresses = App\Models\Address::getRestaurantAddress();
	$default_contact = App\Models\Address::getAddress();
?>
<div class="header-area header-transparent">
	<div class="main-header header-sticky">
		<div class="container-fluid">
			<div class="menu-wrapper d-flex align-items-center justify-content-between">
				<div class="left-content d-flex align-items-center">
					<div class="logo">
					<a href="{{route('home')}}"><img src="assets/img/logo/eaters.png" alt=""></a>
					</div>

					<div class="main-menu d-none d-lg-block">
						<nav>
							<ul id="navigation" class="ul-nav-items">
								<li><a href="{{ route('home') }}">Home</a></li>
								<li><a href="{{ route('home') }}#menu">Menu</a></li>
								<li><a href="{{ route('about-us') }}">About</a></li>
								<li><a href="{{ route('blog') }}">Blog</a>

								</li>
								<li><a href="{{ route('contact-us') }}">Contact</a></li>
							</ul>
						</nav>
					</div>
				

				</div>

				<div class="buttons">
					
	                
            	
					<ul>
						<li>
					
						</li>
						<li class="button-header">
						<select name="location" class="form-control nav-selector">
		                    <option value="">--- Select location ---</option>
		                    @foreach ($res_addresses as $key => $value)
		                        <option value="{{ $key }}">{{ $value }}</option>
		                    @endforeach
		                </select>
						<a href="tel:+{{ $default_contact->phone_number }}" class="btn btn-info contact-button" id="phone-contact">+{{ $default_contact->phone_number }}</a>
						<!-- <a href="{{ route('home') }}#book_table" class="header-btn">Book a Table</a> -->
						<!-- <div class="dropdown">
			                <button type="button" class="btn btn-info btn-cart" data-toggle="dropdown">
			                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
			                </button>
			                <div class="dropdown-menu">
			                    <div class="row total-header-section">
			                        <div class="col-lg-6 col-sm-6 col-6">
			                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
			                        </div>
			                        @php $total = 0 @endphp
			                        @foreach((array) session('cart') as $id => $details)
			                            @php $total += $details['price'] * $details['quantity'] @endphp
			                        @endforeach
			                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
			                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
			                        </div>
			                    </div>
			                    @if(session('cart'))
			                        @foreach(session('cart') as $id => $details)
			                            <div class="row cart-detail">
			                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
			                                    <img src="{{ asset('/public/uploads/menu/'.$id.'/'.$details['image']) }}" />
			                                </div>
			                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
			                                    <p>{{ $details['name'] }}</p>
			                                    <span class="price text-info"> Ksh. {{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
			                                </div>
			                            </div>
			                        @endforeach
			                    @endif
			                    <div class="row">
			                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
			                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
			                        </div>
			                    </div>
			                </div>
			            </div> -->

						<!-- <a href="#" class="btn header-btn2"> <i class="fas fa-phone-alt"></i>+10 (78) 783 3674</a> -->
						</li>
					</ul>
				</div>
			</div>

			<div class="col-12">
				<div class="mobile_menu d-block d-lg-none"></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="location"]').on('change', function() {
            var locationId = $(this).val();
            baseUrl = '{{ url('/') }}';
            if(locationId) {
                $.ajax({
                    url: baseUrl+'/restaurant-address/'+locationId,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
	                    document.getElementById("street").innerHTML = data.street;
	                    document.getElementById("contact-number").innerHTML = '+'+data.phone_number;
	                    document.getElementById("email-address").innerHTML = data.email;
	                    document.getElementById("phone-contact").innerHTML = '+'+data.phone_number;
                    }
                });
            }
        });
    });
</script>

<style type="text/css">
	.nice-select {
		min-width: 230px;
	}
</style>
