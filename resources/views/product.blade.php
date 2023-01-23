<x-app-layout>
@include('header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" crossorigin="anonymous">
</script>
<style>

.goog-te-gadget img {
            vertical-align: middle;
            border: none;
            display: none;
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
    /*custom font*/
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

    /*basic reset*/
    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
        background: #6441A5;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #6441A5, #2a0845);
        /* Chrome 10-25, Safari 5.1-6 */
    }

    #progress-bar {
    background-color: #12CC1A;
    color: #FFFFFF;
    width: 0%;
    -webkit-transition: width .3s;
    -moz-transition: width .3s;
    transition: width .3s;
    border-radius: 5px;
}


.lds-ring {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}

.lds-ring div {
  box-sizing: border-box;
  display: block;
  position: absolute;
  width: 64px;
  height: 64px;
  margin: 8px;
  border: 8px solid red;
  border-radius: 50%;
  animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  border-color: red transparent transparent transparent;
}

.lds-ring div:nth-child(1) {
  animation-delay: -0.45s;
}

.lds-ring div:nth-child(2) {
  animation-delay: -0.3s;
}

.lds-ring div:nth-child(3) {
  animation-delay: -0.15s;
}

@keyframes lds-ring {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}


    body {
        font-family: montserrat, arial, verdana;
        background: transparent;
        color: black !important;
    }

    /*form styles*/
    #msform {
        text-align: center;
        position: relative;
        margin-top: 30px;
    }

    ul.ml-10.mt-3 {
        list-style-type: none;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
        padding: 20px 30px;
        box-sizing: border-box;
        width: 80%;
        text-align: left;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    /*inputs*/


    /*buttons*/
    #msform .action-button {
        width: 100px;
        background: #ee0979;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
    }

    #msform .action-button-previous {
        width: 100px;
        background: #C5C5F1;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
    }

    /*headings*/
    .fs-title {
        font-size: 18px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
        letter-spacing: 2px;
        font-weight: bold;
        text-align: center;
    }

    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #666;
        text-align: center;
        margin-bottom: 20px;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
    }

    #progressbar li {
        list-style-type: none;
        color: black;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
        letter-spacing: 1px;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 24px;
        height: 24px;
        line-height: 26px;
        display: block;
        font-size: 12px;
        color: #333;
        background: white;
        border-radius: 25px;
        margin: 0 auto 10px auto;
    }

    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1;
        /*put it behind the numbers*/
    }
    /* .loader1 img {
    width: 100%;
}

.loader1 {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100vh;
    z-index: 9;
} */

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }

    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #ee0979;
        color: white;
    }


    /* Not relevant to this form */
    .dme_link {
        margin-top: 30px;
        text-align: center;
    }

    .dme_link a {
        background: #FFF;
        font-weight: bold;
        color: #ee0979;
        border: 0 none;
        border-radius: 25px;
        cursor: pointer;
        padding: 5px 25px;
        font-size: 12px;
    }



    .dme_link a:hover,
    .dme_link a:focus {
        background: #C5C5F1;
        text-decoration: none;
    }

    
 .col-lg-3 {
    position: fixed !important;
}

.col-md-9 {
    margin-inline-start: auto !important;
}

/* .row.pt-20.bg-whitesmoke {
    background-color: whitesmoke;
} */
</style>

