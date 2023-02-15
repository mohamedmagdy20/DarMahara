@extends('layouts.auth')
@section('auth_content')

<div class="bg-overlay"></div>
<div class="wrapper-page">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-body">

                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="index.html" class="auth-logo">
                            <img src="{{ asset('assets/images/logo.webp') }}" height="60" class="logo-dark mx-auto" alt="">
                            <img src="{{ asset('assets/images/logo.webp') }}" height="60" class="logo-light mx-auto" alt="">
                        </a>
                    </div>
                </div>

                <h4 class="text-muted text-center font-size-18"><b>Admin Login</b></h4>
                <div class="p-3">


<form class="form-horizontal mt-3" method="POST" action="{{ route('login') }}">
    @csrf

<div class="form-group mb-3 row">
    <div class="col-12">
        <input class="form-control" id="email" name="email" type="email" required="" placeholder="Email">
    </div>
</div>

<div class="form-group mb-3 row">
    <div class="col-12">
        <input class="form-control" id="password" name="password" type="password" required="" placeholder="Password">
    </div>
</div>

<div class="form-group mb-3 row">
    <div class="col-12">
        <div class="custom-control custom-checkbox">
            
            
        </div>
    </div>
</div>

<div class="form-group mb-3 text-center row mt-3 pt-1">
    <div class="col-12">
        <button class="btn btn-info w-100 waves-effect waves-light text-white" type="submit">Log In</button>
    </div>
</div>

<div class="form-group mb-0 row mt-2">
    <div class="col-sm-7 mt-3">
        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
    </div>
    <div class="col-sm-5 mt-3">
        <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
    </div>
</div>
</form>
                </div>
                <!-- end -->
            </div>
            <!-- end cardbody -->
        </div>
        <!-- end card -->
    </div>
    <!-- end container -->
</div>
<!-- end -->

@endsection
   