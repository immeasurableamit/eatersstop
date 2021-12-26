@extends('auth-admin.layouts.admin')
@section('content')
<div class="panel-body">
	<div class="modal-header bg-light-blue">
		<h3 class="modal-title">{{ isset($editModel) ? 'Edit Restaurant' : 'Add New Restaurant' }}</h3>
		</div>
	<div class="row">
		<div class="col-md-8">
			<form action="{{ isset($editModel) ? url('update-restaurant/'.$editModel['id']) : route('add-restaurant')}}" method="POST" enctype="multipart/form-data" >
			@csrf
			  <div class="form-group">
			    <label class="mb-1"><strong>Name</strong></label>
			    <input id="name" type="text" class="form-control" name="name" value="{{ old('name', isset($editModel) ? $editModel->name : '') }}" autofocus>
			</div>
			<div class="form-group">
			    <label class="mb-1"><strong>Location</strong></label>
			    <input id="location" type="text" class="form-control" name="location" value="{{ old('location', isset($editModel) ? $editModel->location : '') }}">
			</div>
			<div class="form-group">
			    <label class="mb-1"><strong>Street</strong></label>
			    <input id="street" type="text" class="form-control" name="street" value="{{ old('street', isset($editModel) ? $editModel->street : '') }}">
			</div>
			<div class="form-group">
			    <label class="mb-1"><strong>Phone Number</strong></label>
			    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ old('phone_number', isset($editModel) ? $editModel->phone_number : '') }}" >
			</div>

			<div class="form-group">
			    <label class="mb-1"><strong>Email</strong></label>
			    <input id="email" type="text" class="form-control" name="email" value="{{ old('email', isset($editModel) ? $editModel->email : '') }}">
			</div>
			<br>
			  <div class="form-group">
			    <a href="{{ route('restaurant-list')}}" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
			    <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
			  </div>
			</form>
		</div>
	</div>
</div>
@endsection
