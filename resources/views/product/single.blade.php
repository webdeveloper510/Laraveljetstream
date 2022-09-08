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
   <!-------------------------- Add New content here  ---------------------->
   <div class="container-fluid my-3">
        <div class="row">
           <div class="col-md-8">
            <div class="">  

            <video  width="320" height="240" id="example1" poster="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$videos['thumbnail']}}">
            <source src="{{'https://spaces3.nyc3.digitaloceanspaces.com/'.$videos['file']}}" type="video/mp4">

            <track kind="captions" label="English" srclang="en" src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">  
            Your browser does not support the video tag.
          </video>
     
              <p class="video-title">{{$videos['title']}}
              </p>
              <div class="row">
                <div class="col-md-3">
                  <ul class="view">
                    <li>View:</li>
                    <li>Aug 19, 2022</li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="appricate">
           
                    <button type="button" class="btn d-flex" onclick="likePost('{{$videos['id']??0}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                      <span class="material-symbols-outlined">
                      thumb_up <span class="liked">{{$liked}}</span>
                      </span>
                    </button>
                  <button type="button" class="btn d-flex"  onclick="unlikePost('{{$videos['id']??0}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                      <span class="material-symbols-outlined">
                        thumb_down<span class="disliked">{{$disliked}}</span>
                      </span>
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
                  <button type="button" class="btn d-flex" onclick="save_video('{{request()->segment(2)}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
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
              </div>


              <hr/>
              <div class="row">
                <div class="col-md-2">
                  <div class="profile-image">
                      <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" width="80px" height="80px"/>
                  </div>

                </div>
                <div class="col-md-7">
                    <h5>{{Auth::user()->name;}}</h5>
                    
                    <small style="font-size: 20px;">
                        {{$count}}Subscribers
                    </small>
                    <!-- <p>Create. Submit. Approve. Get an all-in-one solution with Varicent Incentive Compensation Management. Automatic updates to payroll</p> -->
                  <a href="./login">Read More</a>
                  <div class="shows">
                      <p>Upcoming Charges</p>
                  </div>

                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-danger subscribe" style="{{$count<=0 ? 'display:block':'display:none'}}" onclick="subscribe('{{$videos['user_id']}}',1)">SUBSCRIBE</button>
                    <button class="btn btn-danger" style="{{$count > 0 ? 'display:block':'display:none'}}" onclick="subscribe('{{$videos['user_id']}}',0)">SUBSCRIBED</button> 
                </div>
              </div>
              <hr/>
              <div class="comments">
                <div class="d-flex">
                    <p>0 Comments</p>
                    <div class="ms-3">
                        <div class="dropdown">
                            <a style="color: black;" class="dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
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
                <div class="col-2 text-end">
                  <div class="profile-image">
                    <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" width="50px" height="50px"/>
                  </div>
                </div>
                <div class="col-md-10">
                <form method="post" action="{{ route('comment.add') }}">
                  <div class="commentBox">
                    <input type="text" class="form-control" autocomplete="off" name="body" id="exampleFormControlInput1"  placeholder="Add a comment">
                  <input type="hidden" name="post_id" value="{{request()->segment(2);}}"/>

                </div>
                  <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary btn-sm" id="exampleFormControlInput1" style="width:110px;">COMMENT</button>
                  </div>
                </form>
            </div>
               </div>
         @foreach($videos['comments'] as $key=> $commet)
            <div class="comments">
                <div class="row mt-3">
                    <div class="col-2 text-end">
                            <div class="profile-image">
                            <img src="https://spaces3.nyc3.digitaloceanspaces.com/profile/MLfKOsusTithjf4TT6m7JMvHgS33BBx9Qot8rrjf.webp
                            "height="40px" width="40px" />
                            </div>
                    </div>
                            <div class="col-md-10">
                                <p class="m-0"> <b> {{$videos['user']['id']==$commet['user_id'] ? $videos['user']['name']:''}} </b> 1 hours ago </p>
                                <p class="">{{$commet['body']}}</p>
                                @foreach($commet['replies'] as $key=> $reply)
                                  <div>{{$reply['body']}}</div>
                                @endforeach

                                <div class="d-flex">
                                    <a  class="me-3 text-decoration-none" onclick="reply(this)">REPLY</a>
                                </div>
                                <div class="row" id="replyBox"  style="display: none">
                                    <div class="col-md-12 common" >
                                        <form method="post" action="{{ route('reply.add') }}">
                                          <div >
                                            <input type="text" class="form-control "name="body" id="exampleFormControlInput1"  placeholder="Add a comment">
                                             <input type="hidden" name="post_id" value="{{request()->segment(2);}}"/>
                                             <input type="hidden" name="comment_id" value="{{$commet['id']}}"/>
                                        </div>
                                          <div class="text-end mt-3">
                                            <button type="submit" class="btn btn-primary btn-sm" id="exampleFormControlInput1" style="width:110px;">COMMENT</button>
                                          </div>
                                        </form>
                                    </div>
                                </div>

                                 {{-- append div end --}}


                                <hr/>

                            </div>

                 </div>
            </div>
            @endforeach
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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

                    <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>

                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>

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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
                        <p class="m-0"> <b> What is Lorem <br/>      </b></p>
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
                    <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" class="img-fluid"/>
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
              </div>
            </div>
           </div>
       </div>

      </div>
    </div>
    </div>
    </div>  
        <script src="<?php echo URL::to('/');?>/public/js/script.js"></script>
        {!! Toastr::message() !!} 
        <script>
document.addEventListener("DOMContentLoaded", function() {
   video1 = new Moovie({
      selector: "#example1",
      config: {
          controls : {
              playtime : true,
              mute : true,
              volume : true,
              subtitles : true,
              config : true,
              fullscreen : true,
              submenuCaptions : true,
              submenuOffset : true,
              submenuSpeed : true,
              allowLocalSubtitles : true
          }
      }
   });
});
</script>
    </body>
    </html>

    
