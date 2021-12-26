@extends('auth-admin.layouts.admin')
@section('content')
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Food Category > <?=(empty($food_category->name))?' ':ucwords($food_category->name)?></h2>
				</div>
				<div class="row">
          <div class="panel-body">
							<div class="col-md-8">
            <form action="{{ route('updatecategory',['id'=>$food_category->id]) }}" method="POST" >
              @csrf
							<div class="form-group">
								<label class="mb-1"><strong>Category Name</strong></label>
                      <input type="text" name="name" class="form-control" placeholder="menu name.." value="<?=$food_category->name?>">
              </div>
							<div class="form-group">
								<label class="mb-1"><strong>Category Description</strong></label>
                  <input id="description" type="text" class="form-control" name="description" value="<?=$food_category->description?>">
              </div>

                <div class="mb-3">
                  <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
                  <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
                </div>
            </form>
					</div>
          </div>


				</div>
      @endsection
