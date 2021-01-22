@extends('layouts.admin')

@section('title', 'Admin')

@section('css')
<style type="text/css">
table {
    width: 100%;
    border-collapse: collapse;
}

.tables {
    padding: 15px 1px 0 15px;
}

.div1 {
    display: table;
    table-layout: fixed;
    width: 100%;
    margin-bottom: 10px;
    margin-top: 10px;
}

.div2 {
    display: table-cell;
    overflow-x: auto;
    width: 100%;
}

@media only screen and (max-width: 768px) {
    .hid {
        display: none;
    }
}
</style>
<link rel="stylesheet" href="public/css/table.css">
@endsection

@section('content')

<section class="content-header">
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>
<!-- /.content-wrapper -->

<!-- Main content -->
<section class="content">

    <!-- Small boxes (Stat box)4 cai tren -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$collection}}</h3>
                    <p>Tổng số đặt phòng</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="admin/allorder" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$hoanthanh}}<sup style="font-size: 20px"></sup></h3>
                    <p>Hoàn thành</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="admin/success" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$daxacnhan}}</h3>
                    <p>Đã xác nhận</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="admin/xacnhan" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{$chuaxacnhan}}</h3>

                    <p>Chưa xác nhận</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="admin/order" class="small-box-footer">Xem thêm <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col 4 cai tren-->
    </div>

    <!--  Hang 2 contents -->
    <!-- /.row -->
    <!-- Main row -->
    <div class="table-wrapper ">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Room Orders</b></h2>
                </div>
                <div class="col-sm-6" data-toggle="modal">
                    <form action="{{url('admin/postTable')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="row" style="margin: 5px 0 0;">
                            <p class="col-sm-6"></p>
                            <input class="col-sm-5" type="date" class="form-control" id="dateS" name="dateS"
                                value="{{$dateS}}" style="color: black;border-radius: 5px 5px 5px 5px;">
                            <button type="submit" class="col-sm-1" style="background: #39a8dd; color: white;">OK
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 15px">
            <ul class="list-group list-group-horizontal">
                @foreach($table as $value)
                @if($colorss==1)
                <!-- <div class="row"> -->
                <a href="admin/order/vieworder/{{$value->orderID}}">
                    <li class="list-group-item col-sm-3"
                        style="margin: 0px 5px 5px 0px; background:#dd4b39;color: #f9f9f9;">
                        @else

                    <li class="list-group-item col-sm-3" style="margin: 0px 5px 5px 0px; ">
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{$value->img}}" style="width: 100%;height: 100%;" class="hid" />
                            </div>
                            <div class="col-md-6">
                                <p>Phòng: {{$value->number}} - {{$value->name}}</p>
                                <p class="hid">Số lượng: {{$value->qty}}</p>
                                <p>Giá: {{number_format($value->price)}} vnđ/1 phòng</p>
                            </div>
                        </div>
                    </li>
                </a>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /.row (main row) -->
    <!--  /Hang 2 contents -->

</section>

@endsection