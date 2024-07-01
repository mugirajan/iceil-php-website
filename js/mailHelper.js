
$(document).ready(function () {

        //contact form start
        $("#contactForm").unbind("submit").bind("submit", function() {

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
                $("#name").find('.text-danger').remove();
                $("#name").closest('.form-group').addClass('has-success');
            }	

            if(email == "") {
                $("#email").after('<p class="text-danger"> Email field is required</p>');
                $('#email').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#email").find('.text-danger').remove();
                $("#email").closest('.form-group').addClass('has-success');
            }	

            if(phone == "") {
                $("#phone").after('<p class="text-danger"> Phone field is required</p>');
                $('#phone').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#phone").find('.text-danger').remove();
                $("#phone").closest('.form-group').addClass('has-success');
            }	
            if(state == "") {
                $("#state").after('<p class="text-danger"> state field is required</p>');
                $('#state').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#state").find('.text-danger').remove();
                $("#state").closest('.form-group').addClass('has-success');
            }	
            if(city == "") {
                $("#city").after('<p class="text-danger"> city field is required</p>');
                $('#city').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#city").find('.text-danger').remove();
                $("#city").closest('.form-group').addClass('has-success');
            }	

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
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#contactForm")[0].reset();
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            console.log("Error in succ ", params.message);
                        }
                    },
                    error: function(params) {
                        showToast("Please fill out all the required fields!", 'error');
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
         //contact form end

        //popup form start
        $("#popup-form").unbind("submit").bind("submit", function() {

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
                $("#name").find('.text-danger').remove();
                $("#name").closest('.form-group').addClass('has-success');
            }	

            if(email == "") {
                $("#email").after('<p class="text-danger"> Email field is required</p>');
                $('#email').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#email").find('.text-danger').remove();
                $("#email").closest('.form-group').addClass('has-success');
            }	

            if(phone == "") {
                $("#phone").after('<p class="text-danger"> Phone field is required</p>');
                $('#phone').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#phone").find('.text-danger').remove();
                $("#phone").closest('.form-group').addClass('has-success');
            }	
            if(state == "") {
                $("#state").after('<p class="text-danger"> state field is required</p>');
                $('#state').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#state").find('.text-danger').remove();
                $("#state").closest('.form-group').addClass('has-success');
            }	
            if(city == "") {
                $("#city").after('<p class="text-danger"> city field is required</p>');
                $('#city').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#city").find('.text-danger').remove();
                $("#city").closest('.form-group').addClass('has-success');
            }	

            if(isvalid != false) {

                let formData = {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    state:state,
                    city:city,
                    type: "popup-form"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            showToast('Form submitted successfully!', 'success');
                            $("#popupForm")[0].reset();
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#popupForm")[0].reset();
                            console.log("Error in succ ", params.message);
                        }
                    },
                    error: function(params) {
                        showToast('please fill all the fields');
                        $("#popupForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //popup form end

         //popup form start
         $("#franchiseForm").unbind("submit").bind("submit", function() {

            console.log("iopp");
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
                $("#name").find('.text-danger').remove();
                $("#name").closest('.form-group').addClass('has-success');
            }	

            if(email == "") {
                $("#email").after('<p class="text-danger"> Email field is required</p>');
                $('#email').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#email").find('.text-danger').remove();
                $("#email").closest('.form-group').addClass('has-success');
            }	

            if(phone == "") {
                $("#phone").after('<p class="text-danger"> Phone field is required</p>');
                $('#phone').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#phone").find('.text-danger').remove();
                $("#phone").closest('.form-group').addClass('has-success');
            }	
            if(state == "") {
                $("#state").after('<p class="text-danger"> state field is required</p>');
                $('#state').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#state").find('.text-danger').remove();
                $("#state").closest('.form-group').addClass('has-success');
            }	
            if(city == "") {
                $("#city").after('<p class="text-danger"> city field is required</p>');
                $('#city').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#city").find('.text-danger').remove();
                $("#city").closest('.form-group').addClass('has-success');
            }	

            if(isvalid != false) {

                let formData = {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    state:state,
                    city:city,
                    type: "franchiseForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#franchiseForm")[0].reset();
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#franchiseForm")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#franchiseForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //popup form end

});

