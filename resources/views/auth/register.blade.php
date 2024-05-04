@extends('layouts.main')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Sign Up</h1>
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
                    <form  method="POST" action="{{ route('register') }}"  id="frmSignUp" class="needs-validation shadow-sm p-3">
                    @csrf
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">First Name <span class="text-color-danger ">*</span></label>
                                <input type="text" value="" class="form-control form-control-lg text-4 form-control @error('firstname') is-invalid @enderror" name = "firstname" value = "{{ old('firstname') }}" required autocomplete="email" autofocus>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Last Name <span class="text-color-danger ">*</span></label>
                                <input type="text" value="" class="form-control form-control-lg text-4 form-control @error('lastname') is-invalid @enderror" name = "lastname" value = "{{ old('lastname') }}" required autocomplete="email" autofocus>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Email Address <span class="text-color-danger ">*</span></label>
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
                                <label class="form-label text-color-dark text-3">Phone Number <span class="text-color-danger ">*</span></label>
                                <input type="text" value="" class="form-control form-control-lg text-4 form-control @error('phonenumber') is-invalid @enderror" name = "phonenumber" value = "{{ old('phonenumber') }}" required autofocus>
                                @error('phonenumber')
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
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col">
                                <label class="form-label text-color-dark text-3">Confirm Password <span class="text-color-danger">*</span></label>
                                <input type="password" value="" name="password_confirmation" class="form-control form-control-lg text-4  @error('password') is-invalid @enderror" name = "password" required autocomplete="current-password">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading..."><i class="fas fa-check"></i>&nbsp;&nbsp;Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <img src="{{asset('assets/img/signup-min.jpg')}}" class="img-responsive custom"/>
                </div>
            </div>

        </div>
    </div>
@endsection

