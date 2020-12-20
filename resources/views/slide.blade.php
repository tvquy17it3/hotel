@extends('layouts.app')

@section('slide')
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
                                    style="background-color: #f2a900;" id="list-home-list" data-bs-toggle="list"
                                    href="#list-home" role="tab" aria-controls="home"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" style="background-color: #f2a900;"
                                    id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab"
                                    aria-controls="profile">
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
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                    style="background-color: #f2a900;" data-bs-toggle="list"
                                    style="background-color: #f2a900;" href="#list-home" role="tab"
                                    aria-controls="home"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                    data-bs-toggle="list" style="background-color: #f2a900;" href="#list-profile"
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
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                    data-bs-toggle="list" href="#list-home" role="tab" aria-controls="home"
                                    style="background-color: #f2a900;"><b>Phong VIP</b></a>
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                    data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="profile"
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
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                        aria-labelledby="list-home-list">
                        @for ($i = 0; $i < 10; $i++) @component('room') @slot('name') Phong Duluxe @endslot
                            @slot('introduce') Với phòng Deluxe quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn tượng
                            của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm giác sang
                            trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các thiết bị nội thất
                            hiện đại. @endslot @slot('bedSize') 1111 m2 @endslot @slot('roomSize') 1111 m2 @endslot
                            @slot('people') 2 người lớn @endslot @slot('price') 1000000 @endslot @endcomponent @endfor
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                aria-labelledby="list-profile-list">
                                @for ($i = 0; $i < 10; $i++) @component('room') @slot('name') Phong Duluxe @endslot
                                    @slot('introduce') Với phòng Deluxe quý khách sẽ được thưởng thức trọn vẹn vẻ đẹp ấn
                                    tượng của thành phố ngay trong phòng ngủ của mình. Quý khách sẽ tận hưởng được cảm
                                    giác sang trọng, ấm cúng trong lối thiết kế phòng độc đáo với 1 giường King và các
                                    thiết bị nội thất hiện đại. @endslot @slot('bedSize') 1111 m2 @endslot
                                    @slot('roomSize') 1111 m2 @endslot @slot('people') 2 người lớn @endslot
                                    @slot('price') 1000000 @endslot @endcomponent @endfor </div>
                            </div>
                    </div>
                    <div class="col-md-2" style=" text-align: center;margin: auto;padding-top: 10px;margin-right: 0;">
                        <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                <button type="button" style="width: 100%; background-color: rgb(242, 169, 0);"
                                    class="btn btn-warning">Đặt
                                    phòng</button>
                            </small></p>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $('.list-group-item').click(function() {
                //alert('ok');
                $('.list-group-item.active').removeClass("active");
                //$(this).removeClass("active");
                //$(this).addClass("active");
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

        });
        </script>
        @component('footer')

        @endcomponent
        @endsection