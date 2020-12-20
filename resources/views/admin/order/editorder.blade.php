
@extends('layouts.ad')

@section('title', 'Edit Order')

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
  <p class="ds btn btn-secondary btn-lg btn-block">Sửa Phòng Đã Đặt</p>
   <form  method="POST" action="{{url('admin/order/editd/1')}}" style="margin-bottom: 100px;margin-right: 60px;margin-left: 60px;">
            {{ csrf_field() }}
      <div class="form-group">
        <label for="formGroupExampleInput">Tên khách hàng</label>
        <input type="text" class="form-control" name="parent_id" required value="Trần Văn Quý">
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Số điện thoại</label>
        <input type="text" class="form-control" name="weight" required value="0989898989" >
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Ngày Check-in</label>
        <div>
           <input class="col-sm-2" type="time" id="timein" name="timein" min="00:00" max="23:00" required value="10:00">
           <input class="col-sm-10" type="date" class="form-control" id="Check-in" name="Check-in" value="2020-12-25">
        </div>
        
      </div>

       <div class="form-group">
        <label for="formGroupExampleInput2">Ngày Check-out</label>
         <div>
           <input class="col-sm-2" type="time" id="timeout" name="timeout" min="00:00" max="23:00" required value="12:00">
           <input class="col-sm-10" type="date" class="form-control" id="Check-out" name="Check-out" value="2020-12-26">
        </div>
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Phòng</label>
        <select class="form-control custom-select" size="3">
        <option >Phòng trống</option>
        <option value="101">101</option>
        <option value="102">102</option>
        <option value="103">103</option>
        <option selected value="105">105</option>
        <option value="112">112</option>
        <option value="203">203</option>
        <option value="204">204</option>
        <option value="211">211</option>
        <option value="302">302</option>
        <option value="305">305</option>
        <option value="312">312</option>
      </select>
      </div>
    
      <div class="form-group">
        <label for="formGroupExampleInput2">Số người</label></br>
        <select class="form-control custom-select custom-select-lg mb-3">
          <option select name="songuoi" id="songuoi"></option>
          <option value="1">1</option>
          <option selected value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>

      <div class="form-group">
        <label for="formGroupExampleInput2">Trạng thái</label>
        <select class="form-control custom-select custom-select-lg mb-3">
          <option select name="tthai" id="tthai"></option>
          <option selected value="1">Chưa xác nhận</option>
          <option value="2">Đã xác nhận</option>
        </select>
      </div>
      <button class="btn btn-primary" type="submit" name="save">LƯU</button>
      <a href="admin/order"><button class="btn btn-danger btn-sm" type="button" >HỦY</button></a>
    </form>
</div>
@endsection

