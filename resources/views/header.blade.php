<html>
<head>
  <title>Laravel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Option 1: Bootstrap Bundle with Popper -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <link rel="canonical" href="https://codepen.io/pen?template=bKeqpr">
    <script src="https://cdn.jsdelivr.net/gh/SH20RAJ/Sopplayer/mooviejs/js/moovie.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/SH20RAJ/Sopplayer/mooviejs/css/moovie.min.css">


  <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo URL::to('/');?>/public/assets/css/dashboard.css" type="css/text">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<style>
    body {
        background-color: #0b0c2a !important; color: white; font-family: 'Mulish', sans-serif;
    }
    .dashboard a {
    color: white !important;
    text-decoration: none;
}
    .modal-content {
        background-color:#29292a !important;
    }
    .form-check-input {
    width: 1.4em;
    height: 1.4em;
    }

    .moovie {
                height:300px !important;
            }
    .username {
                padding: 14px;
                }

.profile {
    border-radius: 50%;
}

.profile-image img {
    border-radius: 50%;
    width: 60px;
    max-width:60px;
    height: 60px;
    margin: auto;
}
        .text-banner {
            padding: 20px 10px;
        }

.views li {
    display: inline-block;
    padding-right: 13px;
    color: #8f8f8f;
}

.views ul {
    padding: 0px;
}

 #dropdown1{
    position: absolute;
    top: 0;
    right: 0;
}

.detail a {
    color: white;
    text-decoration: none;
}

ul.dropdown-menu1 {
    display: none;
}

#dropdown1 {
    color: black;
}

.card {
    background-color: transparent;
    border: 1px solid rgba(0, 0, 0, 0);

}

.mains {
    background-color: white;
}


body {
    background: #e1dede30;
}

ul#pills-tab {
    background: white;
}

.pills-color {
    background: white;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    border-bottom: 2px solid black;
    border-radius: 0px !important;
    color: black !important;
    background-color: transparent !important;
    font-weight: 500;
}

.nav-pills .nav-link {
    color: black;
}

.stats ul.list-group.list-group-flush li {
        background: transparent;
}

.left {
     width: 172px;
}

.cover img {
    border-radius: 50% !important;
    height: 100px;
    width: 100px;
    margin: 20px 0px;
}

.communit-img img {
    border-radius: 50%;
}
.react p {
    display: flex;
    padding-right: 21px;
}

.react {
    display: flex;
    margin: 10px 0px;
}
.communitys .card {
    border-color: red;
    padding: 18px 18px 0px ;
}

.imagess {
    position: relative;
}

.thumb-icons {
    position: absolute;
    top: 0;
    right: 0;
    background: black;
    height: 100%;
    width: 42%;
    color: white;
    text-align: center;
    font-weight: 700;
    padding: 22% 0px;
    font-size: 20px;
}
img.thump {
    border-radius: 50%;
    height: 30px;
    width: 30px !important;
    max-width: 57px;
}
        .home-demo h2 {
            color: #FFF;
            text-align: center;
            padding: 5rem 0;
            margin: 0;
            font-style: italic;
            font-weight: 300;
        }

        .owl-dots {
            display: none;
        }

        .owl-nav {
            display: none;
        }

header {
    position: sticky !important;
    top: 0;
    z-index: 2;
}
a.small-tittle {
    font-size: 12px;
    margin: 0px;
    text-decoration: none;
    color:white;
}

ul.Views li {
    display: inline;
    font-size: 13px;
}
ul.Views li a{
    text-decoration: none;
   color:white;
}

ul.Views {
    padding-left: 0px;
    margin-bottom: 0px;
}
        .explore h5 {
            padding-left: 35px;
            display: flex;
            margin: 17px 0px;
        }
        .explore h5 a{
           color:black;
           text-decoration:none;
            display: flex;
        }

        .explore h5 span {
            padding-right: 25px;
        }

        .explore {
            position: fixed;
            height: 100%;
            max-height: 100vh;
            overflow-y: scroll;
            width: 24%;
        }

        ::-webkit-scrollbar {
            display: none;
            /* for Chrome, Safari, and Opera */
        }

        input.form-control.me-2 {
            width: 600px;
        }
        .appricate {
    display: flex;
    justify-content: end;
}
ul.view {
    padding: 0;
    display: inline;
}

ul.view li {
    display: inherit;
    padding-right: 14px;
    color: #939393;
}
p.video-title {
    font-size: 21px;
    margin: 0;
    padding: 11px 0px;
}

.dropdown a {
    text-decoration: none;
}
.video-details li {
    display: inline;
    font-size: 13px;
    color: #7a7777;
}

.video-details ul {
    padding: 0;
}

.icons-on a {
    color: white;
    background: black;
    text-align: center;
    padding: 7px;
    font-size: 18px;
}

.icons-on {
    position: absolute;
    top: 0;
    display: none;
    right: 0;
}

.related-video.position-relative:hover .icons-on {
    display: block;
}

.file-upload span {
    font-size: 67px;
    background: #efefef8a;
    border-radius: 50%;
    padding: 34px;
    margin: 20px 0px;
}

.appricate span {
    font-size: 16px;
}

.appricate button {
    font-size: 13px;
}
a.title {
    font-size: 21px;
    text-transform: capitalize;
    line-height: 19px;
}
.viewer {
    object-fit: cover;
}

/* Navbar CSS Start */
nav.navbar.navbar-expand-lg.bg-light a {
    color: white;
  }

  .bg-light {
    --bs-bg-opacity: 1;
    background-color: #0b0c2a !important;
    color: white;
  }
    .btn {
      color: white;
    }
    .btn:hover {
      color: white;
    }

    /* Navbar CSS End */
    </style>
</head>
        <body style="background-color: #0b0c2a; color: white; font-family: 'Mulish', sans-serif;">

