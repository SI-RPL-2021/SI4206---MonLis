@extends('dashboard.master')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">History</h1>
    <br>
    <hr class="m-0">
    <div class="row d-flex align-items-center">
      <div class="col-md-10">
        <div class="dropdown">
            <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-filter fa-2x"></i> 
            </button>
            @if(request()->filter == null)
            FILTER
            @endif
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item"
                    href='{{route("history",["sort"=> request()->sort,"filter"=>"averages"])}}'>Average</a>
            @if(request()->sort == "month")
            <a class="dropdown-item"
                    href='{{route("history",["sort"=> request()->sort,"test"=>"test"])}}'>test</a>
            @endif
            </div>
            @if(request()->filter != null)
            <button class="btn btn-secondary">Average Typically<a type="button" href ='{{route("history",["sort"=> request()->sort,"filter"=>NULL])}}' class="btn-close" style="height:0em;"></a></button>
            @endif
            @if(request()->test != null)
            <button class="btn btn-secondary">Average 3 Period<a type="button" href ='{{route("history",["sort"=> request()->sort,"filter"=>NULL])}}' class="btn-close" style="height:0em;"></a></button>
            @endif
        </div>
      </div>
      
      <div class="col-md-2" style="border-left: 2px solid #e3e6f0;height: calc(6.375rem - 2rem);padding: 20px 0px 0px 10px">
        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false"><span class="caret font-weight-bold text-gray-900 "
                style="color:black">{{$dropdown_item}}</span>
            <!-- <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <div class="dropdown-header">Sort By:</div>
            <a class="dropdown-item" href="{{route('history',['sort'=>'hours','filter'=>request()->filter])}}">Hours</a>
            <a class="dropdown-item" href="{{route('history',['filter'=>request()->filter])}}">Days</a>
            <a class="dropdown-item" href="{{route('history',['sort'=>'week','filter'=>request()->filter])}}">Weeks</a>
            <a class="dropdown-item" href="{{route('history',['sort'=>'month','filter'=>request()->filter])}}">Months</a>
        </div>
      </div>
    </div>
    <hr class="m-0 mb-3">
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
                    <div class="mt-4 small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Current
                        </span>
                    </div>
                    @if(request()->filter != null)
                    <div class="mt-4 small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-danger"></i> Typically Average
                        </span>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
    @push('js')
    @if(request()->test != NULL)
<canvas id="myChart" width="400" height="400"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.0.1/chartjs-plugin-annotation.min.js"></script>

<script>
const options = {
  maintainAspectRatio: false,
  plugins: {
    autocolors: false,
    annotation: {
      annotations: {
        line1: {
          type: 'line',
          yMin: {!!json_encode($avg_year)!!},
          yMax: {!!json_encode($avg_year)!!},
          borderColor: 'rgb(255, 99, 132)',
          borderWidth: 2,
        }
      }
    }
  }
};
const config = {
  type: 'line',
  data: {
    labels:{!!json_encode($tanggal)!!},
    datasets: [{
      label: 'My First Dataset',
      data: {!!json_encode($pemakaian)!!},
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
    }]
  },
  options
};
var ctx = document.getElementById("myAreaChart");


var myChart = new Chart(ctx,config);



</script>
@else
    <script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.fonts = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.color = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: {!!json_encode($tanggal)!!},
    datasets: [{
      label: "Pemakaian",
      lineTension: 0.3,
      backgroundColor: "rgba(79, 201, 236, 0.05)",
      borderColor: "rgba(79, 201, 236, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(79, 201, 236, 1)",
      pointBorderColor: "rgba(79, 201, 236, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(79, 201, 236, 1)",
      pointHoverBorderColor: "rgba(79, 201, 236, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: {!!json_encode($pemakaian)!!},
    },{
      label: "Pemakaian_sebelum",
      lineTension: 0.3,
      backgroundColor: "rgba(222, 68, 68, 0.05)",
      borderColor: "rgba(222, 68, 68, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(222, 68, 68, 1)",
      pointBorderColor: "rgba(222, 68, 68, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(222, 68, 68, 1)",
      pointHoverBorderColor: "rgba(222, 68, 68, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: {!!json_encode($pemakaian_sebelum)!!},
    }],
  },
  options: { 
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value)+ 'kWh';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false,
     
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + tooltipItem.yLabel + ' kWh';
        }
      }
    }
  }
});

</script>

@endif
@endpush 
@endsection