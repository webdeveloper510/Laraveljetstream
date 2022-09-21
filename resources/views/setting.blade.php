@include('header')
    <style>
        .setting .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: black;
    background-color: #cbc9c9;
}
.setting .nav-link {
color: #686767;
}
.Account {
    padding: 40px 33px;
}
div#v-pills-tab {
    background: #efefef94;
    height: 100vh;
}
div#v-pills-tabContent {
    background: #fafafa;
    height: 100vh;
    overflow-y: scroll;
}
    </style>
  </head>
  <body>

    <div class="setting">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @csrf
                    <div class="d-flex align-items-start row">
                        <div class="nav flex-column nav-pills col-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Account</a>
                          <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Notification</a>
                          <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Playback and performance</a>
                          <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Privacy</a>
                          <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Connected" type="button" role="tab" aria-controls="v-pills-Connected" aria-selected="false">Connected apps</a>
                          <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Advanced" type="button" role="tab" aria-controls="v-pills-Advanced" aria-selected="false">Advanced settings</a>
                        </div>
                        <div class="tab-content col" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                             <div class="Account">
                                <h5>Account</h5>

                                <h2>Choose how you appear and what you see on YouTube</h2>
                                <p>Signed in as saurav@codenomad.net</p>
                                 <hr/>

                                 <h5>Your YouTube channel</h5>
                                 <p>This is your public presence on YouTube. You need a channel to upload your own videos, comment on videos, or create playlists.</p>
                                 <div class="row">
                                    <div class="col-md-3">
                                        <p><b>Your channel</b></p>
                                    </div>
                                    <div class="col-md-9">
                                        
                                          <div class="flex">
                                               <img src="" class=""/>
                                               <h3>Username</h3>
                                          </div>
                                    </div>
                                 </div>
                                 <hr/>
                                 <h5>Your account</h5>
                                 <p>You sign in to YouTube with your Google Account</p>
                                 <div class="row">
                                    <div class="col-md-3">
                                        <h5>Google Account</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <a href="">View or change your Google Account settings</a><br/>
                                        <p>You will be redirected to your Google Account page</p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-3">
                                        <h5>Membership</h5>
                                    </div>
                                    <div class="col-md-9">
                                        <p>No membership | <a href="">Get YouTube Premium</a> </p>
                                        <p>YouTube Premium offers uninterrupted music, ad-free videos, and more</p>
                                    </div>
                                 </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="Account">
                            <h5>Notifications</h5>

                            <h2>Choose when and how to be notified</h2>
                            <p>Select push and email notifications you'd like to receive</p>
                             <hr/>

                             <h5>General</h5>
                             <p>Manage your mobile and desktop notifications</p>
                             <div class="row">
                                <div class="col-md-3">
                                    <p><b>Your preferences</b></p>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Subscriptions</label>
                                        <p>Notify me about activity from the channels I'm subscribed to
                                        </p>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Recommended videos</label>
                                       <p>Notify me of videos I might like based on what I watch
                                    </p>
                                    </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Activity on my channel                                        </label>
                                        <p>Notify me about comments and other activity on my channel or videos
                                        </p>
                                    </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Replies to my comments
                                        </label>
                                        <p>Notify me about replies to my comments
                                        </p>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Mentions</label>
                                        <p>Notify me when others mention my channel
                                        </p>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Shared content </label>
                                        <p>Notify me when others share my content on their channels
                                        </p>
                                      </div>
                                </div>
                             </div>
                             <hr/>
                              
                             <h5>Email notifications </h5>
                             <p>Your emails are sent to saurav@codenomad.net. To unsubscribe from an email, click the "Unsubscribe" link at the bottom of it. Learn more about emails from YouTube.
                            </p>
                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Your family
                                    </h5>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Send me emails about family and product updates for YouTube or YouTube Kids
                                        </label>
                                        <p>By turning on this setting, you're opting in to emails with recommended content, tips, and product updates for families</p>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <h5>Permission</h5>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Send me emails about my YouTube activity and updates I requested
                                        </label>
                                        <p>If this setting is turned off, YouTube may still send you messages regarding your account, required service announcements, legal notifications, and privacy matters
                                        </p>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <h5>Your preferences
                                    </h5>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">General product updates
                                        </label>
                                        <p>Announcements and recommendations</p>
                                      </div>

                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">YouTube Premium updates
                                        </label>
                                        <p>Announcements, updates, and recommendations from YouTube Premium and YouTube Music Premium
                                        </p>
                                      </div>

                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Creator updates and announcements
                                        </label>
                                        <p>Product announcements, creator events, and personalized tips to grow your YouTube channel
 </p>
                                      </div>
                                </div>
    
                                <div class="col-md-3">
                                    <h5>Language
                                    </h5>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <div class="Account">
                                <h5>Playback and performance
                                </h5>
                                <h2>Control your video viewing experience
                                </h2>
                                <p>Playback settings apply to this browser only
                                </p>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-3 my-3">
                                        <h5>Info cards </h5>
                                    </div>
                                    <div class="col-md-9 my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Show in-video info cards
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-md-3 my-3">
                                        <h5>Subtitles and Closed Captions
                                        </h5>
                                    </div>
                                    <div class="col-md-9 my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Always show captions
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Include auto-generated captions (when available)
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-md-3 my-3">
                                       <h5>AV1 settings</h5>
                                    </div>
                                    <div class="col-md-9 my-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Auto (recommended)
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Prefer AV1 for SD
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Always prefer AV1
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-md-3 my-3">
                                        <h5>AV1 settings</h5>
                                     </div>
                                     <div class="col-md-9 my-3">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Inline playback
                                            </label>
                                            <p>Play videos when you hover over them on the Home screen
                                            </p>
                                          </div>
                                     </div>
                                </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <div class="Account">
                                <h5>Privacy</h5>

                                <h2>Manage what you share on YouTube </h2>
                                <p>Choose who can see your saved playlists and subscriptions
                               <br/>Review YouTube Terms of Service and Google Privacy Policy
                            </p>

                            <hr/>

                            <div class="row">
                                <div class="col-md-3">
                                    <h5>Playlists and subscriptions </h5>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Keep all my saved playlists private
                                        </label>
                                        <p>Playlists created by others won’t appear on your channel. Playlists created by you have separate, individual privacy settings. Learn more
                                        </p>
                                      </div>
                                      <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Keep all my subscriptions private
                                        </label>
                                        <p>Your subscriptions won't be visible to others, unless you use features that make them public. Learn more about what could make your subscriptions visible or manage your subscriptions here.                                        </p>
                                      </div>
                                </div>
                                <div class="col-md-3">
                                    <h5>Ads on YouTube
                                    </h5>
                                </div>
                                <div class="col-md-9">
                                    <p>You may see ads on YouTube based on general factors, like the topic of a video. The ads you see may also depend on your Google Ads Settings. To learn more about how ads work for family accounts with kids, visit the Google for Families Help Center.
                                    </p>
                                </div>
                            </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-Connected" role="tabpanel" aria-labelledby="v-pills-Connected-tab">
                            <div class="Account">
                                <h5>Connected apps
                                </h5>
                                <h2>Expand your experience
                                </h2>
                                <p>Connect YouTube with other apps and watch more easily
                                </p>
                                <a href="">See all sites authorized to access your Google Account</a>
                                 <hr/>
                                 <div class="">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="" class="img-fluid"/>
                                        </div>
                                        <div class="col-md-9">
                                            <h5>Activision ID
                                            </h5>
                                            <p>Connect accounts and watch approved events and videos for a chance to win in-game rewards
                                            </p>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-outline-primary" type="button">CONNECT</button>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="v-pills-Advanced" role="tabpanel" aria-labelledby="v-pills-Advanced-tab">
                            <div class="Account">
                                <h5>Advanced settings
                        </h5>
                                <h2>Set up YouTube exactly how you want it
                                </h2>

                                <hr/>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Move channel
                                        </h5>
                                    </div>
                                    <div class="col-md-9">
                                        <a href="">Move channel to a brand account</a> <br/>
                                        <p>You can move your channel to a brand account
                                        </p>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Delete channel
                                        </h5>
                                    </div>
                                    <div class="col-md-9">
                                        <a href="" >Delete channel</a><br/>
                                        <p>Deleting your YouTube channel won't close your Google Account
                                        </p>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>