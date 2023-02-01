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

            video.video_autoplay {
                height: 215px !important;
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
 
            /* sidebar responsive button fix */
            button.border-0.bg-transparent {
                position: fixed ;
                top: 68px ;
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
                   <div class="d-flex align-items-center  d-lg-none  mb-5">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                            <i class="btn btn-primary fw-bold fa-solid fa-sliders-h m-0"></i>

                        </button>
                    </div>
                <!-- Sidenav START -->
                <nav class="navbar  navbar-vertical navbar-light ">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                        <div class="offcanvas offcanvas-start custom-scrollbar rounded " tabindex="-1" id="offcanvasSideNavbar">
                            <div class="offcanvas-body pt-5  pt-lg-0 ">
                                <!-- Card START -->
                                <!-- Cover image -->
                                <!-- <div class="h-50px" style="background-image:url({{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['cover_img'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                </div> -->
                                <!-- Avatar -->
                                <div class="avatar avatar-lg mb-3">
                                    <a href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}"><img class="avatar-img rounded-circle border border-white border-1  mx-auto mb-3" src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}" alt=""></a>
                                </div>
                                <!-- Info -->
                                <h5 class="mb-0"><a href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}">{{ auth()->user()->name }}
                                    </a></h5>

                                    <div class="hstack gap-2 mt-3 gap-xl-3 justify-content-start">
                      <!-- User stat item -->
                      <div>
                        <h6 class="mb-0">{{$total_videos}}</h6>
                        <small>Videos</small>
                      </div>
                      <!-- Divider -->
                      <div class="vr"></div>
                      <!-- User stat item -->
                      <div>
                        <h6 class="mb-0">{{$login_user_subscriber}}</h6>
                        <small>Subscriber</small>
                      </div>
                      
                    </div>
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
                                </ul>
                                    <!-- Side Nav END -->
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Sidenav END -->
                <!-- Main content START -->
                <div class="page-content  ">
                   
                    <div class="row mb-4 p-0 mt-2">

                        <div class="col-md-12 mb-4 mt-0">
                            <div class="card p-4 ">
                                <!-- Video main feed -->
                                <div class="owl-carousel owl-theme  mt-0">
                                    @foreach ($videos as $video)
                                    @foreach ($video['posts'] as $posts)
                                    @if (!in_array($posts['id'], array_column($video['report_video'], 'product_id')))
                                    <div class="item_{{ $posts['id'] }}">
                                        <a href="{{ url('/watch/' . $posts['encripted_video_url']) }}">
                                            <div class="card">
                                                <video width="100%" height="100%" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" class="video_autoplay">
                                                    <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}" type="video/mp4">
                                                </video>
                                                <div class="card-body">
                                                <h6 class="mb-3"> {{ strlen($posts['title']) > 15 ? substr($posts['title'], 0, 20) . '...' : $posts['title'] }}
                                                    </h6>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xxs me-2">
                                                            <img class="avatar-img rounded-circle" src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['profile_photo_path'] }}" alt="">
                                                        </div>
                                                        <!-- Avatar name -->
                                                        <h6 class="mb-0"> <a href="#!"> {{ $video['name'] }} </a> </h6>
                                                        <span class="ms-auto small"> {{ $posts['views'] }} views</span>
                                                    </div>
                                                    <!-- Video title  -->
                                                   
                                                </div>
                                               
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="mann px-0">
                                <div class="row mt-4">
                                <div class="col-12 my-4">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h5 class="mb-md-0">Trending </h5>
                                         </div>
                                    </div>
                                    @foreach ($videos as $video)
                                    @foreach ($video['posts'] as $posts)
                                    @if (!in_array($posts['id'], array_column($video['report_video'], 'product_id')))
                                    <div class=" col-sm-6 col-md-4 col-xl-3 mb-3 item_{{ $posts['id'] }}">
                                        <a href="{{ url('/watch/' . $posts['encripted_video_url']) }}">
                                            <div class="card">
                                                <video width="100%" height="100%" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" class="video_autoplay">
                                                    <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}" type="video/mp4">
                                                </video>
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <!-- Avatar -->
                                                        <div class="avatar avatar-xxs me-2">
                                                            <img class="avatar-img rounded-circle" src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['profile_photo_path'] }}" alt="">
                                                        </div>
                                                        <!-- Avatar name -->
                                                        <h6 class="mb-0"> <a href="#!"> {{ $video['name'] }} </a> </h6>
                                                        <span class="ms-auto small"> {{ $posts['views'] }} views</span>
                                                    </div>
                                                    <!-- Video title  -->
                                                    <h6 class="mb-0"> {{ strlen($posts['title']) > 15 ? substr($posts['title'], 0, 20) . '...' : $posts['title'] }}
                                                    </h6>
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
                    </div>
                    <div class="row ">

                    </div>
                </div>
        </main>
        <!-- **************** MAIN CONTENT END **************** -->
        <!-- =======================
JS libraries, plugins and custom scripts -->
        <!-- Bootstrap JS -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Vendors -->

        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
            // <!-- Template Functions    -->
        <script src="<?php echo URL::to('/'); ?>/public/assets/js/functions.js"></script>
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
                            items: 2,
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