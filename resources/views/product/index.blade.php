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

            video{
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
        {{-- <header class="navbar-light fixed-top header-static bg-mode"> --}}

        <!-- Logo Nav START -->
        {{-- <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">

        <a class="navbar-brand" href="index.html">
          <img class="light-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
				  <img class="dark-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
        </a>


        <button class="icon-md btn btn-light p-0 d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarVerticaloffcanvas" aria-controls="navbarVerticaloffcanvas">
          <i class="bi bi-justify-left fs-4"></i>
        </button>


        <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-animation">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </button>


        <div class="collapse navbar-collapse" id="navbarCollapse">


          <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
            <div class="nav-item w-100">
              <form class="rounded position-relative">
                <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
              </form>
            </div>
          </div>


          <ul class="navbar-nav navbar-nav-scroll mx-auto">

            <li class="nav-item">
              <a class="nav-link active" href="/event-details-2.html">Overview</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/index-video.html/subscriptions">Subscriptions</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/index-video.html/streams">Streams</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/index-video.html/library">Library</a>
            </li>

          </ul>
        </div>


        <!-- Nav right START -->
        <ul class="nav flex-nowrap align-items-center ms-lg-3 list-unstyled">
          <li class="nav-item ms-2">
            <a class="nav-link icon-md btn p-0" href="settings.html">
              <i class="bi bi-gear-fill fs-6"> </i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link icon-md btn p-0" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
              <i class="bi bi-bell-fill fs-6"> </i>
            </a>
            <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0" aria-labelledby="notifDropdown">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4 new</span></h6>
                  <a class="small" href="#">Clear all</a>
                </div>
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush list-unstyled p-2">
                    <!-- Notif item -->
                    <li>
                      <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
                        </div>
                        <div class="ms-sm-3">
                          <div class=" d-flex">
                          <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend request.</p>
                          <p class="small ms-3 text-nowrap">Just now</p>
                        </div>
                        <div class="d-flex">
                          <button class="btn btn-sm py-1 btn-primary me-2">Accept </button>
                          <button class="btn btn-sm py-1 btn-danger-soft">Delete </button>
                        </div>
                      </div>
                    </div>
                    </li>
                    <!-- Notif item -->
                    <li>
                      <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
                        </div>
                        <div class="ms-sm-3 d-flex">
                          <div>
                            <p class="small mb-2">Wish <b>Amanda Reed</b> a happy birthday (Nov 12)</p>
                            <button class="btn btn-sm btn-outline-light py-1 me-2">Say happy birthday 🎂</button>
                          </div>
                          <p class="small ms-3">2min</p>
                        </div>
                      </div>
                    </li>
                    <!-- Notif item -->
                    <li>
                      <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <div class="avatar-img rounded-circle bg-success"><span class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span></div>
                        </div>
                        <div class="ms-sm-3">
                          <div class="d-flex">
                            <p class="small mb-2">Webestica has 15 like and 1 new activity</p>
                            <p class="small ms-3">1hr</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- Notif item -->
                    <li>
                      <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <img class="avatar-img rounded-circle" src="assets/images/logo/12.svg" alt="">
                        </div>
                        <div class="ms-sm-3 d-flex">
                          <p class="small mb-2"><b>Bootstrap in the news:</b> The search giant’s parent company, Alphabet, just joined an exclusive club of tech stocks.</p>
                          <p class="small ms-3">4hr</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-footer text-center">
                  <a href="#" class="btn btn-sm btn-primary-soft">See all incoming activity</a>
                </div>
              </div>
            </div>
          </li>
          <!-- Notification dropdown END -->

          <li class="nav-item ms-3 dropdown">
            <a class="nav-link p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="d-flex align-items-center position-relative">
                <!-- Avatar -->
                <div class="avatar avatar-sm me-xl-3">
                  <img class="avatar-img rounded-circle" src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="avatar">
                </div>
                <div class="d-none d-xl-block">
                  <span class="h6 stretched-link">Lori Ferguson</span>
                  <p class="small m-0">Web Developer</p>
                </div>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3" aria-labelledby="profileDropdown">
              <!-- Links -->
              <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear fa-fw me-2"></i>Settings & Privacy</a></li>
              <li>
                <a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
                  <i class="fa-fw bi bi-life-preserver me-2"></i>Support
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="docs/index.html" target="_blank">
                  <i class="fa-fw bi bi-card-text me-2"></i>Documentation
                </a>
              </li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item bg-danger-soft-hover" href="sign-in-advance.html"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
              <li> <hr class="dropdown-divider"></li>
              <!-- Dark mode switch START -->
              <li>
                <div class="modeswitch-wrap" id="darkModeSwitch">
                  <div class="modeswitch-item">
                    <div class="modeswitch-icon"></div>
                  </div>
                  <span>Dark mode</span>
                </div>
              </li>
              <!-- Dark mode switch END -->
            </ul>
          </li>
          <!-- Profile START -->
        </ul>
        <!-- Nav right END -->
      </div>
    </nav> --}}
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
                                <a
                                    href="{{URL::to('/channel/'.base64_encode(auth()->user()->id))}}"><img
                                        class="avatar-img rounded-circle border border-white border-3"
                                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}"
                                        alt=""></a>
                            </div>
                            <!-- Info -->
                            <h5 class="mb-0"><a href="{{URL::to('/channel/'.base64_encode(auth()->user()->id))}}">{{ auth()->user()->name }} </a></h5>
                            <small>Web Developer at Webestica</small>
                            <div></div>
                            <!-- User stat START -->
                            {{-- <div class="hstack gap-2 gap-xl-3 mt-3">
                                <!-- User stat item -->
                                <div>
                                    <h6 class="mb-0">256</h6>
                                    <small>Post</small>
                                </div>
                                <!-- Divider -->
                                <div class="vr"></div>
                                <!-- User stat item -->
                                <div>
                                    <h6 class="mb-0">2.5K</h6>
                                    <small>Followers</small>
                                </div>
                                <!-- Divider -->
                                <div class="vr"></div>
                                <!-- User stat item -->
                                <div>
                                    <h6 class="mb-0">365</h6>
                                    <small>Following</small>
                                </div>
                            </div> --}}
                            <!-- User stat END -->

                            <!-- Divider -->
                            <hr>

                            <!-- Side Nav START -->
                            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="<?php echo URL::to('/'); ?>/dashboard">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/home-outline-filled.svg"
                                            alt=""><span>Home
                                        </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL::to('/'); ?>/uploadpage"> <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/medal-outline-filled.svg"
                                            alt=""><span>Upload Video </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{URL::to('/channel/'. base64_encode(auth()->user()->id))}}"> <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/clock-outline-filled.svg"
                                            alt=""><span>Your Channel </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL::to('/'); ?>/watchlater">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/like-outline-filled.svg"
                                            alt=""><span>Watch Later </span></a>
                                </li>
                                <div class="card-footer text-center py-2">
                                    <a class="btn btn-link btn-sm" href="my-profile.html">View Profile </a>
                                </div>

                                <!-- <li class="nav-item">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/notifications.html">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/notification-outlined-filled.svg"
                                            alt=""><span>Notifications</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/settings.html">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/cog-outline-filled.svg"
                                            alt=""><span>Settings
                                        </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/sign-in-advance.html">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/arrow-boxed-outline-filled.svg"
                                            alt=""><span>Logout </span></a>
                                </li>
                            </ul>
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
                {{-- <div class="rounded py-4 py-sm-5 overflow-hidden position-relative"
                                style="background-image:url(assets/images/post/16by9/big/02.jpg); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                                <div class="bg-overlay bg-dark opacity-5"></div>
                                <div class="p-4 p-sm-5 position-relative">
                                    <div class="d-flex align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xxs me-2">
                                            <img class="avatar-img rounded-circle"
                                                src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/01.jpg"
                                                alt="">
                                        </div>
                                        <!-- Avatar name -->
                                        <h6 class="mb-0"> <a class="text-white" href="#!"> Frances Guerrero
                                            </a> </h6>
                                        <span class="ms-1 ms-sm-3 small text-white"> 156.9K views</span>
                                    </div>
                                    <h1 class="text-white">How does the stock market work?</h1>
                                    <p class="text-white">Suspicion neglected he resolving agreement perceived at an.
                                    </p>
                                    <a class="btn btn-primary stretched-link" href="new_video-details.html"> <i
                                            class="bi bi-file-earmark-play pe-1"></i>Watch now</a>
                                </div>
                            </div> --}}
                <!-- Video main END -->
            </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col-12 mt-0">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h5 class="mb-md-0">Trending </h5>
                        <a class="btn btn-sm btn-primary" href="#!">View more video</a>
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
                        <!-- Video info -->
                        <div class="card-body">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> 8 shocking bitcoin
                                    crypto predictions for 2022 </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Carolyn Ortiz </a> </h6>
                                    <span class="ms-auto small"> 876.2K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
            </div>

            <!-- Official trailer START -->
            <div class="row g-3 mb-4">
                <div class="col-12 mt-4">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h5 class="mb-md-0">Official Trailer </h5>
                        <a class="btn btn-sm btn-primary" href="#!">View more video</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <div class="overflow-hidden fullscreen-video w-100">
                                <!-- HTML video START -->
                                <div class="player-wrapper card-img-top overflow-hidden">
                                    <video class="player-html" controls crossorigin="anonymous"
                                        poster="<?php echo URL::to('/'); ?>/public/assets/images/videos/poster.jpg">
                                        <source src="assets/images/videos/video-feed.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <!-- HTML video END -->
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body position-relative">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> New movie trailers (2021
                                    - 2022) September </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/01.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!">Frances Guerrero</a></h6>
                                    <span class="ms-auto small">145.2K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Video START -->
                    <div class="card h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <div class="ratio ratio-16x9 card-img-top overflow-hidden">
                                <iframe src="https://www.youtube.com/embed/7E45f46yDFI" title="YouTube video"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body position-relative">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> 15 useful apps for
                                    android smartphones users </a> </h6>
                            <div class="d-flex mt-2">
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
                                    <span class="ms-auto small"> 235.8K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
                <div class="col-sm-6 col-lg-4">
                    <!-- Video START -->
                    <div class="card position-relative h-100">
                        <!-- Video image -->
                        <div class="card-image">
                            <div class="ratio ratio-16x9 card-img-top overflow-hidden">
                                <iframe src="https://player.vimeo.com/video/225888984?h=65630c41c6"
                                    title="Vimeo video" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body position-relative">
                            <!-- Video title  -->
                            <h6> <a class="stretched-link" href="video-details.html"> The Red notice |
                                    Official teaser | Netflix </a> </h6>
                            <div class="d-flex mt-3">
                                <!-- Avatar -->
                                <div class="avatar avatar-xxs me-2">
                                    <img class="avatar-img rounded-circle"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/03.jpg" alt="">
                                </div>
                                <!-- Avatar name -->
                                <div>
                                    <h6 class="mb-0 lh-1"> <a href="#!"> Louis Crawford </a> </h6>
                                    <span class="ms-auto small"> 785.2K views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Video END -->
                </div>
            </div>
            <!-- Official trailer END -->

            <div class="row g-3 mb-4">
                <div class="col-12 mt-4">
                    <h5>Music </h5>
                </div>
                <!-- Story START -->
                <div class="tiny-slider arrow-hover overflow-hidden">
                    <div class="tiny-slider-inner d-flex" data-arrow="true" data-dots="true" data-loop="true"
                        data-autoplay="false" data-items-xxl="6" data-items-xl="5" data-items-lg="4"
                        data-items-md="4" data-items-sm="3" data-items-xs="1" data-gutter="12" data-edge="0">
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/06.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#">
                                            <i class="bi bi-play-fill fs-5"> </i> </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> 8 shocking
                                            bitcoin crypto predictions for 2022 </a> </h6>
                                    <span class="small"> 665.1K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <div class="ratio ratio-16x9 card-img-top overflow-hidden">
                                        <iframe src="https://player.vimeo.com/video/169562083?h=5785cc7ede"
                                            title="Vimeo video" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- Video info -->
                                <div class="card-body position-relative">
                                    <!-- Video title  -->
                                    <h6> <a class="stretched-link" href="video-details.html"> A trading
                                            platform - an easy start in trading </a> </h6>
                                    <span class="small"> 458.3K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/09.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#">
                                            <i class="bi bi-play-fill fs-5"> </i> </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> How does the
                                            stock market work? </a> </h6>
                                    <span class="small"> 985.1K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/10.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#">
                                            <i class="bi bi-play-fill fs-5"> </i> </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> How to create a
                                            app for your e-commerce website </a> </h6>
                                    <span class="small"> 658.2K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/07.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#">
                                            <i class="bi bi-play-fill fs-5"> </i> </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> Dilen - When I
                                            See You (Official Music) </a> </h6>
                                    <span class="small"> 325.1K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/08.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#">
                                            <i class="bi bi-play-fill fs-5"> </i> </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> Complete
                                            cryptocurrency course - start learning </a> </h6>
                                    <span class="small"> 785.9K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div>
                            <!-- Video START -->
                            <div class="card position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top"
                                        src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/01.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#">
                                            <i class="bi bi-play-fill fs-5"> </i> </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> Should you
                                            become a web designer in 2022? </a> </h6>
                                    <span class="small"> 785.9K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Main content END -->

            </div>
            <!-- Container END -->

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
