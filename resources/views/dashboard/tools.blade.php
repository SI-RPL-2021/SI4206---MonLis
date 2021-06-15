@extends('dashboard.master')
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
    <h1 class="h3 mb-4 text-gray-800">Tools</h1>

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Electric meter that you have </h6>
                </div>
                <div class="col-6">
                    <a type="button" class="btn btn-primary" href="{{route('addtools')}}">+ add new tools</a>
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
                        <div class="col-md-8">{{$dev -> device_name}}
                        </div>
                        <div class="col-md-1">
                            <a type="button" href="{{route('editTools',$dev->id)}}" class="btn btn-info btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-edit"></i>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-1">
                            <form method="POST" action="{{route('deleteTools')}}">
                                @csrf
                                <input type="hidden" value="{{$dev->id}}" name="id">
                                <button type="submit" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection