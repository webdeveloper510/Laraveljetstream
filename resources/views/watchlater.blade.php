@include('header')
<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-3  position-relative">
            <div class="explore" >
                <h5><span class="material-symbols-outlined">home</span> Home</h5>
                <h5><span class="material-symbols-outlined">explore</span> Explore</h5>
                <h5><span class="material-symbols-outlined">whatshot</span> Shorts</h5>
                <h5><span class="material-symbols-outlined">subscriptions</span> Subscriptions</h5>
                <hr />
                <h5><span class="material-symbols-outlined">video_library</span> Library</h5>
                <h5><span class="material-symbols-outlined">history</span> History</h5>
                <h5><a href=""><span class="material-symbols-outlined">smart_display</span> Your Videos </a></h5>
                <h5><span class="material-symbols-outlined">schedule</span> Watch later</h5>
                <h5><span class="material-symbols-outlined">thumb_up</span>Liked videos</h5>
                <hr/>
                <h5 class="text-center">Subscriptions</h5>
                <h5><span class="material-symbols-outlined">music_note</span>Music</h5>
            </div>
        </div>

<div class="col-md-9" style="height:100vh;">

<style>
    .play {
    text-align: center;
    position: absolute;
    width: 100%;
    bottom: 0;
    background: #000000b8;
    color: white;
    padding-top: 8px;
}
ul.lists {
    display: inline-flex;
    /* padding: 0px; */
}




ul.lists li {
    padding-right: 18px;
}
.ps-3 {
    padding-left: 4rem!important;
}
</style>



    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3 border-end">
                <div class="position-relative">
        <img src="{{'https://spaces3.nyc3.digitaloceanspaces.com/' . $product[0]['thumbnail']}}"
                    alt="Trulli" class="img-fluid">
                    <div class="play">
                        <h4>PLAY ALL</h4>
                    </div>
                </div>
                <h3 class="mt-3">Watch Later</h3>
               <ul class="lists">
                <li>2 videos</li>
                <li>views</li>
                <li>Updated today</li>
               </ul>

               <button class="btn btn-secondary d-flex" disabled type="button"><span class="material-symbols-outlined">
                lock
                </span> Private</button>

                <p class="mt-3"><span class="material-symbols-outlined">
                    sync_disabled
                    </span> <span class="material-symbols-outlined">
                        more_horiz
                        </span></p>
                        <hr/>

                        <div class="d-flex">
                          <img src="{{$product[0]['file']}}" class="rounded-circle" width="60px" height="60px"/>
                          <h4 class="mt-3 ms-3">{{$name}}</h4>

                        </div>


            </div>
            <div class="col-md-9 bg-light" style ="height: 100vh;">
                <div class=" my-4">
                    <p><span class="material-symbols-outlined">
                            short_text
                        </span> Shorts</p>
                </div>
                @foreach($product as $data)
                <div class="d-flex w-full">
                    <span class="material-symbols-outlined alert mt-2">
                        vertical_distribute
                    </span>
                    <div class=" w-100">

                        <div class="row">
                            <div class="col-md-2">
                                <video  width="320" height="240" id="example1" poster="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$data['thumbnail']}}">
                                    <source src="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$data['file']}}" type="video/mp4">

                                    <track kind="captions" label="English" srclang="en" src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                                    Your browser does not support the video tag.
                                  </video>
                            </div>
                            <div class="col-md-10 ps-3">
                                <h5>view: {{$data['views']}} . Updated today</h5>
                                {{-- <p>Lorem Ipsum is simply dummy text of the</p> --}}
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach

                <!-- <div class="d-flex w-full mt-3">
                    <span class="material-symbols-outlined alert mt-2">
                        vertical_distribute
                    </span>
                    <div class=" w-100">
                        @csrf
                        <div class="row">
                            <div class="col-md-2">
                                <img src="data:image/jpeg;base64,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"
                                    alt="Trulli" height="80px">
                            </div> -->
                            <!-- <div class="col-md-10 ps-3">
                                <h5>2 vedio . NO Views . Updated today</h5>
                                <p>Lorem Ipsum is simply dummy text of the</p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>
