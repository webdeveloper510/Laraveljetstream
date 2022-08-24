@include('header')
<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-3 bg-dark position-relative">
            <div class="explore" style="color:white">
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
                <hr />
                <h5 class="text-center">Subscriptions</h5>
                <h5><span class="material-symbols-outlined">music_note</span>Music</h5>
            </div>
        </div>
        <div class="col-md-9 bg-dark" style="height:100vh;">
<div class="mains">
    <img src="https://images.pexels.com/photos/4534200/pexels-photo-4534200.jpeg?auto=compress&cs=tinysrgb&w=600"  width="100%" height="300px"/>

    <div class="container-fluid">
      <div class="text-banner">
        <div class="row">
            <div class="col-md-4 d-flex">
               <img src="https://images.pexels.com/photos/4534200/pexels-photo-4534200.jpeg?auto=compress&cs=tinysrgb&w=600" width="80px" height="80px" class="profile"/>
               <div class="username">
                <h4 class="m-0">Varicent</h4>
                <p class="m-0">190 Subscriber</p>
               </div>
            </div>
            <div class="col-md-8">
                <div class="text-sm-end p-4">
                  <button class="btn btn-outline-primary" type="button">Join</button>
                    <button class="btn btn-danger" type="button">SUBSCRIBE</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">HOME</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">VIDEOS</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">PLAYLISTS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-channel-tab" data-bs-toggle="pill" data-bs-target="#pills-channel" type="button" role="tab" aria-controls="pills-channel" aria-selected="false">CHANNELS</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">ABOUT</button>
        </li>

      </ul>
      <div class="tab-content" id="pills-tabContent">
         <!-- ------------------------------Home section tab ----------------------->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="Video-setion">
            <div class="row">
               <div class="col-md-5">
                 Video tag
               </div>
               <div class="col-md-5">
                <p class="m-0"><b>What is Lorem Ipsum?</b></p>
                <div class="views">
                  <p class="py-2 m-0">2,800,658 views
                    4 months ago</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
               </div>
            </div>
            <hr/>

            <div class="row">
              <div class="col-12">
                <h3 class="d-flex">Uploads <button class="btn btn-sm btn-outline-primery d-flex"><span class="material-symbols-outlined">
                  play_arrow
                  </span> <span class="btn-text">Play All</span></button></h3>

              </div>
            </div>
          </div>
        </div>
        <!-- ------------------------------Videos section tab ----------------------->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="row">
            <div class="col-md-3">
              <select class="form-select" aria-label="Default select example">
                <option selected> Upload</option>
                <option value="1">All videos</option>
                <option value="2">Upcoming live streams</option>
                <option value="3">Past live streams</option>
              </select>
            </div>
          </div>

          <div class="video-setion my-3">
             <div class="row">
<!-- ------------------------------ist row ----------------------->

              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                   <!-- ------------------------------2nd row ----------------------->
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                  <img src="" class="img-fluid"/>
                  <div class="card-body">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <div class=" views">
                        <ul>
                          <li>47k views</li>
                          <li>18 hours ago</li>
                        </ul>
                    </div>
                    <a class="" href="#" role="button" id="dropdown1" >
                      <span class="material-symbols-outlined">
                        more_vert
                        </span>
                    </a>
                    <div class="Queue">
                      <div class="dropdown">
                        <ul class="dropdown-menu1">
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_play
                            </span> Add to Queue</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            schedule
                            </span>  Save to Watch later</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-symbols-outlined mr-3">
                            playlist_add
                            </span> Save to Playlist</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
<!-- ------------------------------3rd row ----------------------->


             </div>
          </div>
        </div>
         <!-- ------------------------------Playlist section tab ----------------------->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
        <!-- ------------------------------Channels section tab ----------------------->
        <div class="tab-pane fade" id="pills-channel" role="tabpanel" aria-labelledby="pills-channel-tab">...</div>
         <!-- ------------------------------About section tab ----------------------->
          <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">...</div>
          </div>
  </div>
  </div>
  </body>
</html>
