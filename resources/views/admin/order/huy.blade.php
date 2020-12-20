
@extends('layouts.ad')

@section('title', 'Order')

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
<p class="ds btn btn-secondary btn-lg btn-block">Danh Sách Đã Hủy</p>
<a href="admin/addorder"><button type="button" class="add btn btn-primary btn-sm">Đặt phòng</button></a>
<a href="admin/success"><button type="button" class="btn  btn-sm btn-success">Hoàn thành</button></a>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Tên</th>
    <th>Số ĐT</th>
    <th>Phòng</th>
    <th>Thời gian</th>
    <th>Số người</th>
    <th>Giá</th>
    <th>Edit/Del</th>

  </tr>
    <td>1</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>2</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>3</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>4</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>5</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>6</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>7</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>8</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>9</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

  </tr>
    <td>10</td>
    <td>Trần Văn Quý</td>
    <td>123456</td>
    <td>LK01</td>
    <td>10h00 25/12/2020 - 12h00 26/12/2020</td>
    <td>2</td>
    <td>3.500.000</td>
    <td>
      <a href="admin/order/edit/" class="fa fa-pencil-square-o"> / </a>
      <a href="admin/deleteorder" onclick="return confirm('Delete this Order?')" class="fa fa-trash"></a>
    </td>
  </tr>

</table>
</div>
@endsection