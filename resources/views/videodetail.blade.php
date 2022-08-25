<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    <link rel="canonical" href="https://codepen.io/pen?template=bKeqpr">


  <link rel="stylesheet" href="https://unpkg.com/plyr@3/dist/plyr.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <title>Chenal</title>
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />



  </head>
  <body>

<div class="container-fluid">

<div class="col-md-9" style="height:100vh;">

   <!-------------------------- Add New content here  ---------------------->
   <div class="container-fluid my-3">

        <div class="row">
           <div class="col-md-8">
            <div class="">
              <div hidden="" id="sprite-plyr"><!--?xml version="1.0" encoding="UTF-8"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><symbol id="plyr-airplay" viewBox="0 0 18 18"><path d="M16 1H2a1 1 0 00-1 1v10a1 1 0 001 1h3v-2H3V3h12v8h-2v2h3a1 1 0 001-1V2a1 1 0 00-1-1z"></path><path d="M4 17h10l-5-6z"></path></symbol><symbol id="plyr-captions-off" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd" fill-opacity=".5"></path></symbol><symbol id="plyr-captions-on" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd"></path></symbol><symbol id="plyr-download" viewBox="0 0 18 18"><path d="M9 13c.3 0 .5-.1.7-.3L15.4 7 14 5.6l-4 4V1H8v8.6l-4-4L2.6 7l5.7 5.7c.2.2.4.3.7.3zm-7 2h14v2H2z"></path></symbol><symbol id="plyr-enter-fullscreen" viewBox="0 0 18 18"><path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z"></path></symbol><symbol id="plyr-exit-fullscreen" viewBox="0 0 18 18"><path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z"></path></symbol><symbol id="plyr-fast-forward" viewBox="0 0 18 18"><path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z"></path></symbol><symbol id="plyr-logo-vimeo" viewBox="0 0 18 18"><path d="M17 5.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C5 10.9 4.4 6 3 6c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z"></path></symbol><symbol id="plyr-logo-youtube" viewBox="0 0 18 18"><path d="M16.8 5.8c-.2-1.3-.8-2.2-2.2-2.4C12.4 3 9 3 9 3s-3.4 0-5.6.4C2 3.6 1.3 4.5 1.2 5.8 1 7.1 1 9 1 9s0 1.9.2 3.2c.2 1.3.8 2.2 2.2 2.4C5.6 15 9 15 9 15s3.4 0 5.6-.4c1.4-.3 2-1.1 2.2-2.4.2-1.3.2-3.2.2-3.2s0-1.9-.2-3.2zM7 12V6l5 3-5 3z"></path></symbol><symbol id="plyr-muted" viewBox="0 0 18 18"><path d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path></symbol><symbol id="plyr-pause" viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zm6 0c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z"></path></symbol><symbol id="plyr-pip" viewBox="0 0 18 18"><path d="M13.293 3.293L7.022 9.564l1.414 1.414 6.271-6.271L17 7V1h-6z"></path><path d="M13 15H3V5h5V3H2a1 1 0 00-1 1v12a1 1 0 001 1h12a1 1 0 001-1v-6h-2v5z"></path></symbol><symbol id="plyr-play" viewBox="0 0 18 18"><path d="M15.562 8.1L3.87.225c-.818-.562-1.87 0-1.87.9v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z"></path></symbol><symbol id="plyr-restart" viewBox="0 0 18 18"><path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z"></path></symbol><symbol id="plyr-rewind" viewBox="0 0 18 18"><path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z"></path></symbol><symbol id="plyr-settings" viewBox="0 0 18 18"><path d="M16.135 7.784a2 2 0 01-1.23-2.969c.322-.536.225-.998-.094-1.316l-.31-.31c-.318-.318-.78-.415-1.316-.094a2 2 0 01-2.969-1.23C10.065 1.258 9.669 1 9.219 1h-.438c-.45 0-.845.258-.997.865a2 2 0 01-2.969 1.23c-.536-.322-.999-.225-1.317.093l-.31.31c-.318.318-.415.781-.093 1.317a2 2 0 01-1.23 2.969C1.26 7.935 1 8.33 1 8.781v.438c0 .45.258.845.865.997a2 2 0 011.23 2.969c-.322.536-.225.998.094 1.316l.31.31c.319.319.782.415 1.316.094a2 2 0 012.969 1.23c.151.607.547.865.997.865h.438c.45 0 .845-.258.997-.865a2 2 0 012.969-1.23c.535.321.997.225 1.316-.094l.31-.31c.318-.318.415-.781.094-1.316a2 2 0 011.23-2.969c.607-.151.865-.547.865-.997v-.438c0-.451-.26-.846-.865-.997zM9 12a3 3 0 110-6 3 3 0 010 6z"></path></symbol><symbol id="plyr-volume" viewBox="0 0 18 18"><path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z"></path><path d="M11.282 5.282a.909.909 0 000 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 000 1.316c.145.145.636.262 1.018.156a.725.725 0 00.298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 00-1.316 0zm-7.496.726H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z"></path></symbol></svg></div>

                <div tabindex="0" class="plyr plyr--full-ui plyr--video plyr--html5 plyr--fullscreen-enabled plyr--paused plyr--stopped plyr--pip-supported plyr--captions-active plyr--captions-enabled plyr__poster-enabled"><div class="plyr__controls"><button class="plyr__controls__item plyr__control" type="button" data-plyr="play" aria-label="Play"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-pause"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="label--pressed plyr__sr-only">Pause</span><span class="label--not-pressed plyr__sr-only">Play</span></button><div class="plyr__controls__item plyr__progress__container"><div class="plyr__progress"><input data-plyr="seek" type="range" min="0" max="100" step="0.01" value="0" autocomplete="off" role="slider" aria-label="Seek" aria-valuemin="0" aria-valuemax="183.126" aria-valuenow="0" id="plyr-seek-4319" aria-valuetext="00:00 of 03:03" style="--value:0%;"><progress class="plyr__progress__buffer" min="0" max="100" value="0" role="progressbar" aria-hidden="true">% buffered</progress><span class="plyr__tooltip">00:00</span></div></div><div class="plyr__controls__item plyr__time--current plyr__time" aria-label="Current time">03:03</div><div class="plyr__controls__item plyr__volume"><button type="button" class="plyr__control" data-plyr="mute"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-muted"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-volume"></use></svg><span class="label--pressed plyr__sr-only">Unmute</span><span class="label--not-pressed plyr__sr-only">Mute</span></button><input data-plyr="volume" type="range" min="0" max="1" step="0.05" value="1" autocomplete="off" role="slider" aria-label="Volume" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" id="plyr-volume-4319" aria-valuetext="100.0%" style="--value:100%;"></div><button class="plyr__controls__item plyr__control plyr__control--pressed" type="button" data-plyr="captions"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-captions-on"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-captions-off"></use></svg><span class="label--pressed plyr__sr-only">Disable captions</span><span class="label--not-pressed plyr__sr-only">Enable captions</span></button><div class="plyr__controls__item plyr__menu"><button aria-haspopup="true" aria-controls="plyr-settings-4319" aria-expanded="false" type="button" class="plyr__control" data-plyr="settings"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-settings"></use></svg><span class="plyr__sr-only">Settings</span></button><div class="plyr__menu__container" id="plyr-settings-4319" hidden=""><div><div id="plyr-settings-4319-home"><div role="menu"><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Captions<span class="plyr__menu__value">English</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Quality<span class="plyr__menu__value">576p</span></span></button><button data-plyr="settings" type="button" class="plyr__control plyr__control--forward" role="menuitem" aria-haspopup="true"><span>Speed<span class="plyr__menu__value">Normal</span></span></button></div></div><div id="plyr-settings-4319-captions" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Captions</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="-1"><span>Disabled</span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="0"><span>English<span class="plyr__menu__value"><span class="plyr__badge">EN</span></span></span></button><button data-plyr="language" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1"><span>Français<span class="plyr__menu__value"><span class="plyr__badge">FR</span></span></span></button></div></div><div id="plyr-settings-4319-quality" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Quality</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1080"><span>1080p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="720"><span>720p<span class="plyr__menu__value"><span class="plyr__badge">HD</span></span></span></button><button data-plyr="quality" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="576"><span>576p<span class="plyr__menu__value"><span class="plyr__badge">SD</span></span></span></button></div></div><div id="plyr-settings-4319-speed" hidden=""><button type="button" class="plyr__control plyr__control--back"><span aria-hidden="true">Speed</span><span class="plyr__sr-only">Go back to previous menu</span></button><div role="menu"><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.5"><span>0.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="0.75"><span>0.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="true" value="1"><span>Normal</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.25"><span>1.25×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.5"><span>1.5×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="1.75"><span>1.75×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="2"><span>2×</span></button><button data-plyr="speed" type="button" role="menuitemradio" class="plyr__control" aria-checked="false" value="4"><span>4×</span></button></div></div></div></div></div><button class="plyr__controls__item plyr__control" type="button" data-plyr="pip"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-pip"></use></svg><span class="plyr__sr-only">PIP</span></button><button class="plyr__controls__item plyr__control" type="button" data-plyr="fullscreen"><svg class="icon--pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-exit-fullscreen"></use></svg><svg class="icon--not-pressed" aria-hidden="true" focusable="false"><use xlink:href="#plyr-enter-fullscreen"></use></svg><span class="label--pressed plyr__sr-only">Exit fullscreen</span><span class="label--not-pressed plyr__sr-only">Enter fullscreen</span></button></div><div class="plyr__video-wrapper"><video crossorigin="" playsinline="" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                  <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

                    <!-- Caption files -->
                    <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default="">
                    <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                    <!-- Fallback for browsers that don't support the <video> element -->
                    <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download="">Download</a>
                </video><div class="plyr__poster" style="background-image: url(&quot;https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg&quot;);"></div></div><div class="plyr__captions"></div><button type="button" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg aria-hidden="true" focusable="false"><use xlink:href="#plyr-play"></use></svg><span class="plyr__sr-only">Play</span></button></div>

              <p class="video-title">Remove Friction From Your Inquiry Workflow | Varicent Incentive Compensation Management
              </p>
              @foreach($videos as $video)
              @foreach($video['posts'] as $posts)
              <div class="row">
                <div class="col-md-3">
                  <ul class="view">
                    <li>View:{{ $posts['views']}}</li>
                    <li> Aug 19, 2022</li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="appricate">
                  <button type="button" class="btn d-flex" onclick="likePost('{{$posts['id']}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
