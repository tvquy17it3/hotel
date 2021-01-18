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
    @slot('numStep') 3 @endslot
    @endcomponent
    <?php if(!isset(session('checkin')['dateCheckIn'])){header('Location: http://localhost/hotel/checkin'); die(); }
        if(count(session('cart'))==0){$message = "Mời bạn chọn phòng trước";
            echo "<script type='text/javascript'>alert('$message');</script>"; header('Location: http://localhost/hotel/chooseroom'); die(); }  ?>

    <?php $total = 0; ?>
    @if(isset(session('checkin')['dateCheckIn']))
    <div class="row g-0">
        <div class="row g-0">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>
                    <h4>NOVOTEL hotel</h4>
                </label>
                <div class="row g-0 border border-warning rounded">
                    <p style="margin: auto; padding: 10px 0px 0px 20px;"><b>Nhận phòng:</b>
                        {{session('checkin')['dateCheckIn'] }}</p>
                    <p style="margin: auto; padding: 10px 0px 10px 20px;"><b>Trả phòng:</b>
                        {{session('checkin')['dateCheckOut']}}</p>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>


        <div class="row g-0" style="margin-top:20px;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>
                    <h5>Chi tiết đặt phòng</h5>
                </label>
                <div class="row g-0 border border-warning rounded" style="margin-top:20px; padding-bottom: 10px;">
                    @if(count(session('cart'))>0)
                    @foreach(session('cart') as $value)
                    <div class="row g-0">
                        <div class="col-md-6">
                            <p style="margin: auto; padding: 10px 0px 0px 20px;"><b>Phòng {{$value['name']}}</b></p>
                        </div>
                        <div class="col-md-2">
                            <p style="margin: auto; padding: 10px 0px 0px 20px;"><b>Số lượng: {{$value['qty']}}</b>
                            </p>
                        </div>
                        <div class="col-md-4" style="padding-right: 10px; text-align: right;">
                            <p style="margin: auto; padding: 10px 0px 0px 20px;"><u>đ</u> {{$value['price']}}</p>
                        </div>
                    </div>
                    <?php $total = $total + (int)$value['price']*(int)$value['qty'];?>
                    @endforeach
                    @else
                    <div class="row g-0">Trong
                    </div>
                    @endif
                    <div class="row g-0">
                        <div class="col-md-8"></div>
                        <div class="col-md-4" style="padding-right: 10px; text-align: right;">
                            <p style="margin: auto;">Chính sách đặt phòng</p>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col-md-6">
                            <p style="margin: auto; padding-left: 20px;">Chính sách hủy linh hoạt</p>
                            <p style="margin: auto; padding-left: 20px;">Bữa sáng bao gồm:</p>
                            <p style="margin: auto; padding-left: 20px; color:red;">Gói khuyến mãi 2 ngày 1 đêm và 1 vé
                                Massage 60’</p>
                            <p style="margin: auto; padding-left: 20px;"><b>Chi tiết: </b>1 phòng 2 người lớn bao
                                gồm trong giá
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p style="margin: auto; padding-left: 20px;">Số lượng khách</p>
                            <div class="row g-0 ">
                                <div class="col-md-5" style=" padding-left: 20px;">
                                    <select class="form-control" id="numPeople" aria-label=".form-select-lg example">
                                        <?php 
                                            $num = 0;
                                            if(session()->get('checkin')!==""){
                                            $num = session()->get('checkin')['quantity'];
                                            } 
                                        ?>

                                        <option value="0" selected>Số người ở</option>
                                        @for($i =1; $i < 5; $i++) <option value='{{$i}}'
                                            {{$num==$i ? 'selected' : '' }}>{{$i}}
                                            người
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0" style="margin-top:20px;">
                    <label>
                        <h5>Thông tin khách hàng và thanh toán</h5>
                    </label>
                    <div class="col-md-6 border border-warning rounded">
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Tiêu đề</label>
                                <select class="form-control" aria-label=".form-select-lg example">
                                    <option value="1" selected>Ông</option>
                                    <option value="2">Bà</option>
                                </select>
                            </div>
                            <div class="col" style="padding-right:10px;">
                                <label>Tên</label>
                                <input type="text" id="name" class="form-control" value="Nha">
                            </div>
                            <div class="col" style="padding-right:10px;">
                                <label>Họ</label>
                                <input type="text" id="last" class="form-control" value="Vo">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Thư điện tử</label>
                                <input type="email" id="email" class="form-control" value="test2@gmail.com">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Xác nhận bằng thư điện tử</label>
                                <input type="email" id="emailVerify" class="form-control" value="test2@gmail.com">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Số điện thoại liên lạc</label>
                                <input type="text" id="phone" class="form-control" value="0905905293">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <label>Quốc gia</label>
                            <select class="form-control">
                                <option>Việt Nam</option>
                            </select>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <label>Yêu cầu thêm</label>
                            <textarea class="form-control" id="service" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>

                    </div>



                    <div class="col-md-6" style="padding-left:10px;">


                        <div class="row g-0  border border-warning rounded" style="padding:10px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <p class="on">Giá phòng</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><u>đ</u> {{$total}}</p>
                                </div>
                                <hr style="margin-bottom: 5px;">
                            </div>
                            <div class="row g-0 ">
                                <div class="col-md-6">
                                    <p class="on">Tổng</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><b><u>đ</u> {{$total}}</b></p>
                                </div>
                                <p style="margin: auto;">Giá bao gồm thuế</p>
                            </div>
                        </div>

                        <div class="row g-0  border border-warning rounded" style="padding:10px;margin-top: 20px;">

                            <div class="row g-0 ">
                                <div class="col-md-6">
                                    <p class="on">Số tiền đặt cọc</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><u>đ</u> {{$total*20/100}}</p>
                                </div>
                            </div>
                            <div class="row g-0 ">
                                <div class="col-md-6">
                                    <p class="on">Số tiền phải thanh toán khi nhận phòng</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><u>đ</u> {{$total - $total*20/100}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0  border border-warning rounded" style="padding:10px;margin-top: 20px;">
                            <label>Phương thức thanh toán</label>
                            <div class="row g-0 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="visa">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Thanh toán qua thẻ visa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios2" value="ATM">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Thanh toán qua thẻ ATM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios3" value="COD" checked>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Thanh toán khi nhận phòng
                                    </label>
                                </div>
                            </div>

                        </div>



                        <div class="row g-0  border border-warning rounded" style="padding:10px;margin-top: 20px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input vertical-center " id="checkbox" type="checkbox"
                                    id="inlineCheckbox1" value="option1" style="margin-top: 5px;" required>
                                <p class="form-check-label " for="inlineCheckbox1">Tôi đã đọc và chấp nhận chính sách đặt phòng</p>
                            </div>
                        </div>



                        <div class="row g-0  border border-warning rounded" style="padding:10px;margin-top: 20px;">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <button type="button" style="background-color: rgb(242, 169, 0);"
                                            class="btn btn-warning"><a href="/hotel/chooseroom"
                                                style="text-decoration: none; color:black;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                                                </svg>
                                                Trở về</a></button>
                                    </div>
                                    <div class="col-md-7">
                                        <button type="button" id="order" style="background-color: rgb(242, 169, 0);"
                                            class="btn btn-warning">
                                            <a href="/hotel/submit"
                                                style="text-decoration: none; color:black;">Đặt phòng
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg>
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>

                <div class="row g-0 " style="margin-top:20px;">
                    <label>
                        <h6>Chính sách đặt phòng</h6>
                    </label>
                    <hr>
                    <p style="margin: auto; padding-left: 20px; font-size:14px"><b>Hủy: </b>Nếu hủy hoặc thay đổi, đêm
                        đầu tiên sẽ được
                        thu. Trong trường hợp không đến, tổng tiền sẽ được thu.</p>
                    <p style="margin: auto; padding-left: 20px; font-size:14px"><b>Thanh toán: </b>Toàn bộ tiền phòng sẽ
                        được thu.</p>
                    <p style="margin: auto; padding-left: 20px; font-size:14px"><b>Bữa ăn bao gồm: </b>Bữa sáng đã bao
                        gồm.</p>
                    <p style="margin: auto; padding-left: 20px; font-size:14px"><b>Chính sách khác: </b>Giường phụ sẽ
                        tính 600.000
                        VND/khách/đêm. Trẻ em dưới 6 tuổi sẽ được miễn phí khi ngủ chung giường với bố mẹ. Trẻ từ 6 đến
                        11 tuổi sẽ được phụ thu ăn sáng là 160.000 VND/trẻ/đêm. Trẻ em từ 12 tuổi đến 17 tuổi sẽ tính
                        phí như người lớn là 600.000 VND/trẻ/đêm.</p>

                </div>
                <div class="col-md-2"></div>
            </div>

            <div class="row g-0">
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
    @endif
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var tokenCSRF;
    var loading = true;
    $.get("bar").done(function(data) {
        tokenCSRF = data;


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': tokenCSRF
            }
        });



        $('#order').on('click', function(e) {
            e.preventDefault();

            var name = $('#name').val().trim();
            var last = $('#last').val().trim();
            var email = $('#email').val().trim();
            var emailVerify = $('#emailVerify').val().trim();
            var phone = $('#phone').val().trim();
            var people = $('#numPeople').val().trim();
            var service = $('#service').val().trim();
            var checkbox = $('#checkbox').is(":checked");
            var option = $('input:checked').val();

            if (name != '' && last != '' && email != '' && emailVerify != '' && phone != '') {
                if (checkbox == true) {
                    var cusName = last + " " + name;
                    $.post("form", {
                        cusName: cusName,
                        phone: phone,
                        price: <?php echo $total ?>,
                        people: people,
                        status: 0,
                        checkIn: <?php  echo isset(session('checkin')['dateCheckIn'])? strtotime(session('checkin')['dateCheckIn']):"0-0-0"   ?>,
                        checkOut: <?php  echo isset(session('checkin')['dateCheckOut'])?  strtotime(session('checkin')['dateCheckOut']):"0-0-0"  ?>
                    }).done(function(data) {
                        window.location.replace("submit");
                    });
                } else {
                    alert('Vui lòng chấp nhận để đặt phòng');
                }
            } else {
                alert('Vui lòng nhập đầy đủ thông tin');
            }
        });
    });
});
</script>

@endsection