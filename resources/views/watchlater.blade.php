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
            href="<?php echo URL::to('/'); ?>/public/assets/vendor/dropzone/dist/dropzone.css" />

        <!-- Theme CSS -->
        <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <style>
            input.form-control.ps-5.bg-light {
                padding-right: 200px !important;
            }

            body {
                margin: 30px;
                padding: 0;
                background: #ddd;
                font-family: Arial, Helvetica, sans-serif;
            }

            .title {
                width: 100%;
                max-width: 854px;
                margin: 0 auto;
            }

            .caption {
                width: 100%;
                max-width: 854px;
                margin: 0 auto;
                padding: 20px 0;
            }

            .vid-main-wrapper {
                width: 100%;
                max-width: 1100px;
                min-width: 440px;
                background: #fff;
                margin: 0 auto;
            }


            /*  VIDEO PLAYER CONTAINER*/
            .vid-container {
                position: relative;
                padding-bottom: 52%;
                padding-top: 30px;
                height: 0;
                width: 70%;
                float: left;
            }

            .vid-container iframe,
            .vid-container object,
            .vid-container embed {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                min-height: 360px;
            }


            /*  VIDEOS PLAYLIST */
            .vid-list-container {
                width: 30%;
                height: 360px;
                overflow: hidden;
                float: right;
            }

            .vid-list-container:hover,
            .vid-list-container:focus {
                overflow-y: auto;
            }

            ol#vid-list {
                margin: 0;
                padding: 0;
                background: #222;
            }

            ol#vid-list li {
                list-style: none;
            }

            ol#vid-list li a {
                text-decoration: none;
                background-color: #222;
                height: 55px;
                display: block;
                padding: 10px;
            }

            ol#vid-list li a:hover {
                background-color: #666666
            }

            .vid-thumb {
                float: left;
                margin-right: 8px;
            }

            .active-vid {
                background: #3A3A3A;
            }

            #vid-list .desc {
                color: #CACACA;
                font-size: 13px;
                margin-top: 5px;
            }


            @media (max-width: 624px) {
                body {
                    margin: 15px;
                }

                .caption {
                    margin-top: 40px;
                }

                .vid-list-container {
                    padding-bottom: 20px;
                }

            }

            .thumbn {
                background-color: burlywood !important;
                width: 35%;
                height: 100%;
                top: 0;
                right: 0;
                opacity: 0.5;
            }

            .material-symbols-outlined {
                margin: 56px 0px 0px 30px !important;
            }

            div.card-body.pt-0 {
                color: black !important;
            }

            body.font-sans.antialiased {
                background-color: whitesmoke !important;
            }

            div.container-fluid {
                margin-top: 5%;
            }

            div.col-lg-3 {
                position: fixed !important;
                padding: 0 !important;
            }


            .px-5 {
                padding-right: 3rem !important;
                padding-left: 22rem !important;
            }

            body{
                margin:0 !important;
            }

            nav.bg-white.border-b.border-gray-100.w-full {
                position: fixed !important;
                z-index: 1 !important;
            }
        </style>

    </head>

    <body>
        <!-- **************** MAIN CONTENT START **************** -->
        <main class="p-1">
            <!-- Container START -->
            <div class="container-fluid">
                <div class="row g-4">
                    <!-- Sidenav START -->
                    <div class="col-lg-3">
                        <!-- Advanced filter responsive toggler START -->
                        <div class="d-flex align-items-center d-lg-none">
                            <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                                <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
                                <span class="h6 mb-0 fw-bold d-lg-none ms-2">My profile</span>
                            </button>
                        </div>
                        <!-- Navbar START-->
                        <nav class="navbar navbar-expand-lg mx-0">
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
                                <!-- Offcanvas header -->
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close text-reset ms-auto"
                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <!-- Offcanvas body -->
                                <div class="offcanvas-body d-block px-2 px-lg-0">
                                    <!-- Card START -->
                                    <div class="card overflow-hidden">
                                        <!-- Cover image -->
                                        <div class="h-50px"
                                            style="background-image:url({{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $product[0]['user']['cover_img'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
                                        </div>
                                        <!-- Card body START -->
                                        <div class="card-body pt-0">
                                            <div class="text-center">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-lg mb-3">
                                                    <img class="avatar-img rounded-circle border border-white border-3"
                                                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}"
                                                        alt="">
                                                </div>
                                                <!-- Info -->
                                                <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                                                {{-- <small>Web Developer at Webestica</small> --}}
                                            </div>
                                            <hr>
                                            <!-- Side Nav START -->
                                            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                                                <li class="nav-item">
                                                    <a class="nav-link d-flex" href="<?php echo URL::to('/'); ?>/dashboard">
                                                        <img class="me-2 h-20px fa-fw"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/home-outline-filled.svg"
                                                            alt=""><span>Home
                                                        </span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link d-flex" href="<?php echo URL::to('/'); ?>/uploadpage">
                                                        <img class="me-2 h-20px fa-fw"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/medal-outline-filled.svg"
                                                            alt=""><span>Upload Video </span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link d-flex"
                                                        href="{{ URL::to('/channel/' . base64_encode(auth()->user()->id)) }}">
                                                        <img class="me-2 h-20px fa-fw"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/clock-outline-filled.svg"
                                                            alt=""><span>Your Channel </span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link d-flex" href="<?php echo URL::to('/'); ?>/watchlater">
                                                        <img class="me-2 h-20px fa-fw"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/icon/like-outline-filled.svg"
                                                            alt=""><span>Watch Later </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                        <!-- Navbar END-->
                    </div>
                    <!-- Main content START -->
                    <div class="col-md-8 col-lg-6 vstack gap-4 px-5">
                        <!-- Card START -->
                        <div class="card">
                            <!-- Card header START -->
                            <div class="card-header d-sm-flex align-items-center justify-content-between border-0 pb-0">
                                <h1 class="h4 card-title">Videos</h1>
                                <!-- Button modal -->
                                <a class="btn btn-primary-soft" href="<?php echo URL::to('/');?>/uploadpage" data-bs-toggle="modal"
                                    data-bs-target="#modalCreateVideo"> <i class="fa-solid fa-plus pe-1"></i> Add
                                    video</a>
                            </div>
                            <!-- Card header START -->
                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- Tab nav line -->
                                <ul class="nav nav-tabs nav-bottom-line">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
                                            href="#tab-1"> WATCH LATER </a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                            PLAYLIST </a> </li>
                                </ul>
                                <div class="tab-content mb-0 pb-0">
                                    <!-- Home tab START -->
                                    <div class="tab-pane fade show active" id="tab-1">
                                        <div class="row g-3">
                                            @foreach ($product as $data)
                                                <div class="col-sm-6 col-lg-4">
                                                    <!-- Video START -->
                                                    <div class="card p-0 shadow-none border-0 position-relative">
                                                        <!-- Video image -->
                                                        <div class="position-relative">
                                                            <video width="320" height="200" id="example1"
                                                                controls muted>
                                                                <source
                                                                    src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $data['file'] }}"
                                                                    type="video/mp4">
                                                                <track kind="captions" label="English" srclang="en"
                                                                    src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                                                            </video>
                                                            <!-- Duration -->
                                                            <div
                                                                class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                                                <span
                                                                    class="bg-dark bg-opacity-50 px-2 rounded text-white small">10:20</span>
                                                                <span
                                                                    class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto">1
                                                                    min ago</span>
                                                            </div>
                                                        </div>
                                                        <!-- Video info -->
                                                        <div class="card-body px-0">
                                                            <div class="d-flex align-items-center mb-3">
                                                                <!-- Avatar -->
                                                                <div class="avatar avatar-xxs me-2">
                                                                    <img class="avatar-img rounded-circle"
                                                                        src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/01.jpg"
                                                                        alt="">
                                                                </div>
                                                                <!-- Avatar name -->
                                                                <h6 class="mb-0"> <a
                                                                        href="#!">{{ $product[0]['title'] }}</a>
                                                                </h6>
                                                                <span class="ms-auto small"> 156.9K views</span>
                                                            </div>
                                                            <!-- Video title  -->
                                                            {{-- <h6 class="mb-0">  New movie trailers
                              (2021 - 2022) September </h6> --}}
                                                        </div>
                                                    </div>
                                                    <!-- Video END -->
                                                </div>
                                            @endforeach
                                            <div class="col-sm-6 col-lg-4">
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                            </div>
                                            <div class="col-sm-6 col-lg-4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2">
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="card p-0 shadow-none border-0 position-relative">
                                                    <!-- Video image -->
                                                    <div class="position-relative">
                                                        <img class="rounded"
                                                            src="<?php echo URL::to('/'); ?>/public/assets/images/post/16by9/large/14.jpg"
                                                            alt="">
                                                        <!-- Duration -->
                                                        <div
                                                            class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                                                            <span
                                                                class="bg-dark bg-opacity-50 px-2 rounded text-white small">10:20</span>
                                                            <span
                                                                class="bg-dark bg-opacity-50 px-2 mx-3 rounded text-white small">1
                                                                min ago</span>
                                                        </div>
                                                        <div class="thumbn position-absolute">
                                                            <span class="material-symbols-outlined"><small>11</small>
                                                                <br />playlist_play</span>
                                                        </div>
                                                    </div>
                                                    <!-- Video info -->
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <!-- Avatar -->
                                                            <div class="avatar avatar-xxs me-2">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/01.jpg"
                                                                    alt="">
                                                            </div>
                                                            <!-- Avatar name -->
                                                            <h6 class="mb-0"> <a href="#!"> Frances Guerrero <i
                                                                        class="bi bi-patch-check-fill text-success small"></i>
                                                                </a> </h6>
                                                            <span class="ms-auto small"> 156.9K views</span>
                                                        </div>
                                                        <!-- Video title  -->
                                                        <h6 class="mb-0"> <a class="stretched-link"
                                                                href="post-video-details.html"> 8 shocking bitcoin
                                                                crypto predictions for 2022 </a> </h6>
                                                    </div>
                                                </div>
                                                <!-- Video END -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-3">
                                        <!-- Add Video -->
                                        <div class="my-sm-5 py-sm-5 text-center">
                                            <i class="display-1 text-muted bi bi-camera-reels"> </i>
                                            <h4 class="mt-2 mb-3 text-body">No video founds</h4>
                                            <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalCreateVideo"> Click here to add </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-4">
                                        <!-- Add Video -->
                                        <div class="my-sm-5 py-sm-5 text-center">
                                            <i class="display-1 text-muted bi bi-camera-reels"> </i>
                                            <h4 class="mt-2 mb-3 text-body">No video founds</h4>
                                            <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalCreateVideo"> Click here to add </button>
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
        <!-- Modal add video START -->
        <div class="modal fade" id="modalCreateVideo" tabindex="-1" aria-labelledby="modalLabelCreateVideo"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Title -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelCreateVideo">Create video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form START -->
                        <form>
                            <!-- Title -->
                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" class="form-control" placeholder="Add title here">
                            </div>
                            <!-- Description -->
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3" placeholder="Add description here"></textarea>
                            </div>
                            <!-- Dropzone photo START -->
                            <div class="mb-3">
                                <label class="form-label">Upload videos</label>
                                <div class="dropzone dropzone-default card shadow-none"
                                    data-dropzone='{"maxFiles":2}'>
                                    <div class="dz-message">
                                        <i class="bi bi-camera-reels display-3"></i>
                                        <p>Drag here or click to upload video.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Dropzone photo END -->
                        </form>
                        <!-- Form END -->
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success-soft">Post video</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal add video END -->
        <!-- =======================
JS libraries, plugins and custom scripts -->
        <!-- Bootstrap JS -->
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Vendors -->
        <script src="assets/vendor/dropzone/dist/dropzone.js"></script>
        <!-- Template Functions -->
        <script src="assets/js/functions.js"></script>
    </body>

    </html>
</x-app-layout>
