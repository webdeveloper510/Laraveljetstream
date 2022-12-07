<x-app-layout>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- @include('layouts.sidebar') -->
            <div class="col-md-12">
                <div class="py-5">
                    <div class="container">
                        <div class="home-demo">
                            <div class="owl-carousel owl-theme">
                                @foreach($videos as $video)
                                     @foreach($video['posts'] as $posts)
                                        @if(!in_array($posts['id'], array_column($video['report_video'], 'product_id')))
                                        <div class="item_{{$posts['id']}}">
                                                <a href="{{url('/watch/'. $posts['encripted_video_url'])}}">
                                                <div class="card">
                                                    <video width="100%" height="100%"  autoplay onmouseover="this.play()"
                                                    onmouseout="this.pause();this.currentTime=0;">
                                                        <source
                                                            src="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$posts['file']}}"
                                                            type="video/mp4">
                                                    </video>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <img src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $video['profile_photo_path'] }}"
                                                                    class="thump">
                                                            </div>
                                                        </a>
                                                    <div class="col-10">
                                                        <div class="detail">
                                                            {{$posts['title']}}<br />
                                                            {{-- {{url('/channel/'.$video['id'])}} --}}
                                                            {{Auth::user()->name;}}
                                                            <ul class="Views">
                                                                <li>
                                                                  View:{{ $posts['views']}}
                                                                </li>
                                                            </ul>
                                                            </div>
                                                    </div>
                                                </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr class="m-0">
                </div>
                <div class="">
                    <div class="container ">
                        <div class="home-demo py-5">
                            <h3 class=" text-3xl mb-3">Breaking news</h5>
                                <div class="owl-carousel owl-theme">
                                @foreach($videos as $video)
                                @foreach($video['posts'] as $posts)
                                    <div class="item">
                                        <a href="www.google.com">
                                        <div class="card">
                                            <video width="100%" height="100%"  onmouseover="this.play()"
                                                onmouseout="this.pause();this.currentTime=0;">
                                                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="card-body">
                                            <div class="row">
                                                <div class="col-2">
                                                    <img src="https://images.pexels.com/photos/13172083/pexels-photo-13172083.jpeg?cs=srgb&dl=pexels-andrew-neel-13172083.jpg&fm=jpg"
                                                        class="thump">
                                                </div>
                                                <div class="col-10">
                                                    <div class="detail">
                                                        <a href="" class="title font-bold">{{$posts['title']}}</a><br />
                                                        <a href="{{url('/channel/'.$video['id'])}}"
                                                            class="small-tittle"> {{Auth::user()->name;}}</a>
                                                        <ul class="Views">
                                                            <li><a href=""> View:{{ $posts['views']}} </a></li>
                                                            <li class="ms-3"><a href=""> View:{{ $posts['views']}} </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endforeach
                                </div>
                        </div>

                    </div>
                </div>
                <hr class="m-0">

            </div>
        </div>
    </div>
    <script>
    function likePost(id) {
        console.log(id)

        $.ajax({
            url: 'http://localhost/Laraveljetstream/likePost',
            type: 'post',
            data: {
                "contentId": id,
                "_token": "{{ csrf_token() }}"
            },
            success: function(result) {
                console.log(result)
            }
        });
    }

    function unlikePost(id) {
        console.log(id)
        $.ajax({
            url: 'http://localhost/Laraveljetstream/unlikePost',
            type: 'post',
            data: {
                "contentId": id,
                "_token": "{{ csrf_token() }}"
            },
            success: function(result) {
                console.log(result)
            }
        });
    }

    $(function() {
        // Owl Carousel
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            items: 4,
            margin: 10,
            loop: true,
            nav: true
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        video1 = new Moovie({
            selector: "#example1",
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

    </script>
    @push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
    console.log('fsdffdssdf');
    var user = {
        !!json_encode((array) auth() - > user()) !!
    };
    console.log('user')
    </script>
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

    @endpush
</x-app-layout>
