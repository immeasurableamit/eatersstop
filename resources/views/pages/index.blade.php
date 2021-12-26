@extends('layouts.default')

@section('content')

<div class="slider-area slider-height">
	<div class="slider-active">

		<div class="single-slider">
			<div class="slider-cap-wrapper">
				<div class="hero-caption">
						<h1 data-animation="fadeInUp" data-delay=".2s">Meet, Eat & Enjoy the true test</h1>
						<p data-animation="fadeInUp" data-delay=".6s">Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>

					<div class="slider-btns">
						<a data-animation="fadeInLeft" data-delay="1.0s" href="{{ route('menu-details') }}" class="btn hero-btn mr-15">Our Menu</a>
						<a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn" href="../../watch.html?v=Wxdj970RM7M">
						<img src="assets/img/icon/play-button.svg" alt="">
						Watch Video
						</a>
					</div>
				</div>

				<div class="hero-img position-relative">
				<img src="assets/img/hero/h1_hero1.jpg" alt="" data-animation="fadeInRight" data-transition-duration="5s">

					<div class="ratting-point" data-animation="bounceIn" data-delay="1s">
					<div class="features-ratting">
					<img src="assets/img/gallery/xuser.jpg.pagespeed.ic.gIEmGi_971.jpg" alt="">
					</div>
						<div class="features-caption">
						<h3>"EatersStop restaurant is easy and takes just a couple.</h3>
							<div class="rating">
								<ul>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><i class="fas fa-star"></i></li>
									<li><p>- Robert</p></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<!-- Services -->

<div class="our-services section-padding position-relative">
	<div class="container">
	<div class="row justify-content-sm-center">
	<div class="col-xl-7 col-lg-8 col-md-11">

	<div class="section-tittle text-center mb-70">
	<h2>Best way to eat healthy food</h2>
	<p>Making a reservation at EatersStop restaurant is easy and takes just a<br> couple of minutes.</p>
	</div>
	</div>
	</div>
		<div class="row">
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-icon">
						<img src="assets/img/icon/services1.svg" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Delicious Coffee</a></h5>
						<p>Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-icon">
						<img src="assets/img/icon/services2.svg" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Delicious Coffee</a></h5>
						<p>Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services text-center mb-30">
					<div class="services-icon">
						<img src="assets/img/icon/services3.svg" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Delicious Coffee</a></h5>
						<p>Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section id="menu" class="our-client section-padding section-img-bg2" data-background="assets/img/gallery/section-bg1.jpg">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-xl-5 col-lg-6 col-md-6">

				<div class="section-tittle section-tittle2  mb-30">
					<h2>Most Popular Dishes</h2>
					<p>Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6">
				<a href="#" class="btn full-menu f-right">Full Menu</a>
			</div>
		</div>
		<div class="menu-cart">
		<div class="row" style="padding: 20px;">
			<div class="col-lg-2">
				<div class="nav-button mb-40">

					<nav >
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<a class="nav-link active" id="nav-one-tab" data-bs-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Breakfast</a>
							<a class="nav-link" id="nav-two-tab" data-bs-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">Lunches</a>
							<a class="nav-link" id="nav-three-tab" data-bs-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Dinner</a>
							<a class="nav-link" id="nav-four-tab" data-bs-toggle="tab" href="#nav-four" role="tab" aria-controls="nav-four" aria-selected="false">Drinks</a>
							<a class="nav-link" id="nav-five-tab" data-bs-toggle="tab" href="#nav-five" role="tab" aria-controls="nav-five" aria-selected="false">Fastfood</a>
						</div>
					</nav>

				</div>
			</div>
			<div class="col-lg-7">
				<div class="menu-inner-contianer">
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">

						<div class="row">
							 @foreach($menu as $value)
							<div class="col-lg-12 col-md-12 col-sm-6" style="margin: 10px;">
								<div class="single-cat text-center mb-40">
									<div class="row">
										<div class="col-md-6">
											<div class="cat-cap">
												<p><a href="#">{{ $value->name }}</a></p>
												<p>Ksh. {{ $value->price }}</p>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="cat-img">
												<img src="assets/img/gallery/xpro-items1.jpg.pagespeed.ic.2gFO4Wugn1.jpg" alt="">
												<p><a href="{{ route('add.to.cart', $value->id) }}" class="browse-btn">Order Now</a></p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">

						<div class="row">
							 @foreach($menu as $value)
							<div class="col-lg-12 col-md-12 col-sm-6" style="margin: 10px;">
								<div class="single-cat text-center mb-40">
									<div class="row">
										<div class="col-md-6">
											<div class="cat-cap">
												<p><a href="#">{{ $value->name }}</a></p>												
												<p>Ksh. {{ $value->price }}</p>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="cat-img">
												<img src="assets/img/gallery/xpro-items1.jpg.pagespeed.ic.2gFO4Wugn1.jpg" alt="">
												<p><a href="{{ route('add.to.cart', $value->id) }}" class="browse-btn">Order Now</a></p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">

					<div class="row">
							 @foreach($menu as $value)
							<div class="col-lg-12 col-md-12 col-sm-6" style="margin: 10px;">
								<div class="single-cat text-center mb-40">
									<div class="row">
										<div class="col-md-6">
											<div class="cat-cap">
												<p><a href="#">{{ $value->name }}</a></p>												
												<p>Ksh. {{ $value->price }}</p>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="cat-img">
												<img src="assets/img/gallery/xpro-items1.jpg.pagespeed.ic.2gFO4Wugn1.jpg" alt="">
												<p><a href="{{ route('add.to.cart', $value->id) }}" class="browse-btn">Order Now</a></p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="nav-four-tab">

						<div class="row">
							 @foreach($menu as $value)
							<div class="col-lg-12 col-md-12 col-sm-6" style="margin: 10px;">
								<div class="single-cat text-center mb-40">
									<div class="row">
										<div class="col-md-6">
											<div class="cat-cap">
												<p><a href="#">{{ $value->name }}</a></p>												
												<p>Ksh. {{ $value->price }}</p>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="cat-img">
												<img src="assets/img/gallery/xpro-items1.jpg.pagespeed.ic.2gFO4Wugn1.jpg" alt="">
												<p><a href="{{ route('add.to.cart', $value->id) }}" class="browse-btn">Order Now</a></p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>

					<div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="nav-five-tab">
						<div class="row">
							 @foreach($menu as $value)
							<div class="col-lg-12 col-md-12 col-sm-6" style="margin: 10px;">
								<div class="single-cat text-center mb-40">
									<div class="row">
										<div class="col-md-6">
											<div class="cat-cap">
												<p><a href="#">{{ $value->name }}</a></p>												
												<p>Ksh. {{ $value->price }}</p>
												
											</div>
										</div>
										<div class="col-md-6">
											<div class="cat-img">
												<img src="assets/img/gallery/xpro-items1.jpg.pagespeed.ic.2gFO4Wugn1.jpg" alt="">
												<p><a href="{{ route('add.to.cart', $value->id) }}" class="browse-btn">Order Now</a></p>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="col-md-3">
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
		</div>
	</div>
	</div>
