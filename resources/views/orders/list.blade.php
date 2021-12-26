
@extends('auth-admin.layouts.admin')
@section('content')

<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
	<h2 class="mb-3 me-auto">Order Page List</h2>
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
	<div>
		<a href="{{ route('orders') }}" class="btn btn-primary btn-rounded"><i class="fas fa-sync"></i></a>
	</div>
</div>
<div class="row">
	<div class="col-xl-12">
		<div class="table-responsive">
			<table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" id="example5">
				<thead>
					<tr>
						<th>
							<div class="form-check ms-2">
							  <input class="form-check-input" type="checkbox" value="" id="checkAll">
							  <label class="form-check-label" for="checkAll">
							  </label>
							</div>
						</th>
						<th>Order ID</th>
						<th>Date</th>
						<th>Customer</th>
						<th>Menu</th>
						<th>Location</th>
						<th>Amount</th>
						<th>Status Order</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($orders as $order)

					<tr>
						<td class="tbl-bx">
							<div class="form-check ms-2">
							  <input class="form-check-input" type="checkbox" value="" id="customCheckBox10">
							  <label class="form-check-label" for="customCheckBox10">
							  </label>
							</div>
						</td>
						<td><a href="{{ route('orderdetails',['id'=>$order->id]) }}"><?=$order->id ?></a></td>
						<td class="wspace-no"><?= date('d M Y,h:i A',strtotime($order['created_at']))?></td>
						<td>
							<?php echo $order->first_name.' '. $order->last_name ?>
						</td>
						<td>
							<?php echo App\Models\Menu::getMenus($order->id) ?>
						</td>
						<td class="text-ov"><?=$order->street?>,<?=$order->town?></td>
						<td class="text-ov"><?= 'Ksh '.$order->total_amount?></td>
						<?php if ($order->status == 0){
							echo '<td><span class="btn bgl-danger text-danger btn-rounded btn-sm">Pending</span></td>';
						} elseif($order->status == 1){
							echo '<td><span class="btn bgl-warning text-danger btn-rounded btn-sm">Rejected</span></td>';
						}elseif ($order->status == 2) {

							echo '<td><span class="btn bgl-success text-success btn-rounded btn-sm">Accepted</span></td>';
						}
						?>
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
									<a class="dropdown-item text-black" href="{{ route('acceptorder',['id'=>$order->id]) }}"><i class="far fa-check-circle me-1 text-success"></i>Accept order</a>
									<a class="dropdown-item text-black" href="{{ route('rejectorder',['id'=>$order->id]) }}"><i class="far fa-times-circle me-1 text-danger"></i>Reject order</a>
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
