
function likePost(id)
{
    console.log(id) ;return false;
    
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
                 console.log(result)
// 
//                 $.ajax({
//                     type:'post',
//                     url:'http://localhost/jetstream/likePost',
//                     data:{
//                         "_token": "{{ csrf_token() }}",
//                         "contentId":id
//                     },
//                     success : function (data){
//                         console.log(data)
//                         // info();
// 
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

