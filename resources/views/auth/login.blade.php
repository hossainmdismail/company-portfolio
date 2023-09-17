@extends('backend.layouts.blank')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Synex Digital</h2>
       </div>
    </div>
    <div class="row justify-content-center">
       <div class="col-md-12 col-lg-10">
          <div class="row d-flex align-items-center rounded-xl overflow-hidden">
            <div class="col-12 col-md-6 px-0">
                <img src="https://images.pexels.com/photos/6347976/pexels-photo-6347976.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="w-100" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="login-wrap p-4 ml-4">
                    <div class="d-flex">
                       <div class="w-100">
                          <h3 class="mb-4">Sign In</h3>
                       </div>
                       {{-- <div class="w-100">
                          <p class="social-media d-flex justify-content-end">
                             <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                             <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                          </p>
                       </div> --}}
                    </div>
                    <form action="{{ route('login') }}" method="POST" class="signin-form">
                        @csrf
                       <div class="form-group mb-3">
                          <label class="label" for="name">Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                       </div>
                       <div class="form-group mb-3">
                          <label class="label" for="password">Password</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                       </div>
                       <div class="form-group">
                          <button type="submit" class="btn btn-primary rounded w-100">Sign In</button>
                       </div>
                       <div class="form-group d-md-flex">
                          <div class="w-50 text-left">
                             <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                             <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                             <span class="checkmark"></span>
                             </label>
                          </div>
                          <div class="w-50 text-md-right">
                             <a href="{{ route('password.request') }}">Forgot Password</a>
                          </div>
                       </div>
                    </form>
                 </div>
            </div>
          </div>
       </div>
    </div>
 </div>
@endsection
