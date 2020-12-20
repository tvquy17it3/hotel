@extends('layouts.app')

@section('submit')
<div class="container">
    <div class="row g-0">
        <img width="190" height="70"
            src="https://www.novotel-danang-premier.com/wp-content/themes/novotel-template/images/logo/logo-novotel.svg"
            alt="Novotel Danang Premier Han River"
            style="font-family : Arial, sans-serif !important; margin-bottom: 20px;">
    </div>
    @component('status')
    @slot('numStep') 4 @endslot
    @endcomponent
    <div class="row g-0">
        <div class="row g-0">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <label>
                    <h4>Thông báo</h4>
                </label>
                <div class="row g-0 border border-warning" style="border-radius: 50px 50px;">
                    <div class="row g-0" style="padding: 20px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color:green;height: 60px;">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                            </path>
                        </svg>
                    </div>

                    <div class="row g-0">
                        <div class="row">
                            <h3>
                                <p style="text-align:center;">
                                    Bạn đã đặt phòng thành công
                                </p>
                            </h3>
                        </div>
                        <div class="row">
                            <h6>
                                <p style="text-align:center;">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi. Thông tin
                                    phòng
                                    sẽ được gửi đến tin nhắn điện thoại của bạn</p>
                            </h6>
                        </div>
                        <div class="row">
                            <a href="#" style="text-align:center; color: blue;">
                                <h6>Kiểm tra phòng đã đặt</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-2"></div>
        </div>
    </div>

</div>
@component('footer')

@endcomponent
@endsection