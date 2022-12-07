var base_url = 'http://localhost/jetstream';
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

/*---------------------------------------------Rating----------------------------------------------*/

function rating (a, ratenum, product_id) {
    console.log('Now I am here !');
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

function getStars (rating, url_value) {

  console.log("Mai aya hu" + rating)
  // Round to nearest half
  rating = Math.round (rating * 2) / 2;
  let output = [];
  let j = 1;
  // Append all the filled whole stars
  for (var i = rating; i >= 1; i--) {
    output.push (
      '<i class="fa fa-star rating_star_' +
        j +
        '" onclick="rating(this,' +
        j +
        ',' +
        url_value +
        ')" aria-hidden="true" style="color: orange; cursor:pointer"></i>&nbsp;'
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
