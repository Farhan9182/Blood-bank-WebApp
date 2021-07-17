
!(function ($) {
    "use strict";

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function (e) {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        if (check == true) {
            e.preventDefault();
            var this_form = $(this);
            var data = this_form.serialize();

            var accType = document.getElementById('account-type').value;

            if(accType.localeCompare("Receiver") == 0){
                $.ajax({
                    type: 'POST',
                    url: 'database/receiverLogin.php',
                    data: data,
                    
                    success: function (response) {
                        if (response.type == "Error") {
                            alert(response.message);
                        }
                        else {
                            window.location.href = response.url;
                        }
                    }
                }).fail(function(error){
                    console.log(error);
                })
            }
            else{
                $.ajax({
                    type: 'POST',
                    url: 'database/hospitalLogin.php',
                    data: data,
                    
                    success: function (response) {
                        if (response.type == "Error") {
                            alert(response.message);
                        }
                        else {
                            window.location.href = response.url;
                        }
                    }
                }).fail(function(error){
                    console.log(error);
                })
            }

            
        }
        
        return check;

    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }



})(jQuery);