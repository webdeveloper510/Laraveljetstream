

function likePost(id)
{    
     $.ajax 
     ({ 
         url: 'http://localhost/Laraveljetstream/likePost',
         type: 'post',
         data:{
            "contentId":id,
             "_token":"{{ csrf_token() }}"
         },
             success: function(result)
             {
                $('.liked').text(result.like)
                $('.disliked').text(result.dislike)
             }
     });
}  
 function unlikePost(id){
 console.log(id)
 $.ajax 
 ({ 
     url: 'http://localhost/Laraveljetstream/unlikePost',
     type: 'post',
     data:{
         "contentId":id,
         "_token":"{{ csrf_token() }}"
     },
         success: function(result)
         {
             console.log(result)
         }
 });
 } 

 $(function () {
     // Owl Carousel
     var owl = $(".owl-carousel");
     owl.owlCarousel({
         items: 3,
         margin: 10,
         loop: true,
         nav: true
     });
 });


