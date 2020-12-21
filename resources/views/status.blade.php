<div class="row g-0" style="
    margin-top: 10px;
    margin-bottom: 30px;
">
    <div class="col-md-2 d-none d-lg-block"></div>
    <div class="col-md-8 border border-warning rounded-pill" style="padding-left:50px ;">
        @switch((int)(string)($numStep))
        @case(1)
        <div class="step">
            <img src="public/iconStep1-on.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin đặt phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep2-off.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Chọn phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep3-off.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin khách hàng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep4-off.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Thanh Toán</p>
        </div>
        @break
        @case(2)
        <div class="step">
            <img src="public/iconStep1-on.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin đặt phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep2-on.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Chọn phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep3-off.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin khách hàng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep4-off.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Thanh Toan</p>
        </div>
        @break

        @case(3)
        <div class="step">
            <img src="public/iconStep1-on.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin đặt phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep2-on.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Chọn phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep3-on.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin khách hàng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep4-off.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Thanh Toan</p>
        </div>
        @break
        @case(4)
        <div class="step">
            <img src="public/iconStep1-on.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin đặt phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep2-on.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Chọn phòng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep3-on.svg" class="icon">
            <p class="vertical-center" style="width: 160px;">Thông tin khách hàng</p>
        </div>
        <div class="step d-none d-lg-block">
            <img src="public/iconStep4-on.svg" class="icon">
            <p class="vertical-center" style="width: 100px;">Thanh Toan</p>
        </div>
        @break
        @default
        Default case...
        @endswitch


    </div>
    <div class="col-md-2 d-none d-lg-block"></div>
</div>