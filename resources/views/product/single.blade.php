@include('header')
{{-- @include('jetheader') --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-md-12">
            <!-------------------------- Add New content here  ---------------------->
            <div class="container-fluid p-3">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row m-2 ">
                            <div class="col-md-1">
                                <div class="profile-image ms-2">
                                    <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp" height="60px"
                                        width="60px" />
                                </div>
                            </div>
                            <div class="col-md-8 pt-2">
                                <h5>{{ $username }}</h5>
                                <small>
                                    190 Subscriber
                                </small>
                            </div>
                            <div class="col-md-3 text-end">
                                <button class="btn btn-danger subscribe"
                                    style="{{ $count <= 0 ? 'display:block' : 'display:none' }}"
                                    onclick="subscribe('{{ $videos['user_id'] }}',1)">SUBSCRIBE</button>
                                <button class="btn btn-outline-success subscribes"
                                    style="{{ $count > 0 ? 'display:block' : 'display:none' }}"
                                    onclick="subscribe('{{ $videos['user_id'] }}',0)">SUBSCRIBED</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 px-3">
                        <div class="">
                            <video width="320" height="240" id="example1"
                                poster="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos['thumbnail'] }}">
                                <source src="{{ 'https://spaces3.nyc3.digitaloceanspaces.com/' . $videos['file'] }}"
                                    type="video/mp4">
                                <track kind="captions" label="English" srclang="en"
                                    src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@main/demo-template/subtitles/en.vtt">
                                Your browser does not support the video tag.
                            </video>
                            <p class="video-title">{{ $videos['title'] }}
                            </p>
                            <div class="row mb-2">
                                <div class="col-md-5">
                                    <ul class="view">
                                        <li>{{ $videos['views'] }} Views</li>
                                        <li> {{ \Carbon\Carbon::parse($videos['created_at'])->diffForHumans() }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-7 ">
                                    <div class="appricate">
                                        <ul>
                                            @foreach ($socialshare as $key => $value)
                                                <button type="button" class="btn d-flex" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Tooltip on bottom">
                                                    <span class="material-symbols-outlined">
                                                        google_plus_reshare
                                                    </span><a href="{{ $value }}">{{ ucfirst($key) }}</a> SHARE
                                                </button>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="btn d-flex"
                                            onclick="save_video('{{ request()->segment(2) }}')"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Tooltip on bottom">
                                            <span class="material-symbols-outlined">
                                                playlist_add
                                            </span> SAVE
                                        </button>
                                        <button type="button" class="btn d-flex" data-bs-toggle="modal"
                                            data-bs-target="#Report">
                                            <span class="material-symbols-outlined">
                                                flag
                                            </span> Report
                                        </button>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="Report" tabindex="-1" aria-labelledby="Report"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="Report">Report video</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form id="submit_report" method="POST">
                                                <div class="modal-body">
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            name="report_desc" id="flexRadioDefault1"
                                                            value="Sexual content">
                                                        <label class="form-check-label ml-2" for="flexRadioDefault1">
                                                            Sexual content
                                                        </label>
                                                    </div>
                                                    <input type="hidden" name="product_id" id="product_id"
                                                        value="{{ request()->segment(2) }}">
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            name="report_desc" id="flexRadioDefault2"
                                                            value="Violent or repulsive content" checked>
                                                        <label class="form-check-label ml-2" for="flexRadioDefault2">
                                                            Violent or repulsive content
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            value="Harassment or bullying" name="report_desc"
                                                            id="flexRadioDefault3">
                                                        <label class="form-check-label ml-2" for="flexRadioDefault3">
                                                            Harassment or bullying
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            value="Harmful or dangerous acts" name="report_desc"
                                                            id="flexRadioDefault4" checked>
                                                        <label class="form-check-label ml-2" for="flexRadioDefault4">
                                                            Harmful or dangerous acts
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            value="Child abuse" name="report_desc"
                                                            id="flexRadioDefault5">
                                                        <label class="form-check-label ml-2" for="flexRadioDefault5">
                                                            Child abuse
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            value="Promotes terrorism" name="report_desc"
                                                            id="flexRadioDefault6" checked>
                                                        <label class="form-check-label ml-2" for="flexRadioDefault6">
                                                            Promotes terrorism
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" value="Spam or misleading"
                                                            type="radio" name="report_desc" id="flexRadioDefault7">
                                                        <label class="form-check-label ml-2" for="flexRadioDefault7">
                                                            Spam or misleading
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            value="Infringes my rights" name="report_desc"
                                                            id="flexRadioDefault8" checked>
                                                        <label class="form-check-label ml-2" for="flexRadioDefault8">
                                                            Infringes my rights
                                                        </label>
                                                    </div>
                                                    <div class="form-check my-1.5">
                                                        <input class="form-check-input" type="radio"
                                                            value="Captions issue" name="report_desc"
                                                            id="flexRadioDefault9">
                                                        <label class="form-check-label ml-2" for="flexRadioDefault9">
                                                            Captions issue
                                                        </label>
                                                    </div>
                                                    <small class="my-2">Flagged videos and users are reviewed by
                                                        YouTube staff 24 hours a day, 7 days a week to determine
                                                        whether they violate Community Guidelines. Accounts are
                                                        penalized for Community Guidelines violations, and
                                                        serious or repeated violations can lead to account
                                                        termination. Report channel
                                                    </small>
                                                    <div class="hide">
                                                        <label>Timestamp selected *</label> <br />
                                                        <input type="time" name="timestamp"
                                                            class="form-control col-md-3 my-3" />

                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Provide additional details" id="floatingTextarea2" name="description"
                                                                style="height: 100px"></textarea>

                                                            <label for="floatingTextarea2">Comments</label>
                                                        </div>
                                                        <small class="my-2">Flagged videos and users are
                                                            reviewed by YouTube staff 24 hours a day, 7 days a
                                                            week to determine whether they violate Community
                                                            Guidelines. Accounts are penalized for Community
                                                            Guidelines violations, and serious or repeated
                                                            violations can lead to account termination. Report
                                                            channel
                                                        </small>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">CANCEL</button>
                                                    <button type="submit" onclick="reloadPage( )"
                                                        class="btn btn-primary btn1">Submit</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        </div>
                        <div class="my-2">
                            <p>{{ $videos['description'] }}</p>
                            <i class="fa fa-star" aria-hidden="true" id="s2" onclick="rating(1, {{ request()->segment(2) }})" ></i>
                            <i class="fa fa-star" aria-hidden="true" id="s3" onclick="rating(2, {{ request()->segment(2) }})"></i>
                            <i class="fa fa-star" aria-hidden="true" id="s4" onclick="rating(3, {{ request()->segment(2) }})"></i>
                            <span>{{number_format($averageRating,1)}}</span>
                            <a href="">Read More</a>
                            <div class="shows">
                                <p>Upcoming Charges </p>
                            </div>
                        </div>
                        <hr />
                        <div class="comments my-2">
                            <div class="d-flex mb-2">
                                <p>{{ count($videos['comments']) }} Comments</p>
                            </div>
                            <div class="row">
                                <div class="col-1 text-end">
                                    <div class="profile-image">
                                        <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp" height="60px"
                                        width="60px" />
                                    </div>
                                </div>
                                <div class="col-md-11 mt-3">
                                    <form method="post" action="{{ route('comment.add') }}">
                                        <div class="commentBox">
                                            <input type="text" class="form-control" autocomplete="off"
                                                name="body" id="exampleFormControlInput1"
                                                placeholder="Add a comment">
                                            <input type="hidden" name="post_id"
                                                value="{{ request()->segment(2) }}" />
                                        </div>
                                        <div class="text-end mt-3">
                                            <button type="submit" class="btn btn-primary btn-sm"
                                                id="exampleFormControlInput1" style="width:110px;">COMMENT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="commentss">
                                <div class="row mt-3">
                                    <div class="col-1 text-end">
                                        <div class="profile-image">
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp" height="60px"
                                                width="60px" />
                                        </div>
                                    </div>
                                    <div class="col-md-11">
                                        <p class="mb-2"> <b> {{ $username }}
                                            </b>{{ \Carbon\Carbon::parse($videos['created_at'])->diffForHumans() }}</p>
                                        @foreach ($videos['comments'] as $key => $commet)
                                            <div class="comments">
                                                <div class="row mt-3">
                                                    <div class="col-2 text-end">
                                                        <div class="profile-image">
                                                            <img src="https://spaces3.nyc3.digitaloceanspaces.com/profile/MLfKOsusTithjf4TT6m7JMvHgS33BBx9Qot8rrjf.webp
                                                            "height="40px"
                                                                width="40px" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p class="m-0"> <b>
                                                                {{ $videos['user']['id'] == $commet['user_id'] ? $videos['user']['name'] : '' }}
                                                            </b>{{ \Carbon\Carbon::parse($videos['created_at'])->diffForHumans() }}
                                                        </p>
                                                        <p class="">{{ $commet['body'] }}</p>
                                                        @foreach ($commet['replies'] as $key => $reply)
                                                            <div>{{ $reply['body'] }}</div>
                                                        @endforeach
                                                        <div class="d-flex">
                                                            <a class="me-3 text-decoration-none"
                                                                onclick="reply(this)">REPLY</a>
                                                        </div>
                                                        <div class="row" id="replyBox" style="display: none">
                                                            <div class="col-md-12 common">
                                                                <form method="post"
                                                                    action="{{ route('reply.add') }}">
                                                                    <div>
                                                                        <input type="text"
                                                                            class="form-control "name="body"
                                                                            id="exampleFormControlInput1"
                                                                            placeholder="Add a comment">
                                                                        <input type="hidden" name="post_id"
                                                                            value="{{ request()->segment(2) }}" />
                                                                        <input type="hidden" name="comment_id"
                                                                            value="{{ $commet['id'] }}" />
                                                                    </div>
                                                                    <div class="text-end mt-3">
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-sm"
                                                                            id="exampleFormControlInput1"
                                                                            style="width:110px;">COMMENT</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        {{-- append div end --}}


                                                        <hr />

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <h4 class="mb-3">Related video</h4>
                            <!------------- videoss-section ----------------------------->
                            <div class="videoss-section">
                                <div class="row mb-3 g-0">
                                    <div class="col-md-5">
                                        <div class="related-video position-relative">
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
                                            <img src="<?php echo URL::to('/'); ?>/public/asstes/hq720.webp"
                                                class="img-fluid" />
                                            <div class="icons-on">
                                                <a href=""><span class="material-symbols-outlined">
                                                        schedule
                                                    </span></a><br />
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
                                            <p class="m-0"> <b> What is Lorem <br /> Ipsum? </b></p>
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
</body>
<script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="<?php echo URL::to('/'); ?>/public/js/script.js"></script>
{!! Toastr::message() !!}
<script>
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

    // $(document).ready(function(){
    //   $(".btn1").click(function(){
    //     $(".hide").hide();
    //   });
    //   $(".btn1").click(function(){
    //     $(".hide").show();
    //   });
    // });
</script>
<script>


    $(document).ready(function(){

        $("#s2").click(function(){
            $(".fa-star").css("color","white");
            $("#s1,#s2").css("color","yellow");
        });
        $("#s3").click(function(){
            $(".fa-star").css("color","white");
            $("#s1,#s2,#s3").css("color","yellow");
        });
        $("#s4").click(function(){
            $(".fa-star").css("color","white");
            $("#s1,#s2,#s3,#s4").css("color","yellow");
        });
    });



    function reloadPage() {
        location.reload();
    }

    $(document).ready(function() {

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e) {
                if (e < onStar) {
                    $(this).addClass('hover');
                } else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function() {
            $(this).parent().children('li.star').each(function(e) {
                $(this).removeClass('hover');
            });
        });


        /* 2. Action to perform on click */
        $('#stars li').on('click', function() {
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
            } else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg);

        });

    });

    function responseMessage(msg) {
        $('.success-box').fadeIn(200);
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
    }
</script>
</html>
