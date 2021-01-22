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
<?php $numOption = 5; $type = 0; ?>
<div class="card mb-3  d-none d-lg-block" style="border-color: rgb(242, 169, 0);">
    <div class="row g-0">
        <div class="col-md-3" style="padding: 10px; padding-top: 20px;">
            <img src="{{$img}}" class="card-img-top" alt="...">
        </div>
        <div class="col-md-9 d-none d-lg-block">
            <div class="card-body cutpad">
                <h5 class="card-title">{{$name}}</h5>
                <p class="card-text">{{$introduce}}</p>
                <div class="row g-0">
                    <div class="col-md-6">
                        <p class="card-text"><small class="text-muted">
                                <b>Kích thước giường:</b> {{$bedSize}}
                            </small></p>
                    </div>
                    <div class="col-md-6">
                        <p class="card-text"><small class="text-muted">
                                <b>Diện tích phòng:</b> {{$roomSize}}
                            </small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style=" margin-bottom: 0px;margin-top: 0px; color: rgb(242, 169, 0);">
    <div class="card-body cutpad">
        <div class="row g-0">
            <div class="col-md-3">
                <h5 class="card-title">Phòng {{ $name }}</h5>
            </div>
            <div class="col-3 col-md-3" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="font-size: 20px;" class="bi bi-people"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </small></p>
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        {{$people}}
                    </small></p>
            </div>
            <div class="col-5 col-md-3" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>Giá:</b>
                    </small></p>
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>{{$price}} VND</b>
                    </small></p>
            </div>
            <div class="col-md-3 d-none d-lg-block" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>Số lượng</b>
                    </small></p>
                <p class="card-text" style="margin: 0px;padding-left: 40px;padding-right: 40px;">
                    <small class="text-muted">
                        <select class="form-select form-select-sm" roomID={{$roomInfo}} roomName={{$name}}
                            name="chooseRoom" aria-label=".form-select-sm example">
                            <?php 
                                $num = 0;
                                if(is_array(session()->get('cart'))&&(array_key_exists(intval((string)$roomInfo), session()->get('cart')) )){
                                    $num = session()->get('cart')[(string)$roomInfo]['qty'];
                                } 
                            ?>
                            @for($i =0; $i < $numOption; $i++) <option value='{{$i}}' {{$num==$i ? 'selected' : '' }}>
                                {{$i}}
                                phòng
                                </option>
                                @endfor
                        </select>
                    </small>
                </p>
            </div>
            <div class="col-3 d-lg-none" style="text-align: center; margin: auto;">
                <form method="POST" action="chooseroom/{{$roomInfo}}">
                    <p class="card-text" style="margin: 0px;"><small class="text-muted">
                            <button type="submit" style="background-color: rgb(242, 169, 0);"
                                class="btn btn-warning btnInfo">Xem
                                thêm</button>
                        </small></p>
                </form>
            </div>
        </div>
    </div>
</div>


@if($type == 0)
<div class="card mb-3 d-lg-none" style="border-color: rgb(242, 169, 0);">
    <div class="row g-0">
        <div class="col-md-3" style="padding: 10px; padding-top: 20px;">
            <img src="{{$img}}" class="card-img-top" alt="...">
        </div>
    </div>

    <hr style=" margin-bottom: 0px;margin-top: 0px; color: rgb(242, 169, 0);">
    <div class="card-body">
        <div class="row g-0">
            <div class="col-md-12">
                <h5 class="card-title">Phòng {{$name}}</h5>
            </div>
            <div class="col-3 col-md-3" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="font-size: 20px;" class="bi bi-people"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </small></p>
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        {{$people}}
                    </small></p>
            </div>
            <div class="col-5 col-md-2" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>Giá:</b>
                    </small></p>
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>{{$price}} VND</b>
                    </small></p>
            </div>
            <div class="col-4 " style="text-align: center;">
                <button type="button" style="background-color: rgb(242, 169, 0); margin-top:10px;"
                    class="btn btn-warning "><a href="chooseroom/{{$roomInfo}}"
                        style="text-decoration: none; color:black;">Xem</a></button>
            </div>
            <div class="row g-0">
                <div class="card-body">
                    <h6 class="card-title d-none d-lg-block">Thông tin:</h6>
                    <p class="card-text d-none d-lg-block">{{$introduce}}</p>
                    <div class="row g-0">
                        <div class="col-md-6 d-none d-lg-block">
                            <p class="card-text"><small class="text-muted">
                                    <b>Kích thước giường:</b> {{$bedSize}}
                                </small></p>
                        </div>
                        <div class="col-md-6 d-none d-lg-block">
                            <p class="card-text"><small class="text-muted">
                                    <b>Diện tích phòng:</b> {{$roomSize}}
                                </small></p>
                        </div>
                        <div class="col-md-2  d-none d-lg-block" style="text-align: right; margin: auto;">
                            <form method="POST" action="chooseroom/{{$roomInfo}}">
                                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                                        <button type="button" style="background-color: rgb(242, 169, 0);"
                                            class="btn btn-warning btnInfo"><a href="{{$roomInfo}}"
                                                style="text-decoration: none; color:black;">Xem</a></button>
                                    </small></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="card mb-3 d-lg-none" style="border-color: rgb(242, 169, 0);">
    <div class="row g-0">
        <div class="col-md-3" style="padding: 10px; padding-top: 20px;">
            <img src="{{$img}}" class="card-img-top" alt="...">
        </div>
    </div>

    <hr style=" margin-bottom: 0px;margin-top: 0px; color: rgb(242, 169, 0);">
    <div class="card-body">
        <div class="row g-0">
            <div class="col-md-12">
                <h5 class="card-title">Phòng {{$name}}</h5>
            </div>
            <div class="col-3 col-md-3" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" style="font-size: 20px;" class="bi bi-people"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>
                    </small></p>
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        {{$people}}
                    </small></p>
            </div>
            <div class="col-5 col-md-2" style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>Giá:</b>
                    </small></p>
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>{{$price}} VND</b>
                    </small></p>
            </div>
            <div class="col-4 " style="text-align: center;">
                <p class="card-text" style="margin: 0px;"><small class="text-muted">
                        <b>Số lượng</b>
                    </small></p>
                <p class="card-text d-lg-none">
                    <small class="text-muted">
                        <select class="form-select form-select-sm" roomID={{$roomInfo}} roomName={{$name}}
                            name="chooseRoom" aria-label=".form-select-sm example">
                            <?php 
                                $num = 0;
                                if(is_array(session()->get('cart'))&&(array_key_exists(intval((string)$roomInfo), session()->get('cart')) )){
                                    $num = session()->get('cart')[(string)$roomInfo]['qty'];
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
                    <p class="card-text">Với phòng {{$name}} quý khách sẽ được thưởng thức trọn vẹn vẻ
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
@endif