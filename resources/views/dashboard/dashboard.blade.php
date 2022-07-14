<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <!-- === wrapper section === -->
    <section id="wrapper" class="d-flex w-100">
        <!-- aside nav-->
        <aside class="border-right shadow-sm" id="aside-nav">
            <!-- aside logo brand -->
            <a href="#" class="aside-brand text-decoration-none border-bottom mb-3">
                <i class="bi bi-stack fs-4" style="vertical-align: middle;"></i>
                <span class="ms-2">Dashboard</span>
            </a>
            <!-- /aside logo brand -->

            <!-- aside nav ul list -->
            <ul class="nav flex-column" id="aside-nav-ul">
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'dashboard' ? 'active' : '' }}" href="/dashboard">
                        <i class="bi bi-bar-chart-line fs-5" style="vertical-align: middle;"></i>
                        <span class="ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::path() == 'dashboard/book' ? 'active' : '' }}" href="/dashboard/book">
                        <i class="bi bi-book fs-5" style="vertical-align: middle;"></i>
                        <span class="ms-2">Buku</span>
                    </a>
                </li>
            </ul>
            <!-- /aside nav ul list -->
        </aside>
        <!-- /aside nav-->

        <!-- === main === -->
        <main class="w-100 bg-light d-flex flex-column dash" id="main">
            <!-- === header === -->
            <header id="header-navbar" class="sticky-top w-100">
                <nav class="navbar navbar-expand navbar-light bg-white shadow-sm w-100">
                    <div class="container-fluid">

                        <div class="border rounded-circle shadow-sm p-2" id="aside-toggle-btn">
                            <!-- svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <!-- /svg -->
                        </div>

                        <div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown user-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>Fanny Maulana</span>
                                    </a>
                                    <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/home">Home</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                               Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- === /header === -->

            <!-- === main body section start === -->

            @yield('content')

            <!-- === footer === -->
            <footer id="footer" class="bg-dark py-3 text-white text-center shadow-sm mt-auto">
                <div>Copyright © Bookslide 2022. All Rights Reserved.</div>
            </footer>
            <!-- === /footer === -->

        </main>
        <!-- === /main === -->


    </section>
    <!-- === /wrapper section === -->

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>