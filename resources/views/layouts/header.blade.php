<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    html,
    body {
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
       /* Top right text */
    .top-right {
        position: absolute;
        max-width: 25%;
        top: 15px;
        right: 15px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
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

    .vertical-center {
        margin-top: 20px;
        margin-left: 0;
        padding-left: 0;
        padding-right: 0;
        float: left;
    }

    .verticalCenter {
        text-decoration: none;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .textCenter {
        text-align: center;
    }

    .row .icon {
        padding-left: 0;
        width: 37px;
        float: left;
        padding-right: 0;
        margin-right: 5px;
        margin-top: 10px;
        margin-left: 0;
        padding-left: 0;
    }

    .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .on {
        margin-bottom: 5px;
    }

    .tab {
        color: black;
    }

    .cutpad {
        padding-bottom: 5px;
        padding-top: 5px;
    }

    /* Container holding the image and the text */
    .image {
        position: relative;
        text-align: center;
        color: white;
    }

    /* Bottom left text */
    .bottom-left {
        position: absolute;
        bottom: 8px;
        left: 16px;
    }

    /* Top left text */
    .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
        max-width: 25%;
    }

 

    /* Bottom right text */
  /*  .bottom-right {
        position: absolute;
        bottom: 8px;
        right: 16px;
    }*/

    /* Centered text */
    .centered {
        position: absolute;
        font-size: 12px;
        top: 60%;
        left: 40%;
        transform: translate(-50%, -50%);
    }

    div.transbox {
        margin: 30px;
        background-color: #ffffff;
        opacity: 0.8;
        filter: alpha(opacity=80);
        /* sử dụng cho IE8 trở về trước */
    }

    div.transbox p {
        margin: 5;
        font-weight: bold;
        color: #000000;
    }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg  navbar-light" style="background-color:#ffc107">
            <a class="navbar-brand" href="/hotel">NOVOTEL </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="khachsan">KHÁCH SẠN <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkin">ĐẶT PHÒNG</a>
                    </li>
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="/hotel/danhgia">XEM ĐÁNH GIÁ</a> --}}
                        <a class="nav-link" id="danhgia" href="#rating">
                            XEM ĐÁNH GIÁ
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="vieworder">XEM ĐÃ ĐẶT</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ƯU ĐÃI
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="lehoi">LỄ HỘI</a>
                            <a class="dropdown-item" href="muahe">MÙA HÈ</a>
                            <a class="dropdown-item" href="tet">TẾT</a>
                        </div>
                    </li>
                </ul>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/admin') }}" >{{ Auth::user()->name }}</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    @else
                    <a href="{{ route('login') }}" >Login</a>
                    @endauth
                </div>
                @endif
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @component('footer')
    @endcomponent

</body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
</script>