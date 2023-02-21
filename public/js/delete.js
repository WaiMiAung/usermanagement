$(document).ready(function () {

    $("body").on("click",".deleteDoctor",function(e){
    
       if(!confirm("Do you really want to do this?")) {
          return false;
        }
    
       e.preventDefault();
       var id = $(this).data("id");
       // var id = $(this).attr('data-id');
       var token = $("meta[name='csrf-token']").attr("content");
       var row=$(this).parents('tr');
       var url = e.target;
    
       $.ajax(
           {
             //url: url.href, //or you can use url: "doctor/"+id,
             url: "doctor/"+id,
             type: 'post',
             data: {
               _token: token,
               _method:"delete",
                   id: id
           },
           success: function (response){
    
               $("#success").html(response.message)
               
               Swal.fire(
                 'Remind!',
                 'Doctor deleted successfully!',
                 'success'
               )
              
               row.fadeOut();
              
           }
        });
         return false;
      });
       
    
    });