<body class="bg-white">
    <!-- MultiStep Form -->
    <div class="row pt-20 bg-white">
         <!-- Sidenav START -->
         <div class="col-lg-3">

            <!-- Advanced filter responsive toggler START -->
            <div class="d-flex align-items-center d-lg-none">
              <button class="border-0 bg-transparent" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasSideNavbar" aria-controls="offcanvasSideNavbar">
                <i class="btn btn-primary fw-bold fa-solid fa-sliders-h"></i>
               
              </button>
            </div>
            <!-- Advanced filter responsive toggler END -->

            <!-- Navbar START-->
            <nav class="navbar navbar-expand-lg mx-0 z-0">
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
                    <div class="h-20"
                      style="background-image:url({{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->cover_img}}); background-position: center;z-index:0; background-size: cover; background-repeat: no-repeat;">
                    </div>
                    <!-- Card body START -->
                    <div class="card-body pt-0">
                      <div class="text-center">
                        <!-- Avatar -->
                        <div class="mb-3">
                         <img class="avatar-img rounded-circle border border-white border-3 h-20 w-20 mx-auto"
                                  src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . Auth::user()->profile_photo_path }}"
                                  alt="" style="z-index:0;">
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
                      </ul>
                      <!-- Side Nav END -->
                    </div>
                    <!-- Card body END -->
                    <!-- Card footer -->
                  </div>
                  <!-- Card END -->

                  <!-- Helper link START -->
                </div>
              </div>
            </nav>
            <!-- Navbar END-->
          </div>
          <!-- Sidenav END -->
        {{-- <div>
        <img src="<?php echo URL::to('public/asstes/loader.gif') ?>">
        </div> --}}
        <div class="col-md-9">
            <form id="msform" method="POST">
                <!-- progressbar -->

                <div class="row">
                    <div id="progress-bar" class="progress_bar" style="display: none">0%</div>
                </div>
                <ul id="progressbar">
                    <li class="active">Details</li>
                    <li>Video elements</li>
                    <li>Checks</li>

                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title"> Details</h2>
                    <div class="mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" />
                        <span class="text-danger error-text title_err"></span>
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
                        <span class="text-danger error-text description_err"></span>
                    </div>
                    <div class="mb-3">
                        <label>Thumbnail</label>
                        <input type="file" name="thumbnail" class="form-control" />
                        <span class="text-danger error-text thumbnail_err"></span>
                    </div>
                    <div class="mb-3">
                        <h5 class="mb-2"><b> Is this video made from kids ? </b></h5>
                        <p>Regardless of your location, youre legally rergally required to comply with the children's
                            Online Privacy
                            Protection Act (COPPA) and/or other laws. You're required to tell us whether your videos are
                            made for ids.</p>

                        <div class="form-check my-3">
                            <input class="form-check-input" type="radio" name="child_vis" id="exampleRadios1"
                                value="option1" checked>
                                <span class="text-danger error-text child_vis_err"></span>
                            <label class="form-check-label" for="exampleRadios1">
                                Yes, its made for kids
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="child_vis" id="exampleRadios2"
                                value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                No, it's not made for kids
                            </label>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>

                <fieldset>
                    <h2 class="fs-title">Preview</h2>
                    <div class="mb-3">
                        <label>upload video</label>
                        {{-- <input type="file" name="upload_video"  required class="form-control" /> --}}
                        <input type='file' name="upload_video" class="form-control" id='videoUpload' />
                        <span class="text-danger error-text upload_video_err"></span>
                    </div>
                    <div class="mx-auto">
                        <video width="320" height="240" style="display:none"
                                            controls autoplay>
                                    Your browser does not support the video tag.
                                    </video>
                    </div>
                    <div class="my-3">
                        <label>Video Link</label> <br />
                        <a href="">links</a>
                    </div>
                    <div class="mb-3">
                        <h5><label>Filename</label></h5>
                        <p class="filename"></p>
                    </div>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Visibility</h2>
                    <h3 class="fs-subtitle">Choose when to publish and who csn see your video </h3>
                    <div class="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="is_visible" id="exampleRadios"
                                value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Save or publish
                            </label><br />
                            <small>
                                Make your video <b>public </b>,<b> unlisted </b>, or <b> private</b>
                            </small>
                        </div>
                        <ul class="ml-10 mt-3">
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="security" id="exampleRadios1"
                                        value="1" checked>
                                        <span class="text-danger error-text security_err"></span>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Private
                                    </label><br />
                                    <small>
                                        only you and people you choose can watch your video
                                    </small>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="security" id="exampleRadios1"
                                        value="2" checked>
                                        <span class="text-danger error-text security_err"></span>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Unlisted
                                    </label><br />
                                    <small>
                                        Anyone with the video link can watch your video
                                    </small>
                                </div>
                            </li>
                            <li>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="security" id="exampleRadios1"
                                        value="3" checked>
                                        <span class="text-danger error-text security_err"></span>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Public
                                    </label><br />
                                    <small>
                                        Everyone can watch your video
                                    </small>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Set as Instant Premiere
                                        </label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button type="submit"  value="Next">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
    <script>
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches
        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'absolute'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });
        $(".submit").click(function() {
            return false;
        })
    </script>
</body>
<script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>

{{--------------------------------- Get selected input type file name ---------------------------------}}

<script>
    $(document).ready(function() {
        $('input[type="file"]').change(function(e) {
            var videoUpload = e.target.files[0].name;
            console.log(videoUpload);
            $(".filename").text(videoUpload);
        });
    });
</script>
{{-------------------------Preview of video file, selecting from input type='file'---------------------}}
<script>
    document.getElementById("videoUpload").onchange = function(event) {
      let file = event.target.files[0];
      let blobURL = URL.createObjectURL(file);
      document.querySelector("video").style.display = 'block';
      document.querySelector("video").src = blobURL;
    }
    </script>

{{-- ------------------------------------Translator---------------------------------------}}
<script type="text/javascript">
    function googleTranslateElementInit() {
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
</html>
</x-app-layout>
