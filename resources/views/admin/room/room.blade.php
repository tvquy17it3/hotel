
@extends('layouts.admin')

@section('title', 'Room')

@section('sidebar')
   <!--  <p>sidebar</p> -->
@endsection

@section('content')
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #32383e;
  color: white;
}

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
  <p class="ds btn btn-secondary btn-lg btn-block">Danh Sách Phòng</p>
  <a href="admin/addroom"><button type="button" class="add btn btn-primary btn-sm">Thêm phòng</button></a>

  <table id="customers">
    <tr>
      <th>ID</th>
      <th>Tên phòng</th>
      <th>Số phòng</th>
      <th>Loại phòng</th>
      <th>Số giường</th>
      <th>Kích thước phòng</th>
      <th>Giá</th>
      <th>Tình trạng</th>
      <th>Edit/Del</th>

    </tr>
    <tr>
      <td>1</td>
      <td>Deluxe 1</td>
      <td>106</td>
      <td>Vip</td>
      <td>2</td>
      <td>40m2</td>
      <td>3.500.000</td>
      <td>Còn trống</td>
      <td>
        <a href="admin/room/edit/" class="fa fa-pencil-square-o"> / </a>
        <a href="admin/deleteroom" onclick="return confirm('Delete this Room?')" class="fa fa-trash"></a>
      </td>
    </tr>

    <tr>
      <td>1</td>
      <td>Deluxe 1</td>
      <td>106</td>
      <td>Vip</td>
      <td>2</td>
      <td>40m2</td>
      <td>3.500.000</td>
      <td>Còn trống</td>
      <td>
        <a href="admin/room/edit/" class="fa fa-pencil-square-o"> / </a>
        <a href="admin/deleteroom" onclick="return confirm('Delete this Room?')" class="fa fa-trash"></a>
      </td>
    </tr>

    <tr>
      <td>1</td>
      <td>Deluxe 1</td>
      <td>106</td>
      <td>Vip</td>
      <td>2</td>
      <td>40m2</td>
      <td>3.500.000</td>
      <td>Còn trống</td>
      <td>
        <a href="admin/room/edit/" class="fa fa-pencil-square-o"> / </a>
        <a href="admin/deleteroom" onclick="return confirm('Delete this Room?')" class="fa fa-trash"></a>
      </td>
    </tr>


  </table>
</div>
@endsection