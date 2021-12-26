@extends('auth-admin.layouts.admin')
@section('content')
    <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
        <h2 class="mb-3 me-auto">Customers</h2>
        <div>

        </div>
    </div>
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <div class="customer-search mb-sm-0 mb-3">
            <form role="form" action="" id="update_role" method="get" enctype="multipart/form-data">
            <div class="input-group search-area">
                <input type="text" class="form-control" name="keyword" placeholder="Search here......">
                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
            </div>
            </form>
        </div>

        @if (request('keyword'))
        <div class="d-flex ml-4">
            <button onclick="window.location.href='{{ route('customers') }}'"
                class="btn btn-primary btn-rounded ml-2" type="button">Reset Filters</button>
        </div>

    @endif

        <div class="d-flex align-items-center flex-wrap">
            <a href="{{ route('import') }}" class="btn btn-primary btn-rounded me-3 mb-2"><i
                    class="fas fa-user-friends me-2"></i>+ Bulk Upload Customers</a>
            <button class="btn btn-primary btn-rounded me-3 mb-2" id="new-customer" value="{{ route('addcustomer') }}"><i
                    class="fas fa-user-friends me-2"></i>+ Add New Customer</button>
            <a href="javascript:void(0);" class="btn bg-white btn-rounded me-2 mb-2 text-black shadow-sm"><i
                    class="fas fa-calendar-times me-3 scale3 text-primary"></i>Filter<i
                    class="fas fa-chevron-down ms-3 text-primary"></i></a>
            <a href="javascript:void(0);" class="btn btn-secondary btn-rounded mb-2"><i class="fas fa-sync"></i></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table display mb-4 dataTablesCard order-table shadow-hover  card-table text-black"
                    id="example7">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check ms-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                    <label class="form-check-label" for="checkAll">
                                    </label>
                                </div>
                            </th>
                            <th>Customer ID</th>
                            <th>Join Date</th>
                            <th>Customer Name</th>
                            <th>Mobile No.</th>
                            <th>Location</th>
                            <th>Total Spent</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $key => $value)
                            <tr>
                                <td class="tbl-bx">
                                    <div class="form-check ms-2">
                                        <input class="form-check-input" type="checkbox" value="" id="customCheckBox1">
                                        <label class="form-check-label" for="customCheckBox1">
                                        </label>
                                    </div>
                                </td>
                                <td><?= $customers[$key]['id'] ?></td>
                                <td class="wspace-no">
                                    <?= date('d M Y,h:i A', strtotime($customers[$key]['created_at'])) ?></td>
                                <td><?= $customers[$key]['full_name'] ?></td>
                                <td><?= $customers[$key]['mobile_no'] ?></td>
                                <td class="text-ov"><?= $customers[$key]['location'] ?></td>
                                <td><span class="btn bgl-danger text-danger btn-rounded btn-sm">$<?php echo App\Models\Orders::customersExpenditure($customers[$key]['id']); ?></span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="modal-new-customer" style="display:none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bg-light-blue">
                <h4 class="modal-title">New Customer</h4>
            </div>
            <div class="modal-body modal-md" role="document" id="new-customer-details">
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(function() {
        $('#new-customer').click(function() {
            $('#modal-new-customer').modal('show')
                .find('#new-customer-details')
                .load($(this).attr('value'));
        });
    });
</script>
