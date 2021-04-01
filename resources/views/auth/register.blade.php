@extends('layouts.app')
@section('title', 'Login')
@push('css')
<style>
.btn-primary {
width: 35%;
color: white;
background-color:#4FC9EC;
border-color: white;
border-radius: 10px;
}
</style>
@endpush
@section('content')
<div class="container pt-4">
    <div class="row ">
        <div class="col-md-5 offset-md-1">
        <div class="col">
                <div class="regis1">
                    <img src="{{asset('image/pub/tirex.png')}}" width="500px" height="380px" class="rounded mx-auto d-block">
                    <br>
                    <h1>Create your Monlis Account</h1>
                    <p>One stop solution to help you to monitoring you electric consumption</p>
                </div>
            </div>
        </div>
        <div class="col-md-5">
        <div class="regis">
        
            <div class="card shadow">
                <div class="card-body">
                <div class="container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group mb-3">
                            <label for="password-confirm" class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form group mb-3">
                            <label for="number" class="form-label">{{ __('No Hp') }}</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text @error('number') is-invalid @enderror" id="number">+62</span>
                                </div>
                                <input type="number" class="form-control" id="number" name="nohp">
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="text-right">
                                <button type="submit" class="btn btn-primary" style="">
                                    {{ __('Register') }}
                                </button>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
