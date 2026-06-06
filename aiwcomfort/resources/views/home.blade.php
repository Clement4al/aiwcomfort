<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce">
    <meta name="description" content="Taracon">
    <!-- css file -->
    <link rel=stylesheet href="{{ asset('css/bootstrap.min.css') }}">
    <link rel=stylesheet href="{{ asset('css/ace-responsive-menu.css') }}">
    <link rel=stylesheet href="{{ asset('css/menu.css') }}">
    <link rel=stylesheet href="{{ asset('css/fontawesome.css') }}">
    <link rel=stylesheet href="{{ asset('css/flaticon.css') }}">
    <link rel=stylesheet href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel=stylesheet href="{{ asset('css/animate.css') }}">
    <link rel=stylesheet href="{{ asset('css/slider.css') }}">
    <link rel=stylesheet href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&amp;family=Poppins:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Responsive stylesheet -->
    <link rel=stylesheet href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!-- Title -->
    <title>Gramma</title>
    <!-- Favicon -->
{{--    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />--}}
{{--    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />--}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body data-spy="scroll">
<div class="wrapper ovh">
    <div class="preloader"></div>

@include('nav')

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1">
        <div class="mobile-menu">
            <div class="header stylehome1 home10_style">
                <div class="menu_and_widgets">
                    <div class="mobile_menu_bar float-start"> <a class="menubar" href="#menu"><span></span></a> <a class="mobile_logo" href="#"><span class="text-thm">.</span></a> </div>
                    <div class="mobile_menu_widget_icons">
                        <ul class="cart mt15">
                            <li class="list-inline-item"> <a class="cart_btn signin-filter-btn" href="#"><span class="icon flaticon-profile"></span></a> </li>
                            <div class="fw-bold text-white">
                                <p class="color-white">Sign In</p>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="posr">
                    <div class="mobile_menu_close_btn"><span class="flaticon-close"></span></div>
                </div>
            </div>
        </div>
        <!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li>
                    <span>Home</span>
                    <ul>
                        <li><a href="index1.html">Home V1</a></li>
                    </ul>
                </li>
                <li>
                    <span>About Us</span>
                    <ul>
                        <li><a href="index1.html">Home V1</a></li>
                    </ul>
                </li>
                <li>
                    <span>Contact Us</span>
                    <ul>
                        <li><a href="index1.html">Home</a></li>
                    </ul>
                </li>


            </ul>
        </nav>

    </div>

    <div class="body_content_wrapper position-relative">

         @include('banner')
        @include('section2')
        @include('section3')
        @include('section4')
        @include('section5')
        @include('section6')
        @include('section7')
        @include('section8')

      @include('footer')

        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a> </div>
</div>
<!-- Wrapper End -->
<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('js/isotop.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/scrollbalance.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/pricing-slider.js') }}"></script>
<!-- about scripts -->
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<!-- scripts for shop.show -->
<script src="{{ asset('js/jquery.ez-plus.js') }}"></script>

<!-- Custom script for all pages -->
</body>
</html>
