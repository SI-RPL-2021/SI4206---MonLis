@extends('dashboard.master')
@section('content')
<!-- End of Topbar -->
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @elseif($message = Session::get('danger'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login">
                            <br><br>
                            <img class="img-profile rounded-circle" src="image/tirex.png" width="500px" height="400px">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                            <form class="user" method="POST" action="{{route('userpassword',auth()->user()->id)}}">
                            @csrf
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-user" name="email"
                                            value= "{{auth()->user()->email}}" id="exampleInputEmail" read-only>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">Password</label>
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">New Password</label>
                                        <input type="password" class="form-control form-control-user" name="new_password"
                                            id="exampleInputPassword" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Save changes
                                    </button>
                                    <hr>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection