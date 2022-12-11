<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{--    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">--}}
    {{--    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">--}}
    {{--    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/css/open-iconic-bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/magnific-popup.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/aos.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{asset("assets/css/bootstrap-datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/jquery.timepicker.css")}}">


    <link rel="stylesheet" href="{{asset("assets/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/icomoon.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>
<body>

<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

    <!-- Main Sidebar Container -->
    @yield('sidebar')

    @yield('main_content')
    <div id="colorlib-main">
        <section class="ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <!-- Content Wrapper. Contains page content -->
                    @yield('content')

                    <!-- Footer -->
                    @yield('footer')
                </div>
            </div>
        </section>
    </div>

</div><!-- END PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/jquery-migrate-3.0.1.min.js")}}"></script>
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.easing.1.3.js")}}"></script>
<script src="{{asset("assets/js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.stellar.min.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("assets/js/aos.js")}}"></script>
<script src="{{asset("assets/js/jquery.animateNumber.min.js")}}"></script>
<script src="{{asset("assets/js/scrollax.min.js")}}"></script>
{{--<script src="{{asset("assets/js/google-map.js")}}"></script>--}}
<script src="{{asset("assets/js/main.js")}}"></script>
</body>
</html>
