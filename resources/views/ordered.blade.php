<div class="row g-0 border border-dark" style="border-radius: 25px 25px; margin-top: 20px;">
    <div class="row g-0">
        <?php $i = 1; ?>
        <div class="row g-0">
            @foreach($roomInfo['detail'] as $value)
            <p style="margin: auto; padding-left: 20px; font-size:14px"><b><?php echo $i; $i++; ?>. Phòng
                    {{$value['name']}}
                </b></p>
            <div class="row g-0">
                <div class="col-md-7" style="padding-left: 10px;">
                    <p style="margin: auto; padding-left: 20px; font-size:14px">Số người: {{$roomInfo['people']}}
                    </p>
                    <p style="margin: auto; padding-left: 20px; font-size:14px">Số giường: {{$value['capacity']}}</p>
                    <p style="margin: auto; padding-left: 20px; font-size:14px">Thời gian đặt: Ngày
                        {{$value['created_at']}}
                    </p>
                </div>
                <div class="col-md-5" style="padding-right: 10px; text-align: right;">
                    <p style="margin: auto; padding-left: 20px; font-size:14px">Số lượng phòng: {{$value['qty']}}
                    </p>
                    <p class="on" style="margin: auto; font-size: 13px;"><b>Tiền: <u>đ</u>
                            {{$value['price']}}</b></p>

                    <p style="margin: auto; padding-left: 20px; font-size:14px">Giá tiền:
                        {{$value['price']*$value['qty']}}
                    </p>
                </div>
            </div>
            @endforeach
            <div class="col-md-7">
                <p style="margin: auto; padding-left: 20px; font-size:14px">Từ {{$roomInfo['dateCheckIn']}} đến
                    {{$roomInfo['dateCheckOut']}}</p>
            </div>
            <hr>
            <div class="col-md-12" style="padding-right: 10px; text-align: right;">
                <p class="on" style="margin: auto; font-size: 13px; font-size: 17px"><b>Tổng tiền: <u>đ</u>
                        {{$roomInfo['price']}}</b></p>
                <p style="margin: auto; padding-left: 20px; font-size:14px">Đã thanh toán qua visa
                </p>
            </div>
        </div>
    </div>
</div>