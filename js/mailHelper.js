
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
        $("#popupForm").unbind("submit").bind("submit", function() {

            let name = $("#name").val();
            let email = $("#email").val();
            let phone = $("#tel").val();
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
                $("#tel").after('<p class="text-danger"> Phone field is required</p>');
                $('#tel').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#tel").find('.text-danger').remove();
                $("#tel").closest('.form-group').addClass('has-success');
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
                    type: "popupForm"
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
                            $("#exampleModal").modal('hide');
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
            let collaboration = $("#Collaboration").val();
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
            if (collaboration == "") {
                $("#Collaboration").after('<p class="text-danger">Collaboration field is required</p>');
                $('#Collaboration').closest('.form-group').addClass('has-error');
                isValid = false;
            } else {
                $("#Collaboration").siblings('.text-danger').remove();
                $("#Collaboration").closest('.form-group').addClass('has-success');
            }	

            if(isvalid != false) {

                let formData = {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,
                    state:state,
                    city:city,
                    collaboration: collaboration,
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

        //brochure form start
        $("#brochureForm").unbind("submit").bind("submit", function() {

            console.log("iopp");
            $(".text-danger").remove();
            let nameone = $("#nameone").val();
            let telone = $("#telone").val();
            let emailone = $("#emailone").val();
            let isvalid = true;

            if(nameone == "") {
                $("#nameone").after('<p class="text-danger"> Name field is required</p>');
                $('#nameone').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#nameone").find('.text-danger').remove();
                $("#nameone").closest('.form-group').addClass('has-success');
            }	

            if(emailone == "") {
                $("#emailone").after('<p class="text-danger"> Email field is required</p>');
                $('#emailone').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#emailone").find('.text-danger').remove();
                $("#emailone").closest('.form-group').addClass('has-success');
            }	


            if(isvalid != false) {

                let formData = {
                    nameone: nameone,
                    emailone: emailone,
                    telone: telone,
                    type: "brochureForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#brochureForm")[0].reset();
                            $("#downloadModal").modal('hide');
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#brochureForm")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#brochureForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //brochure form end

        //brochure 2 form start
        $("#brochuretwoForm").unbind("submit").bind("submit", function() {

            $(".text-danger").remove();
            let nametwo = $("#nametwo").val();
            let teltwo = $("#teltwo").val();
            let emailtwo = $("#emailtwo").val();
            let isvalid = true;

            if(nametwo == "") {
                $("#nametwo").after('<p class="text-danger"> Name field is required</p>');
                $('#nametwo').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#nametwo").find('.text-danger').remove();
                $("#nametwo").closest('.form-group').addClass('has-success');
            }	

            if(emailtwo == "") {
                $("#emailtwo").after('<p class="text-danger"> Email field is required</p>');
                $('#emailtwo').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#emailtwo").find('.text-danger').remove();
                $("#emailtwo").closest('.form-group').addClass('has-success');
            }	


            if(isvalid != false) {

                let formData = {
                    nametwo: nametwo,
                    teltwo: teltwo,
                    emailtwo: emailtwo,
                    type: "brochuretwoForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#brochuretwoForm")[0].reset();
                            $("#download2Modal").modal('hide');
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#brochuretwoForm")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#brochuretwoForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //brochure form end

        //brochure 3 form start
        $("#brochurethreeForm").unbind("submit").bind("submit", function() {

            console.log("iopp");
            $(".text-danger").remove();
            let namethree = $("#namethree").val();
            let telthree = $("#telthree").val();
            let emailthree = $("#emailthree").val();
            let isvalid = true;

            if(namethree == "") {
                $("#namethree").after('<p class="text-danger"> Name field is required</p>');
                $('#namethree').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#namethree").find('.text-danger').remove();
                $("#namethree").closest('.form-group').addClass('has-success');
            }	

            if(emailthree == "") {
                $("#emailthree").after('<p class="text-danger"> Email field is required</p>');
                $('#emailthree').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#emailthree").find('.text-danger').remove();
                $("#emailthree").closest('.form-group').addClass('has-success');
            }	


            if(isvalid != false) {

                let formData = {
                    namethree: namethree,
                    telthree: telthree,
                    emailthree: emailthree,
                    type: "brochurethreeForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#brochurethreeForm")[0].reset();
                            $("#download3Modal").modal('hide');
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#brochure3Form")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#brochurethreeForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //brochure form end

        //brochure 4 form start
        $("#brochurefourForm").unbind("submit").bind("submit", function() {

            console.log("iopp");
            $(".text-danger").remove();
            let namefour = $("#namefour").val();
            let telfour = $("#telfour").val();
            let emailfour = $("#emailfour").val();
            let isvalid = true;

            if(namefour == "") {
                $("#namefour").after('<p class="text-danger"> Name field is required</p>');
                $('#namefour').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#namefour").find('.text-danger').remove();
                $("#namefour").closest('.form-group').addClass('has-success');
            }	

            if(emailfour == "") {
                $("#emailfour").after('<p class="text-danger"> Email field is required</p>');
                $('#emailfour').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#emailfour").find('.text-danger').remove();
                $("#emailfour").closest('.form-group').addClass('has-success');
            }	


            if(isvalid != false) {

                let formData = {
                    namefour: namefour,
                    telfour: telfour,
                    emailfour: emailfour,
                    type: "brochurefourForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#brochurefourForm")[0].reset();
                            $("#download4Modal").modal('hide');
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#brochure4Form")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#brochurefourForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //brochure form end
        
        //brochure 4 form start
        $("#brochurefourForm").unbind("submit").bind("submit", function() {

            console.log("iopp");
            $(".text-danger").remove();
            let namefour = $("#namefour").val();
            let telfour = $("#telfour").val();
            let emailfour = $("#emailfour").val();
            let isvalid = true;

            if(namefour == "") {
                $("#namefour").after('<p class="text-danger"> Name field is required</p>');
                $('#namefour').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#namefour").find('.text-danger').remove();
                $("#namefour").closest('.form-group').addClass('has-success');
            }	

            if(emailfour == "") {
                $("#emailfour").after('<p class="text-danger"> Email field is required</p>');
                $('#emailfour').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#emailfour").find('.text-danger').remove();
                $("#emailfour").closest('.form-group').addClass('has-success');
            }	


            if(isvalid != false) {

                let formData = {
                    namefour: namefour,
                    telfour: telfour,
                    emailfour: emailfour,
                    type: "brochurefourForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#brochurefourForm")[0].reset();
                            $("#download4Modal").modal('hide');
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#brochure4Form")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#brochurefourForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //brochure form end

        //brochure 5 form start
        $("#brochurefiveForm").unbind("submit").bind("submit", function() {

            console.log("iopp");
            $(".text-danger").remove();
            let namefive = $("#namefive").val();
            let telfive = $("#telfive").val();
            let emailfive = $("#emailfive").val();
            let isvalid = true;

            if(namefour == "") {
                $("#namefive").after('<p class="text-danger"> Name field is required</p>');
                $('#namefive').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#namefive").find('.text-danger').remove();
                $("#namefive").closest('.form-group').addClass('has-success');
            }	

            if(emailfour == "") {
                $("#emailfive").after('<p class="text-danger"> Email field is required</p>');
                $('#emailfive').closest('.form-group').addClass('has-error');
                isvalid = false
            }	else {
                $("#emailfive").find('.text-danger').remove();
                $("#emailfive").closest('.form-group').addClass('has-success');
            }	


            if(isvalid != false) {

                let formData = {
                    namefive: namefive,
                    telfive: telfive,
                    emailfive: emailfive,
                    type: "brochurefiveForm"
                }

                $.ajax({
                    url: "./php/mailController.php",
                    data: formData,
                    type: "post",
                    dataType: "json",
                    success: function(params) {
                        if(params.success) {
                            
                            showToast('Form submitted successfully!', 'success');
                            $("#brochurefiveForm")[0].reset();
                            $("#download5Modal").modal('hide');
                        }
                        else {
                            showToast(`Error: ${params.message}`, 'error');
                            $("#brochure5Form")[0].reset();
                        }
                    },
                    error: function(params) {
                        showToast('Please fill all the field');
                        $("#brochurefiveForm")[0].reset();
                        console.log("ERROR: ", params);
                    }
                })
            }
            else {
                console.log("Please fill out all the required fields...!","error")
            }
            return false;
        });
        //brochure form end
        
});

