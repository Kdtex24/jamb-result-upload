$(function(){

    $('#example23').dataTable();
    $('#uploadForm').submit(function(event){
        event.preventDefault();
        var fullname = $('#fullname').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var reg_no = $('#reg_no').val();
        var profile_code = $('#profile_code').val();
        var file = $('#file').val();

        if(fullname.length <= 0){
            swal("Error!!!", "name can not be empty", "error");
        }else if(email.length <= 0){
            swal("Error!!!", "email can not be empty", "error");
        }else if(phone.length <= 0){
            swal("Error!!!", "phone number can not be empty", "error");
        }else if(reg_no.length <= 0){
            swal("Error!!!", "reg no can not be empty", "error");
        }else if(profile_code.length <= 0){
            swal("Error!!!", "profile code can not be empty", "error");
        }else if(file.length <= 0){
            swal("Error!!!", "age can not be empty", "error");
        }else{
            $.ajax({
                url: "backend/process",
                method: 'POST',
                cache: false,
                dataType: 'JSON',
                data: {fullname: fullname, email: email, phone: phone, reg_no: reg_no, profile_code: profile_code, file: file},
                beforeSend: function(xhr){
                    $('#uploadBtn').html('<i class="fa fa-refresh fa-spin"> </i> uploading');
                    $('#uploadBtn').attr("disalbed", false);
                },
                success: function(data, textStatus, jqXHR){
                    if(data.success === true){
                        swal("Success!!!", fullname + ", you have Successfully Uploaded Your Documents, Our Admin will get to you soon.", "success").then(function(){
                            console.log("DOnmeeee");
                            window.location.href = "index";
                        });
                        $('#uploadBtn').html('<i class="fa fa-sign-in"> </i> Upload');
                    }else{
                        $('#uploadBtn').html('<i class="fa fa-sign-in"> </i> Upload');
                        $('#uploadBtn').removeAttr("disabled");
                        swal("Error!!!", email + " exist already, try another!", "error");
                    }
                },
                error: function(){
                    $('#uploadBtn').html('<i class="fa fa-sign-in"> </i> Upload');
                    $('#uploadBtn').removeAttr("disabled");
                    swal("Error!!!", "Please refresh this page and try again!!!", "error");
                }
            });
        }
    });

    $('.removeBtn').click(function(){
        var email = $(this).attr('email');
        var button = $(this);
        $.ajax({
            url: "backend/process",
            method: 'POST',
            cache: false,
            dataType: 'JSON',
            data: {delete: "true", email: email},
            beforeSend: function(xhr){
                button.html('<i class="fa fa-refresh fa-spin"></i> Removing...');
                button.attr("disabled", true);
            },
            success: function(data, textStatus, jqXHR){
                if(data.success === true){
                    button.html('<i class="fa fa-trash"> </i> Removed');
                }else{
                    button.removeAttr("disabled");
                    button.html('<i class="fa fa-trash"> </i> Error, try again!');
                }
            },
            error: function(){
                button.removeAttr("disabled");
                button.html('<i class="fa fa-trash"> </i> Error, try again!');
            }
        });
    });
    $('.approveBtn').click(function(){
        var email = $(this).attr('email');
        var button = $(this);
        $.ajax({
            url: "backend/process",
            method: 'POST',
            cache: false,
            dataType: 'JSON',
            data: {approve: "true", email: email},
            beforeSend: function(xhr){
                button.html('<i class="fa fa-refresh fa-spin"></i> Approving...');
                button.attr("disabled", true);
            },
            success: function(data, textStatus, jqXHR){
                if(data.success === true){
                    button.html('<i class="fa fa-check"> </i> Approved');
                }else{
                    button.removeAttr("disabled");
                    button.html('<i class="fa fa-check"> </i> Error, try again!');
                }
            },
            error: function(){
                button.removeAttr("disabled");
                button.html('<i class="fa fa-check"> </i> Error, try again!');
            }
        });
    });

});

