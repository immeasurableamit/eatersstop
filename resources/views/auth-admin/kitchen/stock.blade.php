
<div class="panel-body">
  <form action="{{ route('store-kitchen-assignment') }}" method="POST">
    @csrf
      <div class="form-group">
        <label class="mb-1"><strong>Item Name</strong></label>
        <input id="name" type="text" class="form-control" name="name" value="{{ $kitchen_items->name }}">
    </div>
    <br>
    <div class="form-group">
        <label class="mb-1"><strong>Available Quantity</strong></label>
        <input id="available_quantity" type="text" class="form-control" name="available_quantity" value="{{ $kitchen_items->quantity }}" >
    </div>
    <br>
    <div class="form-group">
        <label class="mb-1"><strong>Metric Unit</strong></label>
        <input id="metric_unit" type="text" class="form-control" name="metric_unit" value="{{ $kitchen_items->metric_unit }}" >
    </div>
      <br>
      <div class="form-group">
        <label class="mb-1"><strong>Category</strong></label>
        <input id="category" type="text" class="form-control" name="category" value="{{ $kitchen_items->category }}" >
    </div>

      <div class="form-group" style="display:none">
        <label class="mb-1"><strong>Item ID</strong></label>
        <input id="kitchen_item_id" type="hidden" class="form-control" name="kitchen_item_id" value="{{ $kitchen_items->id }}">
    </div>
    <br>
    <div class="form-group">
      <label class="mb-1"><strong>Assign Quantity</strong></label>
      <input id="quantity" type="text" class="form-control" name="quantity" autofocus>
  </div>
    <br>
      <div class="form-group">
        <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
        <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
      </div>
  </form>
</div>