</section>

<div id="book_table">
<div class="three-area top-padding">
	<div class="container">
		<div class="row justify-content-between">

			<div class="col-xl-7 col-lg-7 col-md-10">
				<div class="three-honer">
					<div class="honer-area">
						<img src="assets/img/gallery/woner.jpg" alt="">
					</div>
				</div>
			</div>
				<div class="col-xl-4 col-lg-5 col-md-10">
					<div class="form-wrapper">
						<div class="form-tittle mb-30">
							<h2>Book a table</h2>
							<p>Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>
						</div>
						<form id="three-form" action="{{ route('book-table') }}" method="POST">
							 @csrf


							<div class="row">
								<div class="col-lg-6 col-md-6">
									<div class="form-box mb-15">
										<input type="number" name="guest_number" placeholder="Guests" @error('guest_number') is-invalid @enderror value="{{ old('guest_number') }}">
										@error('guest_number')
										    <span class="invalid-input">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="single-form">
										<div class="select-option">
											<select name="meal_time" id="select1">
												<option value="1">Break-fast</option>
												<option value="2">Lunch</option>
												<option value="3">Dinner</option>
												<option value="4">Whole-Day</option>
											</select>
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6 col-sm-6">
									<div class="single-select-box mb-15">
										<div class="boking-datepicker">
											<input name="date" class="form_datetime" placeholder="Date" @error('date') is-invalid @enderror value="{{ old('date') }}">
										@error('date')
										    <span class="invalid-input">{{ $message }}</span>
										@enderror
										</div>
									</div>
								</div>

								<div class="col-lg-12 col-md-6">
									<div class="form-box mb-15">
										<input type="text" name="customer_name" placeholder="Your Name" @error('customer_name') is-invalid @enderror value="{{ old('customer_name') }}">
										@error('customer_name')
										    <span class="invalid-input">{{ $message }}</span>
										@enderror
									</div>
								</div>

								<div class="col-lg-12 col-md-6">
									<div class="form-box mb-15">
										 <input class="form-control" id="phone_number" name="phone_number" type="tel" @error('phone_number') is-invalid @enderror value="{{ old('phone_number') }}">
										@error('phone_number')
										    <span class="invalid-input">{{ $message }}</span>
										@enderror
									</div>
								</div>

								<div class="col-lg-12 col-md-6">
									<div class="form-box mb-15">
										<input type="text" name="email" placeholder="g.nanguti@gmail.com" @error('email') is-invalid @enderror value="{{ old('email') }}">
										@error('email')
										    <span class="invalid-input">{{ $message }}</span>
										@enderror
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-box mb-15">
										<textarea name="message" id="message" placeholder="Message" @error('message') is-invalid @enderror value="{{ old('message') }}"></textarea>
										@error('message')
										    <span class="invalid-input">{{ $message }}</span>
										@enderror
									</div>
									<div class="submit-info">
										<button class="submit-btn" type="submit">Sent Request</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<section class="customer-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-7 col-md-7 ">

				<div class="section-tittle  text-center mb-15">
					<h2>What our customer sayes</h2>
					<p>Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes.</p>
				</div>
			</div>
		</div>
		<div class="customer-active">
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-cat text-center mb-30">
				<div class="cat-img">
				<img src="assets/img/gallery/xcustomer1.jpg.pagespeed.ic.13DFmT_3dA.jpg" alt="">
				</div>
					<div class="cat-cap">
					<p>"Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes midst tree form seas.</p>
						<div class="rating">
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><p>- Robert</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-cat text-center mb-30">
				<div class="cat-img">
				<img src="assets/img/gallery/xcustomer2.jpg.pagespeed.ic.cLzRPLLG1L.jpg" alt="">
				</div>
					<div class="cat-cap">
						<p>"Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes midst tree form seas.</p>
						<div class="rating">
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><p>- Robert</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-cat text-center mb-30">
					<div class="cat-img">
						<img src="assets/img/gallery/xcustomer3.jpg.pagespeed.ic.1u0Q4XejVV.jpg" alt="">
					</div>
					<div class="cat-cap">
					<p>"Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes midst tree form seas.</p>
						<div class="rating">
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><p>- Robert</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="single-cat text-center mb-30">
					<div class="cat-img">
						<img src="assets/img/gallery/xcustomer2.jpg.pagespeed.ic.cLzRPLLG1L.jpg" alt="">
					</div>
					<div class="cat-cap">
						<p>"Making a reservation at EatersStop restaurant is easy and takes just a couple of minutes midst tree form seas.</p>
						<div class="rating">
							<ul>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><i class="fas fa-star"></i></li>
								<li><p>- Robert</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="location-house fix">
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-xl-12">
				<div class="instagram-active owl-carousel">
					<div class="single-instagram">
						<img src="assets/img/gallery/xinstra1.jpg.pagespeed.ic.kl1cKb4rKY.jpg" alt="">
					</div>
					<div class="single-instagram">
						<img src="assets/img/gallery/xinstra2.jpg.pagespeed.ic.sFuADVVT-f.jpg" alt="">
					</div>
					<div class="single-instagram">
						<img src="assets/img/gallery/xinstra3.jpg.pagespeed.ic.vxSlT3TB0i.jpg" alt="">
					</div>
					<div class="single-instagram">
						<img src="assets/img/gallery/xinstra4.jpg.pagespeed.ic.fN-J91ofG4.jpg" alt="">
					</div>
					<div class="single-instagram">
						<img src="assets/img/gallery/xinstra2.jpg.pagespeed.ic.sFuADVVT-f.jpg" alt="">
					</div>
				</div>

				<a href="https://www.instagram.com/eaters_stop_/" target="_blank" class="insta-btn"><i class="ti-instagram"></i>EatersStop</a>
			</div>
		</div>
	</div>
</div>

@stop
<script src="{{ asset('public/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('public/assets/js/intlTelInput.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function() {
        var telInput = document.querySelector("#phone_number");
        window.intlTelInput(telInput, {
            hiddenInput: "full_number",
            initialCountry: "in",
            separateDialCode: true,
            utilsScript: "{{ asset('public/assets/js/utils.js') }}",
        });

    });
</script>
