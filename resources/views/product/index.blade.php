<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('custom')
        <title>Social - Network, Community and Event Theme</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Webestica.com">
        <meta name="description" content="Bootstrap 5 based Social Media Network and Community Theme">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo URL::to('/'); ?>/public/assets/images/favicon.ico">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/font-awesome/css/all.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/tiny-slider/dist/tiny-slider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.css" />

        <link rel="stylesheet" type="css/text" href="<?php echo URL::to('/'); ?>/public/css/style_custom.css" />
        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/public/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo URL::to('/'); ?>/public/css/owl.theme.default.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/js/owl.carousel.min.js"></script>

        <style>
            .goog-te-gadget img {
                vertical-align: middle;
                border: none;
                display: none;
            }

            skiptranslate goog-te-gadget {
                display: none
            }

            body {
                top: 0px !important;
                position: static !important;
            }

            .goog-te-banner-frame {
                display: none !important
            }

            .goog-logo-link {
                display: none
            }

            ul li a {
                display: flex !important;
            }

            .detail {
                color: black !important;
            }

            .navbar-vertical {
                bottom: 0;
                display: block;
                top: 42px !important;
                width: 100% !important;

            }

            video.video_autoplay {
                height: 135px !important;
                object-fit: cover;
                border-top-left-radius: 4px !important;
                border-top-right-radius: 4px !important;
            }

            nav.border-b.border-gray-100 {
                z-index: 2 !important;
            }

            .owl-nav {
                display: none !important;
            }

            .owl-dots {
                display: none !important;
            }

            ol,
            ul {
                padding-left: 0px !important;
            }

            p.view {
                font-size: small !important;
            }

            h5.mb-0 {
                text-align: center;
            }

            /* .mb-3 {
            width: 60% !important;
            height: 30% !important;
        } */

            p {
                font-size: small !important;
            }

            a {
                text-transform: capitalize;
            }

            .avatar-img {
                width: 50% !important;
                height: 50% !important;
                object-fit: cover !important;
            }
            img.thumb {
                height: 40px;
                width: 40px !important;
                border-radius: 50%;
                margin:auto;
            }
            .mx-4 {
                margin-left: 2.5rem !important;
            }

            /* main background-color */
            main {
                background-color: white !important;
            }

            .page-content {
                height: 700px !important;
            }

            /* main col height */
            .col-12.mt-5 {
                margin-top: 0rem !important;
            }
        </style>
    </head>


    <body>

        <!-- **************** MAIN CONTENT START **************** -->

        <!-- =======================
  Header START -->

        <!-- Logo Nav END -->
        {{-- </header> --}}
        <!-- =======================
  Header END -->
        <main>
            <!-- Container START -->
            <div class="container-fluid">

                <!-- Sidenav START -->
              
            </div>
            <!-- Sidenav END -->
            <!-- Main content START -->
            <div class="page-content ">
                <div class="row mb-4 p-0">
                    <div class="col-md-3">
                    <div class="d-flex align-items-center d-lg-none">
                    <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                        <i class="btn btn-primary fw-bold fa-solid fa-sliders-h mt-3"></i>

                    </button>
                </div>

                <nav class="navbar  navbar-vertical navbar-light">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                        <div class="offcanvas offcanvas-start custom-scrollbar rounded pt-3 mt-2" tabindex="-1" id="navbarVerticaloffca nvas">
                            <div class="offcanvas-body pt-5 pt-lg-0">
                                <!-- Card START -->
                                <!-- Cover image -->
                                <div class="h-50px" style="background-image:url({{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['cover_img'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                </div>
                                <!-- Avatar -->
                                <div class="mb-0 mx-5">
                                    <a href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}"><img class="avatar-img rounded-circle border border-white border-1 mx-4" src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"><a href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}">{{ auth()->user()->name }}
                                    </a></h5>
                                <small class="mx-4">Web Developer at Webestica</small>
                                <div></div>
                                <!-- Divider -->
                                <hr>
                                <!-- Side Nav START -->
                                <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL::to('/'); ?>/dashboard">
                                            <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/home-outline-filled.svg" alt=""><span>Home
                                            </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL::to('/'); ?>/uploadpage"> <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/medal-outline-filled.svg" alt=""><span>Upload Video </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}"> <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/clock-outline-filled.svg" alt=""><span>Your Channel </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo URL::to('/'); ?>/watchlater">
                                            <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/like-outline-filled.svg" alt=""><span>Watch Later </span></a>
                                    </li>
                                    <!-- Side Nav END -->
                            </div>
                        </div>
                    </div>
                </nav>
                    </div>
                    <div class="col-md-9 mb-4 mt-5">
                        <!-- Video main feed -->
                        <div class="owl-carousel owl-theme">
                            @foreach ($videos as $video)
                            @foreach ($video['posts'] as $posts)
                            @if (!in_array($posts['id'], array_column($video['report_video'], 'product_id')))
                            <div class="item_{{ $posts['id'] }}">
                                <a href="{{ url('/watch/' . $posts['encripted_video_url']) }}">
                                    <div class="card">
                                        <video width="100%" height="100%" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" class="video_autoplay">
                                            <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}" type="video/mp4">
                                        </video>
                                        <div class="card-body p-2">
                                            <h5>
                                                {{ strlen($posts['title']) > 15 ? substr($posts['title'], 0, 20) . '...' : $posts['title'] }}
                                            </h5>

                                            <div class="row">
                                                <div class="col-4 ">
                                                    <img src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['profile_photo_path'] }}" class="thumb">
                                                </div>
                                                <div class="col-8">
                                                    <div class="detail">
                                                        {{-- {{url('/channel/'.$video['id'])}} --}}
                                                        {{ $video['name'] }}
                                                        <p> View:{{ $posts['views'] }}</p>
                                                        <!-- <ul class="Views">
                                                            <li>
                                                            </li>
                                                        </ul> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                        <div class="owl-carousel owl-theme mt-4">
                        @foreach ($videos as $video)
                        @foreach ($video['posts'] as $posts)
                        @if (!in_array($posts['id'], array_column($video['report_video'], 'product_id')))
                        <div class="item_{{ $posts['id'] }}">
                            <a href="{{ url('/watch/' . $posts['encripted_video_url']) }}">
                                <div class="card">
                                    <video width="100%" height="100%" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" class="video_autoplay">
                                        <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}" type="video/mp4">
                                    </video>
                                    <div class="card-body p-2">
                                        <h5>
                                            {{ strlen($posts['title']) > 15 ? substr($posts['title'], 0, 20) . '...' : $posts['title'] }}
                                        </h5>

                                        <div class="row">
                                            <div class="col-4">
                                                <img src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['profile_photo_path'] }}" class="thumb">
                                            </div>
                                            <div class="col-8">
                                                <div class="detail">
                                                    {{-- {{url('/channel/'.$video['id'])}} --}}
                                                    {{ $video['name'] }}
                                                    <p> View:{{ $posts['views'] }}</p>
                                                    <!-- <ul class="Views">
                                                        <li>
                                                        </li>
                                                    </ul> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                        @endforeach
                        @endforeach
                    </div>
                    </div>
                </div>
                <div class="row ">
                    
                </div>
            </div>
        </main>
        <!-- **************** MAIN CONTENT END **************** -->
        <!-- =======================
JS libraries, plugins and custom scripts -->
        <!-- Bootstrap JS -->

        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Vendors -->

        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            <!-- Template Functions 
            -->
        <script src="assets/js/functions.js"></script>
        <script>
            $(function() {
                // Owl Carousel
                var owl = $(".owl-carousel");
                console.log(owl)
                owl.owlCarousel({
                    items: 4,
                    margin: 10,
                    loop: true,
                    nav: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            nav: false
                        },
                        1000: {
                            items: 4,
                            nav: true,
                            loop: true
                        }
                    }

                });
            });
        </script>
    </body>

    </html>
</x-app-layout>