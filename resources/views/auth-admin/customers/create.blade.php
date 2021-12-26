<div class="panel-body">
  <form action="{{ route('storecustomer') }}" method="POST">
    @csrf
      <div class="form-group">
        <label class="mb-1"><strong>Full names</strong></label>
        <input id="full_name" type="text" class="form-control" name="full_name"  autofocus>
    </div>
    <div class="form-group">
        <label class="mb-1"><strong>WhatsApp mobile no</strong></label>
        <input id="mobile_no" type="text" class="form-control" name="mobile_no">
    </div>
      <div class="form-group">
        <label class="mb-1"><strong>Location</strong></label>
        <input id="location" type="text" class="form-control" name="location">
    </div>
    <br>
      <div class="form-group">
        <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
        <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
      </div>
  </form>
</div>
