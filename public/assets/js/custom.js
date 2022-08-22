    function submitajax(event){
            $.ajax({

                type:'post',
                url:'',
                data:{
                    
                },
                success: function (data){
                    var result = JSON.parse(data);                    
                }

            })
        }
