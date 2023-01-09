<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
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
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/font-awesome/css/all.min.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/tiny-slider/dist/tiny-slider.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.css" />
		<script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>

        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">
        <style>
            ul li a {
                display: flex !important;
            }

            .detail {
                color: black !important;
            }

            .navbar-vertical {
                bottom: 0;
                display: block;
                max-width: 300px;
                height: 99vh;
                top: 42px !important;
                width: 100% !important;

            }

            video {
                border-top-left-radius: 4px !important;
                border-top-right-radius: 4px !important;
            }

            nav.border-b.border-gray-100 {
                z-index: 2 !important;
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
                <div class="navbar navbar-vertical navbar-light">
                    <div class="offcanvas offcanvas-start custom-scrollbar rounded pt-3 mt-2" tabindex="-1"
                        id="navbarVerticaloffcanvas">
                        <div class="offcanvas-body pt-5 pt-lg-0">
                            <!-- Card START -->
                            <!-- Cover image -->
                            <div class="h-50px"
                                style="background-image:url({{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['cover_img'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            </div>
                            <!-- Avatar -->
                            <div class="avatar avatar-lg mb-3">
                                <a href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}"><img
                                        class="avatar-img rounded-circle border border-white border-3"
                                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}"
                                        alt=""></a>
                            </div>
                            <!-- Info -->
                            <h5 class="mb-0"><a
                                    href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}">{{ auth()->user()->name }}
                                </a></h5>
                            <small>Web Developer at Webestica</small>
                            <div></div>
                            <!-- Divider -->
                            <hr>
                            <!-- Side Nav START -->
                            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL::to('/'); ?>/dashboard">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/home-outline-filled.svg"
                                            alt=""><span>Home
                                        </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL::to('/'); ?>/uploadpage"> <img
                                            class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/medal-outline-filled.svg"
                                            alt=""><span>Upload Video </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}"> <img
                                            class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/clock-outline-filled.svg"
                                            alt=""><span>Your Channel </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL::to('/'); ?>/watchlater">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/like-outline-filled.svg"
                                            alt=""><span>Watch Later </span></a>
                                </li>
                                <!-- Side Nav END -->
                        </div>
                    </div>
                </div>
                <!-- Sidenav END -->
                <!-- Main content START -->
                <div class="page-content">
                    <div class="row mb-4 ">
                        <div class="col-12 my-5">
                            <!-- Video main feed -->
                            <div class="owl-carousel owl-theme mt-4">
                                @foreach ($videos as $video)
                                    @foreach ($video['posts'] as $posts)
                                        @if (!in_array($posts['id'], array_column($video['report_video'], 'product_id')))
                                            <div class="item_{{ $posts['id'] }}">
                                                <a href="{{ url('/watch/' . $posts['encripted_video_url']) }}">
                                                    <div class="card">
                                                        <video width="100%" height="100%" autoplay
                                                            onmouseover="this.play()"
                                                            onmouseout="this.pause();this.currentTime=0;">
                                                            <source
                                                                src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}"
                                                                type="video/mp4">
                                                        </video>
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-2">
                                                                    <img src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['profile_photo_path'] }}"
                                                                        class="thump">
                                                                </div>
                                                </a>
                                                <div class="col-10">
                                                    <div class="detail">
                                                        {{ $posts['title'] }}<br />
                                                        {{-- {{url('/channel/'.$video['id'])}} --}}
                                                        {{ Auth::user()->name }}
                                                        <ul class="Views">
                                                            <li>
                                                                View:{{ $posts['views'] }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
                <!-- Video main END -->
            </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col-12 mt-0">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h5 class="mb-md-0">Trending </h5>
                        {{-- <a class="btn btn-sm btn-primary" href="#!">View more video</a> --}}
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <img class="card-img-top"
                                src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/01.jpg"
                                alt="">
                            <!-- Play icon -->
                            <div class="card-element-hover position-absolute top-50 start-50 translate-middle">
                                <a class="icon-md bg-mode text-secondary rounded-circle" href="video-details.html"> <i
                                        class="bi bi-play-fill fs-5"> </i> </a>
                            </div>
                            <!-- Duration -->
                            <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">10:20</span>
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto"><i
                                        class="fa-solid fa-heart"></i></span>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> Should you become a web
                                    designer in 2022? </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/01.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Frances Guerrero </a></h6>
                                    <span class="ms-auto small"> 156.9K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <div class="ratio ratio-16x9 card-img-top overflow-hidden">
                                <iframe src="https://www.youtube.com/embed/CgEZNJSeofs" title="YouTube video"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body position-relative">
                            <h6> <a class="stretched-link" href="video-details.html"> Learn web development as
                                    an absolute beginner </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/02.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Lori Ferguson <i
                                                class="bi bi-patch-check-fill text-success small"></i> </a>
                                    </h6>
                                    <span class="ms-auto small"> 458.4K views</span>
                                </div>
                            </div>
                            <!-- Video title  -->
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <img class="card-img-top"
                                src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/02.jpg"
                                alt="">
                            <!-- Play icon -->
                            <div class="card-element-hover position-absolute top-50 start-50 translate-middle">
                                <a class="icon-md bg-mode text-secondary rounded-circle" href="video-details.html"> <i
                                        class="bi bi-play-fill fs-5"> </i> </a>
                            </div>
                            <!-- Duration -->
                            <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">03:40</span>
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto"><i
                                        class="fa-solid fa-heart"></i></span>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> Python tutorial - Python
                                    for beginners [full course] </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/03.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Louis Crawford </a> </h6>
                                    <span class="ms-auto small"> 235.4K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <img class="card-img-top"
                                src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/03.jpg"
                                alt="">
                            <!-- Play icon -->
                            <div class="card-element-hover position-absolute top-50 start-50 translate-middle">
                                <a class="icon-md bg-mode text-secondary rounded-circle" href="video-details.html"> <i
                                        class="bi bi-play-fill fs-5"> </i> </a>
                            </div>
                            <!-- Duration -->
                            <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">06:12</span>
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto"><i
                                        class="fa-solid fa-heart"></i></span>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> One of the greatest
                                    speeches ever | Steve Jobs </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/04.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Larry Lawson </a> </h6>
                                    <span class="ms-auto small"> 891.7K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <img class="card-img-top"
                                src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/04.jpg"
                                alt="">
                            <!-- Play icon -->
                            <div class="card-element-hover position-absolute top-50 start-50 translate-middle">
                                <a class="icon-md bg-mode text-secondary rounded-circle" href="video-details.html"> <i
                                        class="bi bi-play-fill fs-5"> </i> </a>
                            </div>
                            <!-- Duration -->
                            <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">03:45</span>
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto"><i
                                        class="fa-solid fa-heart"></i></span>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> A trading platform - an
                                    easy start in trading </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/05.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Joan Wallace </a> </h6>
                                    <span class="ms-auto small"> 457.2K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <img class="card-img-top"
                                src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/05.jpg"
                                alt="">
                            <!-- Play icon -->
                            <div class="card-element-hover position-absolute top-50 start-50 translate-middle">
                                <a class="icon-md bg-mode text-secondary rounded-circle" href="video-details.html"> <i
                                        class="bi bi-play-fill fs-5"> </i> </a>
                            </div>
                            <!-- Duration -->
                            <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">10:20</span>
                                <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto"><i
                                        class="fa-solid fa-heart"></i></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6> <a class="stretched-link" href="video-details.html"> 8 shocking bitcoin
                                    crypto predictions for 2022 </a> </h6>
                            <div class="d-flex mt-3">
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="">
                                </div>
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Carolyn Ortiz </a> </h6>
                                    <span class="ms-auto small"> 876.2K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </main>
        <!-- **************** MAIN CONTENT END **************** -->
        <!-- =======================
JS libraries, plugins and custom scripts -->
        <!-- Bootstrap JS -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Vendors -->
        <script src="assets/vendor/tiny-slider/dist/tiny-slider.js"></script>
        <script src="assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
        <script src="assets/vendor/plyr/plyr.js"></script>
        <script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

        <!-- Template Functions -->
        <script src="assets/js/functions.js"></script>
        <script>
            $(function() {
                // Owl Carousel
                var owl = $(".owl-carousel");
                owl.owlCarousel({
                    items: 4,
                    margin: 10,
                    loop: true,
                    nav: true
                });
            });
        </script>
    </body>

    </html>
</x-app-layout>
