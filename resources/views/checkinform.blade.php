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
    <div class="row g-0">
        <div class="row g-0">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>
                    <h4>NOVOTEL hotel</h4>
                </label>
                <div class="row g-0 border border-warning rounded">
                    <p style="margin: auto; padding: 10px 0px 0px 20px;"><b>Nhận phòng:</b> Thứ 2, Tháng 10 28, 2020 từ
                        14:00</p>
                    <p style="margin: auto; padding: 10px 0px 10px 20px;"><b>Trả phòng:</b> Thứ 4, Tháng 10 30, 2020 cho
                        đến 12:00</p>
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
                    <div class="row g-0">
                        <div class="col-md-8">
                            <p style="margin: auto; padding: 10px 0px 0px 20px;"><b>Phòng Deluxe King</b></p>
                        </div>
                        <div class="col-md-4" style="padding-right: 10px; text-align: right;">
                            <p style="margin: auto; padding: 10px 0px 0px 20px;"><u>đ</u> 1000000</p>
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
                                    <select class="form-control" aria-label=".form-select-lg example">
                                        <option selected>Số người ở</option>
                                        <option value="1">1 người</option>
                                        <option value="2">2 người</option>
                                        <option value="3">3 người</option>
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
                                <input type="text" class="form-control">
                            </div>
                            <div class="col" style="padding-right:10px;">
                                <label>Họ</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Thư điện tử</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Xác nhận bằng thư điện tử</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="row g-0" style="padding:10px;">
                            <div class="col" style="padding-right:10px;">
                                <label>Số điện thoại liên lạc</label>
                                <input type="text" class="form-control">
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
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </div>



                    <div class="col-md-6" style="padding-left:10px;">


                        <div class="row g-0  border border-warning rounded" style="padding:10px;">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <p class="on">Giá phòng</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><u>đ</u> 1000000</p>
                                </div>
                                <hr style="margin-bottom: 5px;">
                            </div>
                            <div class="row g-0 ">
                                <div class="col-md-6">
                                    <p class="on">Tổng</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><b><u>đ</u> 1000000</b></p>
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
                                    <p class="on" style="margin: auto;"><u>đ</u> 1000000</p>
                                </div>
                            </div>
                            <div class="row g-0 ">
                                <div class="col-md-6">
                                    <p class="on">Số tiền phải thanh toán khi nhận phòng</p>
                                </div>
                                <div class="col-md-6" style="padding-right: 10px; text-align: right;">
                                    <p class="on" style="margin: auto;"><u>đ</u> 0</p>
                                </div>
                            </div>
                        </div>




                        <div class="row g-0  border border-warning rounded" style="padding:10px;margin-top: 20px;">
                            <label>Phương thức thanh toán</label>
                            <div class="row g-0 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Thanh toán qua thẻ visa
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Thanh toán qua thẻ ATM
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios3" value="option3" checked>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Thanh toán khi nhận phòng
                                    </label>
                                </div>
                            </div>

                        </div>



                        <div class="row g-0  border border-warning rounded" style="padding:10px;margin-top: 20px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input vertical-center " type="checkbox" id="inlineCheckbox1"
                                    value="option1" style="margin-top: 5px;">
                                <p class="form-check-label " for="inlineCheckbox1">Tôi đã đọc và chấp nhận Chính sách
                                    đặt
                                    phòng</p>
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
                                        <button type="button" style="background-color: rgb(242, 169, 0);"
                                            class="btn btn-warning"><a href="/hotel/submit"
                                                style="text-decoration: none; color:black;">Đặt phòng
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                                </svg>
                                            </a></button>
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

</div>
@endsection