@extends('layouts.login')

@section('content')
<!-- START: Section login -->
<main class="login-container">
  <div class="container">
    <div class="row page-login d-flex align-items-center">
      <div class="section-left col-12 col-md-6">
        <h1 class="mb-4">We explorer the new <br/>life much better</h1>
        <img src="{{url('./frontend/images/mini_gallery.png')}}" alt="" class="w-75 d-none d-sm-flex pb-4">
      </div>
      <div class="section-right col-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <img src="{{ url('./frontend/images/logo.png')}}" alt="" class="w-50 mb-4">
            </div>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              
              <div class="form-group">
                <label for="email">Email Address</label>
                <input 
                  id="email"    
                  type="email"
                  class="form-control @error('email') is-invalid @enderror"
                  name="email"
                  value="{{ old('email') }}" 
                  autocomplete="email"
                  autofocus
                  />
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input 
                      id="password" 
                      type="password" 
                      class="form-control @error('password') is-invalid @enderror" name="password" 
                      required 
                      autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>

              <p class="mt-4" style="color: #bebebe">
                Don't have any account?<a href="{{ route('register')}}">&nbsp;Click here</a>
              </p>

              <div class="form-group form-check">
                  <input 
                    class="form-check-input" 
                    type="checkbox" 
                    name="remember" 
                    id="remember" {{ old('remember') ? 'checked' : '' }}
                  />

                  <label class="form-check-label" for="remember">Remember Me</label>
                  
              </div>

              <button type="submit" class="btn btn-warning btn-login btn-block">
                Sign In
              </button>

              @if (Route::has('password.request'))
                  
              @endif
              <p class="text-center mt-4" style="color: #bebebe">
                Forgot your password?<a href="{{ route('password.request') }}">&nbsp;Click here</a>
              </p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- END: Section login -->
@endsection
