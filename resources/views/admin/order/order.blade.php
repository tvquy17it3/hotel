
@extends('layouts.admin')

@section('title', 'Order Status')

@section('css')
<style type="text/css">
table {
  width: 100%;
  border-collapse: collapse;
}
.tables{
  padding: 15px 1px 0 15px;
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
        Trạng thái
        <small>Đặt phòng</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Trạng thái {{$xacnhan}}</li>
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
      <p class="active bg-primary" style="padding: 10px">{{$status}}</p>
       <!--  Hang 2 contents -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="div1">
        <div class="table-wrapper div2">
          <div class="table-title">
              <div class="row">
                  <div class="col-sm-6">
                      <h2>Manage <b>Order</b></h2>
                  </div>
                  <div class="col-sm-6">
                    @if($xacnhan=="0")
                       <a href="admin/xacnhan" class="btn btn-success" data-toggle="modal"><span>Xem đã xác nhận</span></a>
                     @else
                       <a href="admin/order" class="btn btn-success" data-toggle="modal"><span>Xem chưa xác nhận</span></a>
                    @endif          
                  </div>
              </div>
          </div>
          <table class="table table-striped table-hover">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>SDT</th>
                    <th>people</th>
                    <th>checkIn</th>
                    <th>checkOut</th>
                    <th>created_at</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Xem / Hủy</th>
                  </tr>
              </thead>
              <tbody>
                <p hidden="">{{$valueT=0}}</p>
                  @foreach($orders as $value)
                  <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->cusName}}</td>
                    <td>{{$value->phone}}</td>
                    <td>{{$value->people}}</td>
                    <td>{{$value->checkIn}}</td>
                    <td>{{$value->checkOut}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{number_format($value->price)}} VND</td>
                    <td>{{$value->status}}</td>
                    <td>
                        <a href="admin/order/vieworder/{{$value->id}}" class="edit open-modal"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Xem"></i></a>
                        <!-- <a href="admin/order/delete/{{$value->id}}" class="delete" ><i class="fa fa-trash-o" title="Xóa" onclick="return confirm('Hủy đơn này?')"></i></a> -->
                        <a onclick="event.preventDefault();huyForms({{$value->id}});" href="#" class="delete" data-toggle="modal"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
      @include('admin.order.partials.deleteorder')
      <div class="active" style="margin-top: 0px;height: 50px;">
        {!! $orders->links() !!}
      </div>
      <!-- /.row (main row) -->
      <!--  /Hang 2 contents -->
    </section>

@endsection
@section('scripts')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/js/tasks.js"></script>
@endsection