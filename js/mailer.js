        function showToast(message, type = 'success') {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            toast.innerText = message;

            toastContainer.appendChild(toast);

            // Show the toast
            setTimeout(() => {
                toast.classList.add('show');
            }, 100);

            // Remove the toast after it fades out
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.remove();
                }, 500); 
            }, 3000); 
        }

    $(document).ready(function () {
    $("#contactForm").unbind("submit").bind("submit", function(event) {

        let form = new FormData(this);
        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                console.log("Success Response: ", response);
                if(response.success) {
                    $("#contactForm")[0].reset();
                    console.log("Form Reset Successful");

                } else {
                    $("#contactForm")[0].reset();
                }
            },
            error: function(response) {
                console.log("Error Response: ", response);
            }
        });

        return false;
    });

    $("#popupForm").unbind("submit").bind("submit", function() {
        let form = new FormData(this);
        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            dataType: 'json',
            success:function(response) {
                console.log("Success: ", response)
                if(response.success) {
                    $("#popupForm")[0].reset();
                } else {
                    $("#popupForm")[0].reset();
                }
            },
            error: function(response) {
                console.log("Error: ", response);
                $("#popupForm")[0].reset();

            }
        });
    
        return false;
    
    });
    
    $("#franchiseForm").unbind("submit").bind("submit", function() {
        let form = new FormData(this);
        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            dataType: 'json',
            success:function(response) {
                console.log("Success: ", response)
                if(response.success) {
                    $("#franchiseForm")[0].reset();
                } else {
                    $("#franchiseForm")[0].reset();

                }
            },
            error: function(response) {
                console.log("Error: ", response)
                $("#franchiseForm")[0].reset();
            }
        });
    
        return false;
    
    });
    
    //brochure one
    $("#brochureForm").unbind("submit").bind("submit", function(event) {
        event.preventDefault();

        let form = new FormData(this);

        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                console.log("Success: ", response);
                if(response.success) {
                    showToast('Form submitted successfully!', 'success');
                    $("#brochureForm")[0].reset();
                } else {
                    showToast(`Error: ${response.message}`, 'error');
                }
            },
            error: function(response) {
                showToast('Failed to submit form. Please try again later.', 'error');
                console.log("Error: ", response);
            }
        });
    });

    //brochure two
    $("#brochuretwoForm").unbind("submit").bind("submit", function(event) {
        event.preventDefault();

        let form = new FormData(this);

        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                console.log("Success: ", response);
                if(response.success) {
                    showToast('Form submitted successfully!', 'success');
                    $("#brochuretwoForm")[0].reset();
                } else {
                    showToast(`Error: ${response.message}`, 'error');
                }
            },
            error: function(response) {
                showToast('Failed to submit form. Please try again later.', 'error');
                console.log("Error: ", response);
            }
        });
    });

    //brochure three
    $("#brochurethreeForm").unbind("submit").bind("submit", function(event) {
        event.preventDefault();

        let form = new FormData(this);

        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            processData: false,
            contentType: false,
            dataType: 'json',
            success: function(response) {
                console.log("Success: ", response);
                if(response.success) {
                    showToast('Form submitted successfully!', 'success');
                    $("#brochurethreeForm")[0].reset();
                } else {
                    showToast(`Error: ${response.message}`, 'error');
                }
            },
            error: function(response) {
                showToast('Failed to submit form. Please try again later.', 'error');
                console.log("Error: ", response);
            }
        });
    });

});



