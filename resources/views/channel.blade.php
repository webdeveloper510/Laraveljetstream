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
  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

  <!-- Plugins CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/vendor/glightbox-master/dist/css/glightbox.min.css">

  <!-- Theme CSS -->
  <link id="style-switch" rel="stylesheet" type="text/css" href="<?php echo URL::to('/'); ?>/public/assets/css/style.css">
  <style>


/* side navbar */
    .navbar.navbar-vertical.navbar-light{
        top: 50px !important;
        max-width: 342px !important;
    }
/* -------------- */

/* main content */
    .col-md-6.my-5.px-5.gap-0{
        padding-right: 0rem !important;
        padding-left: 1rem !important;
    }

/* video title */
.title_color
{
    color: black !important;
}

    </style>
</head>

<body>

  <!-- =======================
Header START -->
  {{-- <header class="navbar-light fixed-top header-static bg-mode">

    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand" href="index.html">
          <img class="light-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
          <img class="dark-mode-item navbar-brand-item" src="<?php echo URL::to('/'); ?>/public/assets/images/logo.svg" alt="logo">
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
          <div class="nav mt-3 mt-lg-0 flex-nowrap align-items-center px-4 px-lg-0 w-100">
            <div class="nav-item w-100">
              <form class="rounded position-relative">
                <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
                  type="submit"><i class="bi bi-search fs-5"> </i></button>
              </form>
            </div>
          </div>


          <ul class="navbar-nav navbar-nav-scroll ms-auto">
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

                    <li>
                      <div
                        class="list-group-item list-group-item-action rounded badge-unread d-flex border-0 mb-1 p-3 position-relative">
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
                          <img class="avatar-img rounded-circle" src="assets/images/logo/12.svg" alt="">
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
              <img class="avatar-img rounded-2" src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="">
            </a>
            <ul class="dropdown-menu dropdown-animation dropdown-menu-end pt-3 small me-md-n3"
              aria-labelledby="profileDropdown">

              <li class="px-3">
                <div class="d-flex align-items-center position-relative">

                  <div class="avatar me-3">
                    <img class="avatar-img rounded-circle" src="<?php echo URL::to('/'); ?>/public/assets/images/avatar/07.jpg" alt="avatar">
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
  <main>

    <!-- Container START -->
    <div class="container-fluid">


      <div class="row ">

        <!-- Main content START -->
        <div class="col-lg-3 g-0">
          <!-- Sidenav START -->
          <div class="navbar navbar-vertical navbar-light">
            <div class="offcanvas offcanvas-start custom-scrollbar rounded pt-0" tabindex="-1"
              id="navbarVerticaloffcanvas">
              <div class="offcanvas-body pt-0 pt-lg-0 ">
                <!-- Avatar -->
                <div class="avatar avatar-lg mb-3">

                    <img class="avatar-img rounded-circle border border-white border-3"
                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}">

                </div>
                <!-- Info -->
                <h5 class="mb-0">{{auth()->user()->name}} </h5>
                <!-- <small>Web Developer at Webestica</small> -->
                <!-- User stat START -->
              <div>

            </div>
                <!-- User stat END -->

                <!-- Divider -->
                <hr>

                <!-- Side Nav START -->
                <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
                  <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="<?php echo URL::to('/'); ?>/dashboard"> <img
                        class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/home-outline-filled.svg" alt=""><span>Home
                      </span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="<?php echo URL::to('/'); ?>/uploadpage">
                      <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/medal-outline-filled.svg"
                        alt=""><span>Upload Video </span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="{{URL::to('/channel/'.$id)}}">
                      <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/clock-outline-filled.svg" alt=""><span>Your
                        Channel </span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="<?php echo URL::to('/'); ?>/watchlater"> <img
                        class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/like-outline-filled.svg" alt=""><span>Watch
                        Later </span></a>
                  </li>
                  {{-- <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/notifications.html"> <img
                        class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/notification-outlined-filled.svg"
                        alt=""><span>Notifications </span></a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/settings.html"> <img
                        class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings
                      </span></a>
                  </li> --}}
                  {{-- <li class="nav-item">
                    <a class="nav-link d-flex"
                      href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/sign-in-advance.html">
                      <img class="me-2 h-20px fa-fw" src="<?php echo URL::to('/'); ?>/public/assets/images/icon/arrow-boxed-outline-filled.svg"
                        alt=""><span>Logout</span></a>
                  </li> --}}
                </ul>
                <!-- Side Nav END -->
              </div>
            </div>
          </div>
		 </div>
          <!-- Sidenav END -->
        <div class="col-md-6 my-5 px-5 pt-4 gap-0">
          <!-- Card START -->
          <div class="card">
			@if($videos)
            <div class="h-200px rounded-top"
              style="background-image:url({{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos[0]['user']['cover_img'] }}); background-position: center; background-size: cover; background-repeat: no-repeat;">
            </div>
			@endif
            <!-- Card body START -->
            <div class="card-body py-0">
              <div class="d-sm-flex align-items-start text-center text-sm-start">
                <div>
                  <!-- Avatar -->
                  <div class="avatar avatar-xxl mt-n5 mb-3">

                    <img class="avatar-img rounded-circle border border-white border-3"
                        src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}">

                  </div>
                </div>
                <div class="ms-sm-4 mt-sm-3">
                  <!-- Info -->

                  <h1 class="mb-0 h5">{{auth()->user()->name}}<i class="bi bi-patch-check-fill text-success small"></i></h1>
                  <p>250 connections</p>
                </div>
                <!-- Button -->
                <div class="d-flex mt-3 justify-content-center ms-sm-auto">
                  <a class="btn btn-danger-soft me-2" href="<?php echo URL::to('/'); ?>/user/profile"></i> Edit
                    profile </a>
                  <div class="dropdown">
                    <!-- Card share action menu -->
                    <button class="icon-md btn btn-light" type="button" id="profileAction2" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <i class="bi bi-three-dots"></i>
                    </button>
                    <!-- Card share action dropdown menu -->
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileAction2">
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-bookmark fa-fw pe-2"></i>Share profile in a
                          message</a></li>
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-file-earmark-pdf fa-fw pe-2"></i>Save your
                          profile to PDF</a></li>
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-lock fa-fw pe-2"></i>Lock profile</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#"> <i class="bi bi-gear fa-fw pe-2"></i>Profile settings</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- List profile -->
            </div>
          </div>
          <!-- Card END Details -->

          <!-- Video START -->
          <div class="col-md-3">

          </div>
          <div class="card">
            <!-- Card header START -->
            <div class="card-header border-0 pb-0">
              <h5 class="card-title">Videos</h5>
              <!-- Button modal -->
            </div>
            <!-- Card header END -->
            <!-- Card body START -->
            <div class="card-body">
              <!-- Video of you tab START -->
              <div class="row g-3">

                <!-- Add Video START -->
                <div class="col-sm-6 col-md-4">
                  <div
                    class="border border-2 py-5 border-dashed h-100 rounded text-center d-flex align-items-center justify-content-center position-relative">
                    <a class="stretched-link" href="#!">
                      <i class="fa-solid fa-camera-retro fs-1"></i>
                      <h6 class="mt-2">Add Video</h6>
                    </a>
                  </div>
                </div>
                <!-- Add Video END -->
                @foreach ($videos as $video)
                <div class="col-sm-6 col-md-4">
                  <!-- Video START -->
                  <div class="card p-0 shadow-none border-0 position-relative">
                    <!-- Video image -->
                    <div class="position-relative">
                        <video width="320" height="200" id="example1" controls muted>
                            <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['file'] }}"
                                type="video/mp4">
                            <track kind="captions" label="English" srclang="en"
                                src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                        </video>
                      <!-- Duration -->
                      <div class="position-absolute bottom-0 start-0 p-3 d-flex w-100">
                        <span class="bg-dark bg-opacity-50 px-2 rounded text-white small">02:20</span>
                      </div>
                    </div>
                    <!-- Video info -->
                    <div class="card-body px-0 pb-0 pt-2">
                    <p class="title_color">{{$videos[0]['title']}}</p>
                    </div>
                  </div>
                  <!-- Video END -->
                </div>
                @endforeach
              </div>
              <!-- Video of you tab END -->
            </div>
            <!-- Card body END -->
            <!-- Card footer START -->
            <div class="card-footer border-0 pt-0">
            </div>
            <!-- Card footer END -->
          </div>
          <!-- Video item END -->
        </div>
        <!-- Main content END -->
        <!-- Right sidebar START -->
        <div class="col-md-3 g-4 my-5 pt-4">
          <div class="row g-4">
            <!-- Card START -->
            <div class="col-sm-6 col-lg-12 ">
              <div class="card  ">
                <div class="card-header border-0 pb-0">October
                  <h5 class="card-title">About</h5>
                  <!-- Button modal -->
                </div>
                <!-- Card body START -->
                <div class="card-body position-relative pt-0"  style="color: black">
                  <p>{{$videos ? $videos[0]['description'] : ''}}</p>
                  <!-- Date time -->
                  <ul class="list-unstyled mt-3 mb-0">
                    <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Born: <strong> {{$videos ? $videos[0]['user']['date_of_birth']: ''}}
                      </strong> </li>
                    {{-- <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong> Single </strong> </li> --}}
                    <li> <i class="bi bi-envelope fa-fw pe-1"></i> Email: <strong>{{$videos ? $videos[0]['user']['email']: ''}}</strong> </li>
                  </ul>
                </div>
                <!-- Card body END -->
              </div>
            </div>
            <!-- Card END -->
          </div>
        </div>
        <!-- Right sidebar END -->
      </div> <!-- Row END -->
    </div>
    <!-- Container END -->
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- =======================
JS libraries, plugins and custom scripts -->

  <!-- Bootstrap JS -->
  <script src="<?php echo URL::to('/'); ?>/public/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Vendors -->
  <script src="assets/vendor/glightbox-master/dist/js/glightbox.min.js"></script>

  <!-- Template Functions -->
  <script src="assets/js/functions.js"></script>

</body>
</html>
</x-app-layout>
