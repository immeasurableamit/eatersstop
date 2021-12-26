@extends('layouts.default')

@section('content')


@php $total = 0 @endphp
@if(session('cart'))
    @foreach(session('cart') as $id => $details)
        @php $total += $details['price'] * $details['quantity'] @endphp
        
    @endforeach
@endif

<div class="our-services section-padding position-relative">
    <div class="container">
        <div class="row">
        
            <div class="col-lg-12">
                <div class="card checkout-card">
                   
                    <div class="card-body card-padding">
                        <div class="card-header">
                            <h4 class="card-title">Billing details</h4>
                        </div>
                        <div class="form-validation">
                            <form class="needs-validation" novalidate action="{{ route('checkout-order') }}" method="POST" id="cart-form">
                                @csrf
                                <div class="row">
                                  <?php
                                      foreach (session('cart') as $id => $value) {
                                            $menu_ids [] =$id;
                                            $menu_names [] = $value['name'];
                                            $quantity [] = $value['quantity'];
                                            $price [] = $value['price'];  
                                      }
                                      $menu_ids =json_encode($menu_ids);
                                      $manu_names = json_encode($menu_names);
                                      $menu_quantities = json_encode($quantity);
                                      $prices = json_encode($price);
                                  ?>
                                <input type="hidden" class="form-control" name="menu_names" value="{{ $manu_names }}">
                                <input type="hidden" class="form-control" name="menu_ids" value="{{ $menu_ids }}">
                                <input type="hidden" class="form-control" name="menu_quantities" value="{{ $menu_quantities }}">
                                <input type="hidden" class="form-control" name="total" value="{{ $total }}">
                                <input type="hidden" class="form-control" name="prices" value="{{ $prices }}">
                               
                               
                                    <div class="col-xl-6">
                                        <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">First Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom01"  placeholder="Enter a first name.." name="firstname" @error('firstname') is-invalid @enderror value="{{ old('firstname') }}">

                                                @error('firstname')
                                                    <span class="invalid-input">{{ $message }}</span>
                                                @enderror
                                               
                                            </div>
                                        </div>

                                          <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom01">Last Name
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom09"  placeholder="Enter a last name.." name="lastname"  @error('lastname') is-invalid @enderror value="{{ old('lastname') }}">
                                                @error('lastname')
                                                    <span class="invalid-input">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row form-fields">
                                            <label class="col-lg-4 col-form-label" for="validationCustom02">Email <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="validationCustom02"  placeholder="Your valid email.." name="email"  @error('email') is-invalid @enderror value="{{ old('email') }}">
                                              @error('email')
                                                    <span class="invalid-input">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">Phone
                                                <span class="text-danger"  >*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input class="form-control" id="phone"  @error('phone_number') is-invalid @enderror value="{{ old('phone_number') }}" name="phone_number" type="tel">
                                               @error('phone_number')
                                                    <span class="invalid-input">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">Street
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="street" id="validationCustom08" placeholder="Street"  @error('street') is-invalid @enderror value="{{ old('street') }}">
                                               @error('street')
                                                    <span class="invalid-input">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                         <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom08">Town
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="validationCustom08" placeholder="Town" name="town"  @error('town') is-invalid @enderror value="{{ old('town') }}">
                                               @error('town')
                                                    <span class="invalid-input">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-6">
                                        
                                       <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label" for="validationCustom04">Suggestions <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="validationCustom04"  rows="5" placeholder="What would you like to see?" name="suggestions"></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a Suggestions.
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="mb-3 form-fields row">
                                            <label class="col-lg-4 col-form-label"><a
                                                    href="javascript:void()">Terms &amp; Conditions</a> <span
                                                    class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="validationCustom12" required>
                                                  <label class="form-check-label" for="validationCustom12">
                                                    Agree to terms and conditions
                                                  </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 form-fields row">
                                            <div class="col-lg-8 ms-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="{{ asset('public/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('public/assets/js/intlTelInput.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var telInput = document.querySelector("#phone");
        window.intlTelInput(telInput, {
            hiddenInput: "full_number",
            initialCountry: "in",
            separateDialCode: true,
            utilsScript: "{{ asset('public/assets/js/utils.js') }}",
        });
 
    });
</script>
