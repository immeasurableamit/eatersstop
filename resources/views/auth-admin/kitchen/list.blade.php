@extends('auth-admin.layouts.admin')
@section('content')
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Kitchen Items</h2>
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
            <a href="{{ route('addstock') }}" class="btn btn-primary btn-rounded me-3 mb-2"><i class="fas fa-user-friends me-2"></i>+ Bulk Upload Items</a>
						<a href="{{ route('kitchen-list') }}" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
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
										<th>Quantity</th>
										<th>Metric Unit</th>
										<th>Category</th>
										<th>Status</th>
                    <th>Uploaded</th>
                    <th>Action</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									@foreach ($kitchen_items as $kitchen_item)
									<tr class="table-tr" href="{{ route('editcategory',['id'=>$kitchen_item->id]) }}">
										<td class="tbl-bx">
											<div class="form-check ms-2">
											  <input class="form-check-input" type="checkbox" value="" id="customCheckBox1">
											  <label class="form-check-label" for="customCheckBox1">
											  </label>
											</div>
										</td>
										<td><a href="{{ route('editcategory',['id'=>$kitchen_item->id]) }}"><?= $kitchen_item['id']?></a></td>
                    <td><?= $kitchen_item['name']?></td>
                    	<td><?= $kitchen_item['quantity']?></td>
											<td><?= $kitchen_item['metric_unit']?></td>

                      <td><?= $kitchen_item['category']?></td>
											<?php
												if ($kitchen_item['status'] == 1) {
														echo '<td class="text-ov"><span class="badge light badge-success">Active</span></td>';
												} else {
													echo '<td class="text-ov"><span class="badge light badge-danger">Inactive</span></td>';

												}
											 ?>
										<td class="wspace-no"> <?= date('d M Y,h:i A',strtotime($kitchen_item['created_at']))?></td>

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
													<button  id="assign-stock"class="dropdown-item text-black" value="{{ route('assignStock',['id'=>$kitchen_item['id']]) }}"><i class="far fa-check-circle me-1 text-success"></i>Assign</button>
													<a class="dropdown-item text-black" href="javascript:void(0);"><i class="far fa-times-circle me-1 text-danger"></i>Update</a>
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
      <div class="modal fade" id="modal-new-stock">
      <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-light-blue">
        <h4 class="modal-title">Assign Stock</h4>
        </div>
        <div class="modal-body modal-md" role="document" id="new-stock-details">
     </div>
      </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    $(function(){
    $('#assign-stock').click(function(){
    $('#modal-new-stock').modal('show')
    .find('#new-stock-details')
    .load($(this).attr('value'));
    });
    });
    </script>
