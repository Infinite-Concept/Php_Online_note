//Ajax Call for the sign up form
//once the form is submitted
$('#signupform').submit(function(event){
    //prevent default php processing
    event.preventDefault();

    //collect user inputs
    let datatoPost = $(this).serializeArray();

    console.log(datatoPost);

    //send them to signup.php using ajax
    $.ajax({
        url: "signup.php",
        type: "POST",
        data: datatoPost,
        //AJAX call successful: show error or success message
        success: function(data){
            if(data){
                $("#signupmessage").html(data)
            }
        },
        //AJAX call fails: show Ajax call error
        error: function(){
            $("#signupmessage").html("<div class='alert alert-danger'>there was an error </div>")
        }
    });
})
  

//Ajax call for the login form
// once the form is submitted
    //prevent default php processing
    //collect user inputs
    //send them to login.php using ajax
        //Ajax call successful 
            //if php files "success": redirect the user to notes page
            // otherwise show error message
        //AJAX call fails: show Ajax call error

//Ajax Call for the forgot password form
//once the form is submitted
    //prevent default php processing
    //collect user inputs
    //send them to login.php using ajax
        //AJAX call successful: show error or success message
        //AJAX call fails: show Ajax call error
