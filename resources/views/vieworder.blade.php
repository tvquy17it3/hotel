@extends('layouts.app')

@section('vieworder')
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
                <div class="overflow-auto" style="height: 60vh;">
                    @for ($i = 0; $i < 5; $i++) @component('ordered') @endcomponent @endfor </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
        </div>
    </div>
    @component('footer')

    @endcomponent
    @endsection