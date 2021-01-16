@extends('layouts.header')
@section('title', 'HOTEL ')
@section('content')
<div class="container">
    <div class="row g-0">
        <img width="190" height="70"
            src="https://www.novotel-danang-premier.com/wp-content/themes/novotel-template/images/logo/logo-novotel.svg"
            alt="Novotel Danang Premier Han River"
            style="font-family : Arial, sans-serif !important; margin-bottom: 20px;">
    </div>
    <div class="row g-0">
        <label style="text-align: center; width: 100%; ">
            <h4>Danh sách các phòng đã đặt</h4>
        </label>
        <div class="row g-0">
            <div class="col-md-1"></div>

            <div class="col-md-2 border border-dark round" style="padding: 0; border-radius: 10px;">
                <div class=" nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active tab" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">Lễ hội</a>
                    <a class="nav-link tab" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Valentine</a>
                    <a class="nav-link tab" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">26 tháng 3</a>
                    <a class="nav-link tab" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                        role="tab" aria-controls="v-pills-settings" aria-selected="false">Quốc Khánh</a>
                </div>
            </div>
            <div class="col-md-8" style="padding-left: 10px;">
                <form method="POST" action="http://localhost/hotel/vieworder"
                    class="form-inline d-flex justify-content-center md-form form-sm mt-0" style="margin: 10px;">
                    {{ csrf_field()}}
                    <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                        aria-label="Search" name="searchPhone" />
                    <button type="submit" class="btn btn-outline-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg> Search
                    </button>
                </form>
                <div class="overflow-auto" style="height: 60vh;">
                    @foreach($order as $value)
                    @component('ordered', ['roomInfo'=>['people'=>$value->people, 'dateCheckIn'=>$value->checkIn,
                    'dateCheckOut'=>$value->checkOut, 'price'=>$value->price,'detail'=>$value->orderDetail]])
                    @endcomponent
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
    </div>
</div>
@endsection