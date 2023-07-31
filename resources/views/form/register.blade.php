@extends('layouts.form-layout')

@section('content')
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" action="{{ route('register.post') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input name="firstName" type="text" class="form-control form-control-user"
                                                id="firstName" placeholder="First Name" required
                                                value="{{ old('firstName') }}">
                                        </div>
                                        <div class="col-sm-6">
                                            <input name="lastName" type="text" class="form-control form-control-user"
                                                id="lastName" placeholder="Last Name" required
                                                value="{{ old('lastName') }}"s>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            id="email" placeholder="Email Address" required value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input name="password" type="password"
                                                class="form-control form-control-user  @error('password') is-invalid @enderror"
                                                id="inputPassword" placeholder="Password" required
                                                autocomplete="current-password">

                                        </div>
                                        <div class="col-sm-6">
                                            <input name="password_confirmation" type="password"
                                                class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="password_confirmation" placeholder="Repeat Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Register with Google
                                    </a>
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="/forgot-password">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/login">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
