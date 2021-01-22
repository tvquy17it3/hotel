@extends('layouts.header')
@section('title', 'HOTEL ')
@section('content')
<div class="container">
    <div class="row">
        <div class="c-nav-left col-3" style="display: flex">
            <ul style="list-style: none; ">
                <li>
                    <i class="fas fa-phone-volume"></i>
                    <span class="c-nav-left__text">1900 1234</span>
                        <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                        <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li></li>
            </ul>
        </div>
        <div class="logo col-6" style="display: flex; justify-content: center">
            <img src="https://www.novotel-danang-premier.com/wp-content/themes/novotel-template/images/logo/logo-novotel.svg" width="189" height="100">
        </div>
        <div class="c-nav-right col-3" style="float: right; align-items: right; z-index: 2; top: 0; display: flex"> 
            <ul style="list-style: none; margin-left: auto; order: 2; margin-right: 10">
                    <a id="isearch" style="cursor: pointer;">
                        <i class="fa fa-search"></i>
                    </a>
                    <a><i class="fas fa-calendar-alt"></i></a>
                    <li>
                    {{-- <a class="dropdown-toggle" id="check_lang" href="#"><span class="c-language__text">VI</span><img src="http://muongthanh.com/templates/default/images/vn.png" alt="en" /></a> --}}
                </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <img src="http://muongthanh.com/images/promotion/2020/12/07/resized/holynight-online-02cover_1607332873.jpg" alt="" width="100%">
            </div>
            <div class="card-body">
                <div col md-12>
                    <div class="row">
                        <div class="col-md-7">
                            <h6>SUMMER MEGA SALES - SĂN DEAL KHỦNG CHỈ TỪ 499K</h6>
                        </div>
                        <div class="col-md-5" style="text-align: right">
                            <button class="btn" style="background-color: #f2a900; border-color: #f2a900; color: white">CHI TIẾT</button>
                        </div>
                    </div>
                </div>
                <div col md-12>
                    <div class="row">
                        <div class="col-md-7">
                            <p style="font-size: 14px; opacity: 0.5">Cơ hội sở hữu kỳ nghỉ như mơ với ưu đãi giá phòng cực đã chỉ từ 499K/Phòng/Đêm lần đầu tiên áp dụng trên toàn hệ thống các khách sạn Mường Thanh trên toàn quốc và nước</p>
                        </div>
                        <div class="col-md-5" style="text-align: right">
                            <p style="font-size: 15px">21.05.2020 ~ 31.12.2020</p>
                        </div>
                    </div>
                </div>
                <div col md-12>
                    <div class="row">
                        <div class="col-md-7">
                            <p>NOVOTEL LUXURY ĐÀ NẴNG</p>
                        </div>
                        <div class="col-md-5" style="text-align: right">
                            <p style="font-size: 15px"><i class="fas fa-tags"></i>ƯU ĐÃI TẠI KHÁCH SẠN</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col md-6">
            <div class="card">
                <img src="http://muongthanh.com/images/promotion/2020/12/07/resized/cover-_1607332210.png" alt="" width="100%">
                <div class="card-body">
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>SUMMER MEGA SALES - SĂN DEAL KHỦNG CHỈ TỪ 499K</h6>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <button class="btn" style="background-color: #f2a900; border-color: #f2a900; color: white">CHI TIẾT</button>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p style="font-size: 14px; opacity: 0.5">Cơ hội sở hữu kỳ nghỉ như mơ với ưu đãi giá phòng cực đã chỉ từ 499K/Phòng/Đêm lần đầu tiên áp dụng trên toàn hệ thống các khách sạn Mường Thanh trên toàn quốc và nước</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px">21.05.2020 ~ 31.12.2020</p>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p>NOVOTEL LUXURY ĐÀ NẴNG</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px"><i class="fas fa-tags"></i>ƯU ĐÃI TẠI KHÁCH SẠN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col md-6">
            <div class="card">
                <img src="http://muongthanh.com/images/promotion/2020/12/07/resized/cover-_1607332210.png" alt="" width="100%">
                <div class="card-body">
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>SUMMER MEGA SALES - SĂN DEAL KHỦNG CHỈ TỪ 499K</h6>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <button class="btn" style="background-color: #f2a900; border-color: #f2a900; color: white">CHI TIẾT</button>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p style="font-size: 14px; opacity: 0.5">Cơ hội sở hữu kỳ nghỉ như mơ với ưu đãi giá phòng cực đã chỉ từ 499K/Phòng/Đêm lần đầu tiên áp dụng trên toàn hệ thống các khách sạn Mường Thanh trên toàn quốc và nước</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px">21.05.2020 ~ 31.12.2020</p>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p>NOVOTEL LUXURY ĐÀ NẴNG</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px"><i class="fas fa-tags"></i>ƯU ĐÃI TẠI KHÁCH SẠN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col md-6">
            <div class="card">
                <img class="img-fluid" src="http://muongthanh.com/images/promotion/2020/12/07/resized/holynight-online-02cover_1607332873.jpg" alt="Responsive image" width="100%" height="100%">
                <div class="card-body">
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>SUMMER MEGA SALES - SĂN DEAL KHỦNG CHỈ TỪ 499K</h6>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <button class="btn" style="background-color: #f2a900; border-color: #f2a900; color: white">CHI TIẾT</button>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p style="font-size: 14px; opacity: 0.5">Cơ hội sở hữu kỳ nghỉ như mơ với ưu đãi giá phòng cực đã chỉ từ 499K/Phòng/Đêm lần đầu tiên áp dụng trên toàn hệ thống các khách sạn Mường Thanh trên toàn quốc và nước</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px">21.05.2020 ~ 31.12.2020</p>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p>NOVOTEL LUXURY ĐÀ NẴNG</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px"><i class="fas fa-tags"></i>ƯU ĐÃI TẠI KHÁCH SẠN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col md-6">
            <div class="card">
                <img class="img-fluid" src="http://muongthanh.com/images/promotion/2020/12/07/resized/holynight-online-02cover_1607332873.jpg" alt="" width="100%">
                <div class="card-body">
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>SUMMER MEGA SALES - SĂN DEAL KHỦNG CHỈ TỪ 499K</h6>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <button class="btn" style="background-color: #f2a900; border-color: #f2a900; color: white">CHI TIẾT</button>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p style="font-size: 14px; opacity: 0.5">Cơ hội sở hữu kỳ nghỉ như mơ với ưu đãi giá phòng cực đã chỉ từ 499K/Phòng/Đêm lần đầu tiên áp dụng trên toàn hệ thống các khách sạn Mường Thanh trên toàn quốc và nước</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px">21.05.2020 ~ 31.12.2020</p>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p>NOVOTEL LUXURY ĐÀ NẴNG</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px"><i class="fas fa-tags"></i>ƯU ĐÃI TẠI KHÁCH SẠN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col md-6">
            <div class="card">
                <img src="http://muongthanh.com/images/promotion/2020/12/07/resized/cover-_1607332210.png" alt="" width="100%">
                <div class="card-body">
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <h6>SUMMER MEGA SALES - SĂN DEAL KHỦNG CHỈ TỪ 499K</h6>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <button class="btn" style="background-color: #f2a900; border-color: #f2a900; color: white">CHI TIẾT</button>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p style="font-size: 14px; opacity: 0.5">Cơ hội sở hữu kỳ nghỉ như mơ với ưu đãi giá phòng cực đã chỉ từ 499K/Phòng/Đêm lần đầu tiên áp dụng trên toàn hệ thống các khách sạn Mường Thanh trên toàn quốc và nước</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px">21.05.2020 ~ 31.12.2020</p>
                            </div>
                        </div>
                    </div>
                    <div col md-12>
                        <div class="row">
                            <div class="col-md-7">
                                <p>NOVOTEL LUXURY ĐÀ NẴNG</p>
                            </div>
                            <div class="col-md-5" style="text-align: right">
                                <p style="font-size: 15px"><i class="fas fa-tags"></i>ƯU ĐÃI TẠI KHÁCH SẠN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 30px">
            <a href="#" style="text-decoration: none; color: black">XEM THÊM</a>
        </div>
    </div>

    <div class="booking-button">
        <a href="/hotel/checkin" style="background-color: #FFC107">
            {{-- <img src="{{asset('/public/booking-button.png')}}" id="fixedbutton" style="position: fixed; top: 21%; right: 5%;"> --}}
            <img src="{{asset('/public/booking-button.png')}}" id="fixedbutton" style="position: fixed; top: 377px; right: 67px; z-index: 2">
        </a>
    </div>
    <div class="nav-button">
        <a href="#" style="background-color: #FFC107">
            {{-- <img src="{{asset('/public/booking-button.png')}}" id="fixedbutton" style="position: fixed; top: 21%; right: 5%;"> --}}
            <img src="{{asset('/public/nav-button.png')}}" id="fixedbutton" style="position: fixed; top: 377px; left: 67px; z-index: 2">
        </a>
    </div>
</div>
@endsection