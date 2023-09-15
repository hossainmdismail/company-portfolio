@extends('backend.layouts.blank')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Login #04</h2>
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
                       <div class="w-100">
                          <p class="social-media d-flex justify-content-end">
                             <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                             <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                          </p>
                       </div>
                    </div>
                    <form action="#" class="signin-form">
                       <div class="form-group mb-3">
                          <label class="label" for="name">Username</label>
                          <input type="text" class="form-control" placeholder="Username" required="">
                       </div>
                       <div class="form-group mb-3">
                          <label class="label" for="password">Password</label>
                          <input type="password" class="form-control" placeholder="Password" required="">
                       </div>
                       <div class="form-group">
                          <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                       </div>
                       <div class="form-group d-md-flex">
                          <div class="w-50 text-left">
                             <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                             <input type="checkbox" checked="">
                             <span class="checkmark"></span>
                             </label>
                          </div>
                          <div class="w-50 text-md-right">
                             <a href="#">Forgot Password</a>
                          </div>
                       </div>
                    </form>
                    <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                 </div>
            </div>
          </div>
       </div>
    </div>
 </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
