@extends('layouts.app')
@section('title', 'Login')
@push('css')
<style>
 h1 {
            text-align: center;
            font-size: 25px;
            font-style: normal;
            line-height: 29.3px;
            font-family: arial;
        }

        h2 {
            text-align: center;
            font-size: 17px;
            line-height: 20px;
            font-style: normal;
            font-family: arial;
            font-weight: normal;
        }
        .btn-primary {
            width: 35%;
            background-color: #4FC9EC;
            border-color: white;
            border-radius: 10px;
            color: white;
        }
</style>
@endpush
@section('content')
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <img src="{{asset('image/pub/logo.png')}}" width="65px" height="40px" class="rounded mx-auto d-block my-3"></img>
                <div class="text-center">
                <h1>Login</h1>
                <h2>to continue to Monlis</h2>
                </div>
                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                        <div class="col-md-8 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-10 offset-md-1">
                        <div class="form-group row d-flex justify-content-center">
                            
                            
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link p-0 d-flex align-items-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-primary ml-auto">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
