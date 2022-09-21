@include('header')
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
                <div class="col-md-5">
                  <ul class="view">
                    <li>View:</li>
                    <li>Aug 19, 2022</li>
                  </ul>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @livewire('product-ratings', ['product' => $videos], key($videos['id']))
                        </div>
                      </div>
                    </div>
                  </div>


                <div class="col-md-7">
                  <div class="appricate justify-content-end">
           
                    <button type="button" class="btn d-flex" onclick="likePost('{{$videos['id']??0}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="I Like this ">
                      <span class="material-symbols-outlined">
                      thumb_up 
                      </span><span class="liked">{{$liked}}</span>
                    </button>
                  <button type="button" class="btn d-flex"  onclick="unlikePost('{{$videos['id']??0}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="I Unlike this">
                      <span class="material-symbols-outlined">
                        thumb_down
                      </span> Dislike
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Share">
                    <span class="material-symbols-outlined">
                      google_plus_reshare
                      </span> SHARE
                  </button>
                  <button type="button" class="btn d-flex" onclick="save_video('{{request()->segment(2)}}')" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Save the video watch later">
                    <span class="material-symbols-outlined">
                      playlist_add
                      </span> SAVE
                  </button>
                  <button type="button" class="btn d-flex" data-bs-toggle="modal" data-bs-target="#Report">
                  <span class="material-symbols-outlined">flag</span> Report
                  </button>
                  <!-- Modal -->
                    <div class="modal fade" id="Report" tabindex="-1" aria-labelledby="Report" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="Report">Report video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label ml-2" for="flexRadioDefault1">
                              Sexual content
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label ml-2" for="flexRadioDefault2">
                            Violent or repulsive content
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label ml-2" for="flexRadioDefault3">
                            Harassment or bullying
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                            <label class="form-check-label ml-2" for="flexRadioDefault4">
                            Harmful or dangerous acts
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                            <label class="form-check-label ml-2" for="flexRadioDefault5">
                            Child abuse
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
                            <label class="form-check-label ml-2" for="flexRadioDefault6">
                            Promotes terrorism
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
                            <label class="form-check-label ml-2" for="flexRadioDefault7">
                            Spam or misleading
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8" checked>
                            <label class="form-check-label ml-2" for="flexRadioDefault8">
                            Infringes my rights
                            </label>
                          </div>
                          <div class="form-check my-1.5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
                            <label class="form-check-label ml-2" for="flexRadioDefault9">
                            Captions issue
                            </label>
                          </div>
                          <small class="my-2">Flagged videos and users are reviewed by YouTube staff 24 hours a day, 7 days a week to determine whether they violate Community Guidelines. Accounts are penalized for Community Guidelines violations, and serious or repeated violations can lead to account termination. Report channel
                          </small>
                          <div class="hide">
                              <form>
                                <label>Timestamp selected *</label> <br/>
                                <input type="time" class="form-control col-md-3 my-3"/>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Provide additional details" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Comments</label>
                                  </div>
                              </form>
                              <small class="my-2">Flagged videos and users are reviewed by YouTube staff 24 hours a day, 7 days a week to determine whether they violate Community Guidelines. Accounts are penalized for Community Guidelines violations, and serious or repeated violations can lead to account termination. Report channel
                             </small>
                          </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button type="button" class="btn btn-primary btn1">NEXT</button>
                          </div>
                        </div>
                      </div>
                    </div>


                </div>
                </div>
              </div>


              <hr/>
              <div class="row py-3.5">
                <div class="col-md-2">
                  <div class="profile-image">
                      <img src="<?php echo URL::to('/');?>/public/asstes/hq720.webp" width="80px" height="80px"/>
                  </div>

                </div>
                <div class="col-md-7">
                    <h5>{{Auth::user()->name;}}</h5>
                    
                    <small style="font-size: 20px;">
                        {{ $subscriber }} Subscribers
                    </small>
                    <!-- <p>Create. Submit. Approve. Get an all-in-one solution with Varicent Incentive Compensation Management. Automatic updates to payroll</p> -->
                  <a href="./login">Read More</a>
                  <div class="shows">
                      <p>Upcoming Charges</p>
                  </div>

                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-danger subscribe" style="{{$count<=0 ? 'display:block':'display:none'}}" onclick="subscribe('{{$videos['user_id']}}',1)">SUBSCRIBE</button>
                    <button class="btn btn-danger subscribes"  style="{{$count > 0 ? 'display:block':'display:none'}}" onclick="subscribe('{{$videos['user_id']}}',0)">SUBSCRIBED</button>
                    <button class="btn btn-danger subscrib"  style="{{$count > 0 ? 'display:block':'display:none'}}" onclick="subscribe('{{$videos['user_id']}}',0)">UNSUBSCRIBED</button> 
 
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

// $(document).ready(function(){
//   $(".btn1").click(function(){
//     $(".hide").hide();
//   });
//   $(".btn1").click(function(){
//     $(".hide").show();
//   });
// });
</script>
    </body>
    </html>

    
