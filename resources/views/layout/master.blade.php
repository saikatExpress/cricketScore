<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cricket Score - always up to date</title>

    {{-- Favicon image --}}
    <link rel="shortcut icon" href="{{ asset('images/logos/images.png') }}" type="image/x-icon">

    {{-- bootstrap cdb start from here --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- font awesome cdn from here --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    {{-- jquery cdn start from here --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    {{-- Custom Css Link here --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


    {{-- Javascript Onload advertisement --}}
    <div id="addDiv" class="addDiv">
        <div>
            <button id="closeBtn"><i class="fa-solid fa-circle-xmark"></i></button>
        </div>

        <div>
            <img style="display: block;margin-left:120px; margin-right:auto;"
                src="{{ asset('images/logos/onexbet-logo-white.webp') }}" alt="">
            <h4 class="text-center">Win more and more</h4>
            <p class="text-center">
                A new version is availabe now...
            </p>
            <p class="text-center mt-2">
                Also live streaming
                <a href="" class="btn btn-sm btn-primary">Live</a>
            </p>
        </div>
    </div>
    {{-- Javascript Onload advertisement --}}


    <header>

        <div class="top-header">
            <div class="header_left">
                <div>
                    <a href="https://www.sportsadda.com/" target="_blank">
                        <img style="width: 100%; height:50px" src="{{ asset('images/logos/images.jpeg') }}"
                            alt="">
                    </a>
                </div>
            </div>
            <div class="header_right">
                <div class="mt-3">
                    <p>
                        <i class="fa-solid fa-arrow-trend-up"></i><a class="text-decoration-none text-light"
                            href="">A quick match live now</a>
                    </p>
                </div>

                <div class="mt-3">
                    <p>
                        <a class="text-decoration-none text-light" href="">
                            Ban vs NZ (1st ODI) <span style="font-size: 5px; color:coral;"><i class="fa fa-circle"
                                    aria-hidden="true"></i></span> Live
                            Now
                        </a>
                    </p>
                </div>
                <div class="mt-3">
                    <p style="border: 1px solid #fff; border-radius:4px">
                        <a href="{{ route('register.us') }}" class="btn btn-sm btn-primary">Sign in <i
                                class="fa fa-user-circle" aria-hidden="true"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="main_body">
        <div class="left_side_bar">
            <div class="main_bar">
                <div class="search_form">
                    <form action="">
                        <input type="text" placeholder="Search">
                    </form>
                </div>
                <div class="menu_item">
                    <div class="m-4">
                        <i style="font-size:14px;" class="fa-solid fa-house"></i><a
                            style="text-decoration:none;color:#000;margin-left:15px; font-size:14px;"
                            href="">Home</a>
                    </div>

                    <!-- Cricket Menu -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center m-4">
                            <div class="d-flex align-items-center">
                                <i style="font-size:14px;" class="fa-solid fa-bowling-ball" id="cricketIcon"></i>
                                <a style="text-decoration:none;color:#000;margin-left:15px; font-size:14px;"
                                    href="javascript:void(0);" onclick="toggleContent('cricket')">Cricket</a>
                            </div>
                            <i class="fa-solid fa-arrow-right" id="cricketArrow"></i>
                        </div>
                        <div style="margin-left: 50px;" class="content" id="cricketContent">
                            <p><a href="{{ route('cricket.home') }}">Home</a></p>
                            <p><a href="">T20 League</a></p>
                            <p><a href="">Series</a></p>
                            <p><a href="">International cricket scores</a></p>
                            <p><a href="">All Cricket Scores</a></p>
                        </div>
                    </div>

                    <!-- Football Menu -->
                    <div class="d-flex justify-content-between align-items-center m-4">
                        <div class="d-flex align-items-center">
                            <i style="font-size:14px;" class="fa-regular fa-futbol" id="footballIcon"></i>
                            <a style="text-decoration:none;color:#000;margin-left:15px; font-size:14px;"
                                href="javascript:void(0);" onclick="toggleContent('football')">Football</a>
                        </div>
                        <i class="fa-solid fa-arrow-right" id="footballArrow"></i>
                    </div>
                    <div style="margin-left: 50px;" class="content" id="footballContent">
                        <p><a href="">Home</a></p>
                        <p><a href="">Scores</a></p>
                        <p><a href="">Premier League Scores</a></p>
                        <p><a href="">La Liga scores</a></p>
                        <p><a href="">Bundesliga Scores</a></p>
                    </div>

                    <!-- Kabbadi Menu -->
                    <div class="d-flex justify-content-between align-items-center m-4">
                        <div class="d-flex align-items-center">
                            <i style="font-size:14px;" class="fa-regular fa-hand-point-up" id="kabbadiIcon"></i>
                            <a style="text-decoration:none;color:#000;margin-left:15px; font-size:14px;"
                                href="javascript:void(0);" onclick="toggleContent('kabbadi')">Kabbadi</a>
                        </div>
                        <i class="fa-solid fa-arrow-right" id="kabbadiArrow"></i>
                    </div>
                    <div style="margin-left: 50px;" class="content" id="kabbadiContent">
                        <p><a href="">Home</a></p>
                        <p><a href="">Scores</a></p>
                        <p><a href="">Videos</a></p>
                        <p><a href="">News</a></p>
                        <p><a href="">Features</a></p>
                    </div>

                    <!-- eSport Menu -->
                    <div class="d-flex justify-content-between align-items-center m-4">
                        <div class="d-flex align-items-center">
                            <i style="font-size:14px;" class="fa-solid fa-gamepad" id="eSportIcon"></i>
                            <a style="text-decoration:none;color:#000;margin-left:15px; font-size:14px;"
                                href="javascript:void(0);" onclick="toggleContent('eSport')">eSport</a>
                        </div>
                        <i class="fa-solid fa-arrow-right" id="eSportArrow"></i>
                    </div>
                    <div style="margin-left: 50px;" class="content" id="eSportContent">
                        <p><a href="">Home</a></p>
                        <p><a href="">News</a></p>
                        <p><a href="">Features</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="right_side_bar">
            <div class="main_content">
                @yield('content')
            </div>
        </div>
    </div>


















    <script src="{{ asset('js/style.js') }}"></script>
</body>

</html>
