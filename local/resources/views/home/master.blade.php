<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from eazzy.me/html/bella-tools/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jan 2016 01:29:24 GMT -->
<head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mobile Shop</title>
        <base href="{{asset('')}}" /> 

        <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="assets/ico/logo.png">

        <!-- CSS Global -->
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
        <link href="assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="assets/css/theme.css" rel="stylesheet">
        <link href="assets/css/theme-blue-1.css" rel="stylesheet" id="theme-config-link">

        <!-- Head Libs -->
        <script src="assets/plugins/modernizr.custom.js"></script>

        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="home" class="wide">
        <!-- PRELOADER -->
        <div id="preloader">
            <div id="preloader-status">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
                <div id="preloader-title">Loading</div>
            </div>
        </div>
        <!-- /PRELOADER -->

        <!-- WRAPPER -->
        <div class="wrapper">

            <!-- Popup: Shopping cart items -->
            @include('home.blocks.modelfade')
            <!-- /Popup: Shopping cart items -->

            <!-- Header top bar -->
            @include('home.blocks.topbar')
            
            <!-- /Header top bar -->

            <!-- HEADER -->
            @include('home.blocks.header')
            
            <!-- /HEADER -->

            <!-- CONTENT AREA -->
            @yield('content')
            
            <!-- /CONTENT AREA -->

            <!-- FOOTER -->
            @include('home.blocks.footer')
            <!-- /FOOTER -->

            <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

        </div>
        <!-- /WRAPPER -->

        <!-- JS Global -->
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
        <script src="assets/plugins/superfish/js/superfish.min.js"></script>
        <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
        <script src="assets/plugins/jquery.sticky.min.js"></script>
        <script src="assets/plugins/jquery.easing.min.js"></script>
        <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
        <script src="assets/plugins/smooth-scrollbar.min.js"></script>

        <!-- JS Page Level -->
        <script src="assets/js/theme.js"></script>

        <!--[if (gte IE 9)|!(IE)]><!-->
        <script src="assets/plugins/jquery.cookie.js"></script>
        <script src="assets/js/theme-config.js"></script>
        <script src="assets/js/myscript.js"></script>
        <!--<![endif]-->

    </body>

<!-- Mirrored from eazzy.me/html/bella-tools/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jan 2016 01:30:07 GMT -->
</html>