<<<<<<< HEAD
                      thumb_up
                      </span> 12
=======
                      thumb_up
                    </span>
>>>>>>> 2a09ad3e26d12c9ec877e741e4687544d17258f6
                  </button>
                  <button type="button" class="btn d-flex"  onclick="unlikePost('{{$posts['id']}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
                      thumb_down
                      </span> DISLIKE
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
                      google_plus_reshare
                      </span> SHARE
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
                      monetization_on
                      </span> THANKS
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
                      content_cut
                      </span> CLIP
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
                      playlist_add
                      </span> SAVE
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                    <span class="material-symbols-outlined">
                      more_horiz
                      </span>
                  </button>
                </div>
                </div>
<<<<<<< HEAD

=======
>>>>>>> 2a09ad3e26d12c9ec877e741e4687544d17258f6
              </div>
              @endforeach
              @endforeach
              <hr/>
              <div class="row">
                <div class="col-md-1">
                  <div class="profile-image">
                    <img src="./hq720.webp" height="60px" width="60px" />
                  </div>

                </div>
                <div class="col-md-8">
                    <h5>Books</h5>
                    <small>
                        190 Subscriber
                    </small>
                    <p>Create. Submit. Approve. Get an all-in-one solution with Varicent Incentive Compensation Management. Automatic updates to payroll</p>
                  <a href="">Read More</a>
                  <div class="shows">
                      <p>Upcoming Charges                    </p>
                  </div>


                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-danger">
                        SUBSCRIBE
                    </button>
                </div>
              </div>
              <hr/>
              <div class="comments">
                <div class="d-flex">
                    <p>0 Comments</p>
                    <div class="ms-3">
                        <div class="dropdown">
                            <a style=" color: black;" class=" dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                              <span class="material-symbols-outlined">
                                short_text
                                </span> Short By
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                    </div>
                </div>
               <div class="row">
                <div class="col-1 text-end">
                  <div class="profile-image">
                    <img src="./hq720.webp" height="60px" width="60px" />
                  </div>
                </div>
                  <div class="col-md-11 mt-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add a comment">
                  </div>
               </div>

               <div class="commentss">
                <div class="row mt-3">
                  <div class="col-1 text-end">
                    <div class="profile-image">
                      <img src="./hq720.webp" height="60px" width="60px" />
                    </div>
                  </div>
                    <div class="col-md-11">
                        <p class="m-0"> <b> Username </b> 1 hours ago </p>
                        <p>The sound of the engine tearing the air is simply too sweet</p>

                        <div class="d-flex">
                           <p class="d-flex me-3"> <span class="material-symbols-outlined">
                            thumb_up
                            </span> 12</p>
                            <p class="d-flex me-3"> <span class="material-symbols-outlined">
                              thumb_down
                              </span> 12</p>
                              <p class="me-3">REPLY</p>
                        </div>
                    </div>
                 </div>
               </div>
             </div>
            </div>
           </div>
           <div class="col-md-4">
            <div class="">
              <h4>Related video</h4>

              <!------------- videoss-section ----------------------------->
              <div class="videoss-section">
                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                   <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row mb-3 g-0">
                  <div class="col-md-5">
                    <div class="related-video position-relative">
                      <img src="./hq720.webp" class="img-fluid" />
                      <div class="icons-on">
                        <a href=""><span class="material-symbols-outlined">
                          schedule
                          </span></a><br/>
                        <a href="">
                          <span class="material-symbols-outlined">
                            playlist_play
                            </span>
                        </a>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-7">
                    <div class="video-details ps-2">
                        <p class="m-0"> <b> What is Lorem <br/> Ipsum? </b></p>
                        <p class="m-0"> Channel Name</p>
                        <div class="d-flex">
                          <ul>
                            <li>
                              999k views
                            </li>
                            <li>
                              1 month ago
                            </li>
                          </ul>
                        </div>
                    </div>
                  </div>
                </div>

            </div>
           </div>
       </div>

      </div>


