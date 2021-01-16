
@extends('layouts.admin')

@section('title', 'Thêm phòng')

@section('css')
 <style type="text/css">
  .ds{
    border: none;
    color: blue;
    padding: 15px 32px;
    
  }
 </style>
@endsection

@section('content')

<section class="content-header">
  <h1>
    Add Room
    <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Admin</a></li>
    <li class="active">Add Room</li>
  </ol>
</section>

<div class="container">
  <p class="ds btn btn-secondary btn-lg btn-block" style="font-size: 25px;">Thêm Phòng</p>
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
            <div class="alert alert-success content-header">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
          @endif
   <form  method="POST" action="{{url('admin/room/addroom')}}" enctype="multipart/form-data" style="margin-bottom: 100px;margin-right: 60px;margin-left: 60px;">
            {{ csrf_field() }}

        <div class="form-group">
          <label for="formGroupExampleInput2">Tên phòng</label>
          <input type="text" class="form-control"   name="name" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Số phòng</label>
          <input type="text" class="form-control"   name="number" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Loại phòng</label></br>
          <select class="form-control custom-select custom-select-lg mb-3" name="kindOfRooms" >
            <option selected value="1">Vip</option>
            <option value="2">Thường</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Giá tiền</label>
          <input type="text" class="form-control"   name="price" required>
        </div>
    
        <div class="form-group">
          <label for="formGroupExampleInput2">Số giường</label></br>
          <select class="form-control custom-select custom-select-lg mb-3" name="capacity">
            <option select  id="songuoi"></option>
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Trạng thái</label>
          <select class="form-control custom-select custom-select-lg mb-3" name="status">
            <option select  id="tthai"></option>
            <option selected value="0">Còn trống</option>
            <option value="1">Đã đặt</option>
          </select>
        </div>

         <div class="form-group">
          <label for="formGroupExampleInput2">Chọn ảnh</label>
          <input type="file" name="file" class="form-control" required>
        </div>

        <button class="btn btn-primary" type="submit" name="save">THÊM NGAY</button>
        <a href="admin/room"><button class="btn btn-danger btn-sm" type="button" >HỦY </button></a>
    </form>
</div>
@endsection

<!-- SELECT `id`, `name`, `img`, `number`, `kindOfRooms`, `price`, `capacity`, `status`, `created_at`, `updated_at` FROM `rooms` WHERE 1 -->