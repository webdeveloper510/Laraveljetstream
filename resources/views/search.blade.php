@include('header')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon"
        href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
        color="#111">
    <link rel="canonical" href="https://codepen.io/pen?template=bKeqpr">


    <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <title>Chenal</title>
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        .Streamed ul li {
            display: inline;
            padding-left: 12px;
            list-style-type: circle !important;
        }

        .Streamed ul {
            padding: 0px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="search pt-3">
            <h4><span class="material-symbols-outlined">tune</span> FILTERS</h4>
            <hr />
        </div>
        <div class="search-videos">
            @foreach($posts as $post)
            <div class="row">
                <div class="col-md-4">
                    <a href="{{url('/videodetail/'.$post['id'])}}">
                    <video width="100%" height="200px" controls style="object-fit: fill;" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">

                    </video></a>
                </div>
                <div class="col-md-8">
                    <h5>{{$post['title']}}</h5>
                    <div class="Streamed">


                        <div class=""></div>
                        <ul>
                            <li>View: {{$post['views']}}</li>
                            <li>{{\Carbon\Carbon::parse($post['created_at'])->diffForHumans()}}</li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <img class="rounded-circle"
                            src="<?php echo URL::to('/');?>/public/asstes/hq720.webp"
                            height="40px" width="40px" />
                        <p class="pt-2 ps-2"> {{$post['user']['name']}}</p>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>
