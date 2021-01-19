@extends('layouts.header')
@section('title', 'HOTEL ')
@section('content')
<style>
.active {
    z-index: 2;
    color: #fff;
    background-color: #fff;
    border-color: #0d6efd;
}

.chinh {
    margin: 10000px;
}
</style>
<div class="container">
    <div class="row">
        <img width="190" height="70"
            src="https://www.novotel-danang-premier.com/wp-content/themes/novotel-template/images/logo/logo-novotel.svg"
            alt="Novotel Danang Premier Han River"
            style="font-family : Arial, sans-serif !important; margin-bottom: 20px;">
    </div>
    <div class="row g-0" style="
    margin-top: 10px;
    margin-bottom: 30px;
">
        <div class="col-md-2 d-none d-lg-block"></div>
        <div class="col-md-8 border border-warning rounded-pill" style="padding-left:50px ;">
            <div class="step">
                <img src="../public/iconStep1-on.svg" class="icon">
                <p class="vertical-center" style="width: 160px;">Thông tin đặt phòng</p>
            </div>
            <div class="step d-none d-lg-block">
                <img src="../public/iconStep2-off.svg" class="icon">
                <p class="vertical-center" style="width: 100px;">Chọn phòng</p>
            </div>
            <div class="step d-none d-lg-block">
                <img src="../public/iconStep3-off.svg" class="icon">
                <p class="vertical-center" style="width: 160px;">Thông tin khách hàng</p>
            </div>
            <div class="step d-none d-lg-block">
                <img src="../public/iconStep4-off.svg" class="icon">
                <p class="vertical-center" style="width: 100px;">Thanh Toán</p>
            </div>
        </div>
    </div>
    <!-- <div>
        <p class="info">{{json_encode(session('cart'))}}</p>
    </div> -->
    <div class="row">
        <div class="card mb-3 d-lg-none" style="border-color: rgb(242, 169, 0);">
            <div class="row g-0">
                <div class="col-md-3" style="padding: 10px; padding-top: 20px;">
                    <img src="../public/ks.png" class="card-img-top" alt="...">
                </div>
            </div>

            <hr style=" margin-bottom: 0px;margin-top: 0px; color: rgb(242, 169, 0);">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-12">
                        <h5 class="card-title">Phòng {{$rooms->name}}</h5>
                    </div>
                    <div class="col-3 col-md-3" style="text-align: center;">
                        <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" style="font-size: 20px;"
                                    class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                                </svg>
                            </small></p>
                        <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                {{$rooms->kindOfRooms}}
                            </small></p>
                    </div>
                    <div class="col-5 col-md-2" style="text-align: center;">
                        <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                <b>Giá:</b>
                            </small></p>
                        <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                <b>{{$rooms->price}} VND</b>
                            </small></p>
                    </div>
                    <div class="col-4 " style="text-align: center;">
                        <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                <b>Số lượng</b>
                            </small></p>
                        <p class="card-text d-lg-none">
                            <small class="text-muted">
                                <select class="form-select form-select-sm" roomID={{$rooms->id}}
                                    roomName={{$rooms->name}} name="chooseRoom" aria-label=".form-select-sm example">
                                    <?php 
                                $num = 0;
                                if(is_array(session()->get('cart'))&&(array_key_exists(intval((string)$rooms->id), session()->get('cart')) )){
                                    $num = session()->get('cart')[(string)$rooms->id]['qty'];
                                } 
                            ?>
                                    @for($i =0; $i < 5; $i++) <option value='{{$i}}' {{$num==$i ? 'selected' : '' }}>
                                        {{$i}}
                                        phòng
                                        </option>
                                        @endfor
                                </select>
                            </small>
                        </p>
                    </div>
                    <div class="row g-0">
                        <div class="card-body">
                            <h6 class="card-title">Thông tin:</h6>
                            <p class="card-text">Với phòng {{$rooms->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ
                                đẹp ấn
                                tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác
                                sang
                                trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội
                                thất
                                hiện đại.</p>
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <p class="card-text"><small class="text-muted">
                                            <b>Kích thước giường:</b> 1111 m2
                                        </small></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="card-text"><small class="text-muted">
                                            <b>Diện tích phòng:</b> 1111 m2
                                        </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        //import axios from 'axios';
        var tokenCSRF;
        var loading = true;
        $.get("../bar").done(function(data) {
            tokenCSRF = data;


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': tokenCSRF
                }
            });


            // $.post("http://localhost/hotel/getCart",
            //     JSON.parse(String(localStorage.getItem('cart')))).done(function(data) {
            //     alert(data);
            // });

            $('.form-select').on('change', function(e) {
                e.preventDefault();
                //console.log(e.target.attributes.roomid.value);
                var qty = e.target.value;
                var roomID = e.target.attributes.roomid.value;

                $.post("../chooseroom", {
                    id: roomID,
                    qty: qty
                }).done(function(data) {

                    // alert("Data Loaded: " +
                    //     data);
                    alert("Dat hang thanh cong!!!");

                    localStorage.setItem('cart',
                        JSON.stringify(
                            <?php echo json_encode(session('cart')) ?>));
                });
            });
        });

        $('.list-group-item').click(function() {
            $('.list-group-item.active').removeClass("active");
            $(this).tab('show');
        });
        var dem = 0;
        $('#abc').click(function() {
            $('#menu').removeClass('d-none');
            $('#nav-tabContent').addClass('d-none');
        });

        $('.list-group-item.list-group-item-action').click(function() {
            $('#menu').addClass('d-none');
            $('#nav-tabContent').removeClass('d-none');
        });

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });

        // $('.btn-warning').on('click', function(e) {
        //     window.location.replace("chooseroom/{{}}");
        // });

    });
    </script>
    @endsection