@extends('auth-admin.layouts.admin')
@section('content')
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">Menu > <?=(empty($menu->name))?' ':ucwords($menu->name)?></h2>
				</div>
				<div class="row">
          <div class="panel-body">
							<div class="col-md-8">
            <form action="{{ route('updatemenu',['id'=>$menu->id]) }}" method="POST" enctype="multipart/form-data" >
              @csrf
							<div class="form-group">
				        <label class="mb-1"><strong>Menu Name</strong></label>
                      <input type="text" name="name" class="form-control" placeholder="menu name.." value="<?=$menu->name?>">
              </div>
							<div class="form-group">
				        <label class="mb-1"><strong>Menu Description</strong></label>
                  <input id="description" type="text" class="form-control" name="description" value="<?=$menu->description?>">
              </div>
							<div class="form-group">
								<label class="mb-1"><strong>Image</strong></label>
                  <input id="menu-file" type="file" class="form-control" name="cover_image" value="">
              </div>
							<div class="form-group">
								<label class="mb-1"><strong>Price</strong></label>
                      <input type="text" name="price" class="form-control" placeholder="menu name.." value="<?=$menu->price?>">
              </div>
              <br>
							<div class="form-group">
				        <label class="mb-1"><strong>Food Category</strong></label>
										<select name="category_id" class="form-control nav-selector">
											<option selected>Choose...</option>
											@foreach ($food_category as $category)
											<option value="<?= $category->id?>" {{($menu->category_id)? 'selected':'' }}><?= $category->name?></option>
											@endforeach
									</select>

								</div>
              <br>
                <div class="mb-3">
                  <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
                  <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
                </div>
            </form>
					</div>
          </div>


				</div>
      @endsection
