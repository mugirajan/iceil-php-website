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
                    $('.mail-messages').html('<div class="alert alert-success">'+
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.message +
                    '</div>');

                    $(".alert-success").delay(100).show(10, function() {
                        $(this).delay(3000).hide(10, function() {
                            $(this).remove();
                        });
                    }); 

                    // Reset the form after successful submission
                    $("#contactForm")[0].reset();
                    console.log("Form Reset Successful");

                } else {
                    $("#contactForm")[0].reset();
                    $('.mail-messages').html('<div class="alert alert-danger">'+
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.message +
                    '</div>');

                    $(".alert-danger").delay(100).show(10, function() {
                        $(this).delay(3000).hide(10, function() {
                            $(this).remove();
                        });
                    });
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
                    $('.mail-messages').html('<div class="alert alert-success">'+
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.message +
                    '</div>');
    
                    $(".alert-success").delay(100).show(10, function() {
                        $(this).delay(3000).hide(10, function() {
                            $(this).remove();
                        });
                    }); 
                    $("#popup-form")[0].reset();
                } else {
                    $('.mail-messages').html('<div class="alert alert-danger">'+
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.message +
                    '</div>');
    
                    $(".alert-danger").delay(100).show(10, function() {
                        $(this).delay(3000).hide(10, function() {
                            $(this).remove();
                        });
                    });
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
                    $('.mail-messages').html('<div class="alert alert-success">'+
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.message +
                    '</div>');
    
                    $(".alert-success").delay(100).show(10, function() {
                        $(this).delay(3000).hide(10, function() {
                            $(this).remove();
                        });
                    }); 
                    $("#franchiseForm")[0].reset();
                } else {
                    $('.mail-messages').html('<div class="alert alert-danger">'+
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
                        '<strong><i class="glyphicon glyphicon-ok-sign"></i></strong> '+ response.message +
                    '</div>');
    
                    $(".alert-danger").delay(100).show(10, function() {
                        $(this).delay(3000).hide(10, function() {
                            $(this).remove();
                        });
                    });
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



