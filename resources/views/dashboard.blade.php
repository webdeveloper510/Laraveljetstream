<x-app-layout>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-3 bg-dark position-relative">
                <div class="explore" style="color:white">
                    <h5><a href="/Laraveljetstream/dashboard"><span class="material-symbols-outlined">home</span> Home</a></h5>
                    <!-- <h5><span class="material-symbols-outlined">explore</span> Explore</h5>
                    <h5><span class="material-symbols-outlined">whatshot</span> Shorts</h5>
                    <h5><span class="material-symbols-outlined">subscriptions</span> Subscriptions</h5>
                    <hr /> -->
                    <h5><span class="material-symbols-outlined">video_library</span>Library</h5>
                    <h5><span class="material-symbols-outlined">history</span> History</h5>
                    <h5><a href="/Laraveljetstream/uploadpage"><span class="material-symbols-outlined">smart_display</span> Your Videos </a></h5>
                    <!-- <h5><span class="material-symbols-outlined">schedule</span> Watch later</h5> -->
                    <h5><span class="material-symbols-outlined">thumb_up</span>Liked videos</h5>
                    <hr />
                    <h5 class="text-center">Subscriptions</h5>
                    <h5><span class="material-symbols-outlined">music_note</span>Music</h5>
                </div>
            </div>
            <div class="col-md-9">
                <div class="bg-dark py-5">
                    <div class="container">
                        <div class="home-demo py-5">
                            <div class="owl-carousel owl-theme">
                             
                                @foreach($videos as $video)
                                     @foreach($video['posts'] as $posts) 
                                <div class="item">
                                    <div class="card">
                                        <video width="100%" height="100%" controls>
                                        <source src="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$posts['file']}}" type="video/mp4">
                                        </video>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="https://images.pexels.com/photos/13172083/pexels-photo-13172083.jpeg?cs=srgb&dl=pexels-andrew-neel-13172083.jpg&fm=jpg" class="thump">
                                                </div>
                                                <div class="col-9">
                                                    <div class="detail">
<<<<<<< HEAD
                                                    <a href="" class="title">{{$video->title}}</a> <br/>
=======
                                                    <a href="" class="title">{{$posts['title']}}</a><br/>
>>>>>>> 2a09ad3e26d12c9ec877e741e4687544d17258f6
                                                    <a href="" class="small-tittle"> Sony Music India</a>
                                                    <ul class="Views">
                                                       
                                                        <li><a href=""> View:{{ $posts['views']}} </a></li>
                                                    </ul>
<<<<<<< HEAD
                                                    <p><a ><span class="material-symbols-outlined" onclick="likePost('{{$video->id}}')">thumb_up</span></a></p>
                                                       <a ><span class="material-symbols-outlined">thumb_down</span></a>
=======
                                                    <p><a ><span class="material-symbols-outlined" onclick="likePost('{{$posts['id']}}')"> thumb_up </span></a></p>
                                                       <a ><span class="material-symbols-outlined" onclick="unlikePost('{{$posts['id']}}')">thumb_down</span></a>
>>>>>>> 2a09ad3e26d12c9ec877e741e4687544d17258f6
                                                    </div>
                                                </div>
                                            </div>
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
                <div class="bg-dark">
                    <div class="container bg-dark">
                        <div class="home-demo py-5">
                            <h3 class="text-light mb-5">Breaking news</h5>
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="card">
                                            <video width="100%" height="100%" controls>
                                                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Video Title</h5>
                                                <p class="card-text">Video Dis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <video width="100%" height="100%" controls>
                                                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Video Title</h5>
                                                <p class="card-text">Video Dis</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <video width="100%" height="100%" controls>
                                                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Video Title</h5>
                                                <p class="card-text">Video Dis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <video width="100%" height="100%" controls>
                                                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Video Title</h5>
                                                <p class="card-text">Video Dis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title
                                                    and make up
                                                    the bulk of the card's content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
                <hr class="m-0">
                <div class="bg-dark">
                    <div class="container">
                        <div class="row bg-dark py-5">
                        <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <video width="100%" height="100%" controls>
                                        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                        <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video>
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Video Title</h5>
                                        <p class="card-text">Video Dis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
       function likePost(id){
                $.ajax({
                    type:'post',
                    url:'http://localhost/jetstream/likePost',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "contentId":id
                    },
                    success : function (data){
                        console.log(data)
                        // info();
                    }

                    })
            }

        // function info(){
        //     toastr.info('Are you the 6 fingered man?')

        // }

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
</x-app-layout>
