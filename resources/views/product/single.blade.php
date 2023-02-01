<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    @include('header')
    <head>
        <style>
            .goog-te-gadget img {
                vertical-align: middle;
                border: none;
                display: none;
            }

            .dropdown-menu {
                min-width: auto !important;
            }



            .description {
                color: black;
            }

            div#social-links ul {
                display: flex;
                padding: 3px;
            }

            div#social-links ul li {
                padding: 0px 8px;
            }

            div#social-links ul li a {
                font-size: 30px;
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

            .comments {
                color: white;
                padding: 15px;

                max-height: 400px;
                overflow: scroll;
            }

            .commentBox {
                width: auto !important;
                position: absolute !important;
            }

            .modal-content {
                background: white !important;
            }

            label.form-check-label {
                color: black !important;
            }

            .gap-xl-3 {
                margin-left: 12px !important;
            }
           /* sidebar responsive button fix */
            button.border-0.bg-transparent {
                position: fixed ;
                top: 68px ;
            }
        </style>

        <title>Social - Network, Community and Event Theme</title>

        <!-- Meta Tags -->

        <!-- Plugins CSS -->
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/font-awesome/css/all.min.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css"
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/css/OverlayScrollbars.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.css" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">
        <style>
            p {
                color: black !important;
            }
            div#social-links ul {
                display: block;
            }
            span {
                color: black !important;
            }
            video[poster] {
                height: 230px;
                width: 100%;
                object-fit: cover;
            }
            small {
                color: black !important;
            }

            .card-image.video {
                z-index: 0;
            }

             .ml-auto {
                margin-left: auto;
            }



        </style>
        @livewireStyles
    </head>

    <body>

        <!-- **************** MAIN CONTENT START **************** -->

        <!-- =======================
Header START -->
        {{-- <header class="navbar-light fixed-top header-static bg-mode">

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
                        <!-- <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0">
                            <div class="nav-item w-100">
                                <form class="rounded position-relative">
                                    <input class="form-control ps-5 bg-light" type="search" placeholder="Search..."
                                        aria-label="Search">
                                    <button
                                        class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
                                        type="submit"><i class="bi bi-search fs-5"> </i></button>
                                </form>
                            </div>
                        </div> -->
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
        </header> --}}
        <!-- =======================
