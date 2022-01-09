@extends('layouts.app')

@section('login-content')
    <div class="container-float bg-primary bg-opacity-75">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('images/itislide-3.png') }}" alt="itirepairs" width="150px" height="500px">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>

                  <form class="row g-3" method="POST" action="{{ route('login') }}">
                  @csrf
                    <div class="col-12">
                      {{--<label for="email" class="form-label">{{ __('E-Mail Address') }}</label>--}}
                      <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="col-12">
                      {{--<label for="password" class="form-label">{{ __('Password') }}</label>--}}
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Your Password" autocomplete="current-password">
                      <small>
                      @if (Route::has('password.request'))
                        <a class="btn btn-link" style="font-size: 0.9em !important; padding-left: 0px; padding-top: 0px;" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                      </small>

                       @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">{{ __('Login') }}</button>
                    </div>
                    <hr>
                    <div class="col-12">
                      <div class="d-grid gap-2">
                      <a href="{{ route('login.google') }}" class="btn btn-danger btn-block w-100">
                        <i class="bi bi-google"></i>{{ __(' Signin with google') }}
                      </a>
                      </div>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credit">
                Designed by <a href="http://itirepairs.co.uk/">ITIrepairs</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
@endsection