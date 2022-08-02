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
            <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" placeholder="Enter text" id="text">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <input type="text" class="form-control" placeholder="Enter Description" id="Description">
            </div>
            <div class="form-group">
                <label for="Security">Security</label>
               <select class="form-control">
                   <option value="0" selected>Public</option>
                   <option value="1">Private</option>
                   <option value="2">Hidden</option>
                  
               </select>
            </div>
            <div>
             <input type="file" name="file">
            </div>
             
             <div style="margin-top:16px !important;">
                <input type="submit" name="save">
            </div>
            </form>
</div>
        </body>
   
</html>