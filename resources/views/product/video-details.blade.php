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
<style>

.col-xxl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 64% !important;
}

</style>
    </head>

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
          <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
          <img class="dark-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
        </a>
        <!-- Logo END -->

        <button class="icon-md btn btn-light p-0 d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#navbarVerticaloffcanvas" aria-controls="navbarVerticaloffcanvas">
          <i class="bi bi-justify-left fs-4"></i>
        </button>

        <!-- Responsive navbar toggler -->
        <button class="navbar-toggler ms-auto icon-md btn btn-light p-0" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
          aria-label="Toggle navigation">
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
                <input class="form-control ps-5 bg-light" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 start-0 translate-middle-y"
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
            <a class="nav-link icon-md btn p-0" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-auto-close="outside">
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
                    <!-- Notif item -->
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
                    <!-- Notif item -->
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
          <!-- Notification dropdown END -->

          <li class="nav-item ms-3 dropdown">
            <a class="nav-link p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside"
              data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="d-flex align-items-center position-relative">
                <!-- Avatar -->
                <div class="avatar avatar-sm me-xl-3">
                  <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
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
        <div class="offcanvas offcanvas-start custom-scrollbar rounded pt-3" tabindex="-1" id="navbarVerticaloffcanvas">
          <div class="offcanvas-body pt-5 pt-lg-0">
            <!-- Avatar -->
            <div class="avatar avatar-lg mb-3">
              <a href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/my-profile-about.html"><img
                  class="avatar-img rounded-circle border border-white border-3" src="assets/images/avatar/07.jpg"
                  alt=""></a>
            </div>
            <!-- Info -->
            <h5 class="mb-0"> <a
                href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/my-profile-about.html">Sam
                Lanson </a> </h5>
            <small>Web Developer at Webestica</small>
            <!-- User stat START -->
            <div class="hstack gap-2 gap-xl-3 mt-3">
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
            </div>
            <!-- User stat END -->

            <!-- Divider -->
            <hr>

            <!-- Side Nav START -->
            <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
              <li class="nav-item">
                <a class="nav-link"
                  href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/index-video.html"> <img
                    class="me-2 h-20px fa-fw" src="assets/images/icon/home-outline-filled.svg" alt=""><span>Home
                  </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/post-video-details.html"> <img class="me-2 h-20px fa-fw"
                    src="assets/images/icon/medal-outline-filled.svg" alt=""><span>Upload Video </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/my-profile-videos.html"> <img class="me-2 h-20px fa-fw"
                    src="assets/images/icon/clock-outline-filled.svg" alt=""><span>Your Channel </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/post-videos.html"> <img class="me-2 h-20px fa-fw"
                    src="assets/images/icon/like-outline-filled.svg" alt=""><span>Watch Later </span></a>
              </li>
              <!-- <li class="nav-item ">
                <a class="nav-link" href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/watch-video.html"><span class="material-symbols-outlined  ">
                            schedule
                            </span ><span class="mx-2">Watch later</span></a>
              </li> -->
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
                  href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/notifications.html"> <img
                    class="me-2 h-20px fa-fw" src="assets/images/icon/notification-outlined-filled.svg"
                    alt=""><span>Notifications </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/settings.html"> <img
                    class="me-2 h-20px fa-fw" src="assets/images/icon/cog-outline-filled.svg" alt=""><span>Settings
                  </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"
                  href="file:///C:/Users/Hp/Downloads/social_v1.0.0/social_v1.0.0/template/sign-in-advance.html"> <img
                    class="me-2 h-20px fa-fw" src="assets/images/icon/arrow-boxed-outline-filled.svg"
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
          <div class="col-xl-8 col-xxl-9 w-60">
            <!-- Video START -->
            <div class="card card-body p-0 rounded-end-lg-0 position-relative h-100">
              <!-- Video image -->
              <div class="card-image">
                <div class="overflow-hidden fullscreen-video w-100">
                  <!-- HTML video START -->
                  <div class="player-wrapper card-img-top overflow-hidden">
                    <video class="player-html" controls crossorigin="anonymous"
                      poster="assets/images/videos/poster.jpg">
                      <source src="assets/images/videos/video-feed.mp4" type="video/mp4">
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
                    <h4> New movie trailers (2021 - 2022) September </h4>
                    <div class="d-flex mt-3 align-items-center">
                      <!-- Avatar -->
                      <div class="avatar me-2">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
                      </div>
                      <!-- Avatar name -->
                      <div>
                        <h6 class="mb-0"> <a
                            href="file:///C:/Users/Hp/Downloads/Farnando/video-details.html/francesguerrero"> Frances
                            Guerrero </a> </h6>
                        <nav class="nav nav-divider small">
                          <span class="nav-item">145.2K views</span>
                          <span class="nav-item">12 dec, 2022</span>
                        </nav>
                      </div>
                      <a  href="/Subscibe" class="rounded-pill btn btn-light ms-auto  ">Subscribe</a>
                    </div>
                  </div>
                  <div class="str d-flex ">
                    <span class="material-symbols-outlined">star</span>
                    <span class="material-symbols-outlined ml-2">star</span>
                    <span class="material-symbols-outlined"> star</span>
                    <span class="material-symbols-outlined">star </span>
                    <div class="sub d-flex ms-auto">
                      <div class="">
                        <div class="dropdown">
                          <a class="nav-link" href="/add" id="cardAddAction" data-bs-toggle="dropdown"
                            aria-expanded="false"><button class="btn btn-light d-flex "><span
                                class="material-symbols-outlined">add</span></button></a>
                          <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="cardShareAction">
                            <li><a class="dropdown-item d-flex" href="#!">
                                <div class="form-check ">
                                  <input class="form-check-input " type="checkbox" value="" id="flexCheckChecked"
                                    checked>
                                  <label class="form-check-label mx-3" for="flexCheckChecked">
                                    Watch later
                                  </label>
                                </div><span class="material-symbols-outlined mx-3">
                                  lock
                                </span><button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </a></li>
                            <li><a class="dropdown-item d-flex " href="Create New Playlist"> <span
                                  class="material-symbols-outlined me-3"> add</span>Create New Playlist</a></li>
                            <Form>
                              <div class="mb-3 p-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                  placeholder="Enter playlist">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="form-select" id="validationCustom04" required>
                                  <option selected disabled value="">Privacy</option>
                                  <option><span class="material-symbols-outlined">
                                      public
                                    </span>Anyone can search for and view. Channel creation required.</option>
                                  <option><span class="material-symbols-outlined">
                                      public
                                    </span>Anyone

                                </select>
                                <div class="mt-3">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <a href='/create' class='rounded-pill btn btn-primary '>Create</a>
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
                        <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal"
                          data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span
                            class="material-symbols-outlined">
                            flag
                          </span>Report</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Report Vedio</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Sexual Content
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Violent or repulsive content
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Harassment or bullying
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Harmful or dangerous acts
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Child Abouse
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Promotes terrorism
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Spam or misleanding
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Infringes my rights
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Captions issue
                                  </label>
                                </div>
                                <p class="my-1">Flagged videos and users are reviewed by YouTube staff 24 hours a day, 7
                                  days a week to determine whether they violate Community Guidelines. Accounts are
                                  penalized for Community Guidelines violations, and serious or repeated violations can
                                  lead to account termination.</p>

                                <form>
                                  <div class="mt-2">
                                    <label for="recipient-name" class="col-form-label">
                                      <h5>Timestamp selected *</h5>
                                    </label>
                                    <input type="time" class="form-control" id="validationCustom01" required>
                                  </div>
                                  <textarea class="form-control mt-2" id="message-text" rows="5"></textarea>
                                  <p class="mt-4">Flagged videos and users are reviewed by YouTube staff 24 hours a day,
                                    7 days a week to determine whether they violate Community Guidelines. Accounts are
                                    penalized for Community Guidelines violations, and serious or repeated violations
                                    can lead to account termination. </p>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCLE</button>
                                <button type="button" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=" d-flex align-items-start">
                        <div class="dropdown ">
                          <a class="nav-link  " href="#" id="cardShareAction" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <button class="btn btn-light "><i class="bi bi-reply-fill flip-horizontal"></i>Share (3)</button>
                          </a>
                          <!-- Dropdown menu -->
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cardShareAction">
                            <li><a class="dropdown-item" href="#"> <i class="fa fa-facebook"></i>Facebook Share</a></li>
                            <li><a class="dropdown-item" href="#"> <i
                                  class="bi bi-bookmark-check fa-fw pe-2"></i>Twitter </a></li>
                            <li><a class="dropdown-item" href="#"> <i class="bi bi-link fa-fw pe-2"></i>Linkdin</a></li>
                            <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Telegram</a>
                            </li>
                            <li><a class="dropdown-item" href="#"> <i class="bi bi-share fa-fw pe-2"></i>Watsapp</a>
                            </li>
                            <li>
                              <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#"> <i class="bi bi-pencil-square fa-fw pe-2"></i>Share
                                to News Feed</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Interested button -->
                </div>
                <!-- <a  href="/Subscibe" class="rounded-pill btn btn-light ms-auto  ">Discription</a> -->
                <p>He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay
                  assistance joy. Unaffected at ye of compliment alteration to.</p>
              </div>
            </div>
            <!-- Video END -->
          </div>
          <div class="col-xl-4 col-xxl-3">
            <div class="card rounded-start-lg-0 border-start-0 h-100">
              <div class="card-header border-0 pb-0">
                <h5 class="mb-4"> 3,664 Comments</h5>
              </div>
              <div class="card-body pt-0 h-400px">
                <!-- Comment wrap START -->
                <ul class="comment-wrap list-unstyled custom-scrollbar h-100">
                  <!-- Comment item START -->
                  <li class="comment-item">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="avatar avatar-xs">
                        <a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="">
                        </a>
                      </div>
                      <div class="ms-2">
                        <!-- Comment by -->
                        <div class="bg-light rounded-start-top-0 p-3 rounded">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a></h6>
                            <small>5hr</small>
                          </div>
                          <p class="small mb-0">Rooms oh fully taken by worse do. Points afraid but may end law lasted.
                            Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest
                            enabled.</p>
                        </div>
                        <!-- Comment rect -->
                        <ul class="nav nav-divider py-2 small">
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Like (3)</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Reply</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> View 5 replies</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- Comment item nested START -->
                    <ul class="comment-item-nested list-unstyled">
                      <!-- Comment item START -->
                      <li class="comment-item">
                        <div class="d-flex">
                          <!-- Avatar -->
                          <div class="avatar avatar-xs">
                            <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg"
                                alt=""></a>
                          </div>
                          <!-- Comment by -->
                          <div class="ms-2">
                            <div class="bg-light p-3 rounded">
                              <div class="d-flex justify-content-between">
                                <h6 class="mb-1"> <a href="#!"> Lori Stevens </a> </h6>
                                <small class="ms-2">2hr</small>
                              </div>
                              <p class="small mb-0">See resolved goodness felicity shy civility domestic had but
                                Drawings offended yet answered Jennings perceive.</p>
                            </div>
                            <!-- Comment rect -->
                            <ul class="nav nav-divider py-2 small">
                              <li class="nav-item">
                                <a class="nav-link" href="#!"> Like (5)</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#!"> Reply</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <!-- Comment item END -->
                      <!-- Comment item START -->
                      <li class="comment-item">
                        <div class="d-flex">
                          <!-- Avatar -->
                          <div class="avatar avatar-xs">
                            <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg"
                                alt=""></a>
                          </div>
                          <!-- Comment by -->
                          <div class="ms-2">
                            <div class="bg-light p-3 rounded">
                              <div class="d-flex justify-content-between">
                                <h6 class="mb-1"> <a href="#!"> Billy Vasquez </a> </h6>
                                <small class="ms-2">15min</small>
                              </div>
                              <p class="small mb-0">Wishing calling is warrant settled was lucky.</p>
                            </div>
                            <!-- Comment rect -->
                            <ul class="nav nav-divider py-2 small">
                              <li class="nav-item">
                                <a class="nav-link" href="#!"> Like</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#!"> Reply</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <!-- Load more replies -->
                    <a href="#!" role="button"
                      class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mb-3 ms-5"
                      data-bs-toggle="button" aria-pressed="true">
                      <div class="spinner-dots me-2">
                        <span class="spinner-dot"></span>
                        <span class="spinner-dot"></span>
                        <span class="spinner-dot"></span>
                      </div>
                      Load more replies
                    </a>
                  </li>
                  <!-- Comment item END -->
                  <!-- Comment item START -->
                  <li class="comment-item">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="avatar avatar-xs">
                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg"
                            alt=""></a>
                      </div>
                      <!-- Comment by -->
                      <div class="ms-2">
                        <div class="bg-light p-3 rounded">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                            <small class="ms-2">4min</small>
                          </div>
                          <p class="small mb-0">Never Give Up .Great Things Take Time.</p>
                        </div>
                        <!-- Comment rect -->
                        <ul class="nav nav-divider pt-2 small">
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Like (1)</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Reply</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> View 6 replies</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <!-- Comment item END -->
                  <!-- Comment item START -->
                  <li class="comment-item mt-2">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="avatar avatar-xs">
                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg"
                            alt=""></a>
                      </div>
                      <!-- Comment by -->
                      <div class="ms-2">
                        <div class="bg-light p-3 rounded">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                            <small class="ms-2">4min</small>
                          </div>
                          <p class="small mb-0">Powerful.</p>
                        </div>
                        <!-- Comment rect -->
                        <ul class="nav nav-divider pt-2 small">
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Like (1)</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Reply</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> View 6 replies</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <!-- Comment item END -->
                  <!-- Comment item START -->
                  <li class="comment-item mt-2">
                    <div class="d-flex">
                      <!-- Avatar -->
                      <div class="avatar avatar-xs">
                        <a href="#!"><img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg"
                            alt=""></a>
                      </div>
                      <!-- Comment by -->
                      <div class="ms-2">
                        <div class="bg-light p-3 rounded">
                          <div class="d-flex justify-content-between">
                            <h6 class="mb-1"> <a href="#!"> Frances Guerrero </a> </h6>
                            <small class="ms-2">4min</small>
                          </div>
                          <p class="small mb-0">Congratulations:)</p>
                        </div>
                        <!-- Comment rect -->
                        <ul class="nav nav-divider pt-2 small">
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Like (1)</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> Reply</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#!"> View 6 replies</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <!-- Comment item END -->
                  <li>
                    <!-- Load more comments -->
                    <a href="#!" role="button"
                      class="btn btn-link btn-link-loader btn-sm text-secondary d-flex align-items-center mt-4"
                      data-bs-toggle="button" aria-pressed="true">
                      <div class="spinner-dots me-2">
                        <span class="spinner-dot"></span>
                        <span class="spinner-dot"></span>
                        <span class="spinner-dot"></span>
                      </div>
                      Load more comments
                    </a>
                  </li>
                </ul>
                <!-- Comment wrap END -->
              </div>
              <div class="card-footer border-0 pt-0">
                <!-- Add comment -->
                <div class="d-flex">
                  <!-- Avatar -->
                  <div class="avatar avatar-xs me-2">
                    <a href="#!"> <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt=""> </a>
                  </div>
                  <!-- Comment box  -->
                  <form class="position-relative w-100">
                    <textarea class="form-control pe-4 bg-light" data-autoresize rows="1"
                      placeholder="Add a comment..."></textarea>
                    <!-- Emoji button -->
                    <div class="position-absolute top-0 end-0">
                      <button class="btn" type="button">🙂</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
                <img class="card-img-top" src="assets/images/post/16by9/large/06.jpg" alt="">
                <!-- Play icon -->
                <div class="position-absolute top-50 start-50 translate-middle">
                  <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i class="bi bi-play-fill fs-5"> </i>
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
                <h6> <a class="stretched-link" href="video-details.html"> 8 shocking bitcoin crypto predictions for 2022
                  </a> </h6>
                <span class="small"> 665.1K views</span>
              </div>
            </div>
            <!-- Video END -->
          </div>
          <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
            <!-- Video START -->
            <div class="card p-0 position-relative h-100">
              <!-- Video image -->
              <div class="card-image">
                <div class="ratio ratio-16x9 oveflow-hidden">
                  <iframe src="https://player.vimeo.com/video/151500895?h=68ba58e49a" title="Vimeo video"
                    allowfullscreen></iframe>
                </div>
              </div>
              <!-- Video info -->
              <div class="card-body">
                <!-- Video title  -->
                <h6> <a href="video-details.html"> A trading platform - an easy start in trading </a> </h6>
                <span class="small"> 458.3K views</span>
              </div>
            </div>
            <!-- Video END -->
          </div>
          <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
            <!-- Video START -->
            <div class="card p-0 position-relative h-100">
              <!-- Video image -->
              <div class="card-image">
                <img class="card-img-top" src="assets/images/post/16by9/large/09.jpg" alt="">
                <!-- Play icon -->
                <div class="position-absolute top-50 start-50 translate-middle">
                  <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i class="bi bi-play-fill fs-5"> </i>
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
                <h6> <a class="stretched-link" href="video-details.html"> How does the stock market work? </a> </h6>
                <span class="small"> 985.1K views</span>
              </div>
            </div>
            <!-- Video END -->
          </div>
          <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
            <!-- Video START -->
            <div class="card p-0 position-relative h-100">
              <!-- Video image -->
              <div class="card-image">
                <img class="card-img-top" src="assets/images/post/16by9/large/10.jpg" alt="">
                <!-- Play icon -->
                <div class="position-absolute top-50 start-50 translate-middle">
                  <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i class="bi bi-play-fill fs-5"> </i>
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
                <h6> <a class="stretched-link" href="video-details.html"> How to create a app for your e-commerce
                    website </a> </h6>
                <span class="small"> 658.2K views</span>
              </div>
            </div>
            <!-- Video END -->
          </div>
          <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
            <!-- Video START -->
            <div class="card p-0 position-relative h-100">
              <!-- Video image -->
              <div class="card-image">
                <img class="card-img-top" src="assets/images/post/16by9/large/07.jpg" alt="">
                <!-- Play icon -->
                <div class="position-absolute top-50 start-50 translate-middle">
                  <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i class="bi bi-play-fill fs-5"> </i>
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
                <h6> <a class="stretched-link" href="video-details.html"> Dilen - When I See You (Official Music) </a>
                </h6>
                <span class="small"> 325.1K views</span>
              </div>
            </div>
            <!-- Video END -->
          </div>
          <div class="col-sm-6 col-md-4 col-xl-3 col-xxl-2">
            <!-- Video START -->
            <div class="card p-0 position-relative h-100">
              <!-- Video image -->
              <div class="card-image">
                <img class="card-img-top" src="assets/images/post/16by9/large/08.jpg" alt="">
                <!-- Play icon -->
                <div class="position-absolute top-50 start-50 translate-middle">
                  <a class="icon-md bg-danger text-white rounded-circle" href="#"> <i class="bi bi-play-fill fs-5"> </i>
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
                <h6> <a class="stretched-link" href="video-details.html"> Complete cryptocurrency course - start
                    learning </a> </h6>
                <span class="small"> 785.9K views</span>
              </div>
            </div>
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

</html>
