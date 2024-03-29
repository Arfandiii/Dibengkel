 @extends('layouts.form-layout')

 @section('content')
     <!-- Outer Row -->
     <div class="row justify-content-center">
         <div class="col-xl-6 col-lg-6 col-md-6">
             <div class="card o-hidden border-0 shadow-lg my-5">
                 @if (session('success'))
                     <div class="alert alert-success my-0" role="alert">
                         {{ session('success') }}
                     </div>
                 @endif
                 @if (session('loginError'))
                     <div class="alert alert-danger my-0" role="alert">
                         {{ session('loginError') }}
                     </div>
                 @endif
                 <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="p-5">
                                 <div class="text-center">
                                     <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                 </div>
                                 <form class="user" action="{{ route('login.post') }}" method="POST">
                                     @csrf
                                     <div class="form-group">
                                         <input type="email"
                                             class="form-control form-control-user @error('email') is-invalid @enderror"
                                             id="email" aria-describedby="emailHelp" name="email"
                                             placeholder="Enter Email Address..." required value="{{ old('email') }}">
                                         @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                     </div>
                                     <div class="form-group">
                                         <input name="password" type="password" class="form-control form-control-user"
                                             id="password" placeholder="Password" required>
                                     </div>
                                     <div class="form-group">
                                         <div class="custom-control custom-checkbox small">
                                             <input type="checkbox" class="custom-control-input" id="customCheck">
                                             <label class="custom-control-label" for="customCheck">Remember
                                                 Me</label>
                                         </div>
                                     </div>
                                     <button type="submit" class="btn btn-primary btn-user btn-block">
                                         Login
                                     </button>
                                     <hr>
                                     <a href="/" class="btn btn-google btn-user btn-block">
                                         <i class="fab fa-google fa-fw"></i> Login with Google
                                     </a>
                                     <a href="/" class="btn btn-facebook btn-user btn-block">
                                         <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                     </a>
                                 </form>
                                 <hr>
                                 <div class="text-center">
                                     <a class="small" href="/forgot-password">Forgot Password?</a>
                                 </div>
                                 <div class="text-center">
                                     <a class="small" href="/register">Create an Account!</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
