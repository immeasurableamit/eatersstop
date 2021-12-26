
@extends('auth-admin.layouts.admin')
@section('content')
<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
	<h2 class="mb-3 me-auto">Stocks</h2>
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
<!-- 	<div class="d-flex align-items-center flex-wrap">
		<a href="{{ route('create-restaurant') }}">
			<button  class="btn btn-primary btn-rounded me-3 mb-2"><i class="fas fa-user-home me-2"></i>+ Add Restaurant</button>
		</a>
		
		<a href="{{ route('restaurant-list') }}" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
	</div> -->
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
						<th>Kitchen Item</th>
						<th>Restaurant</th>
						<th>Current Stock</th>
						@admin
						<th>Add Stock</th>
						@endadmin
						<th>Remove Stock</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($stocks as $stock)

					<tr>
						<td class="tbl-bx">
							<div class="form-check ms-2">
							  <input class="form-check-input" type="checkbox" value="" id="customCheckBox10">
							  <label class="form-check-label" for="customCheckBox10">
							  </label>
							</div>
						</td>
						<td class="text-ov"> {{ $stock->id ?? '' }}</td>			
						<td class="text-ov"> {{ $stock->kitchen->name ?? '' }}</td>
						<td class="text-ov"> {{ $stock->restaurant->name ?? '' }}</td>
						<td class="text-ov"> {{ $stock->current_stock ?? '' }}</td>
						@admin
						<td>
	                        <form action="{{ route('transactions.storeStock', $stock->id) }}" method="POST" style="display: inline-block;" class="form-inline">
	                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                            <input type="hidden" name="action" value="add">
	                            <div class="row">
	                            	<div class="col-md-6">
	                            		<input type="number" name="stock" class="form-control form-control-sm col-4 stock-add">
	                            	</div>
	                            	<div class="col-md-6">
	                            		<input type="submit" class="btn btn-xs btn-danger" value="ADD">
	                            	</div>
	                            </div>    
	                        </form>
	                    </td>
	                    @endadmin
	                    <td>
	                        <form action="{{ route('transactions.storeStock', $stock->id) }}" method="POST" style="display: inline-block;" class="form-inline">
	                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                            <input type="hidden" name="action" value="remove">
	                            <div class="row">
	                            	<div class="col-md-6">
	                            		<input type="number" name="stock" class="form-control form-control-sm col-4 stock-add" min="1">
	                            	</div>
	                            	<div class="col-md-6">
	                            	<input type="submit" class="btn btn-xs btn-danger" value="REMOVE">
	                            </div>
	                        </form>
	                    </td>

					</tr>
						@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
