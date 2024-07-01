        function showToast(message, type = 'success') {
            const toastContainer = document.getElementById('toast-container');
            const toast = document.createElement('div');
            toast.className = `toast ${type}`;
            toast.innerText = message;

            toastContainer.appendChild(toast);

            // Show the toast
            setTimeout(() => {
                toast.classList.add('show');
            }, 100); // Small delay to ensure the element is added before display

            // Remove the toast after it fades out
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.remove();
                }, 500); // Delay to match the fade-out duration
            }, 3000); // Show the toast for 3 seconds
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

    $("#popup-form").unbind("submit").bind("submit", function() {
        let form = new FormData(this);
        $.ajax({
            url: "./php/mailController.php",
            type: "POST",
            data: form,
            dataType: 'json',
            success:function(response) {
                console.log("Success: ", response)
                if(response.success) {
                    $("#popup-form")[0].reset();
                } else {
                    $("#popup-form")[0].reset();
                }
            },
            error: function(response) {
                console.log("Error: ", response);
                $("#popup-form")[0].reset();

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
});



