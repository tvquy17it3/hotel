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
    <div class="card col-md-12 border border-warning" style="max-width: 700px;margin: auto;">
        <div class="row g-0">
            <div class="col-md-3 border-end border-warning" style="margin: auto;width: 9vw; ">
                <h3 class="card-title">3 LÝ DO CHỌN LÀM VIỆC TẠI MƯỜNG THANH</h3>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne" style="font-size: 25px;">
                                    1. Phát triển bản thân toàn diện
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-size: 20px;">Novotel tạo cơ hội thuận lợi và
                                    điều kiện tối đa cho mỗi
                                    nhân sự đồng thời phát triển chuyên môn và trau dồi bản thân toàn diện.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo" style="font-size: 25px;">
                                    2. Cơ hội thăng tiến rộng mở
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-size: 20px;">Novotel tạo cơ hội thuận lợi và
                                    điều kiện tối đa cho mỗi
                                    nhân sự đồng thời phát triển chuyên môn và trau dồi bản thân toàn diện.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree" style="font-size: 25px;">
                                    3. Văn hóa doanh nghiệp độc đáo
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body" style="font-size: 20px;">Novotel tạo cơ hội thuận lợi và
                                    điều kiện tối đa cho mỗi
                                    nhân sự đồng thời phát triển chuyên môn và trau dồi bản thân toàn diện.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection