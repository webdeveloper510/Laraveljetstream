<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
        <body>
            <div class="container">
            @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <form action="{{url('/uploadproduct')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter text" id="text">
                <span style="color:red; font-size:15px;">@error('title'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description" id="Description">
                <span style="color:red; font-size:15px;">@error('description'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="Thumbnail">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" placeholder="Enter thumbnail" id="thumbnail">
                <span style="color:red; font-size:15px;">@error('thumbnail'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="Security">Security</label>
               <select class="form-control" name="security">
               <option value="" selected>Select Security</option>
                   <option value="Public" >Public</option>
                   <option value="Private">Private</option>
                   <option value="Hidden">Hidden</option>

               </select>
               <span style="color:red; font-size:15px;">@error('security'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
            <label for="upload">Video Upload</label>
             <input type="file" name="file" value='' class="form-control">
             <span style="color:red; font-size:15px;">@error('file'){{$message}}@enderror</span>
            </div>

             <div style="margin-top:22px !important;">
                <input type="submit" name="save">
            </div>

        
            </form>
</div>
        </body>

</html>
