@extends('admin.master')
@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <h1 class="h3 mb-4 text-gray-800">Welcome, Admin!</h1>

    <div class="row">

        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$data_user}}</h5>
                    <p class="card-text">Jumlah Pengguna</p>
                    <a href="{{route('listuser')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">{{$data_device}}</h5>
                    <p class="card-text">Jumlah Device Yang Terdaftar</p>
                    <a href="{{route('listdevice')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>


    </div>
    @endsection