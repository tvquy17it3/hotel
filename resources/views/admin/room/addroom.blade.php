
@extends('layouts.admin')

@section('title', 'Thêm phòng')

@section('sidebar')
   <!--  <p>sidebar</p> -->
@endsection

@section('content')
<style>
.add {
  border: 1px solid blue;
  text-align: left;
}
.ds{
  border: none;
  color: blue;
  padding: 15px 32px;
  font-size: 25px;
}
</style>

<div class="container">
  <p class="ds btn btn-secondary btn-lg btn-block">Thêm Phòng</p>
   <form  method="POST" action="{{url('admin/storeroom')}}" enctype="multipart/form-data" style="margin-bottom: 100px;margin-right: 60px;margin-left: 60px;">
            {{ csrf_field() }}
        <div class="form-group">
          <label for="formGroupExampleInput">Mã phòng</label>
          <input type="text" class="form-control"   name="parent_id" required>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Tên phòng</label>
          <input type="text" class="form-control"   name="weight" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Số phòng</label>
          <input type="text" class="form-control"   name="weight" required>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Loại phòng</label></br>
          <select class="form-control custom-select custom-select-lg mb-3">
            <option select name="loai" id="loai"></option>
            <option selected value="Vip">Vip</option>
            <option value="Thường">Thường</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Giá tiền</label>
          <input type="text" class="form-control"   name="weight" required>
        </div>
    
        <div class="form-group">
          <label for="formGroupExampleInput2">Số giường</label></br>
          <select class="form-control custom-select custom-select-lg mb-3">
            <option select name="songuoi" id="songuoi"></option>
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Kích thước</label>
          <input type="text" class="form-control"   name="weight" required>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Trạng thái</label>
          <select class="form-control custom-select custom-select-lg mb-3">
            <option select name="tthai" id="tthai"></option>
            <option selected value="1">Còn trống</option>
            <option value="2">Đã đặt</option>
          </select>
        </div>

         <div class="form-group">
          <label for="formGroupExampleInput2">Chọn ảnh</label>
          <input type="file" name="file" class="form-control">
        </div>
              
       

        <button class="btn btn-primary" type="submit" name="save">THÊM NGAY</button>
        <a href="admin/room"><button class="btn btn-danger btn-sm" type="button" >HỦY </button></a>
    </form>
</div>
@endsection

