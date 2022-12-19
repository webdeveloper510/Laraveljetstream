var base_url = 'http://localhost/Laraveljetstream';
function subscribe (channel_id, flag) {
  toastr.options = {
    closeButton: true,
    newestOnTop: true,
    positionClass: 'toast-top-center',
  };
  $.ajax ({
    url: base_url + '/subscribe',
    type: 'post',
    data: {
      channel_id: channel_id,
      count: 1,
      _token: '{{ csrf_token() }}',
      flag: flag,
    },
    success: function (data) {
      console.log (data);
      if (data.code) {
        $ ('#subscribe').html (data.count);
        toastr.success (data.message);
      }
      if (data.code == 1) {
        // show like button
        $ ('.subscribe').hide ();
        $ ('.subscribes').show ();
      } else {
        $ ('.subscribe').show ();
        $ ('.subscribes').hide ();
      }
    },
  });
}

// ----------------------------------------Form Validation---------------------------------//
function printErrorMsg (msg) {
  $.each (msg, function (key, value) {
    console.log (key);
    $ ('.' + key + '_err').text (value);
  });
}



// ----------------------------------------Report------------------------------------------//

$ ('#submitt_report').submit (function (e) {
  e.preventDefault ();
  console.log ('testing');
  var form = $ (this);
  var actionUrl = base_url + '/report';
  $.ajax ({
    type: 'POST',
    url: actionUrl,
    data: form.serialize (),
    success: function (data) {
      console.log (data);
      if (data.code === 1) {
        $.isEmptyObject (data.error);
        toastr.success (data.message);
        $ ('.btn-close').trigger ('click');
      } else {
        printErrorMsg (data.error);
      }
    },
  });
});

// ---------------------------------------Comment-----------------------------------//

$ ('#comment').submit (function (e) {
  e.preventDefault ();
  console.log('hello');
  var form = $ (this);
  var actionUrl = base_url + '/comment/store';
  $.ajax ({
    type: 'POST',
    url: actionUrl,
    data: form.serialize (),
    success: function (data) {
      console.log(data);
      $('.comments').append("<div><div class='row mt-3'><div class='col-2 text-end'><div class='profile-image'><a href='http://localhost/jetstream/channel/MQ=='><img src='https://spaces3.nyc3.digitaloceanspaces.com/profile/S7Sd4lb5SbIZcFsjRoCM9rw9mKpDY4jdVyZhJ653.jpg' width='40px'></a></div></div><div class='col-md-10'><p class='m-0'>"+
      "<b>Braun</b>1 second ago</p><p class=''>fyujtyu</p><div class='d-flex'>"+
      "<a class='me-3 text-decoration-none' onclick='reply(this)'>REPLY</a><div class='row' id='replyBox' style='display: none'>"+
        "<div class='col-md-12 common'><form><div>"+
      "<input type='text' class='form-control' name='body' id='exampleFormControlInput1' placeholder='Add a comment' required>"+
       "<input type='hidden' name='post_id' value='1'><input type='hidden' name='comment_id' value='1'>"+
      "</div><div class='text-end mt-3'>"+
      "<button type='submit' class='btn btn-primary btn-sm' id='exampleFormControlInput1' style='width:110px;'>COMMENT</button></div></form></div></div><hr></div></div></div>");
    },
  });
});

//----------------------------------------Reply of comment--------------------------------//

$ ('#save_reply').click (function (e) {
  e.preventDefault ();
  alert('hello');
  var actionUrl = base_url + '/reply/store';
  $.ajax ({
    type: 'POST',
    url: actionUrl,
    data: {'body':$('.body_reply').val(),'post_id':$('.post_id').val(),'comment_id':$('.comment_id').val()},
    success: function (data) {
      console.log(data);
    //   $('.comments').append(data.comment.body);
    },
  });
});
/*---------------------------------------------Rating----------------------------------------------*/

function rating (a, ratenum, product_id) {
  $ ('.fa').removeAttr ('style');
  for (let i = 1; i <= ratenum; i++) {
    //console.log(i)
    $ ('.fa').addClass ('fa fa-star').removeClass ('fa-star-o');

    $ ('.rating_star_' + i).attr ('style', 'color: orange');
  }

  $.ajax ({
    url: base_url + '/rate',
    type: 'post',
    data: {
      rating: ratenum,
      product_id: product_id,
    },
    success: function (data) {
      console.log (data);
    },
  });
}

