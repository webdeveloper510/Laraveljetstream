var base_url ="http://localhost/jetstream"
function subscribe(channel_id,flag){
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };
    $.ajax
    ({
        url: base_url+'/subscribe',
        type: 'post',
        data:{
           "channel_id":channel_id,
           "count":1,
            "_token":"{{ csrf_token() }}",
            flag:flag
        },
            success: function(data)
            {
                console.log(data)
               if(data.code){
                toastr.success(data.message);
               }
               if(data.code==1){
               
                // show like button
                $('.subscribe').hide();
                $('.subscribes').show();
                }
                else{
                    $('.subscribe').show();
                    $('.subscribes').hide();
                    
                }
            }
    });

}


function reply(a){

$(a).parent().next().show();


}

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
     });
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
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
      };
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
                if(data.code==1){
                    toastr.success(data.message);
                   }
            }
    });


}

