<div class="deznav">
    <div class="deznav-scroll">
		<ul class="metismenu" id="menu">
      <li><a class="" href="{{ route('dashboard') }}" aria-expanded="false">
				<i class="flaticon-025-dashboard"></i>
				<span class="nav-text">Dashboard</span>
			</a>
      </li>
      @admin
		  <li class="">
			  <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
			    <i class="flaticon-025-dashboard"></i>
			    <span class="nav-text">Restaurants</span>
			  </a>
			    <ul aria-expanded="false" class="mm-collapse" style="height: 14px;">
			    <li><a href="{{ route('restaurant-list')}}">Listing</a></li>
			    <li><a href="{{ route('create-restaurant')}}">Add Restaurant</a></li>
			  </ul>
			</li>
			@endadmin
			<li><a href="{{route('orders')}}">
				<i class="flaticon-012-checkmark"></i>
				<span class="nav-text">Orders</span>
			</a>
			</li>
			<li><a href="{{ route('customers') }}">
				<i class="flaticon-007-bulleye"></i>
					<span class="nav-text">Customers</span>
				</a>
			</li>
			<li><a href="{{ route('foodcategories') }}">
				<i class="flaticon-053-lifebuoy"></i>
					<span class="nav-text">Food Category</span>
				</a>
			</li>
			<li><a href="{{ route('menu') }}">
				<i class="flaticon-016-double-chevron"></i>
					<span class="nav-text">Menu</span>
				</a>
			</li>
			@admin
      <li><a href="{{ route('banners') }}">
        <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Banners</span>
        </a>
      </li>
      @endadmin

      <li><a href="{{ route('tablebooking') }}">
        <i class="flaticon-043-menu"></i>
          <span class="nav-text">Table Booking</span>
        </a>
      </li>

      <li class="">
			  <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
			    <i class="flaticon-050-info"></i>
			    <span class="nav-text">Kitchen</span>
			  </a>
			    <ul aria-expanded="false" class="mm-collapse" style="height: 14px;">
			    @admin
			    <li><a href="{{ route('kitchen-list')}}">Items</a></li>
			    @endadmin
			    <li><a href="{{ route('stock')}}">Stock</a></li>
			  </ul>
			</li>
			@admin
      <li><a href="{{ route('users') }}">
        <i class="flaticon-025-dashboard"></i>
          <span class="nav-text">Users</span>
        </a>
      </li>
      @endadmin
    </ul>
	</div>
</div>
