@extends('layouts.auth')

@section('content')

    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">خوش آمدید !</h1>
                        <p class="text-lead text-white">ایمیل و کلمه ی عبور خود را برای ورود به سیستم وارد کنید.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <div class="container mt--9 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border border-soft">
                    <div class="card-header px-lg-5 bg-transparent">
                        <h3 class="text-muted text-center my-2">ورود کاربر</h3>
                        @include('flash::message')
                    </div>
                    <div class="card-body px-lg-5 py-lg-5 pt-2">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input id="email" type="email" value="admin@email.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input id="password" type="password" value="secret" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin"  name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span>ذخیره اطلاعات ورود</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4">Login</button>
                            </div>
                            <div class="form-group mt-4 mb-0">
                                <div class="alert alert-info">
                                    Admin Email : admin@email.com , Password: secret
                                </div>
                                <div class="alert alert-info">
                                    User Email : user@email.com , Password: secret
                                </div>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>

@endsection
