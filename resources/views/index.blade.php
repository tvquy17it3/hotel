@extends('layouts.header')
@section('title', 'HOTEL ')
@section('content')
<style>
    ul > li {
        display: inline-block;
        display: inline;
        zoom: 1;
    }
    #button-right {
      width: 0;
      height: 0;
      border: 50px solid transparent;
      border-bottom-color: red;
      position: relative;
      top: -50px;
    }
    #diamond:after {
      content: '';
      position: absolute;
      left: -50px;
      top: 50px;
      width: 0;
      height: 0;
      border: 50px solid transparent;
      border-top-color: red;
    }
    .row-content {
        text-decoration: none;
        padding: 20px 0;
        text-align: center;
        justify-content: center;
        vertical-align: middle;
        display: flex;
    }
    .booking-button {
        width: 70px;
        height: 70px;
        background-color: #FFC107;
        transform: rotate(45deg);
    }
    .wrapper1 {
        position: relative; 
    
    }

    .image1 {
        position:relative;
        display:inline-block;
    }
    .text1 {
        font-weight:600;
        font-size:1.25em;
        position: absolute;
        top:0; bottom:0;left:0;right:0;
        display: table;
        vertical-align:middle;
        opacity:0;
        margin: auto;
        width:100%;
    }

    .text1 {
        text-align:center;
        transition: .5s ease-in-out all;
    }

    .image1:hover img.image1 {
        opacity:.3;
    }
    .image1:hover .text1{
        opacity:1;
    }
