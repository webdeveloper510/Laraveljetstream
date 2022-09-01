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
            <div class="row">
                <div class="col"></div>
                <div class="col-md-8">
                <div class="card p-3 mt-5">
              <h3 class="text-center mb-4">Upload Video</h3>
@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<form action="{{url('/uploadproduct')}}" method="POST" enctype="multipart/form-data">

    @csrf
    <div class="form-group mb-3">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter text" id="text">
        <span style="color:red; font-size:15px;">@error('title'){{$message}}@enderror</span>
    </div>
    <div class="form-group mb-3">
        <label for="Description">Description</label>
        <input type="text" name="description" class="form-control" placeholder="Enter Description"
            id="Description">
        <span style="color:red; font-size:15px;">@error('description'){{$message}}@enderror</span>
    </div>
    <div class="form-group mb-3">
        <label for="Thumbnail">Thumbnail</label>
        <input type="file" name="thumbnail" class="form-control" placeholder="Enter thumbnail"
            id="thumbnail">
        <span style="color:red; font-size:15px;">@error('thumbnail'){{$message}}@enderror</span>
    </div>
    <div class="form-group mb-3">
        <label for="Security">Security</label>
        <select class="form-control" name="security">
            <option value="" selected>Select Security</option>
            <option value="Public">Public</option>
            <option value="Private">Private</option>
            <option value="Hidden">Hidden</option>

        </select>
        <span style="color:red; font-size:15px;">@error('security'){{$message}}@enderror</span>
    </div>
    <div class="form-group mb-3">
        <label for="upload">Video Upload</label>
        <input type="file" name="file" value='' class="form-control">
        <span style="color:red; font-size:15px;">@error('file'){{$message}}@enderror</span>
    </div>

    <div style="margin-top:22px !important;">
        <input class="btn btn-primary" type="submit" name="save">
    </div>


</form>
</div>
                </div>
                <div class="col"></div>
            </div>

        </div>
    </div>
</div>
</div>
<div></div>
</body>

</html>
