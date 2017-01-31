<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>IDUN Pilkada</title>

    <!-- Shortcut Icon-->
    <link rel="shortcut icon" href="{{url('/')}}/main/resources/assets/images/shortcuticon.png"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{url('/')}}/main/resources/assets/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

    <!-- Styles -->
    <link rel="stylesheet" href="{{url('/')}}/main/resources/assets/css/bootstrap.min.css">


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .nav-custom{
            color: white;
        }

        .nav-custom:hover{
            color: deeppink;
        }
        @yield('css')
    </style>
</head>
<body id="app-layout">

<nav class="navbar navbar-default navbar-static-top" style="margin:0.1em 0 0 0 ; background: #a94442">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                IDUN Pilkada
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <!-- <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul> -->

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                    <li><a href="{{ url('/about') }}" style="color: white; " class="nav-custom"><i class="fa fa-users" aria-hidden="true"></i>About</a>
                    </li>
                    <li><a href="{{ url('/contact') }} " style="color: white; "><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Contact us</a>
                    </li>
                <li class="nav navbar-nav navbar-right" style="align-items: flex-end;text-align: left">
                    <a style="background: #a94442 ; border-width: 0cm;align-content: flex-start" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span style="color: white;align-content: flex-start;text-align: left">Tahun</span> <span class="caret"></span></a>
                        <ul class="dropdown-menu ">

                            <li><a href="#">2017</a></li>
                        </ul>
                </li>
            </ul>

        </div>

    </div>
</nav>

@yield('content')

<!--<div class="row text-center text-grey">
    <img src="{{url('/')}}/main/resources/assets/images/footericon.png"/>
</div>-->
@yield('footer')
        <!-- JavaScripts -->
<script src="{{url('/')}}/main/resources/assets/js/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
        crossorigin="anonymous"></script>
<script src="{{url('/')}}/main/resources/assets/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}


<!-- End Web-Stat code v 6.2 -->
<script>
    $(document).ready(function () {
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }

        function getBadge() {
            swal({
                title: "Selamat!",
                text: "Anda mendapatkan sebuah lencana.",
                imageUrl: "../core/resources/assets/images/badge.png"
            });
        }

        $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );

        $('[data-toggle="tooltip"]').tooltip();

        window.fbAsyncInit = function () {
            FB.init({
                appId: '238112516564694',
                xfbml: true,
                status: true,
                coockie: true,
                version: 'v2.6'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function postToFeed(title, desc, url, image) {
            var obj = {method: 'feed', link: url, picture: image, name: title, description: desc};

            function callback(response) {
            }

            FB.ui(obj, callback);
        }

        //Google Analytic
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-89978720-1', 'auto');
        ga('send', 'pageview');



        @yield('js')
    });
</script>
</body>
</html>
