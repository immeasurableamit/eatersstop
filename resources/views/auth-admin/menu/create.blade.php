<div class="panel-body">
  <form action="{{ route('storemenu') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="input-group mb-3">
      <label class="input-group-text mb-0">Food Category</label>
    <select class="default-select  form-control wide" name="category_id">
        <option selected>Choose...</option>
        @foreach ($food_category as $category)
        <option value="<?= $category->id?>"><?= $category->name?></option>
        @endforeach
    </select>
</div>
      <div class="form-group">
        <label class="mb-1"><strong>Menu Name</strong></label>
        <input id="name" type="text" class="form-control" name="name"  autofocus>
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Menu Description</strong></label>
        <input id="description" type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Image</strong></label>
        <input id="menu-file" type="file" class="form-control" name="cover_image">
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Price</strong></label>
        <input id="price" type="text" class="form-control" name="price">
    </div>
    <br>
      <div class="form-group">
        <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
        <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
      </div>
  </form>
</div>
