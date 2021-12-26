@extends('auth-admin.layouts.admin')
@section('content')

<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="panel panel-primary">

			<div class="panel-body">

				<div class="col-md-12">

					<div class="alert alert-info">
					      <p>Browse for a csv file containing customers list to upload
					      <a class="btn btn-warning" href="{{ asset('public/sample001.csv') }}" target="_blank"><i class="fa fa-download" aria-hidden="true"></i> Download Sample CSV File</a>                        </p>
					</div>

					<div class="row">
						<div class="col-lg-6">
              <form action="{{ route('uploadcsv') }}"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="mb-1"><strong>File</strong></label>
                  <input id="file" type="file" class="form-control" name="file" required="*">
              </div>
							<br>
              <div class="form-group">
								<a class="btn btn-warning pull-left" href="{{ route('customers') }}"><i class="fa fa-angle-left" aria-hidden="true"></i> Customers</a>

                <button type="submit" class="btn btn-primary ml-4 pull-right">Upload</button>
            </div>
          </form>
						</div>

						<style>
						.samplecsv {
							width: 100%;
						}
						</style>

						<div class="col-lg-6">
							<div class="box-body">
                <img src="{{ asset('public/sample01.JPG') }}"/>
                </div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>

  {{-- <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
    <h2 class="mb-3 me-auto">Upload bulk customers</h2>
    <div>

    </div>
    	<div class="row">
        <form action="{{ route('uploadcsv') }}"method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="mb-1"><strong>File</strong></label>
            <input id="file" type="file" class="form-control" name="file" required="*">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary ml-4 pull-right">Upload</button>

      </div>
    </form>

      </div>
  </div> --}}
@endsection