function getStars(rating, url_value) {
   // Round to nearest half


  rating = Math.round (rating * 2) / 2;
  let output = [];
  let j = 1;
  // Append all the filled whole stars
  for (var i = rating; i >= 1; i--) {
    output.push (
      '<span class="fa fa-star rating_star_' +
        j +
        '" onclick="rating(this,' +
        j +
        ',' +
        url_value +
        ')" aria-hidden="true" style="color: orange; cursor:pointer"></span>&nbsp;'
    );
    j++;
  }

  // If there is a half a star, append it
  if (i == 0.5)
    output.push (
      '<i class="fa fa-star-half-o rating_star_' +
        j +
        '" onclick="rating(this,' +
        j +
        ',' +
        url_value +
        ')" aria-hidden="true" style="color: orange;cursor:pointer"></i>&nbsp;'
    );

  // Fill the empty stars
  for (let i = 3 - rating; i >= 1; i--){
    output.push (
      '<i class="fa fa-star-o rating_star_' +
        j +
        '" aria-hidden="true" onclick="rating(this,' +
        j +
        ',' +
        url_value +
        ')" style="color: orange;cursor:pointer"></i>&nbsp;'
    );
    j++;
 }
  $ ('#stars').html (output.join (''));
}

function reply (a) {
  $ (a).parent ().next ().show ();
}
function likePost (id) {
  $.ajax ({
    url: base_url + '/likePost',
    type: 'post',
    data: {
      contentId: id,
      _token: '{{ csrf_token() }}',
    },
    success: function (result) {
      if (result.bool) {
        $ ('.liked').text (result.like);
        $ ('.disliked').text (result.dislike);
      }
    },
  });
}

function unlikePost (id) {
  $.ajax ({
    url: base_url + '/unlikePost',
    type: 'post',
    data: {
      contentId: id,
      _token: '{{ csrf_token() }}',
    },
    success: function (result) {
      if (result.bool) {
        $ ('.liked').text (result.like);
        $ ('.disliked').text (result.dislike);
      }
    },
  });
}

var rate1 = $ ('#rate1').val ();
$.ajax ({
  url: base_url + '/videodetail',
  type: 'post',
  data: {
    rate1: rate1,
    _token: '{{ csrf_token() }}',
  },
  success: function (data) {
    if (result['success'] === 1) {
      console.log (data);
    } else {
      console.log (data);
    }
  },
});

function reply (a) {
  $ (a).parent ().next ().show ();
}

/*----------------------------------------save video--------------------------------------------*/

function save_video (product_id) {
  toastr.options = {
    closeButton: true,
    newestOnTop: true,
    positionClass: 'toast-top-right',
  };
  $.ajax ({
    url: base_url + '/save_video',
    type: 'post',
    data: {
      product_id: product_id,
      _token: '{{ csrf_token() }}',
    },
    success: function (data) {
      if (data.code == 1) {
        toastr.success (data.message);
      }
    },
  });
}

$ ('form#msform').submit (function (e) {
  toastr.options = {
    closeButton: true,
    newestOnTop: true,
    positionClass: 'toast-top-left',
  };
  e.preventDefault ();
  var formData = new FormData (this);
  $.ajax ({
    url: base_url + '/uploadproduct',
    type: 'POST',
    data: formData,
    xhr: function () {
      $ ('.progress_bar').show ();
      var xhr = new window.XMLHttpRequest ();
      xhr.upload.addEventListener (
        'progress',
        function (element) {
          if (element.lengthComputable) {
            var percentComplete = element.loaded / element.total * 100;
            $ ('#progress-bar').width (percentComplete + '%');
            $ ('#progress-bar').html (percentComplete + '%');
          }
        },
        false
      );
      return xhr;
    },
    success: function (data) {
      console.log (data);
      if ($.isEmptyObject (data.error)) {
        $ ('.progress_bar').hide ();
        toastr.success (data.message);
      } else {
        printErrorMsg (data.error);
      }
    },
    cache: false,
    contentType: false,
    processData: false,
  });
});
