
@extends('layouts.admin')

@section('title', 'Edit Room')

@section('css')
 <style type="text/css">
.ds{
  border: none;
  color: blue;
  padding: 15px 32px;
  font-size: 25px;
}
 </style>
@endsection

@section('content')
<section class="content-header">
  <h1>
    Edit Room
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Edit Room</li>
  </ol>
</section>

<div class="container">
  <p class="ds btn btn-secondary btn-lg btn-block" style="font-size: 25px;">Sửa Phòng</p>
  <div>
    @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
    </div>    
    @endif
  </div>

  @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
  @endif
   <form  method="POST" action="{{url('admin/room/edit/' . $room->id)}}" style="margin-bottom: 100px;margin-right: 60px;margin-left: 60px;">
            {{ csrf_field() }}
        <div class="form-group">
          <label for="formGroupExampleInput2">Tên phòng</label>
          <input type="text" class="form-control"   name="name" required value="{{$room->name}}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Số phòng</label>
          <input type="text" class="form-control"   name="number" required value="{{$room->number}}">
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Loại phòng</label></br>
          <select class="form-control custom-select custom-select-lg mb-3" name="kindOfRooms" >
            <option selected value="{{$room->kindOfRooms}}">{{$room->kindOfRooms}}</option>
            <option value="1">1 - Vip</option>
            <option value="2">2 - Thường</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Giá tiền</label>
          <input type="text" class="form-control"   name="price" required value="{{$room->price}}">
        </div>
    
        <div class="form-group">
          <label for="formGroupExampleInput2">Số giường</label></br>
          <select class="form-control custom-select custom-select-lg mb-3" name="capacity">
            <option selected value="{{$room->capacity}}" >{{$room->capacity}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Trạng thái</label>
          <select class="form-control custom-select custom-select-lg mb-3" name="status">
            <option selected value="{{$room->status}}" >{{$room->status}}</option>
            <option value="0">0 - Còn trống</option>
            <option value="1">1 - Đã đặt</option>
          </select>
        </div>
              
      <button class="btn btn-primary" type="submit" name="save">LƯU</button>
      <a href="admin/room"><button class="btn btn-danger" type="button" >HỦY</button></a>
    </form>
    <form action="{{url('admin/room/edita/upload/' . $room->id)}}" method="POST" style="margin-bottom: 20px;margin-right: 60px;margin-left: 60px;" enctype="multipart/form-data">
        {{ csrf_field() }}
       <div class="form-group">
        <label for="formGroupExampleInput2">Link: 
           <a href="{{$room->img}}">{{$room->img}}</a></br>
           <img src="{{$room->img}}" style="height: 300px;width: 400px;">
        </label></br>
        <label for="formGroupExampleInput2">Thay ảnh</label>
        <input type="file" name="file" class="form-control" required="true">
        <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Tải lên</button>
      </div>
    </form>

</div>
@endsection

