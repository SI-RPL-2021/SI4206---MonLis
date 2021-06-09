@extends('admin.master')
@section('content')
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif
    <h1 class="h3 mb-4 text-gray-800">List User</h1>

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">List User </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            @foreach($data_user as $data)
            <div class="card border-left-primary shadow h-100 mb-2 rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">User {{$loop->iteration}}
                        </div>
                        <div class="col-md-4">{{$data -> name}}
                        </div>
                        <div class="col-md-4">{{$data -> nohp}}
                        </div>
                        <div class="col-md-2">
                            <a type="button" href="{{route('userdevice',$data->id)}}"
                                class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
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