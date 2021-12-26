@extends('auth-admin.layouts.admin')
@section('content')
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Banners</h2>
					<div>

					</div>
				</div>
				<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
					<div class="customer-search mb-sm-0 mb-3">
						<div class="input-group search-area">
							<input type="text" class="form-control" placeholder="Search here......">
							<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
						</div>
					</div>
					<div class="d-flex align-items-center flex-wrap">
						<button class="btn btn-primary btn-rounded me-3 mb-2" id="new-banner"  value="{{ route('addbanner') }}"><i class="fas fa-user-friends me-2"></i>+ Add Banner</button>
						<a href="{{ route('banners') }}" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive">
							<table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black" id="example7">
								<thead>
									<tr>
										<th>
											<div class="form-check ms-2">
											  <input class="form-check-input" type="checkbox" value="" id="checkAll">
											  <label class="form-check-label" for="checkAll">
											  </label>
											</div>
										</th>
										<th>No.</th>
                    <th>Name</th>
										<th class="text-center">Banner Image</th>
										<th>status</th>
										<th>Created At</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach ($banners as  $banner)
									<tr class="table-tr" href="{{ route('editmenu',['id'=>$banner->id]) }}">
										<td class="tbl-bx">
											<div class="form-check ms-2">
											  <input class="form-check-input" type="checkbox" value="" id="customCheckBox1">
											  <label class="form-check-label" for="customCheckBox1">
											  </label>
											</div>
										</td>
										<td><a href="{{ route('editmenu',['id'=>$banner->id]) }}"><?= $banner['id']?></a></td>
                    <td><?= $banner['name']?></td>
										<td class="text-center"><img  class="menu-img" src="{{ asset('/public/uploads/banner_images/'.$banner->id.'/'.$banner->banner_image) }}" ></td>
										<?php
											if ($banner->status == 1) {
													echo '<td class="text-ov"><span class="badge light badge-success">Active</span></td>';
											} else {
												echo '<td class="text-ov"><span class="badge light badge-danger">Inactive</span></td>';

											}
										 ?>
										<td class="wspace-no"> <?= date('d M Y,h:i A',strtotime($banner['created_at']))?></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
      @endsection

	<div class="modal fade" id="modal-new-banner">
	<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-header bg-light-blue">
		<h4 class="modal-title">New Banner</h4>
		</div>
		<div class="modal-body modal-md" role="document" id="new-banner-details">
 </div>
	</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(function(){
		$('#new-banner').click(function(){
		$('#modal-new-banner').modal('show')
		.find('#new-banner-details')
		.load($(this).attr('value'));
		});
	});

	$(document).ready(function(){
    $('table tr').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});
</script>