<!-- End  -->
              </div>
            </div>
           </div>
       </div>

      </div>

<<<<<<< HEAD
    <!-- Optional JavaScript; choose one of the two! -->
=======
    </div>
    </div>
    </div>
    <script>
       function likePost(id)
       {
           console.log(id)

            $.ajax
            ({
                url: 'http://localhost/Laraveljetstream/likePost',
                type: 'post',
                data:{
                   "contentId":id,
                    "_token":"{{ csrf_token() }}"
                },
                    success: function(result)
                    {
                        console.log(result)
//
//                 $.ajax({
//                     type:'post',
//                     url:'http://localhost/jetstream/likePost',
//                     data:{
//                         "_token": "{{ csrf_token() }}",
//                         "contentId":id
//                     },
//                     success : function (data){
//                         console.log(data)
//                         // info();
//
                    }
            });
    }

        function unlikePost(id){
        console.log(id)
        $.ajax
        ({
            url: 'http://localhost/Laraveljetstream/unlikePost',
            type: 'post',
            data:{
                "contentId":id,
                "_token":"{{ csrf_token() }}"
            },
                success: function(result)
                {
                    console.log(result)
                }
        });
        }

        $(function () {
            // Owl Carousel
            var owl = $(".owl-carousel");
            owl.owlCarousel({
                items: 3,
                margin: 10,
                loop: true,
                nav: true
            });
        });

    </script>
>>>>>>> 2a09ad3e26d12c9ec877e741e4687544d17258f6

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
