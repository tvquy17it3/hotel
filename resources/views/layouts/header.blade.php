<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-lg  navbar-light" style="background-color:#ffc107">
              <a class="navbar-brand" href="/hotel">NOVOTEL  </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="/hotel/khachsan">KHÁCH SẠN <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/hotel/datphong">ĐẶT PHÒNG</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/hotel/danhgia">XEM ĐÁNH GIÁ</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      ƯU ĐÃI
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/hotel/lehoi">LỄ HỘI</a>
                      <a class="dropdown-item" href="/hotel/muahe">MÙA HÈ</a>
                      <a class="dropdown-item" href="/hotel/tet">TẾT</a>
                    </div>
                  </li>
                </ul>
                 @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/admin') }}">Admin</a>
                        <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
             </div>
            </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <div class="footer">
    <div class="row g-0 " style="margin-top:20px;">
        <div class="col-md-3 border-right border-light" style="background-color: #6C757D; color:white;">
            <div class="row g-0">
                <a href="#" class="verticalCenter">VỀ CHÚNG TÔI</a>
            </div>

        </div>
        <div class="col-md-3 border-right  border-light" style="background-color: #6C757D; color:white;">
            <div class="row g-0">
                <a href="#" class="verticalCenter">ĐÁNH GIÁ</a>
            </div>
        </div>
        <div class="col-md-3 border-right  border-light" style="background-color: #6C757D; color:white;">
            <div class="row g-0">
                <a href="#" class="verticalCenter">TUYỂN DỤNG</a>
            </div>
        </div>
        <div class="col-md-3 border-right border-light" style="background-color: #6C757D; color:white;">
            <div class="row g-0">
                <a href="#" class="verticalCenter">LIÊN HỆ</a>
            </div>
        </div>
    </div>
    <div class="row g-0" style="background-color: rgb(242, 169, 0);">
        <div class="col-md-3 " style="margin-top: 20px;">
            <div class="row g-0" class="verticalCenter">
                <p class="textCenter" style="color: black;">NHẬN THÔNG TIN TUYỂN DỤNG</p>
            </div>
            <div class="row g-0">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img src="public/tt.svg" style="font-family : Arial, sans-serif !important; margin-bottom: 20px;">
                </div>
                <div class="col-md-1"></div>
            </div>


        </div>
        <div class="col-md-6" style="margin-top: 20px;">
            <div class="row g-0" class="verticalCenter">
                <p class="textCenter" style="color: black;">
                    <img src="public/td.svg"
                        style="font-family : Arial, sans-serif !important; margin-bottom: 20px; margin-left: 40px;">
                </p>
            </div>

        </div>
        <div class="col-md-3" style="margin-top: 20px;">
            <div class="row g-0" class="verticalCenter">
                <p class="textCenter" style="color: black;">GIẢI ĐÁP MỌI VƯỚNG MẮC</p>
            </div>
            <div class="row g-0">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img src="public/hotro.svg"
                        style="font-family : Arial, sans-serif !important; margin-bottom: 20px; margin-left: 40px;">
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
