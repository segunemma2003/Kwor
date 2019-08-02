<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>kwụọ | Peer-to-peer payment for you</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets/img/brand')}}" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="{{asset('assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css') }}">
    <!-- Page plugins -->
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/vendor/swiper/dist/css/swiper.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/vendor/%40fancyapps/fancybox/dist/jquery.fancybox.min.css')}}" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">


</head>

<body class="bg-dark bg-noise">


    <header class="header-transparent" id="header-main">

        <!-- Main navbar -->

        <nav class="navbar navbar-main navbar-expand-lg navbar-sticky navbar-transparent navbar-dark" id="navbar-main" style="background-color: #005502;">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="#">
                    <img alt="kwụọ" src="{{asset('assets/img/brand')}}" style="height: 50px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar-main-collapse">
                    <ul class="navbar-nav align-items-lg-center">
                        <li class="nav-item ">
                            <!-- <a class="nav-link" href="#">About</a> -->
                        </li>
                        <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                            <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">kwụọ for agents</a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#" role="button">Support</a> -->
                        </li>
                    </ul>

                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="{{--URL('/login')--}}" target="_blank">Log in</a> -->
                        </li>
                        <li class="nav-item mr-0">
                            <!-- <a href="{{--URL('/register')--}}" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon d-none d-lg-inline-flex"> -->
                                <!-- <span class="btn-inner--text">Register</span> -->
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>
@yield('content')
@include('layouts.new.footer')


    <!-- Core -->
    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/in-view/dist/in-view.min.js')}}"></script>




    <!-- Page plugins -->
    <script src="{{asset('assets/vendor/swiper/dist/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/%40fancyapps/fancybox/dist/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/typed.js/lib/typed.min.js')}}"></script>



    <!-- Theme JS -->

    <script src="{{asset('assets/js/theme.min.js')}}"></script>

</body>

</html>