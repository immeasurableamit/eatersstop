@extends('auth-admin.layouts.admin')
@section('content')
				<div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
					<h2 class="mb-3 me-auto">User > <?=(empty($user->full_name))?' ':ucwords($user->full_name)?></h2>
				</div>
				<div class="row">
          <div class="panel-body">
            <form action="{{ route('updateuser',['id'=>$user->id]) }}" method="POST" >
              @csrf
              <div class="input-group mb-3 input-warning-o">
              		<span class="input-group-text">Full Name</span>
                      <input type="text" name="full_name" class="form-control" placeholder="full name.." value="<?=$user->full_name?>">
              </div>
            <div class="input-group mb-3 input-warning-o">
                  <span class="input-group-text">Email</span>
                  <input id="email" type="text" class="form-control" name="email" value="<?=$user->email?>">
              </div>

							<div class="input-group mb-3 input-warning-o">
										<span class="input-group-text">Mobile No</span>
										<input id="mobile_no" type="text" class="form-control" name="mobile_no" value="<?=$user->mobile_no?>">
								</div>

								<div class="input-group mb-3 input-warning-o">
											<span class="input-group-text">City</span>
											<input id="city" type="text" class="form-control" name="city" value="<?=$user->city?>">
									</div>

									<div class="input-group mb-3 input-warning-o">
												<span class="input-group-text">Role</span>
												<select name="role_id" class="form-control nav-selector">
														<option value="">--- Select role ---</option>
														@foreach ($roles as $key => $value)
																<option value="{{ $key }}" {{($user->role_id)? 'selected':'' }}>{{ $value }}</option>
														@endforeach
												</select>

										</div>

										<div class="input-group mb-3 input-warning-o">
													<span class="input-group-text">Branch</span>
													<select name="restaurant_id" class="form-control nav-selector">
															<option value="">--- Select restaurant ---</option>
															@foreach ($address as $key => $value)
																	<option value="{{ $key }}" {{($user->restaurant_id)? 'selected':'' }}>{{ $value }}</option>
															@endforeach
													</select>

											</div>

                <div class="mb-3">
                  <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
                  <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
                </div>
            </form>
          </div>


				</div>
      @endsection
