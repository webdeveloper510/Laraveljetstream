{
    $.ajax
    ({
        url: 'http://localhost/jetstream/videodetail/{id}',
        type: 'post',
        data:{
           "product_id":id,
           "user_id":id,
            "_token":"{{ csrf_token() }}"
        },
            success: function(data)
            {
                alert("Data was succesfully captured");
            }
    });
}
