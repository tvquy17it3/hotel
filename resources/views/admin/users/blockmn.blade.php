
@extends('layouts.admin')

@section('title', 'Accounts')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <li class="active">Dashboard</li>
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
                        <h2>Manage <b>Accounts Blocks</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Số ĐT</th>
                      <th>Ngày tạo</th>
                      <th>Updated</th>
                      <th>Position</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($accounts as $value)
                    <tr>
                      <td>{{$value->id}}</td>
                      <td>{{$value->name}}</td>
                      <td>{{$value->email}}</td>
                      <td>{{$value->phone}}</td>
                      <td>{{$value->created_at}}</td>
                      <td>{{$value->updated_at}}</td>
                      <td>
                        <form action="{{url('admin/account/position')}}" method="POST">
                          {{ csrf_field() }}
                          <input type="" name="id" hidden value="{{$value->id}}">
                          <select name="role" class="bg-green">
                            <option value="2">2 - Manager</option>
                          </select>
                          <button type="submit" class="bg-primary small">CẬP NHẬT</button>
                        </form>
                      </td>
                      <tr></tr>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
      <div class="active" style="margin-top: 0px;height: 50px;">
        {!! $accounts->links() !!}
      </div>
      
      <!-- /.row (main row) -->
      <!--  /Hang 2 contents -->
    </section>

@endsection
