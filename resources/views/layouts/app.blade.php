<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Laravel') }}
        @if(!empty($route))
            {{ ' | '.$route }}
        @endif
    </title>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark p-4 main-nav" style="z-index: 100">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset("img/logo-light.png") }}" height="50px" id="logo-brand">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item btn btn-outline-light btn-nav me-3" id="btn-nav">
                            <a href="/product" class="nav-link">Produk</a>
                        </li>
                        <li class="nav-item btn btn-outline-light btn-nav me-5" id="btn-nav">
                            <a href="/dashboard" class="nav-link">Dashboard</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer style="background-color: #262b30; color: white;">

        <!-- Footer Links -->
        <div class="container text-center text-md-start pt-5" style="max-width: 1150px">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 pl-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-2 mb-4 fs-1 fw-bold">BOOKSLIDE</h5>
                    <p style="color: #ababab" class="footer-text">
                        Bookslide menyediakan berbagai jenis buku untuk dibeli maupun disewa 
                        di seluruh wilayah Indonesia. Kami bekerja sama dengan para penerbit 
                        secara langsung untuk memberi Anda pilihan buku terlengkap dan berkualitas.
                    </p>

                </div>
                <!-- End of Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-1 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-light text-uppercase mt-3 mb-4">Rekan</h5>
                    <ul class="list-unstyled footer-text">
                        <li>
                            <a href="#!" class="alink">Gramedia</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">BukaBuku</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">BukuKita</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Togamas</a>
                        </li>
                    </ul>

                </div>
                <!-- End of Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto footer-text">

                    <!-- Links -->
                    <h5 class="font-weight-light text-uppercase mt-3 mb-4 ">Ikuti Kami</h5>
                    <p style="color: #ababab">Ikuti informasi terbaru dari kami di media sosial:</p>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="alink">Facebook</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Twitter</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Instagram</a>
                        </li>
                        <li>
                            <a href="#!" class="alink">Youtube</a>
                        </li>
                    </ul>

                </div>
                <!-- End of Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 pr-4 mx-auto footer-text">

                    <!-- Links -->
                    <h5 class="font-weight-light text-uppercase mt-3 mb-4">Hubungi Kami</h5>
                    <p style="color: #ababab">Tertarik berlangganan cerita/artikel kami, yuk isi formulir di bawah</p>
                    <ul class="list-unstyled">
                        <li class="row" style="color: #ababab">
                            <div class="col-sm-1">
                                <i class="bi bi-telephone-plus mr-3"></i>
                            </div>
                            <div class="col-sm-10">
                                <p>Telepon : +62-812-2952-7357</p>
                            </div>
                        </li>
                        <li class="row" style="color: #ababab">
                            <div class="col-sm-1">
                                <i class="bi bi-envelope mr-3"></i>
                            </div>
                            <div class="col-sm-10">
                                <p>Bookslide@gmail.co.id</p>
                            </div>
                        </li>
                        <li class="row" style="color: #ababab">
                            <div class="col-sm-1">
                                <i class="bi bi-geo-alt mr-3"></i>
                            </div>
                            <div class="col-sm-10">
                                <p>Jl. Perintis Kemerdekaan no.107 Temanggung - Indonesia</p>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- End of Grid column -->

            </div>
            <!-- End of Grid row -->

        </div>
        <!-- End of Footer Links -->

        <br>

        <div class="footer-copyright text-center py-4"
            style="background-color: #192027; color: #999; font-weight: 100;">
            © Bookslide 2022. All rights reserved.
        </div>

    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
