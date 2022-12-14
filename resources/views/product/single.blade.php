<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    {{-- old code  header --}}
    @include('header')

    <head>
        {{-- old code style tag --}}
        <style>
            .goog-te-gadget img {
                vertical-align: middle;
                border: none;
                display: none;
            }

            div#social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            div#social-links ul li {
                display: inline-block;
            }
            div#social-links ul li a {
                padding: 20px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 30px;
                color: #222;
                background-color: #ccc;
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
            a.nav-link {
                  display: flex;
              }
        </style>
        {{-- old code link --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/font-awesome/css/all.min.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.css" />

        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">

    </head>
    <style>
        p {
            color: black !important;
        }
        span {
          color: black !important;
        }
        small {
          color: black !important;
        }
    </style>

    <body>

        <!-- **************** MAIN CONTENT START **************** -->

        <!-- =======================
Header START -->
        <header class="navbar-light fixed-top header-static bg-mode">

            <!-- Logo Nav START -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Logo START -->
                    <a class="navbar-brand" href="index.html">
                        <img class="light-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
                        <img class="dark-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
                    </a>
                    <!-- Logo END -->

                    <button class="icon-md btn btn-light p-0 d-block d-lg-none" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#navbarVerticaloffcanvas"
                        aria-controls="navbarVerticaloffcanvas">
                        <i class="bi bi-justify-left fs-4"></i>
                    </button>

                    <!-- Responsive navbar toggler -->
                    <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-animation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>

                    <!-- Main navbar START -->
                    <div class="collapse navbar-collapse" id="navbarCollapse">

                        <!-- Nav Search START -->
                        <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
                            <div class="nav-item w-100">
                                <form class="rounded position-relative">
                                    <input class="form-control ps-5 bg-light" type="search" placeholder="Search..."
                                        aria-label="Search">
                                    <button
                                        class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
                                        type="submit"><i class="bi bi-search fs-5"> </i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Main navbar END -->

                    <!-- Nav right START -->
                    <ul class="nav flex-nowrap align-items-center ms-lg-3 list-unstyled">
                        <li class="nav-item ms-2">
                            <a class="nav-link icon-md btn p-0" href="settings.html">
                                <i class="bi bi-gear-fill fs-6"> </i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link icon-md btn p-0" href="#" id="notifDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                                <i class="bi bi-bell-fill fs-6"> </i>
                            </a>
                            <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
                                aria-labelledby="notifDropdown">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h6 class="m-0">Notifications <span
                                                class="badge bg-danger bg-opacity-10 text-danger ms-2">4
                                                new</span></h6>
                                        <a class="small" href="#">Clear all</a>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush list-unstyled p-2">
                                            <!-- Notif item -->
                                            <li>
                                                <div
                                                    class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                                                    <div class="avatar text-center d-none d-sm-inline-block">
                                                        <img class="avatar-img rounded-circle"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/01.jpg" alt="">
                                                    </div>
                                                    <div class="ms-sm-3">
                                                        <div class=" d-flex">
                                                            <p class="small mb-2"><b>Judy Nguyen</b> sent you a friend
                                                                request.</p>
                                                            <p class="small ms-3 text-nowrap">Just now</p>
                                                        </div>
                                                        <div class="d-flex">
                                                            <button class="btn btn-sm py-1 btn-primary me-2">Accept
                                                            </button>
                                                            <button class="btn btn-sm py-1 btn-danger-soft">Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Notif item -->
                                            <li>
                                                <div
                                                    class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                                                    <div class="avatar text-center d-none d-sm-inline-block">
                                                        <img class="avatar-img rounded-circle"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/02.jpg" alt="">
                                                    </div>
                                                    <div class="ms-sm-3 d-flex">
                                                        <div>
                                                            <p class="small mb-2">Wish <b>Amanda Reed</b> a happy
                                                                birthday (Nov 12)</p>
                                                            <button class="btn btn-sm btn-outline-light py-1 me-2">Say
                                                                happy birthday 🎂</button>
                                                        </div>
                                                        <p class="small ms-3">2min</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                                                    <div class="avatar text-center d-none d-sm-inline-block">
                                                        <div class="avatar-img rounded-circle bg-success"><span
                                                                class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                                                        </div>
                                                    </div>
                                                    <div class="ms-sm-3">
                                                        <div class="d-flex">
                                                            <p class="small mb-2">Webestica has 15 like and 1 new
                                                                activity</p>
                                                            <p class="small ms-3">1hr</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- Notif item -->
                                            <li>
                                                <a href="#"
                                                    class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                                                    <div class="avatar text-center d-none d-sm-inline-block">
                                                        <img class="avatar-img rounded-circle"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/logo/12.svg" alt="">
                                                    </div>
                                                    <div class="ms-sm-3 d-flex">
                                                        <p class="small mb-2"><b>Bootstrap in the news:</b> The search
                                                            giant’s parent company,
                                                            Alphabet, just joined an exclusive club of tech stocks.</p>
                                                        <p class="small ms-3">4hr</p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a href="#" class="btn btn-sm btn-primary-soft">See all incoming
                                            activity</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Notification dropdown END -->

                        <li class="nav-item ms-3 dropdown">
                            <a class="nav-link p-0" href="#" id="profileDropdown" role="button"
                                data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <div class="d-flex align-items-center position-relative">
                                    <!-- Avatar -->
                                    <div class="avatar avatar-sm me-xl-3">
                                        <img class="avatar-img rounded-circle" src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg"
                                            alt="avatar">
                                    </div>
                                    <div class="d-none d-xl-block">
                                        <span class="h6 stretched-link">Lori Ferguson</span>
                                        <p class="small m-0">Web Developer</p>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
                                aria-labelledby="profileDropdown">
                                <!-- Links -->
                                <li><a class="dropdown-item" href="settings.html"><i
                                            class="bi bi-gear fa-fw me-2"></i>Settings &
                                        Privacy</a></li>
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
                                <li><a class="dropdown-item bg-danger-soft-hover" href="sign-in-advance.html"><i
                                            class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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
            </nav>
            <!-- Logo Nav END -->
        </header>
        <!-- =======================
Header END -->

        <!-- **************** MAIN CONTENT START **************** -->
        <main>

            <!-- Container START -->
            <div class="container-fluid">

                <!-- Sidenav START -->
                <div class="navbar navbar-vertical navbar-light">
                    <div class="offcanvas offcanvas-start custom-scrollbar rounded pt-3" tabindex="-1"
                        id="navbarVerticaloffcanvas">
                        <div class="offcanvas-body pt-5 pt-lg-0">
                            <!-- Avatar -->
                            <div class="avatar avatar-lg mb-3">
                                <a href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/my-profile-about.html"><img
                                        class="avatar-img rounded-circle border border-white border-3"
                                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}">
                                    </a>
                            </div>
                            <!-- Info -->
                            <h5 class="mb-0"> <a
                                    href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/my-profile-about.html">{{auth()->user()->name}} </a> </h5>
                            {{-- <small>Web Developer at Webestica</small> --}}
                            <!-- User stat START -->
                            <div class="hstack gap-2 gap-xl-3 mt-3">
                                <!-- User stat item -->
                                <div>
                                    {{$subscriber}} Subscribers
                                </div>
                                <!-- Divider -->
                                <div class="vr"></div>
                                <!-- User stat item -->
                                {{-- <div>
                                    <h6 class="mb-0">2.5K</h6>
                                    <small>Followers</small>
                                </div> --}}
                                <!-- Divider -->
                                <div class="vr"></div>
                                <!-- User stat item -->
                                {{-- <div>
                                    <h6 class="mb-0">365</h6>
                                    <small>Following</small>
                                </div> --}}
                            </div>
                            <!-- User stat END -->

                            <!-- Divider -->
                            <hr>

                            <!-- Side Nav START -->
                            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/my-profile-about.html">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/home-outline-filled.svg" alt=""><span>Home
                                        </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/Farnando/video-details.html/Popular"> <img
                                            class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/medal-outline-filled.svg"
                                            alt=""><span>Uploade Vedio </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/Farnando/video-details.html/Recent"> <img
                                            class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/clock-outline-filled.svg"
                                            alt=""><span>Your Channel </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/Farnando/video-details.html/Subscriptions">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/like-outline-filled.svg" alt=""><span>Save
                                            Vedio </span></a>
                                </li>
                                <!-- <li class="nav-item">
                <a class="nav-link" href="file:///C:/Users/Hp/Downloads/Farnando/video-details.html/My favorites"> <img class="me-2 h-20px fa-fw"
                    src="assets/images/icon/star-outline-filled.svg" alt=""><span>My favorites </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file:///C:/Users/Hp/Downloads/Farnando/video-details.html/Wishlist"> <img class="me-2 h-20px fa-fw"
                    src="assets/images/icon/task-done-outline-filled.svg" alt=""><span>Wishlist </span></a>
              </li> -->
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/notifications.html">
                                        <img class="me-2 h-20px fa-fw"
                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/notification-outlined-filled.svg"
                                            alt=""><span>Notifications </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/settings.html">
                                        <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/cog-outline-filled.svg"
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

                    <!-- Official trailer START -->
                    <div class="row g-0 mb-4">
                        <div class="col-xl-8 col-xxl-9">
                            <!-- Video START -->
                            <div class="card card-body p-0 rounded-end-lg-0 position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <div class="overflow-hidden fullscreen-video w-100">
                                        <!-- HTML video START -->
                                        <div class="player-wrapper card-img-top overflow-hidden">
                                            <video width="200" height="150" class="example1" id="example1"
                                                poster="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['thumbnail'] }}">
                                                <source
                                                    src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['file'] }}"
                                                    type="video/mp4">
                                                <track kind="captions" label="English" srclang="en"
                                                    src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                        <!-- HTML video END -->
                                    </div>
                                </div>
                                <!-- Video info -->
                                <div class="card-body">
                                    <div class="d-xxl-flex justify-content-between mb-3">
                                        <div class="mb-2 mb-xxl-0">
                                            <!-- Video title  -->
                                            <h4> {{ $videos[0]['title'] }} </h4>
                                            <div class="d-flex mt-3 align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-2">
                                                    <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                        height="60px" width="60px" />
                                                </div>
                                                <!-- Avatar name -->
                                                <div>
                                                    <h6 class="mb-0">{{ $videos[0]['user']['name'] }}</h6>
                                                    <nav class="nav nav-divider small">
                                                        <span class="nav-item" id="subscribe">{{$subscriber}} subscribers</span>

                                                    </nav>
                                                </div>
                                                <div class="col-md-3 text-end">
                                                    <button class="btn btn-danger subscribe"
                                                        style="{{ $count <= 0 && $videos[0]['user']['id'] != auth()->user()->id ? 'display:block' : 'display:none' }}"
                                                        onclick="subscribe('{{ $videos[0]['user_id'] }}',1)">SUBSCRIBE</button>
                                                    <button class="btn btn-outline-success subscribes"
                                                        style="{{ $count > 0 ? 'display:block' : 'display:none' }}"
                                                        onclick="subscribe('{{ $videos[0]['user_id'] }}',0)">SUBSCRIBED</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="str d-flex ">
                                            <div id="stars"></div>
                                            <div class="sub d-flex ms-auto">
                                                <div class="">
                                                    <div class="dropdown">
                                                        <a class="nav-link" href="/add" id="cardAddAction"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <button type="button" class="btn d-flex"
                                                                onclick="save_video('{{ $videos[0]['id'] }}')"
                                                                data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                                title="Tooltip on bottom">
                                                                <span class="material-symbols-outlined">
                                                                    playlist_add
                                                                </span> SAVE
                                                            </button>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end "
                                                            aria-labelledby="cardShareAction">
                                                            <li><a class="dropdown-item d-flex" href="#!">
                                                                    <div class="form-check ">
                                                                        <input class="form-check-input "
                                                                            type="checkbox" value=""
                                                                            id="flexCheckChecked" checked>
                                                                        <label class="form-check-label mx-3"
                                                                            for="flexCheckChecked  ">
                                                                            Watch later
                                                                        </label>
                                                                    </div><span class="material-symbols-outlined mx-3">
                                                                        lock
                                                                    </span><button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </a></li>
                                                            <li><a class="dropdown-item d-flex "
                                                                    href="Create New Playlist"> <span
                                                                        class="material-symbols-outlined me-3">
                                                                        add</span>Create New Playlist</a></li>
                                                            <Form>
                                                                <div class="mb-3 p-3">
                                                                    <label for="exampleFormControlInput1"
                                                                        class="form-label">Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="exampleFormControlInput1"
                                                                        placeholder="Enter playlist">
                                                                    <label for="validationCustom04"
                                                                        class="form-label">State</label>
                                                                    <select class="form-select"
                                                                        id="validationCustom04" required>
                                                                        <option selected disabled value="">
                                                                            Privacy</option>
                                                                        <option><span
                                                                                class="material-symbols-outlined">
                                                                                public
                                                                            </span>Anyone can search for and view.
                                                                            Channel creation required.</option>
                                                                        <option><span
                                                                                class="material-symbols-outlined">
                                                                                public
                                                                            </span>Anyone

                                                                    </select>
                                                                    <div class="mt-3">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <a href='/create'
                                                                            class='rounded-pill btn btn-primary '>Create</a>
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        Please select a valid state.
                                                                    </div>
                                                                </div>
                                                            </Form>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="report">
                                                    <button type="button" class="btn d-flex" data-bs-toggle="modal"
                                                        data-bs-target="#Report">
                                                        <span class="material-symbols-outlined">
                                                            flag
                                                        </span> Report
                                                    </button>
                                                    <div class="modal fade" id="Report" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="Report_user">Report
                                                                        video</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form id="submitt_report" method="POST">
                                                                    <div class="modal-body">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault1">
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault1">
                                                                                Sexual Content
                                                                            </label>
                                                                        </div>
                                                                        <input type="hidden" name="product_id"
                                                                            id="product_id"
                                                                            value="{{ $videos[0]['id'] }}">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault2" checked>
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault2">
                                                                                Violent or repulsive content
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault1">
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault1">
                                                                                Harassment or bullying
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault2" checked>
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault2">
                                                                                Harmful or dangerous acts
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault1">
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault1">
                                                                                Child Abouse
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault2" checked>
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault2">
                                                                                Promotes terrorism
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault1">
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault1">
                                                                                Spam or misleanding
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault2" checked>
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault2">
                                                                                Infringes my rights
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="radio" name="flexRadioDefault"
                                                                                id="flexRadioDefault2" checked>
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault2">
                                                                                Captions issue
                                                                            </label>
                                                                        </div>
                                                                        <p class="my-2">Flagged videos and users are
                                                                            reviewed by YouTube staff 24 hours a day, 7
                                                                            days a week to determine whether they
                                                                            violate Community Guidelines. Accounts are
                                                                            penalized for Community Guidelines
                                                                            violations, and serious or repeated
                                                                            violations can
                                                                            lead to account termination.</p>
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name"
                                                                                class="col-form-label">
                                                                                <h5>Timestamp selected *</h5>
                                                                            </label>
                                                                            <input type="time" class="form-control"
                                                                                id="validationCustom01" required>
                                                                        </div>
                                                                        <textarea class="form-control" id="message-text" rows="5"></textarea>
                                                                        <p class="my-2">Flagged videos and users are
                                                                            reviewed by YouTube staff 24 hours a day,
                                                                            7 days a week to determine whether they
                                                                            violate Community Guidelines. Accounts are
                                                                            penalized for Community Guidelines
                                                                            violations, and serious or repeated
                                                                            violations
                                                                            can lead to account termination. </p>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">CANCEL</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn1">Submit</button>
                                                                    </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class=" d-flex align-items-start">
                                                  <div class="dropdown ">
                                                      <a class="nav-link  " href="#" id="cardShareAction"
                                                          data-bs-toggle="dropdown" aria-expanded="false">
                                                          <button class="btn btn-light "><i
                                                                  class="bi bi-reply-fill flip-horizontal"></i>Share
                                                              (3)</button>
                                                      </a>
                                                      <!-- Dropdown menu -->
                                                      {!! $socialshare !!}
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- Interested button -->
                                        </div>
                                        <div id="main">
                                            This is Description
                                        </div>
                                        <p>{{ $videos[0]['description'] }}<span id="dots">...</span><span
                                                id="more">{{ $videos[0]['description'] }}</span></p>
                                        <button onclick="myFunction()" id="myBtn"
                                            style="color: rgb(8, 239, 38)">Read
                                            more</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div class="col-md-11 mt-3">
                            <form method="post"  id="comment" action="{{ route('comment.add') }}">
                                <div class="commentBox">
                                    <input type="text" class="form-control" autocomplete="off"
                                        name="body" id="exampleFormControlInput1"
                                        placeholder="Add a comment" required>
                                    <input type="hidden" name="post_id"
                                        value="{{ $videos[0]['id'] }}" />
                                </div>
                                <div class="text-end mt-3">
                                    <button type="submit" class="btn btn-primary btn-sm"
                                        id="exampleFormControlInput1"
                                        style="width:110px;">COMMENT</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-11">
                            @foreach ($videos[0]['comments'] as $key => $commet)
                                <div class="comments">
                                    <div class="row mt-3">
                                        <div class="col-2 text-end">
                                            <div class="profile-image">
                                                <a
                                                    href="{{ URL::to('/channel/' . base64_encode($videos[0]['user_id'])) }}"><img
                                                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . auth()->user()->profile_photo_path }}"
                                                        width="40px" /></a>
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <p class="m-0"> <b>
                                                    {{ $videos[0]['user']['id'] == $commet['user_id'] ? $videos[0]['user']['name'] : Auth::user()->name }}
                                                </b>{{ \Carbon\Carbon::parse($videos[0]['created_at'])->diffForHumans() }}
                                            </p>
                                            <p class="">{{ $commet['body'] }}</p>
                                            @foreach ($commet['replies'] as $key => $reply)
                                                <div>{{ $reply['body'] }}</div>
                                            @endforeach
                                            <div class="d-flex">
                                                <a class="me-3 text-decoration-none"
                                                    onclick="reply(this)">REPLY</a>
                                            </div>
                                            <div class="row" id="replyBox" style="display: none">
                                                <div class="col-md-12 common">
                                                    <form method="post"
                                                        action="{{ route('reply.add') }}">
                                                        <div>
                                                            <input type="text"
                                                                class="form-control "name="body"
                                                                id="exampleFormControlInput1"
                                                                placeholder="Add a comment" required>
                                                            <input type="hidden" name="post_id"
                                                                value="{{ $videos[0]['id'] }}" />
                                                            <input type="hidden" name="comment_id"
                                                                value="{{ $commet['id'] }}" />
                                                        </div>
                                                        <div class="text-end mt-3">
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm"
                                                                id="exampleFormControlInput1"
                                                                style="width:110px;">COMMENT</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- append div end --}}
                                            <hr />
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Official trailer END -->

                    <!-- More related video START -->
                    <div class="row g-3 mb-4">
                        <div class="col-12 mt-4">
                            <h5>More related video </h5>
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                            <!-- Video START -->
                            <div class="card p-0 position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top" src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/06.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                                class="bi bi-play-fill fs-5"> </i>
                                        </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> {{$videos[0]['title']}}
                                        </a> </h6>
                                    <span class="small"> 665.1K views</span>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                            <!-- Video START -->
                            <video width="200" height="150" class="example1"
                                                id="example1_{{ $videos[0]['id'] }}"
                                                poster="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['thumbnail'] }}">
                                                <source
                                                    src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['file'] }}"
                                                    type="video/mp4">
                                                <track kind="captions" label="English" srclang="en"
                                                    src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                                                Your browser does not support the video tag.
                                            </video>
                            <!-- Video END -->
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                            <!-- Video START -->
                            {{-- <div class="card p-0 position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top" src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/09.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                                class="bi bi-play-fill fs-5"> </i>
                                        </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> How does the stock
                                            market work? </a> </h6>
                                    <span class="small"> 985.1K views</span>
                                </div>
                            </div> --}}
                            <!-- Video END -->
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                            <!-- Video START -->
                            {{-- <div class="card p-0 position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top" src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/10.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                                class="bi bi-play-fill fs-5"> </i>
                                        </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> How to create a app for
                                            your e-commerce
                                            website </a> </h6>
                                    <span class="small"> 658.2K views</span>
                                </div>
                            </div> --}}
                            <!-- Video END -->
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                            <!-- Video START -->
                            {{-- <div class="card p-0 position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top" src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/07.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                                class="bi bi-play-fill fs-5"> </i>
                                        </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> Dilen - When I See You
                                            (Official Music) </a>
                                    </h6>
                                    <span class="small"> 325.1K views</span>
                                </div>
                            </div> --}}
                            <!-- Video END -->
                        </div>
                        <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
                            <!-- Video START -->
                            {{-- <div class="card p-0 position-relative h-100">
                                <!-- Video image -->
                                <div class="card-image">
                                    <img class="card-img-top" src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/08.jpg"
                                        alt="">
                                    <!-- Play icon -->
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                                class="bi bi-play-fill fs-5"> </i>
                                        </a>
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
                                    <h6> <a class="stretched-link" href="video-details.html"> Complete cryptocurrency
                                            course - start
                                            learning </a> </h6>
                                    <span class="small"> 785.9K views</span>
                                </div>
                            </div> --}}
                            <!-- Video END -->
                        </div>
                    </div>
                    <!-- More related video END -->


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
        <script src="assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
        <script src="assets/vendor/plyr/plyr.js"></script>

        <!-- Template Functions -->
        <script src="assets/js/functions.js"></script>

    </body>
    <script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {!! Toastr::message() !!}
    <script>
        $(".example1").each(function() {
            let id = $(this).attr('id');
            console.log(id)
            document.addEventListener("DOMContentLoaded", function() {
                video1 = new Moovie({
                    selector: "#" + id,
                    config: {
                        controls: {
                            playtime: true,
                            mute: true,
                            volume: true,
                            subtitles: true,
                            config: true,
                            fullscreen: true,
                            submenuCaptions: true,
                            submenuOffset: true,
                            submenuSpeed: true,
                            allowLocalSubtitles: true
                        }
                    }
                });
            });
        });
    </script>
    {{-- --------------------------------Read more data---------------------------------- --}}
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    {{-- ------------------------translator------------------------ --}}

    <script type="text/javascript">
        function setCookie(key, value, expiry) {
            var expires = new Date();
            expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 15 * 1000));
            document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
        }

        function googleTranslateElementInit() {
            setCookie('googtrans', '/en', 1);
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
        $(window).load(function() {
            $(".goog-logo-link").empty();
            $('.goog-te-gadget').html($('.goog-te-gadget').children());
        })
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script>
        $(document).ready(function() {

            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    } else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function() {
                $(this).parent().children('li.star').each(function(e) {
                    $(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            $('#stars li').on('click', function() {
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "Thanks! You rated this " + ratingValue + " stars.";
                } else {
                    msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                }
                responseMessage(msg);

            });

        });

        function responseMessage(msg) {
            $('.success-box').fadeIn(200);
            $('.success-box div.text-message').html("<span>" + msg + "</span>");
        }



        getStars({{ round($averageRating, 1) }}, {{ $videos[0]['id'] }})
    </script>

    </html>
</x-app-layout>
