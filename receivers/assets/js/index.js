!(function ($) {
    "use strict";

    $(document).on('click', '.deleteRequestBtn', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
          type: 'POST',
          url: '../database/deleteRequest.php',
          data: {id:id},
          dataType: 'text',
          success: function(response){
            if(response == "success"){
              alert("Deleted successfully");
              window.location.href = "index.php";
            }  
            else{
              alert(response);
            }  
          }
        });
      });


})(jQuery);