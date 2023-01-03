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
  <link rel="shortcut icon" href="<?php echo URL::to('/')?>/public/assets/images/favicon.ico">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

  <!-- Plugins CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/')?>/public/assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/')?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/')?>/public/assets/vendor/dropzone/dist/dropzone.css" />

  <!-- Theme CSS -->
  <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/')?>/public/assets/css/style.css">
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


    /*  VIDEO PLAYER CONTAINER
 		############################### */
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


    /*  VIDEOS PLAYLIST
 		############################### */
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
    div.card-body.pt-0{
        color: black !important;
    }
    body.font-sans.antialiased{
        background-color: whitesmoke !important;
    }

    div.container-fluid{
        margin-top: 5%;
    }

    div.col-lg-3{
        position: fixed !important;
        padding: 0 !important;
}


    .px-5 {
    padding-right: 3rem !important;
    padding-left: 22rem !important;
    }

  </style>
</head>

<body>

  <!-- =======================
Header START -->
  {{-- <header class="navbar-light fixed-top header-static bg-mode">


    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand" href="index.html">
          <img class="light-mode-item navbar-brand-item" src="<?php echo URL::to('/')?>/public/assets/images/logo.svg" alt="logo">
          <img class="dark-mode-item navbar-brand-item" src="<?php echo URL::to('/')?>/public/assets/images/logo.svg" alt="logo">
        </a>



        <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-animation">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </button>


        <div class="collapse navbar-collapse" id="navbarCollapse">


          <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0 w-70 ">
            <div class="nav-item w-100">
              <form class="rounded position-relative">
                <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
                  type="submit"><i class="bi bi-search fs-5"> </i></button>
              </form>
            </div>
          </div>


          <ul class="navbar-nav navbar-nav-scroll ms-auto">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Demo</a>
              <ul class="dropdown-menu" aria-labelledby="homeMenu">
                <li> <a class="dropdown-item" href="index.html">Home default</a></li>
                <li> <a class="dropdown-item" href="index-classic.html">Home classic</a></li>
                <li> <a class="dropdown-item" href="index-post.html">Home post</a></li>
                <li> <a class="dropdown-item" href="index-video.html">Home video</a></li>
                <li> <a class="dropdown-item" href="index-event.html">Home event</a></li>
                <li> <a class="dropdown-item" href="landing.html">Landing page</a></li>
                <li> <a class="dropdown-item" href="app-download.html">App download</a></li>
                <li class="dropdown-divider"></li>
                <li>
                  <a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
                    <i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Social!
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Pages</a>
              <ul class="dropdown-menu" aria-labelledby="pagesMenu">
                <li> <a class="dropdown-item" href="albums.html">Albums</a></li>
                <li> <a class="dropdown-item" href="celebration.html">Celebration</a></li>
                <li> <a class="dropdown-item" href="messaging.html">Messaging</a></li>

                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-toggle" href="#!">Profile</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li> <a class="dropdown-item" href="my-profile.html">Feed</a> </li>
                    <li> <a class="dropdown-item" href="my-profile-about.html">About</a> </li>
                    <li> <a class="dropdown-item" href="my-profile-connections.html">Connections</a> </li>
                    <li> <a class="dropdown-item" href="my-profile-media.html">Media</a> </li>
                    <li> <a class="dropdown-item" href="my-profile-videos.html">Videos</a> </li>
                    <li> <a class="dropdown-item" href="my-profile-events.html">Events</a> </li>
                    <li> <a class="dropdown-item" href="my-profile-activity.html">Activity</a> </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item" href="events.html">Events</a></li>
                <li> <a class="dropdown-item" href="events-2.html">Events 2</a></li>
                <li> <a class="dropdown-item" href="event-details.html">Event details</a></li>
                <li> <a class="dropdown-item" href="event-details-2.html">Event details 2</a></li>
                <li> <a class="dropdown-item" href="groups.html">Groups</a></li>
                <li> <a class="dropdown-item" href="group-details.html">Group details</a></li>
                <li> <a class="dropdown-item" href="post-videos.html">Post videos</a></li>
                <li> <a class="dropdown-item" href="post-video-details.html">Post video details</a></li>
                <li> <a class="dropdown-item" href="post-details.html">Post details</a></li>
                <li> <a class="dropdown-item" href="video-details.html">Video details</a></li>
                <li> <a class="dropdown-item" href="blog.html">Blog</a></li>
                <li> <a class="dropdown-item" href="blog-details.html">Blog details</a></li>


                <li class="dropdown-divider"></li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
                  <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

                    <li class="dropdown-submenu dropstart">
                      <a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
                      <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                        <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                        <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                      </ul>
                    </li>
                    <li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
                  </ul>
                </li>
              </ul>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Account </a>
              <ul class="dropdown-menu" aria-labelledby="postMenu">
                <li> <a class="dropdown-item" href="create-page.html">Create a page</a></li>
                <li> <a class="dropdown-item" href="settings.html">Settings</a> </li>
                <li> <a class="dropdown-item" href="notifications.html">Notifications</a> </li>
                <li> <a class="dropdown-item" href="help.html">Help center</a> </li>
                <li> <a class="dropdown-item" href="help-details.html">Help details</a> </li>

                <li class="dropdown-submenu dropstart">
                  <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                  <ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
                    <li> <a class="dropdown-item" href="sign-in.html">Sign in</a> </li>
                    <li> <a class="dropdown-item" href="sign-up.html">Sing up</a> </li>
                    <li> <a class="dropdown-item" href="forgot-password.html">Forgot password</a> </li>
                    <li class="dropdown-divider"></li>
                    <li> <a class="dropdown-item" href="sign-in-advance.html">Sign in advance</a> </li>
                    <li> <a class="dropdown-item" href="sign-up-advance.html">Sing up advance</a> </li>
                    <li> <a class="dropdown-item" href="forgot-password-advance.html">Forgot password advance</a> </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item" href="error-404.html">Error 404</a> </li>
                <li> <a class="dropdown-item" href="offline.html">Offline</a> </li>
                <li> <a class="dropdown-item" href="privacy-and-terms.html">Privacy & terms</a> </li>
              </ul>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="my-profile-connections.html">My network</a>
            </li>
          </ul>
        </div>



        <ul class="nav flex-nowrap align-items-center ms-sm-3 list-unstyled">
          <li class="nav-item ms-2">
            <a class="nav-link icon-md btn btn-light p-0" href="messaging.html">
              <i class="bi bi-chat-left-text-fill fs-6"> </i>
            </a>
          </li>
          <li class="nav-item ms-2">
            <a class="nav-link icon-md btn btn-light p-0" href="settings.html">
              <i class="bi bi-gear-fill fs-6"> </i>
            </a>
          </li>
          <li class="nav-item dropdown ms-2">
            <a class="nav-link icon-md btn btn-light p-0" href="#" id="notifDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
              <span class="badge-notif animation-blink"></span>
              <i class="bi bi-bell-fill fs-6"> </i>
            </a>
            <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0"
              aria-labelledby="notifDropdown">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h6 class="m-0">Notifications <span class="badge bg-danger bg-opacity-10 text-danger ms-2">4
                      new</span></h6>
                  <a class="small" href="#">Clear all</a>
                </div>
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush list-unstyled p-2">

                    <li>
                      <div class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/01.jpg" alt="">
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

                    <li>
                      <div
                        class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/02.jpg" alt="">
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

                    <li>
                      <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 mb-1 p-3">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <div class="avatar-img rounded-circle bg-success"><span
                              class="text-white position-absolute top-50 start-50 translate-middle fw-bold">WB</span>
                          </div>
                        </div>
                        <div class="ms-sm-3">
                          <div class="d-flex">
                            <p class="small mb-2">Webestica has 15 like and 1 new activity</p>
                            <p class="small ms-3">1hr</p>
                          </div>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="#" class="list-group-item list-group-item-action rounded d-flex border-0 p-3 mb-1">
                        <div class="avatar text-center d-none d-sm-inline-block">
                          <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/logo/12.svg" alt="">
                        </div>
                        <div class="ms-sm-3 d-flex">
                          <p class="small mb-2"><b>Bootstrap in the news:</b> The search giant’s parent company,
                            Alphabet, just joined an exclusive club of tech stocks.</p>
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


          <li class="nav-item ms-2 dropdown">
            <a class="nav-link btn icon-md p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
              data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="avatar-img rounded-2" src="<?php echo URL::to('/')?>/public/assets/images/avatar/07.jpg" alt="">
            </a>
            <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
              aria-labelledby="profileDropdown">

              <li class="px-3">
                <div class="d-flex align-items-center position-relative">

                  <div class="avatar me-3">
                    <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/07.jpg" alt="avatar">
                  </div>
                  <div>
                    <a class="h6 stretched-link" href="#">Lori Ferguson</a>
                    <p class="small m-0">Web Developer</p>
                  </div>
                </div>
                <a class="dropdown-item btn btn-primary-soft btn-sm my-2 text-center" href="my-profile.html">View
                  profile</a>
              </li>

              <li><a class="dropdown-item" href="settings.html"><i class="bi bi-gear fa-fw me-2"></i>Settings &
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

              <li>
                <div class="modeswitch-wrap" id="darkModeSwitch">
                  <div class="modeswitch-item">
                    <div class="modeswitch-icon"></div>
                  </div>
                  <span>Dark mode</span>
                </div>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </nav>

  </header> --}}
  <!-- =======================
