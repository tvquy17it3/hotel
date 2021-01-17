
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
                        <h2>Manage <b>Food</b></h2>
                    </div>
                      <div class="col-sm-6">
                        <a  href="admin/addroom" class="btn btn-success" data-toggle="modal"><span>Thêm phòng</span></a>                       
                    </div>

                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th>Số phòng</th>
                      <th>Tên</th>
                      <th>Hình ảnh</th>
                      <th>Giá</th>
                      <th>Loại phòng</th>
                      <th>Capacity</th>
                      <th>Tình trạng</th>
                      <th>Ngày tạo</th>
                      <th>Edit/Del</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($room as $value)
                    <tr>
                      <td>{{$value->number}}</td>
                      <td>{{$value->name}}</td>
                      <td>
                        <a href="{{$value->img}}">
                          <img src="{{$value->img}}" alt="..." style="height: 60px;width: 80px;"></a>

                      </td>
                      <td>{{number_format($value->price)}}vnd</td>
                      <td>{{$value->kindOfRooms}}</td>
                      <td>{{$value->capacity}}</td>
                      <td>{{$value->status}}</td>
                      <td>{{$value->created_at}}</td>
                      <td>
                        <a href="admin/room/edit/{{$value->id}}" class="edit open-modal" ><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit"></i></a>
                        <a href="admin/room/delete/{{$value->id}}" onclick="return confirm('Delete Room?')" class="delete"><i class="fa fa-trash-o" data-toggle="tooltip" title="Delete"></i></a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
      <div class="active" style="margin-top: 0px;height: 50px;">
        {!! $room->links() !!}
      </div>
    
      <!-- /.row (main row) -->
      <!--  /Hang 2 contents -->
    </section>

@endsection

<!-- SELECT `id`, `name`, `img`, `number`, `kindOfRooms`, `price`, `capacity`, `status`, `created_at`, `updated_at` FROM `rooms` WHERE 1 -->