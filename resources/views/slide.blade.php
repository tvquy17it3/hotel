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
    @component('status')
    @slot('numStep') 2 @endslot
    @endcomponent
    <!-- <div>
        <p class="info">{{json_encode(session('cart'))}}</p>
    </div> -->
    <div class="row d-lg-none">
        <div class="col-md-3" style="text-align: left; padding-bottom: 10px;">
            <button id="abc" type="button" style="background-color: rgb(242, 169, 0);"
                class="btn btn-warning">Options</button>
        </div>
    </div>
    <div class="row">
        <div id="menu" class="col-md-3 d-none d-lg-block rounded-start"
            style="padding: 0;background-color: rgb(242, 169, 0);">
            <div class="accordion" id="accordionExample" style="background-color: #f2a900; ">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <b>Phong 1 nguoi</b>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #f2a900;">
                            <div class="list-group list-group-flush" style="background-color: #f2a900;" id="list-tab"
                                style="background-color: #f2a900;" role="tablist">
                                <a class="list-group-item list-group-item-action active"
                                    style="background-color: #f2a900;" id="list-room1-vip-list" data-bs-toggle="list"
                                    href="#list-room1-vip" role="tab" aria-controls="home"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" style="background-color: #f2a900;"
                                    id="list-room1-normal-list" data-bs-toggle="list" href="#list-room1-normal"
                                    role="tab" aria-controls="profile">
                                    <b>Phong Thuong</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <b>Phong 2 nguoi</b>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="background-color: #f2a900;">
                            <div class="list-group list-group-flush" id="list-tab" style="background-color: #f2a900;"
                                role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-room2-vip-list"
                                    style="background-color: #f2a900;" data-bs-toggle="list"
                                    style="background-color: #f2a900;" href="#list-room2-vip" role="tab"
                                    aria-controls="home"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" id="list-room2-normal-list"
                                    data-bs-toggle="list" style="background-color: #f2a900;" href="#list-room2-normal"
                                    role="tab" aria-controls="profile">
                                    <b>Phong Thuong</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <b>Phong 3 nguoi</b>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-room3-vip-list"
                                    data-bs-toggle="list" href="#list-room3-vip" role="tab" aria-controls="home"
                                    style="background-color: #f2a900;"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" id="list-room3-normal-list"
                                    data-bs-toggle="list" href="#list-room3-normal" role="tab" aria-controls="profile"
                                    style="background-color: #f2a900;">
                                    <b>Phong Thuong</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <b>Phong 4 nguoi</b>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="list-group list-group-flush" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-room4-vip-list"
                                    data-bs-toggle="list" href="#list-room4-vip" role="tab" aria-controls="home"
                                    style="background-color: #f2a900;"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" id="list-room4-normal-list"
                                    data-bs-toggle="list" href="#list-room4-normal" role="tab" aria-controls="profile"
                                    style="background-color: #f2a900;">
                                    <b>Phong Thuong</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item" style="padding: 10px; margin-bottom: 0;">
                    <small class="text-muted">
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="1">VietNam Dong</option>
                            <option value="2">USA Dollars</option>
                            <option value="3">HongKong Dollars</option>
                            <option value="4">Thai Bath</option>
                        </select>
                    </small>
                </div>
            </div>
        </div>

        <div class="col-md-9 ">
            <div class="overflow-auto" style="height: 80vh;">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-room1-vip" role="tabpanel"
                        aria-labelledby="list-room1-vip-list">
                        @foreach ($room1 as $value)
                        @if($value->kindOfRooms == '1')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="list-room1-normal" role="tabpanel"
                        aria-labelledby="list-room1-normal-list">
                        @foreach ($room1 as $value)
                        @if($value->kindOfRooms == '2')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>

                    <div class="tab-pane fade" id="list-room2-vip" role="tabpanel"
                        aria-labelledby="list-room2-vip-list">
                        @foreach ($room2 as $value)
                        @if($value->kindOfRooms == '1')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="list-room2-normal" role="tabpanel"
                        aria-labelledby="list-room2-normal-list">
                        @foreach ($room2 as $value)
                        @if($value->kindOfRooms == '2')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>



                    <div class="tab-pane fade" id="list-room3-vip" role="tabpanel"
                        aria-labelledby="list-room3-vip-list">
                        @foreach ($room3 as $value)
                        @if($value->kindOfRooms == '1')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="list-room3-normal" role="tabpanel"
                        aria-labelledby="list-room3-normal-list">
                        @foreach ($room3 as $value)
                        @if($value->kindOfRooms == '2')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>


                    <div class="tab-pane fade" id="list-room4-vip" role="tabpanel"
                        aria-labelledby="list-room4-vip-list">
                        @foreach ($room4 as $value)
                        @if($value->kindOfRooms == '1')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>
                    <div class="tab-pane fade" id="list-room4-normal" role="tabpanel"
                        aria-labelledby="list-room4-normal-list">
                        @foreach ($room4 as $value)
                        @if($value->kindOfRooms == '2')
                        @component('room')
                        @slot('roomInfo') {{$value->id}} @endslot
                        @slot('name') {{$value->name}} @endslot
                        @slot('introduce') Với phòng {{$value->name}} quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                        tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                        trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                        hiện đại. @endslot
                        @slot('bedSize') 1111 m2 @endslot
                        @slot('roomSize') 1111 m2 @endslot
                        @slot('people') {{$value->capacity}} người lớn @endslot
                        @slot('price') {{$value->price}} @endslot
                        @endcomponent
                        @endif
                        @endforeach
                    </div>


                </div>
            </div>
            <div class="col-md-2" style=" text-align: center;margin: auto;padding-top: 10px;margin-right: 0;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <button type="button" style="width: 100%; background-color: rgb(242, 169, 0);"
                            class="btn btn-warning"><a href="/hotel/form"
                                style="text-decoration: none; color:black;">Đặt
                                phòng</a></button>
                    </small></p>
            </div>
        </div>
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


            // $.post("http://localhost/hotel/getCart",
            //     JSON.parse(String(localStorage.getItem('cart')))).done(function(data) {
            //     alert(data);
            // });



            $('.form-select').on('change', function(e) {
                e.preventDefault();
                //console.log(e.target.attributes.roomid.value);
                var qty = e.target.value;
                var roomID = e.target.attributes.roomid.value;

                $.post("http://localhost/hotel/chooseroom", {
                    id: roomID,
                    qty: qty
                }).done(function(data) {

                    alert("Data Loaded: " +
                        data);

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


    });
    </script>
    @endsection