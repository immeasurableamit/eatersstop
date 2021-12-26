@extends('layouts.default')

@section('content')


<div class="our-services section-padding position-relative">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-xl-7 col-lg-8 col-md-11">

                <div class="section-tittle text-center mb-70">
                    <h2>Best way to eat healthy food</h2>
                    
                </div>
            </div>
        </div>

        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <div class="row">
                                   
                                    <div class="col-sm-9">
                                        <h6 class="nomargin"> <img src="{{ asset('/public/uploads/menu/'.$id.'/'.$details['image']) }}" width="50" height="50" class="img-responsive"/> {{ $details['name'] }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">Ksh.{{ $details['price'] }}</td>
                            <td data-th="Quantity">
                                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                            </td>
                            <td data-th="Subtotal" class="text-center">Ksh. {{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart btn-cart"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5" class="text-right"><h3><strong>Total Ksh. {{ $total }}</strong></h3></td>
                </tr>
                <tr>
                    <td colspan="5" class="text-right">
                        <a href="{{ url('/') }}" class="btn btn-warning btn-cart"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                        <a href="{{ route('place-order') }}" class="btn btn-warning">Checkout</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
