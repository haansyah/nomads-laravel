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
            <form method="POST" action="{{ route('register') }}">
              @csrf
              
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                name="name" 
                value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="username">Username</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" 
                name="username" 
                value="{{ old('username') }}" required autocomplete="username" autofocus>
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" 
                name="email" 
                value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input 
                id="password" 
                type="password" 
                class="form-control @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="new-password" 
                autofocus/>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input 
                id="password-confirm" 
                type="password" 
                class="form-control" 
                name="password_confirmation" 
                required 
                autocomplete="new-password" 
                autofocus/>
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <p class="mt-4">
                Have an Account?<a href="{{ route('login')}}">&nbsp;Click here</a>
              </p>

              <button type="submit" class="btn btn-warning btn-login btn-block">
                Register
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- END: Section login -->
@endsection
