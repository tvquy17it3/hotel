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
    <form method="POST" action="http://localhost/hotel/checkin" class="col-md-12 border border-warning"
        style="max-width: 700px;margin: auto; padding: 20px; margin-top: 20px; border-radius: 50px 50px; box-shadow: 2px 5px 5px gray;">
        {{ csrf_field()}}
        <div class="form-group">
            <div class="row g-0">
                <div class="col-md-6 input-group-lg" style="padding-right:10px ;">
                    <label for="simple" style="font-size: 20px;">
                        Ngày check in
                    </label>
                    <input id="checkIn" type="date" name="dateCheckIn" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
                <div class="col-md-6 input-group-lg" style="padding-left:10px ;">
                    <label for="simple" style="font-size: 20px;">
                        Ngày check out
                    </label>
                    <input id="checkOut" type="date" name="dateCheckOut" class="form-control"
                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                </div>
            </div>
            <div class="row g-0" style="margin-top: 10px;">
                <select id="numPeople" name="numPeople" class="form-select form-select-lg mb-3"
                    aria-label=".form-select-lg example">
                    <option value=0 selected>Số người ở</option>
                    <!-- <option value="1">1 người</option>
                <option value="2">2 người</option>
                <option value="3">3 người</option> -->
                    @for($i =1; $i < 5; $i++) <option value='{{$i}}'>{{$i}}
                        người
                        </option>
                        @endfor
                </select>

            </div>
        </div>
        <div class="row g-0" style="margin-top: 10px;">
            <input type="submit" style="background-color: rgb(242, 169, 0); width:50%; margin:auto;"
                class="btn btn-warning" value="Chọn
                    phòng" />
        </div>
    </form>

</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    //import axios from 'axios';
    var tokenCSRF;
    var loading = true;
    $.get("http://localhost/hotel/bar").done(function(data) {
        tokenCSRF = data;


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': tokenCSRF
            }
        });



        $('.btn-warning').on('click', function(e) {
            e.preventDefault();
            //console.log(e.target.attributes.roomid.value);
            var qty = e.target.value;
            var dataCheckIn = $('#checkIn').val();
            var dataCheckOut = $('#checkOut').val();
            var qty = $('#numPeople').val();
            if (qty !== '0' && dataCheckIn !== '' && dataCheckOut !== '') {
                $.post("http://localhost/hotel/checkin", {
                    dateCheckIn: dataCheckIn,
                    dateCheckOut: dataCheckOut,
                    qty: qty
                }).done(function(data) {
                    window.location.replace("http://localhost/hotel/chooseroom");
                });
            } else {
                alert('Mời điền đầy đủ thông tin');
            }
        });
    });
});
</script>
@endsection