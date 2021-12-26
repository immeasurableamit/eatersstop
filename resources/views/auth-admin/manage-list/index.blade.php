
@extends('auth-admin.layouts.admin')
@section('content')

<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
	<h2 class="mb-3 me-auto">Restaurants List</h2>
	<div>
	</div>
</div>
<div class="mb-4 d-flex justify-content-between align-items-center flex-wrap">
	<div class="customer-search sm-mb-0 mb-3">
		<div class="input-group search-area">
			<input type="text" class="form-control" placeholder="Search here......">
			<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
		</div>
	</div>
	<div class="d-flex align-items-center flex-wrap">
		<a href="{{ route('create-restaurant') }}">
			<button  class="btn btn-primary btn-rounded me-3 mb-2"><i class="fas fa-user-home me-2"></i>+ Add Restaurant</button>
		</a>
		
		<a href="{{ route('restaurant-list') }}" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
	</div>
</div>
<div class="row">
	<div class="col-xl-12">
		<div class="table-responsive">
			<table class="table display mb-4 dataTablesCard value-table shadow-hover  card-table text-black" id="example5">
				<thead>
					<tr>
						<th>
							<div class="form-check ms-2">
							  <input class="form-check-input" type="checkbox" value="" id="checkAll">
							  <label class="form-check-label" for="checkAll">
							  </label>
							</div>
						</th>
						<th>ID</th>
						<th>Name</th>
						<th>Location</th>
						<th>Street</th>
						<th>Phone Number</th>
						<th>Email</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($list as $value)

					<tr>
						<td class="tbl-bx">
							<div class="form-check ms-2">
							  <input class="form-check-input" type="checkbox" value="" id="customCheckBox10">
							  <label class="form-check-label" for="customCheckBox10">
							  </label>
							</div>
						</td>
						<td class="text-ov"><?= $value['id'] ?></td>			
						<td class="text-ov"><?= $value['name'] ?></td>
						<td class="text-ov"><?= $value['location'] ?></td>
						<td class="text-ov"><?= $value['street'] ?></td>
						<td class="text-ov"><?= $value['phone_number'] ?></td>
						<td class="text-ov"><?= $value['email'] ?></td>
						<td>
							<div class="dropdown ml-auto">
								<div class="btn-link" data-bs-toggle="dropdown" >
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M11.0005 12C11.0005 12.5523 11.4482 13 12.0005 13C12.5528 13 13.0005 12.5523 13.0005 12C13.0005 11.4477 12.5528 11 12.0005 11C11.4482 11 11.0005 11.4477 11.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M18.0005 12C18.0005 12.5523 18.4482 13 19.0005 13C19.5528 13 20.0005 12.5523 20.0005 12C20.0005 11.4477 19.5528 11 19.0005 11C18.4482 11 18.0005 11.4477 18.0005 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M4.00049 12C4.00049 12.5523 4.4482 13 5.00049 13C5.55277 13 6.00049 12.5523 6.00049 12C6.00049 11.4477 5.55277 11 5.00049 11C4.4482 11 4.00049 11.4477 4.00049 12Z" stroke="#3E4954" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item text-black" href="{{ route('edit-restaurant',['id'=>$value['id']]) }}"><i class="far fa-check-circle me-1 text-success"></i>Edit</a>
									<a class="dropdown-item text-black" href="{{ route('delete-restaurant',['id'=>$value['id']]) }}"><i class="far fa-times-circle me-1 text-danger"></i>Delete</a>
								</div>
							</div>
						</td>
					</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
