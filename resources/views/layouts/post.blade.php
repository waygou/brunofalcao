<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=" width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>{{ $post->title }}</title>
    @include('website::partials.styles')
    @stack('styles.additional')
</head>
<body>
    <!-- Navigation Overlay -->
    <div class="alf-nav-overlay alf-nav-overlay-closed">
        <div class="alf-nav-overlay-inner">
            <div class="alf-nav-overlay-menu-wrapper">
                <div class="alf-left-menu-overlay">
                    <ul class="alf-nav-overlay-main-nav alf-overlay-menu">
                        @include('website::partials.navigation')
                    </ul>
                </div>
            </div>
            <a href="#" class="alf-button-nav-overlay-close"> <span></span>
                <svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
                    <circle fill="transparent" stroke="#000" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                </svg>
            </a>
        </div>
    </div>
    <div id="alf-page-wrapper">
        <!-- Header -->
        <header>
            @yield('post-header')
        </header>
        <!-- Post -->
        <div class="container">
            <div class="row">
                @yield('post-body')
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title-block txt-center">
                            <h1>ALF.</h1> </div>
                        <div class="alf-footer-wrapper">
                            <ul class="alf-footer-social">
                                <li class="alf-footer-social-item"><a href="index.html#"><i class="fa fa-facebook-f"></i></a></li>
                                <li class="alf-footer-social-item"><a href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li class="alf-footer-social-item"><a href="index.html#"><i class="fa fa-instagram"></i></a></li>
                                <li class="alf-footer-social-item"><a href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <p class="copyright"> Copyright © 2018 — All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @include('website::partials.scripts')
</body>
</html>
