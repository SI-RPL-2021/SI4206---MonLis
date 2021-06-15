@extends('dashboard.master')
@section('content')
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
    @endif
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login">
                            <br><br>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg" width="500px"
                                height="400px">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                            <form class="user" method="POST" action="{{route('editprofile',auth()->user()->id)}}">
                            @csrf
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">Nama</label>
                                        <input type="text" value="{{auth()->user()->name}}" class="form-control form-control-user" id="exampleInputName" name="nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">Email</label>
                                        <input type="text" value="{{auth()->user()->email}}" class="form-control form-control-user" id="exampleInputName" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">No hp</label>
                                        <input type="text" value="{{auth()->user()->nohp}}" class="form-control form-control-user" id="exampleInputName" name="nohp" required>
                                    </div>
                                    <button typee="submit" class="btn btn-primary btn-user btn-block">
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