@extends('dashboard.master')
@section('content')
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Tools</h1>

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-6">
                    <h6 class="m-0 font-weight-bold text-primary">Electric meter that you have </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('editToolsData',$device->id)}}">
                @csrf
                
                <div class="mb-3 row">
                    <label for="devicename" class="col-sm-2 col-form-label">Device ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="devicename" name="device_id"
                            value="{{$device->device_id}}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="devicename" class="col-sm-2 col-form-label">Device Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="devicename" name="device_name"
                            value="{{$device->device_name}}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="version" class="col-sm-2 col-form-label">Device Version</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="version" name="device_version"
                            value="{{$device->device_version}}" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="description" name="deskripsi"
                            value="{{$device->deskripsi}}" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block"> Save changes </button>

            </form>
        </div>
    </div>
</div>
@endsection 