@extends('dashboard.master')
@section('content')
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Buttons</h1>

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Electric meter that you have </h6>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary">+ add new tools</button>
                </div>
            </div>
        </div>
        <div class="card-body">
        @foreach($user_device as $dev)
            <div class="card border-left-primary shadow h-100 mb-2 rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">Tools {{$loop->iteration}}
                        </div>
                        <div class="col-md-9">{{$dev -> device_name}}
                        </div>
                        <div class="col-md-1">
                            <a href="#" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection