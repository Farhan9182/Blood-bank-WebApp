!(function ($) {
    "use strict";

    $(document).on('click', '.completeRequestBtn', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
          type: 'POST',
          url: '../database/completeRequest.php',
          data: {id:id},
          dataType: 'text',
          success: function(response){
            if(response == "success"){
              alert("Marked as complete");
              window.location.href = "index.php";
            }  
            else{
              alert(response);
            }  
          }
        });
      });
      
      $('#updateForm').submit(function(e) {
        e.preventDefault();
        var this_form = $(this);
        var data = this_form.serialize();
        $.ajax({
          type: 'POST',
          url: '../database/updateSupply.php',
          data: data,
          dataType: 'text',
          success: function(response){
            if(response == "success"){
              alert("Updated Successfully");
              window.location.href = "manage.php";
            }  
            else{
              alert(response);
            }  
          }
        });
      });

})(jQuery);