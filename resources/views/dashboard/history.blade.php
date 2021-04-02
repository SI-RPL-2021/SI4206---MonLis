@extends('dashboard.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">History</h1>
    <br>
    <hr>
    <div class="col-md-3">
        <label for="validationDefault04" class="form-label"></label>
        <select class="form-select" id="validationDefault04" required>
            <option selected disabled value="">Filter</option>
            <option>...</option>
            <option>...</option>
        </select>
    </div>
    <hr>
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-lg-10">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">History</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script src="js/demo/chart-area-demo.js"></script>
@endpush

@endsection