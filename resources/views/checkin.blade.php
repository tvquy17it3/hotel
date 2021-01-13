@extends('layouts.header')
@section('title', 'HOTEL ')
@section('content')
<div class="container">
    <div class="row">
        <img width="190" height="70"
            src="https://www.novotel-danang-premier.com/wp-content/themes/novotel-template/images/logo/logo-novotel.svg"
            alt="Novotel Danang Premier Han River"
            style="font-family : Arial, sans-serif !important; margin-bottom: 20px;">
    </div>
    @component('status')
    @slot('numStep') 1 @endslot
    @endcomponent
    <div class="col-md-12 border border-warning"
        style="max-width: 700px;margin: auto; padding: 20px; margin-top: 20px; border-radius: 50px 50px; box-shadow: 2px 5px 5px gray;">
        <div class="row g-0">
            <div class="col-md-6 input-group-lg" style="padding-right:10px ;">
                <label for="simple" style="font-size: 20px;">
                    Ngày check in
                </label>
                <input type="date" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="col-md-6 input-group-lg" style="padding-left:10px ;">
                <label for="simple" style="font-size: 20px;">
                    Ngày check out
                </label>
                <input type="date" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg">
            </div>
        </div>
        <div class="row g-0" style="margin-top: 10px;">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Số người ở</option>
                <option value="1">1 người</option>
                <option value="2">2 người</option>
                <option value="3">3 người</option>
            </select>

        </div>
        <div class="row g-0" style="margin-top: 10px;">
            <button type="button" style="background-color: rgb(242, 169, 0); width:50%; margin:auto;"
                class="btn btn-warning"><a href="/hotel/chooseroom" style="text-decoration: none; color:black;">Chọn
                    phòng</a></button>
        </div>
    </div>

</div>
@endsection