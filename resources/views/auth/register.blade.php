@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/css/register/register.css">

<div class="container">
  <div class="col s12 m7">
      <div class="card horizontal">
        {{-- <div class="card-image">
          <img src="image/logo2.jpg">
        </div> --}}
        <div class="card-stacked">
          <div class="card-content">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person</i>
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_open</i>
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock</i>
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <a href="/" class="btn red"><i class="material-icons left">keyboard_return</i>Return</a>
                <button type="submit" class="btn waves-effect waves-light light-blue darken-4">
                    {{ __('Register') }}<i class="material-icons right">check</i>
                </button>

          </div>
        </div>
      </div>
    </div>

</div>



@endsection
