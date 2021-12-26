<div class="panel-body">
  <form action="{{ route('storefoodcategory') }}" method="POST">
    @csrf
      <div class="form-group">
        <label class="mb-1"><strong>Category Name</strong></label>
        <input id="name" type="text" class="form-control" name="name"  autofocus>
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>Category Description</strong></label>
        <input id="description" type="text" class="form-control" name="description">
    </div>
    <br>
      <div class="form-group">
        <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
        <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
      </div>
  </form>
</div>
