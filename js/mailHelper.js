
$(document).ready(function () {
   
    // Form submission aciton 
    // $("#contactFormSubmitBtn").unbind('click').bind( 'click', function () {

       
        
        // Track data form reset
        $("#contactForm")[0].reset();

        // remove text-error
        $(".text-danger").remove();
        
        // remove from-group error
        $(".form-group").removeClass('has-error').removeClass('has-success');

        $("#contactForm").unbind("submit").bind("submit", function() {

            console.log("iopp");

            // reset the error messages for all the form fields
            $(".text-danger").remove();

            let name = $("#name").val();
            let email = $("#email").val();
            let phone = $("#phone").val();
            let state = $("#state").val();
            let city = $("#city").val();
            let message = $("#message").val();
            let isvalid = true;

            if(name == "") {
                $("#name").after('<p class="text-danger"> Name field is required</p>');
                $('#name').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                // remov error text field
                $("#name").find('.text-danger').remove();
                // success out for form
                $("#name").closest('.form-group').addClass('has-success');
            }	// /else

            if(email == "") {
                $("#email").after('<p class="text-danger"> Email field is required</p>');
                $('#email').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                // remov error text field
                $("#email").find('.text-danger').remove();
                // success out for form
                $("#email").closest('.form-group').addClass('has-success');
            }	// /else

            if(phone == "") {
                $("#phone").after('<p class="text-danger"> Phone field is required</p>');
                $('#phone').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                // remov error text field
                $("#phone").find('.text-danger').remove();
                // success out for form
                $("#phone").closest('.form-group').addClass('has-success');
            }	// /else
            if(state == "") {
                $("#state").after('<p class="text-danger"> state field is required</p>');
                $('#state').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                // remov error text field
                $("#state").find('.text-danger').remove();
                // success out for form
                $("#state").closest('.form-group').addClass('has-success');
            }	// /else
            if(city == "") {
                $("#city").after('<p class="text-danger"> city field is required</p>');
                $('#city').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                // remov error text field
                $("#city").find('.text-danger').remove();
                // success out for form
                $("#city").closest('.form-group').addClass('has-success');
            }	// /else

            if(isvalid != false) {

                let formData = {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    state:state,
                    city:city,
                    type: "contactForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    // cache: false,
                    // contentType: false,
                    // processData: true,
                    success: function(params) {
                        if(params.success) {
                            
                            customToast(params.message,"success")
                            $("#contactForm")[0].reset();
                            $("html, body, div.modal, div.modal-content, div.modal-body").animate({scrollTop: '0'}, 100);
                        }
                        else {
                            console.log("Error in succ ", params.message);
                            customToast(params.message,"error")
                        }
                    },
                    error: function(params) {
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                customToast("Please fill out all the required fields...!","error")
            }
            
            return false;

        });
    
    // }); // /ajax fucntion to remove the product

});