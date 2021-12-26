
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Webdent Technologies.</title>

<!-- Custom style -->
<link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('public/admin/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet">
<link href="{{ asset('public/admin/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="#"><img src="assets/img/logo/eaters.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                     <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                               <div class="form-check custom-checkbox ms-1">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                                </div>
                                            </div>
                                            {{-- <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('public/admin/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('public/admin/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('public/admin/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('public/admin/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('public/admin/js/custom.min.js') }}"></script>
<script src="{{ asset('public/admin/js/deznav-init.js') }}"></script>
<script src="{{ asset('public/admin/js/demo.js') }}"></script>
<script src="{{ asset('public/admin/js/styleSwitcher.js') }}"></script>

</body>

</html>
