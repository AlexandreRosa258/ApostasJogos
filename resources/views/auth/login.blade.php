@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/register/login.css">
</head>

<body>
    <div class="container">
      <div class="fixed-action-btn">
          <a class="red darken-2 btn-floating btn modal-trigger pulse tooltipped" data-tooltip="Create" data-position="left" href="{{route('register')}}"><i class="material-icons">add</i></a>
      </div>

        <div class="row container">
            <div class="card horizontal">
                {{-- <div class="card-image img">
                    <img class="logo" src="image/logo2.jpg">
                </div> --}}
                    <div class="card-stacked">
                        <div class="card-content">
                            <div class="row">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail</i>
                                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        <label for="email">Email</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock</i>
                                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="current-password" autofocus>
                                        <label for="email">Password</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                        @enderror


                                    </div>

                                    <a href="/" class="btn red"><i class="material-icons left">keyboard_return</i>Return</a>
                                    <button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Login
                                        <i class="material-icons left">send</i>
                                 </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</body>
</html>
@endsection
