@extends('layouts.main')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Login</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="active">Pages</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-4">

            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                    <form action="{{ route('login') }}" id="frmSignIn" method="post" class="needs-validation shadow-sm p-3">
                    @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger ">*</span></label>
                                <input type="email" value="" class="form-control form-control-lg text-4 form-control @error('email') is-invalid @enderror" name = "email" value = "{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Password <span class="text-color-danger">*</span></label>
                                <input type="password" value="" class="form-control form-control-lg text-4  @error('password') is-invalid @enderror" name = "password" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="form-group col-md-auto">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-label custom-control-label cur-pointer text-2" for="rememberme">Remember Me</label>
                                </div>
                            </div>
                            <div class="form-group col-md-auto">
                                @if (Route::has('password.request'))
                                    <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2" href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading..."><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;SIGN IN</button>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="text-dark">OR</p>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a type="button" href="{{route('register')}}" class="btn btn-primary btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading..."><i class="fas fa-check"></i>&nbsp;&nbsp;SIGN UP</a>
                        </div>
                        
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <img src="{{asset('assets/img/loger.jpg')}}" class="img-responsive custom"/>
                </div>
              
            </div>

        </div>
    </div>
@endsection

