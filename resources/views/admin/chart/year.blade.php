
@extends('layouts.admin')

@section('title', 'Admin Room')

@section('css')
<style>
.tables{
    padding: 15px 1px 0 15px;
}
table {
  width: 100%;
  border-collapse: collapse;
}
.div1 {
  display: table;
  table-layout: fixed;
  width: 100%;
}

.div2 {
  display: table-cell;
  overflow-x: auto;
  width: 100%;
}
</style>
 <link rel="stylesheet" href="public/css/table.css">
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Rooms</li>
      </ol>
    </section>
  <!-- /.content-wrapper -->

     <!-- Main content -->
    <section class="content">


       <!--  Hang 2 contents -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="div1">
        <div class="table-wrapper div2">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Doanh Thu <b>Hotel</b></h2>
                    </div>
                      <div class="col-sm-6">
                        <a  href="admin/week" class="btn btn-success" data-toggle="modal"><span>Các ngày trong tuần</span></a>                       
                    </div>
                </div>
            </div>
            <div class="container">
                        <canvas id="myChart"></canvas>
                    </div>
        </div>
      </div>
      
     
      <!-- /.row (main row) -->
      <!--  /Hang 2 contents -->
    </section>

@endsection

@section('scripts')
<script src="public/js/chart.min.js"></script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 12'],
        datasets: [{
            label: '#Doanh Thu',
            data: [19, 18, 15, 20,19 , 26, 30],
            backgroundColor: [
                '#80ff00',
                '#00ffbf',
                '#0040ff',
                '#bf00ff',
                '#ff00bf',
                '#ffbf00',
                '#ff0000'
            ],
            borderColor: [
                '#40ff00',
                'rgba(54, 162, 235, 1)',
                '#0080ff',
                '#8000ff',
                '#8000ff',
                '#ff8000',
                '#ff4000'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection