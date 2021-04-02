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
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login">
                            <br><br>
                            <img class="img-profile rounded-circle" src="image/tirex.png" width="500px" height="400px">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <form class="user">
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail">
                                    </div>
                                    <div class="form-group">
                                        <label for="validationCustom03" class="form-label">Password</label>
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword">
                                    </div>
                                    <a href="#" class="btn btn-primary btn-user btn-block">
                                        Save changes
                                    </a>
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