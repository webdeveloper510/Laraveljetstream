<x-app-layout>

    <div class="container-fluid p-0">
        <div class="row g-0">

                <div class=" py-5">
                    <div class="container">
                        <div class="home-demo">
                            <div class="owl-carousel owl-theme">
                            

                                @foreach($videos as $video)
                                     @foreach($video['posts'] as $posts)
                                <div class="item">
                                    <div class="card">
                                    <a href="{{url('/videodetail/'.$video['id'])}}">
                                   <video width="100%" height="100%" controls onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
                                        <source src="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$posts['file']}}" type="video/mp4">
                                    </video></a>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="https://images.pexels.com/photos/13172083/pexels-photo-13172083.jpeg?cs=srgb&dl=pexels-andrew-neel-13172083.jpg&fm=jpg" class="thump">
                                                </div>
                                                <div class="col-9">
                                                    <div class="detail">
                                                    <a href="" class="title font-bold">{{$posts['title']}}</a><br/>
                                                    <a href="{{url('/channel/'.$video['id'])}}" class="small-tittle"> {{Auth::user()->name;}}</a>
                                                    <ul class="Views">
                                                        <li><a href=""> View:{{ $posts['views']}} </a></li>
                                                    </ul>
                                                    <!-- <p><a ><span class="material-symbols-outlined" onclick="likePost('{{$posts['id']}}')"> thumb_up </span></a></p>
                                                       <a ><span class="material-symbols-outlined" onclick="unlikePost('{{$posts['id']}}')">thumb_down</span></a> -->
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
                <div class="">
                    <div class="container ">
                        <div class="home-demo py-5">
                            <h3 class=" text-3xl mb-3">Breaking news</h5>
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="card">
                                          <video width="100%" height="100%" controls onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
                                                <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
                                                <source src="https://www.w3schools.com/tags/movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                            </video>
                                            <div class="card-body">
                                                <h5 class="card-title">Video Title</h5>
                                                <p class="card-text">Video Dis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="card">
                                            <video width="100%" height="100%" controls onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
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
                                            <video width="100%" height="100%" controls onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
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
                                            <video width="100%" height="100%" controls onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;">
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
                <div class="">
                    <div class="container">
                        <div class="row  py-5">
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
     @push('js')
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
     <script>
         console.log('fsdffdssdf');
         var user = {!! json_encode((array)auth()->user()) !!};
        console.log('user')
     </script>
 @endpush
</x-app-layout>