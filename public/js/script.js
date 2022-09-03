/**-----------------------------------------JS---------------------------------------------------- */
var base_url = "http://localhost/jetstream";
function likePost(id)
{
     $.ajax
     ({
         url: base_url+'/likePost',
         type: 'post',
         data:{
            "contentId":id,
             "_token":"{{ csrf_token() }}"
         },
             success: function(result)
             {
                if(result.bool){
                    $('.liked').text(result.like)
                    $('.disliked').text(result.dislike)
                }
             }
       })
  }

function unlikePost(id){
 $.ajax
 ({
     url: base_url+'/unlikePost',
     type: 'post',
     data:{
         "contentId":id,
         "_token":"{{ csrf_token() }}"
     },
         success: function(result)
         {
            if(result.bool){
                $('.liked').text(result.like)
                $('.disliked').text(result.dislike)
            }
         }
 });
}
function reply(a){
 $(a).parent().next().show();
}

function save_video(product_id){
    $.ajax
    ({
        url: base_url+'/save_video',
        type: 'post',
        data:{
           "product_id":product_id,
            "_token":"{{ csrf_token() }}"
        },
            success: function(data)
            {
                if(data.bool){
                    alert(data.message)
                }
            }
    });
}