</style>
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
    <div class="slider">
        <div id="button-right" style="background-color: red">
    
        </div>
        {{-- <div style="display: flex; justify-content: center">
            <img src="http://muongthanh.com/images/slideshow/2019/10/16/slideshow_large/true-viet-nam_banner-web_1_1571217576.jpg" width="100%" height="587">
        </div> --}}
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://muongthanh.com/images/slideshow/2019/10/16/slideshow_large/true-viet-nam_banner-web_1_1571217576.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://muongthanh.com/images/slideshow/2019/10/16/slideshow_large/true-viet-nam_banner-web_1_1571217576.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://muongthanh.com/images/slideshow/2019/10/16/slideshow_large/true-viet-nam_banner-web_1_1571217576.jpg" class="d-block w-100" alt="...">
                </div>
            {{-- </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a> --}}
        </div>
    </div>

    <div class="content">
        <div class="row g-0 " style="margin-top:20px;">
            <div class="col-md-3 border-right border-light" style="background-color: #FFC107; color:white;">
                <div class="row g-0">
                    <a href="#" class="verticalCenter" style="color: black">THƯƠNG HIỆU 5 SAO</a>
                </div>
                <img src="http://muongthanh.com/images/trademark/type/2019/05/original/brand_1_1556849367.jpg" height="443" width="100%">
            </div>
            <div class="col-md-3 border-right  border-light" style="background-color: #FFC107; color:white;">
                <div class="row g-0">
                    <a href="#" class="verticalCenter" style="color: black">ĐIỂM ĐẾN TUYỆT VỜI</a>
                </div>
                <img src="http://muongthanh.com/images/trademark/type/2019/05/original/brand_2_1556849374.jpg" height="443" width="100%">
            </div>
            <div class="col-md-3 border-right  border-light" style="background-color: #FFC107; color:white;">
                <div class="row g-0">
                    <a href="#" class="verticalCenter" style="color: black">ƯU ĐÃI HẤP DẪN</a>
                </div>
                <img src="http://muongthanh.com/images/trademark/type/2019/10/original/ovelay2_1570768066.jpg" height="443" width="100%">
            </div>
            <div class="col-md-3 border-right border-light" style="background-color: #FFC107; color:white;">
                <div class="row g-0">
                    <a href="#" class="verticalCenter" style="color: black">DỊCH VỤ CAO CẤP</a>
                </div>
                <img src="http://muongthanh.com/images/trademark/type/2019/05/original/brand_4_1556849388.jpg" height="443" width="100%">
            </div>
        </div>
    </div>

    <div class="discount">
        <div class="row g-0" style="margin-top:20px">
            <div class="col-md-4 border card text-center">
                <div class="col-md-12">
                    <div class="card-body">
                        <h6 class="card-title"><i class="fas fa-tags"></i>ƯU ĐÃI KHÁCH SẠN</h6>
                        <hr />
                        <h4 class="card-text">COMBO PHÒNG GIA ĐÌNH</h4>
                        <hr />
                        <h6 class="card-title"></i>01/01/2021 - 02/01/2021</h6>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4 border card text-center" >
                <div class="col-md-12">
                    <div class="card-body">
                        <h6 class="card-title"><i class="fas fa-tags"></i>ƯU ĐÃI KHÁCH SẠN</h6>
                        <hr />
                        <h4 class="card-text">COMBO PHÒNG GIA ĐÌNH</h4>
                        <hr />
                        <h6 class="card-title"></i>01/01/2021 - 02/01/2021</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border card text-center" >
                <div class="col-md-12">
                    <div class="card-body">
                        <h6 class="card-title"><i class="fas fa-tags"></i>ƯU ĐÃI KHÁCH SẠN</h6>
                        <hr />
                        <h4 class="card-text">COMBO PHÒNG GIA ĐÌNH</h4>
                        <hr />
                        <h6 class="card-title"></i>01/01/2021 - 02/01/2021</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-md-12" style="text-align: right">
                <a href="#" style="text-decoration: none; color: #636B6F">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
        <div class="row g-0" style="margin-top: 20px; display: flex">
            <div class="col-md-6 benefit" style="flex: 1">
                <div class="card">
                    <div class="card-body">
                        <img src="http://muongthanh.com/images/config/icon3_1558584975.jpg" width="100%">
                        <h5 class="card-title text-center" style="margin-top: 10px">ĐẬM ĐÀ BẢN SẮC VIỆT</h5>
                        <p class="card-text">Khởi nguồn từ vùng đất Điện Biên lịch sử, nơi mang đậm phong cách của dân tộc Thái vùng Tây Bắc, mỗi khách sạn Mường Thanh đều thừa hưởng nét tinh tế trong cái nôi văn hóa ấy, từ hoa ban, váy thái, đến rượu táo mèo, xôi nếp nương. Khi nhớ đến Mường Thanh, du khách sẽ nhớ đến màu sắc thuần Việt, tạo nên bởi sự giao thoa giữa văn hóa đặc trưng của vùng núi Tây Bắc và dịch vụ chân thành trong nụ cười hồn hậu của con người Việt Nam.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 benefit" style="flex: 1">
                <div class="card">
                    <div class="card-body">
                        <img src="http://muongthanh.com/images/config/icon3a_1558585109.jpg" width="100%">
                        <h5 class="card-title text-center" style="margin-top: 10px">HỆ THỐNG KHÁCH SẠN LỚN NHẤT VIỆT NAM</h5>
                        <p class="card-text">Mường Thanh được chứng nhận là “Chuỗi khách sạn tư nhân lớn nhất Đông Dương” với hệ thống trên 60 khách sạn phủ hơn 40 tỉnh thành từ Bắc vào Nam và nước bạn Lào. Mỗi khách sạn Mường Thanh đều thừa hưởng nét tinh tế trong cái nôi văn hóa ấy, từ hoa ban, váy thái. Trên muôn nẻo hành trình khám phá Việt Nam, du khách có thể lựa chọn Mường Thanh là điểm dừng chân lý tưởng, hoàn toàn yên tâm về sản phẩm đồng nhất và các dịch vụ đa dạng theo nhu cầu.</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row g-0" id="rating" style="margin-top: 20px">
            <div class="col-md-3 text-center border" style="align-items: center; display: flex; justify-content: center">
                <img src="public/badge.PNG">
            </div>
            <div class="col-md-6 text-center border">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/public/review.PNG')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/public/review2.PNG')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/public/review3.PNG')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 text-center border" style="align-items: center; display: flex; justify-content: center">
                <img src="public/badge.PNG">
            </div>
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
<script>

</script>
@endsection
