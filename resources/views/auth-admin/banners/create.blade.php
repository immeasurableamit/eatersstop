<div class="panel-body">
  <form action="{{ route('storebanner') }}" method="POST" enctype="multipart/form-data" >
    @csrf
      <div class="form-group">
        <label class="mb-1"><strong>Banner Name</strong></label>
        <input id="name" type="text" class="form-control" name="name"  autofocus>
    </div>

    <div class="form-group">
        <label class="mb-1"><strong>Banner Image</strong></label>
        <input id="banner_image" type="file" class="form-control" name="banner_image">
    </div>
    <br>
      <div class="form-group">
        <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
        <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
      </div>
  </form>
</div>
