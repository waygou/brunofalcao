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
    <title>Bruno Falcão - My website</title>
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
                        <li class="alf-overlay-menu-item"><a href="/">Home</a></li>
                        <li class="alf-overlay-menu-item"><a href="about.html">About Me</a></li>
                        <li class="alf-overlay-menu-item"><a href="portfolio.html">My Projects</a></li>
                        <li class="alf-overlay-menu-item"><a href="blog.html">My Blog</a></li>
                        <li class="alf-overlay-menu-item"><a href="contact.html">Contact me</a></li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="alf-header-container d-flex">
                            <!-- Logo -->
                            <div class="text-center flex-grow-1">
                                <a href="/"><h1 class="title-block">BRUNO FALCÃO</h1></a>
                            </div>
                        </div>
                        <!-- Hamburger Menu -->
                        <div class="menu-wrapper">
                            <a href="#" class="alf-hamburger-trigger alf-hamburger-trigger d-flex align-items-center justify-content-center">
                                <div class="alf-hamburger-wrapper align-self-center "> <span></span> <span></span> <span></span> </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Homepage Slider -->
        <div class="container-fluid">
            <section class="alf-section-slider">
                <div class="alf-container-center">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-block">
                                    <div class="swiper-slide-block-img">
                                        <a href="post.html"><img src="/vendor/brunofalcao/images/slider.jpg" alt=""></a>
                                    </div>
                                    <div class="swiper-slide-block-text">
                                        <h2 class="alf-main-title">2019<br />Resolutions<span></span></h2>
                                        <h3 class="alf-main-subtitle">TAGS — <span> • <a href="http://www.clix.pt" target="_blank">Enjoying life</a> • <a href="http://www.clix.pt" target="_blank">Year 2019</a> • <a href="http://www.clix.pt" target="_blank">Personal thoughts</a></span></h3>
                                        <p class="alf-paragraph">I wish that Eloquent could have existed before. It's not everyday that we have a beautiful ORM library like this one, full of innovative features that will capture your eye and coding creativity to build amazing web projects.</p>
                                        <a class="alf-link" href="post.html">Read more</a></div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-block">
                                    <div class="swiper-slide-block-img">
                                        <a href="post.html"> <img src="/vendor/brunofalcao/images/slider.jpg" alt=""> </a>
                                    </div>
                                    <div class="swiper-slide-block-text">
                                        <h2 class="alf-main-title">Creative<br>Design<span>.</span></h2>
                                        <h3 class="alf-main-subtitle">TAGLINE — <span> • Dream • Create • Inspire</span></h3>
                                        <p class="alf-paragraph">Quisque pulvinar elitc Nam placerat dui lementm anthe efhe fermentum. Integer sodales augue velleo aliquam ranaalf feugiat. Fusce mollis augue sit amet hendrerit vestibulum. Duisteyerionyer venenatis lacus.</p>
                                        <a class="alf-link z-index-5" href="post.html">Discover</a> <span class="alf-number">2</span> </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </div>
                        <div class="swiper-button-prev"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="alf-footer-wrapper">
                            <ul class="alf-footer-social">
                                <li class="alf-footer-social-item"><a href="https://twitter.com/brunocfalcao" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li class="alf-footer-social-item"><a href="www.linkedin.com/in/brunofalcao" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li class="alf-footer-social-item"><a href="mailto:bruno.c.falcao@brunofalcao.me" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                <li class="alf-footer-social-item"><a href="http://www.laravel.com" target="_blank"><i class="fa fa-heart"></i></a></li>
                            </ul>
                            <p class="copyright"> Copyright © {{ date('Y') }} — Content rights reserved.<br /><a href="http://www.publico.pt" target="_blank">Codebase</a> open source in <a href="http:/www.github.com" target="_blank">Github</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    @include('website::partials.scripts')
</body>
</html>
