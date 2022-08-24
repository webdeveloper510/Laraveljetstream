<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="style.css" type="css/text" >
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
        .home-demo .item {
            background: #ff3f4d;
        }
        img.thump {
    border-radius: 50%;
    height: 57px;
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
       a.title {
    color:black;
    margin: 0px;
    text-decoration: none;
    font-size: 28px;
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
    color:black;
}

ul.Views li {
    display: inline;
    font-size: 13px;
}
ul.Views li a{
    text-decoration: none;
   color:black;
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
           color:white;
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


    </style>
</head>
        <body>
            <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex mx-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><span class="material-symbols-outlined">settings</span></a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                     @click.prevent="$root.submit();">
                                {{ __('Log Out') }}

                            </x-jet-dropdown-link>
                        </form>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
            </header>