Header END -->

        <!-- **************** MAIN CONTENT START **************** -->
        <main>

            <!-- Container START -->
            <div class="container-fluid">
                  <div class="d-flex align-items-center  d-lg-none mt-3 mb-3">
                        <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                            <i class="btn btn-primary fw-bold fa-solid fa-sliders-h m-0"></i>
                        </button>
                    </div>
                <!-- Sidenav START -->
                <nav class="navbar  navbar-vertical navbar-light">
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                        <div class="offcanvas offcanvas-start custom-scrollbar rounded " tabindex="-1" id="navbarVerticaloffca nvas">
                            <div class="offcanvas-body pt-5 pt-lg-0">
                                <!-- Card START -->

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
                                    <!-- Side Nav END -->
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Sidenav END -->

                <!-- Main content START -->
                <div class="page-content ">
                    <!-- Official trailer START -->
                    <div class="row gx-4 mt-5 bg-white">
                        <div class="col-md-8 ">
                            <!-- Video START -->
                            <div class="card card-body p-0 rounded-end-lg-0 position-relative h-100 ">
                                <!-- Video image -->
                                <div class="card-image video">
                                    <div class="overflow-hidden fullscreen-video w-100">
                                        <!-- HTML video START -->
                                        <div class="player-wrapper card-img-top overflow-hidden">
                                            <video width="200px" height="100px" class="example1 " id="example1"
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
                                    <div class=" justify-content-between mb-3">
                                        <div class="mb-2 mb-xxl-0">
                                            <!-- Video title  -->
                                            <h4> {{ $videos[0]['title'] }} </h4>
                                            <div class="d-flex my-3 align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-2">
                                                        <img class="avatar-img rounded-circle" src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp" alt="">
                                                    </div>
                                                <!-- <div class=" me-2">
                                                    <img src=""
                                                        height="60px" width="60px" />
                                                </div> -->
                                                <!-- Avatar name -->
                                                <div>
                                                    <h6 class="mb-0">{{ $videos[0]['user']['name'] }}</h6>
                                                    <nav class="nav nav-divider small">
                                                        <span class="nav-item"
                                                            id="subscribe">{{ $subscriber }}</span>
                                                        <span>subscribers</span>
                                                    </nav>
                                                </div>
                                                <div class=" ml-auto">
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
                                                                                id="validationCustom01"
                                                                                name="timestamp" required>
                                                                        </div>
                                                                        <textarea class="form-control" id="message-text" name="description" rows="5" required></textarea>
                                                                        <p class="my-2">Flagged videos and users are
                                                                            reviewed by YouTube staff 24 hours a day,
                                                                            7 days a week to determine whether they
                                                                            violate Community Guidelines. Accounts are
                                                                            penalized for Community Guidelines
                                                                            violations, and serious or repeated
                                                                            violations
                                                                            can lead to account termination. </p>

                                                                    </div>
                                                                    <input type="hidden" name="product_id" id="product_id" value="{{request()->segment(2)}}">
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
                                                <div class="dropdown">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i
                                                                    class="bi bi-reply-fill flip-horizontal"></i>Share
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li> {!! $socialshare !!}</li>
                                                 </ul>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Interested button -->
                                        </div>
                                        <h6 class="description">
                                            Description
                                        </h6>
                                        <p class="disp-cont">
                                        {{ $videos[0]['description'] }}
                                        </p>
                                        <p class="more-cont" style="display:none;">
                                            ....
                                        </p>
                                        <a href="#" class="Read more">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Video END -->
                        </div>
                        <div class="col-md-4 g-3 mt-3">
                            <div class="bg-white">
                            <div class=" mt-3">
                                  <form id="comment">
                                    <div class="input-group">
                                      <input type="text" class="form-control" autocomplete="off"
                                            name="body" id="body" placeholder="Add a comment..." required aria-describedby="button-addon2">
                                        <input type="hidden" name="post_id" value="{{ $videos[0]['id'] }}" />
                                        <button type="submit" class="btn btn-primary btn-sm"
                                        id="button-addon2"><span class="material-symbols-outlined">
                                                send
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            </form>
                           </div>
                            <h4 class="mt-3">{{ $total_comment }} Comments</h4>
                            <div class="comments">
                                @foreach ($videos[0]['comments'] as $key => $commet)
                                    <div>
                                        <div class="row mt-3">
                                            <div class="col-3">
                                                <div class="profile-image">
                                                    <a
                                                        href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}"><img
                                                            src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $commet['user']['profile_photo_path'] }}"
                                                            width="40px" /></a>
                                                </div>
                                            </div>
                                            <div class="col-9">
                                                <p class="m-0"> <b style="text-transform: capitalize;">
                                                        {{ $commet['user']['name'] }}
                                                    </b>{{ \Carbon\Carbon::parse($commet['created_at'])->diffForHumans() }}
                                                </p>
                                                <p class="para">{{ $commet['body'] }}</p>
                                                <div class="comment_reply_{{ $commet['id'] }}">
                                                    @foreach ($commet['replies'] as $key => $reply)
                                                        <div class="reply" style="color: black">{{ $reply['body'] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="d-flex">
                                                    <a class="me-3 text-decoration-none"
                                                        onclick="reply(this)">REPLY</a>
                                                </div>
                                                <div class="row" id="replyBox" style="display: none">
                                                    <div class="col-md-12 common">
                                                        <form class="save_reply">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control body1 reset"
                                                                    name="body" class="body_reply"
                                                                    placeholder="Reply..." required aria-describedby="button-addon2">
                                                                <input type="hidden" name="post_id" class="post_id"
                                                                    value="{{ $videos[0]['id'] }}" />
                                                                <input type="hidden" name="comment_id"
                                                                    class="comment_id" value="{{ $commet['id'] }}" />

                                                                    <button type="submit" class="btn btn-primary btn-sm"
                                                                    data-id="{{ $commet['id'] }}"
                                                                    >REPLY</button>
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
                    </div>
                    <!-- Official trailer END -->
                    <!-- More related video START -->
                    <div class="row g-3 mb-4">
                        <div class="col-12 mt-4">
                            <h5>More related video </h5>
                        </div>
                        @foreach ($multi_video as $video)
                            @foreach ($video['posts'] as $posts)
                                <div class="col-sm-6 col-md-4 col-xl-3">
                                    <!-- Video START -->
                                    <a href="{{ url('/watch/' . $posts['encripted_video_url']) }}">
                                        <video width="320" height="240" onmouseover="this.play()"
                                            onmouseout="this.pause();this.currentTime=0;" class="video_autoplay"
                                            poster="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['thumbnail'] }}">
                                            <source
                                                src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}"
                                                type="video/mp4">

                                        </video>
                                        <!-- {{-- <video width="200" height="150" class="example1"
                                id="example1_{{ $posts['id'] }}"
                                poster="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['thumbnail'] }}">
                                <source
                                    src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $posts['file'] }}"
                                    type="video/mp4">
                                <track kind="captions" label="English" srclang="en"
                                    src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                            </video> --}} -->
                                        <div class="card-body">
                                            <!-- Video title  -->
                                            <h6>
                                                {{ strlen($posts['title']) > 15 ? substr($posts['title'], 0, 20) . '...' : $posts['title'] }}
                                            </h6>
                                            <span class="small"> views: {{ $posts['views'] }}</span>
                                        </div>
                                        {{-- <p>{{strlen($posts['description']) > 15 ? substr($posts['description'],0,20)."..." : $posts['description']}}</p> --}}
                                    </a>
                                    <!-- Video END -->
                                </div>
                            @endforeach
                        @endforeach
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
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Vendors -->
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/OverlayScrollbars-master/js/OverlayScrollbars.min.js"></script>
        <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/plyr/plyr.js"></script>

        <!-- Template Functions -->
        <script src="assets/js/functions.js"></script>
        @livewireScripts
    </body>
    <script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>



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
    {{-- ------------------send auth user detail in script file-------------------------- --}}
    <script>
        var Auth_user = {!! auth()->user()->toJson() !!};
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    {{-- ----------------star rating------------------ --}}
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
<!-- <script>
function resetform(){
document.getElementById("submit_report").reset();
}
</script> -->
    </html>
</x-app-layout>