Header END -->

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
          <!-- Advanced filter responsive toggler END -->

          <!-- Navbar START-->
          <nav class="navbar navbar-expand-lg mx-0">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSideNavbar">
              <!-- Offcanvas header -->
              <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset ms-auto" data-bs-dismiss="offcanvas"
                  aria-label="Close"></button>
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
                      <h5 class="mb-0">{{auth()->user()->name}}</h5>
                      {{-- <small>Web Developer at Webestica</small> --}}
                    </div>
                    <!-- Divider -->
                    <hr>
                    <!-- Side Nav START -->
                    <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                      <li class="nav-item">
                        <a class="nav-link d-flex" href="<?php echo URL::to('/')?>/dashboard"> <img class="me-2 h-20px fa-fw"
                            src="<?php echo URL::to('/')?>/public/assets/images/icon/home-outline-filled.svg" alt=""><span>Home
                          </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-flex"
                          href="<?php echo URL::to('/')?>/uploadpage">
                          <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/')?>/public/assets/images/icon/medal-outline-filled.svg"
                            alt=""><span>Upload Video </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-flex"
                          href="{{URL::to('/channel/'. base64_encode(auth()->user()->id))}}">
                          <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/')?>/public/assets/images/icon/clock-outline-filled.svg"
                            alt=""><span>Your Channel </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-flex"
                          href="<?php echo URL::to('/')?>/watchlater">
                          <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/')?>/public/assets/images/icon/like-outline-filled.svg"
                            alt=""><span>Watch Later </span></a>
                      </li>
                      <!-- <li class="nav-item">
                      <a class="nav-link" href="groups.html"> <img class="me-2 h-20px fa-fw" src="assets/images/icon/chat-outline-filled.svg" alt=""><span>Groups </span></a>
                    </li> -->
                      {{-- <li class="nav-item">
                        <a class="nav-link d-flex" href="notifications.html"> <img class="me-2 h-20px fa-fw"
                            src="<?php echo URL::to('/')?>/public/assets/images/icon/notification-outlined-filled.svg" alt=""><span>Notifications
                          </span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link d-flex" href="settings.html"> <img class="me-2 h-20px fa-fw"
                            src="<?php echo URL::to('/')?>/public/assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings </span></a>
                      </li>
                      <li>
                      <a class="nav-link d-flex"
                        href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/sign-in-advance.html">
                        <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/')?>/public/assets/images/icon/arrow-boxed-outline-filled.svg"
                          alt=""><span>Logout </span></a>
                      </li> --}}
                    </ul>
                    <!-- Side Nav END -->
                  </div>
                  <!-- Card body END -->
                  <!-- Card footer -->
                  <div class="card-footer text-center py-2">
                    <a class="btn btn-link btn-sm" href="my-profile.html">View Profile </a>
                  </div>
                </div>
                <!-- Card END -->

                <!-- Helper link START -->
                <ul class="nav small mt-4 justify-content-center lh-1">
                  <li class="nav-item">
                    <a class="nav-link" href="my-profile-about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="settings.html">Settings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://support.webestica.com/login">Support </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" target="_blank" href="docs/index.html">Docs </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="help.html">Help</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="privacy-and-terms.html">Privacy & terms</a>
                  </li>
                </ul>
                <!-- Helper link END -->
                <!-- Copyright -->
                <p class="small text-center mt-1">©2022 <a class="text-body" target="_blank"
                    href="https://www.webestica.com/"> Webestica </a></p>
              </div>
            </div>
          </nav>
          <!-- Navbar END-->
        </div>
        <!-- Sidenav END -->

        <!-- Main content START -->
        <div class="col-md-8 col-lg-6 vstack gap-4 px-5">
          <!-- Card START -->
          <div class="card">
            <!-- Card header START -->
            <div class="card-header d-sm-flex align-items-center justify-content-between border-0 pb-0">
              <h1 class="h4 card-title">Videos</h1>
              <!-- Button modal -->
              <a class="btn btn-primary-soft" href="#" data-bs-toggle="modal" data-bs-target="#modalCreateVideo"> <i
                  class="fa-solid fa-plus pe-1"></i> Add video</a>
            </div>
            <!-- Card header START -->
            <!-- Card body START -->
            <div class="card-body">

              <!-- Tab nav line -->
              <ul class="nav nav-tabs nav-bottom-line">
                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab-1"> WATCH LATER </a>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-2"> PLAYLIST </a> </li>
                <!-- <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-3"> Show </a> </li>
              <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab-4"> Saved video </a> </li> -->
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
                            <video width="320" height="200" id="example1" controls muted>
                                <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $data['file'] }}"
                                    type="video/mp4">
                                <track kind="captions" label="English" srclang="en"
                                    src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                            </video>
                          <!-- Play icon -->
                          {{-- <div class="position-absolute top-0 end-0 p-3">
                            <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                class="bi bi-play-fill fs-5"> </i> </a>
                          </div> --}}
                          <!-- Duration -->
                          <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">10:20</span>
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto">1 min ago</span>
                          </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxs me-2">
                                <img class="avatar-img rounded-circle" src="<?php echo URL::to('/');?>/public/assets/images/avatar/01.jpg" alt="">
                              </div>
                            <!-- Avatar name -->
                            <h6 class="mb-0"> <a href="#!">{{$product[0]['title']}}</a> </h6>
                            <span class="ms-auto small"> 156.9K views</span>
                          </div>
                          <!-- Video title  -->
                          <h6 class="mb-0">  New movie trailers
                              (2021 - 2022) September </h6>
                        </div>
                      </div>
                      <!-- Video END -->
                    </div>
                    @endforeach
                    <div class="col-sm-6 col-lg-4">
                      <!-- Video START -->
                      {{-- <div class="card p-0 shadow-none border-0 position-relative">
                        <!-- Video image -->
                        <div class="position-relative">
                          <img class="rounded" src="<?php echo URL::to('/');?>/public/assets/images/post/16by9/large/12.jpg" alt="">
                          <!-- Play icon -->
                          <div class="position-absolute top-0 end-0 p-3">
                            <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                class="bi bi-play-fill fs-5"> </i> </a>
                          </div>
                          <!-- Duration -->
                          <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">05:10</span>
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto">25 min ago</span>
                          </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxs me-2">
                              <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/02.jpg" alt="">
                            </div>
                            <!-- Avatar name -->
                            <h6 class="mb-0"> <a href="#!"> Lori Ferguson <i
                                  class="bi bi-patch-check-fill text-success small"></i> </a> </h6>
                            <span class="ms-auto small"> 156.9K views</span>
                          </div>
                          <!-- Video title  -->
                          <h6 class="mb-0"> <a class="stretched-link" href="post-video-details.html"> Learn web
                              development as an absolute beginner </a> </h6>
                        </div>
                      </div> --}}
                      <!-- Video END -->
                    </div>
                    {{-- <div class="col-sm-6 col-lg-4">
                      <!-- Video START -->
                      <div class="card p-0 shadow-none border-0 position-relative">
                        <!-- Video image -->
                        <div class="position-relative">
                          <img class="rounded" src="<?php echo URL::to('/')?>/public/assets/images/post/16by9/large/13.jpg" alt="">
                          <!-- Play icon -->
                          <div class="position-absolute top-0 end-0 p-3">
                            <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                class="bi bi-play-fill fs-5"> </i> </a>
                          </div>
                          <!-- Duration -->
                          <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">03:40</span>
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto">50 min ago</span>
                          </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxs me-2">
                              <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/03.jpg" alt="">
                            </div>
                            <!-- Avatar name -->
                            <h6 class="mb-0"> <a href="#!"> Louis Crawford </a> </h6>
                            <span class="ms-auto small"> 156.9K views</span>
                          </div>
                          <!-- Video title  -->
                          <h6 class="mb-0"> <a class="stretched-link" href="post-video-details.html"> Python tutorial -
                              Python for beginners [full course] </a> </h6>
                        </div>
                      </div>
                      <!-- Video END -->
                    </div> --}}
                    <div class="col-sm-6 col-lg-4">
                      <!-- Video START -->
                      {{-- <div class="card p-0 shadow-none border-0 position-relative">
                        <!-- Video image -->
                        <div class="position-relative">
                          <img class="rounded" src="<?php echo URL::to('/')?>/public/assets/images/post/16by9/large/14.jpg" alt="">
                          <!-- Play icon -->
                          <div class="position-absolute top-0 end-0 p-3">
                            <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                class="bi bi-play-fill fs-5"> </i> </a>
                          </div>
                          <!-- Duration -->
                          <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">06:12</span>
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto">1 week ago</span>
                          </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxs me-2">
                              <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/04.jpg" alt="">
                            </div>
                            <!-- Avatar name -->
                            <h6 class="mb-0"> <a href="#!"> Larry Lawson </a> </h6>
                            <span class="ms-auto small"> 156.9K views</span>
                          </div>
                          <!-- Video title  -->
                          <h6 class="mb-0"> <a class="stretched-link" href="post-video-details.html"> One of the
                              greatest speeches ever | Steve Jobs </a> </h6>
                        </div>
                      </div> --}}
                      <!-- Video END -->
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <!-- Video START -->
                      {{-- <div class="card p-0 shadow-none border-0 position-relative">
                        <!-- Video image -->
                        <div class="position-relative">
                          <img class="rounded" src="<?php echo URL::to('/')?>/public/assets/images/post/16by9/large/15.jpg" alt="">
                          <!-- Play icon -->
                          <div class="position-absolute top-0 end-0 p-3">
                            <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                class="bi bi-play-fill fs-5"> </i> </a>
                          </div>
                          <!-- Duration -->
                          <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">03:45</span>
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small ms-auto">2 week ago</span>
                          </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxs me-2">
                              <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/05.jpg" alt="">
                            </div>
                            <!-- Avatar name -->
                            <h6 class="mb-0"> <a href="#!"> Joan Wallace </a> </h6>
                            <span class="ms-auto small"> 156.9K views</span>
                          </div>
                          <!-- Video title  -->
                          <h6 class="mb-0"> <a class="stretched-link" href="post-video-details.html"> A trading platform
                              - an easy start in trading </a> </h6>
                        </div>
                      </div> --}}
                      <!-- Video END -->
                    </div>
                  </div>
                </div>
                <!-- Home tab END -->

                <!-- Live tab START -->

                <div class="tab-pane fade" id="tab-2">
                  <div class="row g-3">
                    <div class="col-md-4">
                      <!-- Video START -->
                      <!-- <div class="vid-main-wrapper clearfix"> -->

                      <!-- THE YOUTUBE PLAYER -->
                      <!-- <div class="vid-container">
                          <iframe  src="https://www.youtube.com/embed/cOSEOYi9JS4?rel=0&showinfo=0&autohide=1"
                            frameborder="0" width="560" height="315"></iframe>
                        </div> -->

                      <!-- THE PLAYLIST -->
                      <!-- <div class="vid-list-container">
                          <ol id="vid-list">
                            <li>
                              <a>
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/cOSEOYi9JS4/default.jpg" /></span>
                                <div class="desc">WeatherBeater™ Product Video</div>
                              </a>
                            </li>
                            <li>
                              <a>
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/9P7mEf4bilg/default.jpg" /></span>
                                <div class="desc">X-act Contour® Product Video</div>
                              </a>
                            </li>
                            <li>
                              <a >
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/KHxNpXovl58/default.jpg" /></span>
                                <div class="desc">GearBox® Product Video</div>
                              </a>
                            </li>
                            <li>
                              <a >
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/D_a2UBGsePQ/default.jpg" /></span>
                                <div class="desc">Mud Guards Product Video</div>
                              </a>
                            </li>
                            <li>
                              <a >
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/vYoh2IgoBXg/default.jpg" /></span>
                                <div class="desc">Wheel Well Guards Product Video</div>
                              </a>
                            </li>
                            <li>
                              <a>
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/RTHI_uGyfTM/default.jpg" /></span>
                                <div class="desc">Cargo Liner Product Video</div>
                              </a>
                            </li>
                            <li>
                              <a>
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/EvTjAjLNphE/default.jpg" /></span>
                                <div class="desc">Husky Liners Products</div>
                              </a>
                            </li>
                            <li>
                              <a>
                                <span class="vid-thumb"><img width=72
                                    src="https://img.youtube.com/vi/-Qpc79oaJQg/default.jpg" /></span>
                                <div class="desc">Custom Molded Mud Guards</div>
                              </a>
                            </li>

                            </ul>
                        </div> -->
                      <!-- </div> -->


                      <div class="card p-0 shadow-none border-0 position-relative">
                        <!-- Video image -->
                        <div class="position-relative">


                          <img class="rounded" src="<?php echo URL::to('/')?>/public/assets/images/post/16by9/large/14.jpg" alt="">






                          <!-- Play icon -->
                          <!-- <div class="position-absolute top-0 end-0 p-3">
                            <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i
                                class="bi bi-play-fill fs-5"> </i> </a>
                          </div> -->
                          <!-- Duration -->
                          <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                            <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">10:20</span>
                            <span class="bg-dark bg-opacity-50 px-2 mx-3 rounded text-white small">1 min ago</span>
                          </div>
                          <div class="thumbn position-absolute">

                            <span class="material-symbols-outlined"><small>11</small> <br />playlist_play</span>
                          </div>
                        </div>
                        <!-- Video info -->
                        <div class="card-body px-0">
                          <div class="d-flex align-items-center mb-3">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxs me-2">
                              <img class="avatar-img rounded-circle" src="<?php echo URL::to('/')?>/public/assets/images/avatar/01.jpg" alt="">
                            </div>
                            <!-- Avatar name -->
                            <h6 class="mb-0"> <a href="#!"> Frances Guerrero <i
                                  class="bi bi-patch-check-fill text-success small"></i> </a> </h6>
                            <span class="ms-auto small"> 156.9K views</span>
                          </div>
                          <!-- Video title  -->
                          <h6 class="mb-0"> <a class="stretched-link" href="post-video-details.html"> 8 shocking bitcoin
                              crypto predictions for 2022 </a> </h6>
                        </div>
                      </div>
                      <!-- Video END -->
                    </div>
                  </div>
                </div>
                <!-- Live tab END -->

                <!-- Show tab START -->
                <div class="tab-pane fade" id="tab-3">
                  <!-- Add Video -->
                  <div class="my-sm-5 py-sm-5 text-center">
                    <i class="display-1 text-muted bi bi-camera-reels"> </i>
                    <h4 class="mt-2 mb-3 text-body">No video founds</h4>
                    <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                      data-bs-target="#modalCreateVideo"> Click here to add </button>
                  </div>
                </div>
                <!-- Show tab END -->

                <!-- Saved video START -->
                <div class="tab-pane fade" id="tab-4">
                  <!-- Add Video -->
                  <div class="my-sm-5 py-sm-5 text-center">
                    <i class="display-1 text-muted bi bi-camera-reels"> </i>
                    <h4 class="mt-2 mb-3 text-body">No video founds</h4>
                    <button class="btn btn-primary-soft btn-sm" data-bs-toggle="modal"
                      data-bs-target="#modalCreateVideo"> Click here to add </button>
                  </div>
                </div>
                <!-- Saved video END -->

              </div>
            </div>
            <!-- Card body END -->
          </div>
          <!-- Card END -->
        </div>
        <!-- Main content END -->

      </div> <!-- Row END -->
    </div>
    <!-- Container END -->

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
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
              <div class="dropzone dropzone-default card shadow-none" data-dropzone='{"maxFiles":2}'>
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
