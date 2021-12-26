@extends('layouts.default')

@section('content')
<section class="our-client section-padding">
<div class="container">
		<div class="row justify-content-between">
			<div class="col-xl-5 col-lg-6 col-md-6">

				<div class="section-tittle section-tittle2  mb-30">
					<h4 class="full-menu-links" style="position: fixed;">Most Popular Dishes<hr></h4>
				</div>
			</div>
		</div>
		<div class="row ">
			<div class="col-lg-3 main-menu-items">
				<div class="nav-button mb-40" style="margin-bottom:100px">

					<nav style="position: fixed; overflow: hidden;">
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
			<div class="col-lg-6">
				
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
			<div class="col-md-3" >
				<div class="" style="position: fixed; max-width: 260px;">
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

@stop
