<html lang="{{__('language')['name']}}">
<head>
    <meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Larn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="manifest" href="site.webmanifest">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

<meta name="keywords" content="{{__('language')['keywords']}}">
<meta name="robots" content="follow">
<meta name="title" content="Larn">
<meta name="copyright" content="Blink">
<meta name="author" content="Blink">
<meta name="twitter:description" content="{{__('language')['description']}}">
<meta name="twitter:card" content="summary">
<meta property="og:image" content="assets/img/logo/logo.png">
<meta name="description" content="{{__('language')['name']}}">
<meta property="og:type" content="website">
<meta name="twitter:image" content="assets/img/logo/logo.png">
<meta name="twitter:title" content="Larn">
<link rel="icon" type="image/avif" sizes="53x55" href="assets/img/logo/logo.png">

<!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>


    @livewireStyles
</head>
<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img style="display: inline" src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="/"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="index.html">Larn</a></li>
                                        <li><a href="#features">{{__('navigation')['services']}}</a></li>
                                        <li><a href="#pricing">{{__('navigation')['pricing']}}</a></li>
                                        <li><a href="contact.html">{{__('navigation')['contact']}}</a></li>
                                        <li>                                        <div class="container flex justify-center mx-auto">
                                            <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                                                    <!-- Dropdown toggle button -->
                                                    <button @mouseover="open = true" class="flex items-center block p-2 rounded-md ">
                                                        <span><span class='fi fi-{{__('language')['name']}}'></span></span>
                                                        <svg class="w-6 h-6 text-white text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>

                                                    <!-- Dropdown menu -->
                                                    <div x-show="open"
                                                    x-transition:enter.duration.500ms
                                                    x-transition:leave.duration.800ms
                                                    class="absolute right-0 rounded-md shadow-xl">
                                                        <a href="{{ __('language')['selector']['first']['url'] }}"
                                                            class="hover:text-white">
                                                            <span class='fi fi-{{ __('language')['selector']['first']['name'] }}'></span>
                                                        </a>
                                                        <a href="{{ __('language')['selector']['second']['url'] }}"
                                                            class="hover:text-white">
                                                            <span class='fi fi-{{ __('language')['selector']['second']['name'] }}'></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

        <!-- Slider Area Start-->
        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">{{__('hero')['overtitle']}}</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">{{__('hero')['title']}}</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">{{__('hero')['subtitle']}}</p>
                                    <!-- Slider btn --><br>
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="https://github.com/MaximoBrandi/larn" class="btn radius-btn">{{__('hero')['download']}}</a>
                                        <!-- Video Btn -->
                                        <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video btn radius-btn ani-btn" href="{{__('hero')['videolink']}}"><i class="fas fa-play"></i> Descubre Larn</a>
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">{{__('hero')['overtitle']}}</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">{{__('hero')['title']}}</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">{{__('hero')['subtitle']}}</p>
                                    <!-- Slider btn -->
                                   <div class="slider-btns">
                                        <!-- Hero-btn -->
                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="https://github.com/MaximoBrandi/larn" class="btn radius-btn">{{__('hero')['download']}}</a>
                                        <!-- Video Btn -->
                                        <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href="{{__('hero')['videolink']}}"><i class="fas fa-play"></i></a>
                                   </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="assets/img/hero/hero_right.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->
        <!-- Best Features Start -->
        <section id="features" class="best-features-area section-padd4">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-8 col-lg-10">
                        <!-- Section Tittle -->
                        <div class="row">
                            <div class="col-lg-10 col-md-10">
                                <div class="section-tittle">
                                    <h2>{{__('features')['title']}}</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Section caption -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>{{__('features')['items']['first']['title']}}</h3>
                                        <p>{{__('features')['items']['first']['subtitle']}}</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>{{__('features')['items']['second']['title']}}</h3>
                                        <p>{{__('features')['items']['second']['subtitle']}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>{{__('features')['items']['third']['title']}}</h3>
                                        <p>{{__('features')['items']['third']['subtitle']}}</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-features mb-70">
                                    <div class="features-icon">
                                        <span class="flaticon-support"></span>
                                    </div>
                                    <div class="features-caption">
                                        <h3>{{__('features')['items']['fourth']['title']}}</h3>
                                        <p>{{__('features')['items']['fourth']['subtitle']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shpe -->
            <div class="features-shpae d-none d-lg-block">
                <img src="assets/img/shape/best-features.png" alt="">
            </div>
        </section>
        <!-- Best Features End -->
        <!-- Services Area Start -->
        <section class="service-area sky-blue section-padding2">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-tittle text-center">
                            <h2>{{__('services')['title']}}</h2>
                        </div>
                    </div>
                </div>
                <!-- Section caption -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-businessman"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">{{__('services')['items']['first']['title']}}</a></h4>
                                <p>{{__('services')['items']['first']['subtitle']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption active text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">{{__('services')['items']['second']['title']}}</a></h4>
                                <p>{{__('services')['items']['second']['subtitle']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services-caption text-center mb-30">
                            <div class="service-icon">
                                <span class="flaticon-plane"></span>
                            </div>
                            <div class="service-cap">
                                <h4><a href="#">{{__('services')['items']['third']['title']}}</a></h4>
                                <p>{{__('services')['items']['third']['subtitle']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!-- Best Pricing Start -->
        <section id="pricing" class="best-pricing pricing-padding" data-background="assets/img/gallery/best_pricingbg.jpg">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle section-tittle2 text-center">
                            <h2>{{__('pricing')['title']}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Best Pricing End -->
        <!-- Pricing Card Start -->
        <div class="pricing-card-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span>{{__('pricing')['items']['first']['name']}}</span>
                                <h4>{{__('pricing')['items']['first']['price']}}</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>{{__('pricing')['items']['first']['items']['first']['title']}}</li>
                                    <li>{{__('pricing')['items']['first']['items']['second']['title']}}</li>
                                    <li>{{__('pricing')['items']['first']['items']['third']['title']}}</li>
                                    <li>{{__('pricing')['items']['first']['items']['fourth']['title']}}</li>
                                </ul>
                                <a href="https://github.com/MaximoBrandi/larn" class="btn card-btn1">{{__('pricing')['items']['first']['get']}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card  text-center mb-30">
                            <div class="card-top">
                                <span>{{__('pricing')['items']['second']['name']}}</span>
                                <h4>{{__('pricing')['items']['second']['price']}}</h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>{{__('pricing')['items']['second']['items']['first']['title']}}</li>
                                    <li>{{__('pricing')['items']['second']['items']['second']['title']}}</li>
                                    <li>{{__('pricing')['items']['second']['items']['third']['title']}}</li>
                                    <li>{{__('pricing')['items']['second']['items']['fourth']['title']}}</li>
                                </ul>
                                <a href="services.html" class="btn card-btn1">{{__('pricing')['items']['second']['get']}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <span>{{__('pricing')['items']['third']['name']}}</span>
                                <h4>{{__('pricing')['items']['third']['price']}} <span>/ {{__('pricing')['items']['third']['month']}}</span></h4>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li>{{__('pricing')['items']['third']['items']['first']['title']}}</li>
                                    <li>{{__('pricing')['items']['third']['items']['second']['title']}}</li>
                                    <li>{{__('pricing')['items']['third']['items']['third']['title']}}</li>
                                    <li>{{__('pricing')['items']['third']['items']['fourth']['title']}}</li>
                                </ul>
                                <a href="services.html" class="btn card-btn1">{{__('pricing')['items']['third']['get']}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Card End -->

        <!-- Available App  Start-->
        <div class="available-app-area">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="app-caption">
                            <div class="section-tittle section-tittle3">
                                <h2>{{__('available')['title']}}</h2>
                                <p>{{__('available')['subtitle']}}</p>
                                <div class="app-btn">
                                    <a href="#" class="app-btn1"><img src="assets/img/shape/app_btn1.png" alt=""></a>
                                    <a href="#" class="app-btn2"><img src="assets/img/shape/app_btn2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="app-img">
                            <img src="assets/img/shape/available-app.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shape -->
            <div class="app-shape">
                <img src="assets/img/shape/app-shape-top.png" alt="" class="app-shape-top heartbeat d-none d-lg-block">
                <img src="assets/img/shape/app-shape-left.png" alt="" class="app-shape-left d-none d-xl-block">
                <!-- <img src="assets/img/shape/app-shape-right.png" alt="" class="app-shape-right bounce-animate "> -->
            </div>
        </div>
        <!-- Available App End-->
        <!-- Say Something Start -->
        <div class="say-something-aera pt-90 pb-90 fix">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                        <div class="say-something-cap">
                            <h2>{{__('collaborate')['title']}}</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3">
                        <div class="say-btn">
                            <a href="https://github.com/MaximoBrandi/larn" class="btn radius-btn">{{__('collaborate')['contact']}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="say-shape">
                <img src="assets/img/shape/say-shape-left.png" alt="" class="say-shape1 rotateme d-none d-xl-block">
                <img src="assets/img/shape/say-shape-right.png" alt="" class="say-shape2 d-none d-lg-block">
            </div>
        </div>
        <!-- Say Something End -->

    </main>
   <footer>

       <!-- Footer Start-->
      <div class="footer-main">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row  justify-content-between">
                    <div class="col-lg-3 col-md-4 col-sm-8">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo">
                                 <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p class="info1">{{__('footer')['slogan']}}</p>
                                </div>
                             </div>
                         </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('footer')['columns']['first']['name']}}</h4>
                                <ul>
                                    <li><a href="#">{{__('footer')['columns']['first']['items']['first']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['first']['items']['second']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['first']['items']['third']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['first']['items']['fourth']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['first']['items']['fifth']['title']}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>{{__('footer')['columns']['second']['name']}}</h4>
                                <ul>
                                    <li><a href="#">{{__('footer')['columns']['second']['items']['first']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['second']['items']['second']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['second']['items']['third']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['second']['items']['fourth']['title']}}</a></li>
                                    <li><a href="#">{{__('footer')['columns']['second']['items']['fifth']['title']}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>{{__('footer')['newsletter']['subtitle']}}</p>
                             </div>
                             <!-- Form -->
                             <div class="footer-form">
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder=" {{__('footer')['newsletter']['email']}} " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="assets/img/shape/form_icon.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Copy-Right -->
                <div class="row align-items-center">
                    <div class="col-xl-12 ">
                        <div class="footer-copy-right">
                           <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <script>document.write(new Date().getFullYear());</script> Larn by <a href="#">Blink</a> | <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
       <!-- Footer End-->

   </footer>

	<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    @livewireScripts
</body>
</html>
