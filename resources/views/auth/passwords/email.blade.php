@extends('layouts.main')

@section('content')
    <div role="main" class="main">
        <section class="page-header page-header-modern bg-color-grey page-header-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-dark">Forgot Password</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="#">Home</a></li>
                            <li class="active">Forgot Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-4">
           
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                    <form action="{{ route('password.email') }}" method="POST" class="needs-validation shadow-sm p-3 mt-5">
                    @csrf
                        <div class="row">
                            <div class="form-group col">
                                 <x-auth-session-status class="mb-4" :status="session('status')" />
                                <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger ">*</span></label>
                                <input type="email" value="" class="form-control form-control-lg text-4 form-control @error('email') is-invalid @enderror" name = "email" value = "{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <p class="text-danger">{{ $message }}</p>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="form-group col">
                                <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading..."><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Email Password Reset Link</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <img src="{{asset('assets/img/forgot-password.jpg')}}" class="img-responsive custom"/>
                </div>
              
            </div>

        </div>
    </div>
@endsection






