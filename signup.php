<?php
//start session 
session_start();
// include database 
include("db.php");

// check user inputs  
    // Define error messages 
    $missingUsername='<p><strong>Please enter a username!</strong></p>';
    $missingemail = '<p><strong>Please enter your email address!</strong></p>';
    $invalidemail= '<p><strong>Please enter a valid email address!</strong></p>';
    $missingpassword= '<p><strong>Please enter a password!</strong></p>';
    $invalidpassword= '<p><strong>your password should be at least 6 characters long and include one capital letter and one number</strong></p>';
    $differencepassword= '<p><strong>Password don\'t match!</strong></p>';
    $missingpassword2= '<p><strong>Please confirm your password</strong></p>';
    
    // get username, email, password, password2 
    // get username
    if(empty($_POST["username"])){
        $errors .= $missingUsername;
    }else{
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    }
    // get email
    if(empty($_POST["email"])){
        $errors .= $missingemail;
    }else{
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $errors .= $invalidemail;
        }
    }
    // get password
    if(empty($_POST["password"])){
        $errors .= $missingpassword;
    }elseif(!(strlen($_POST["password"]) > 6 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"]))){
        $errors .= $invalidpassword;
    }else{
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        // get password2
        if(empty($_POST["password2"])){
            $errors .= $missingpassword2;
        }else{
            $password2 = filter_var($_POST["password2"], FILTER_SANITIZE_STRING);
            if($password !== $password2){
                $errors .= $differencepassword;
            }
        }
    }
    
    
    // store errors in errors variable 
    // if there are any errors print error 
    if($errors){
        $resultMessage = '<div class="alert alert-danger">'. $errors . '</div>';
        echo $resultMessage;
    }
// no errors 
    // prepare variables for the queries
    $username = mysqli_real_escape_string($link, $username);
    $email = mysqli_real_escape_string($link, $email);
    $password = mysqli_real_escape_string($link, $password);
    $password = md5($password);
    // if username exits in the users table print error 
    $sql = "SELECT * FROM users WHERE 'user_name' = '$username'";

    $result = mysqli_query($link, $sql);

    if(!$result){
        echo'<div class="alert alert-danger">Error running the query </div>'; 

        // echo'<div class="alert alert-danger">'. mysqli_error($link) .'</div>'; 
        
        exit;
    }

    $results = mysqli_num_rows($result);

    if($results){
        echo '<div class="alert alert-danger">The username is already taking</div>';
        exit;
    }
    // else 
    //     if emails exits in the users table print error  

    $sql = "SELECT * FROM users WHERE 'user_email' = '$email'";

    $result = mysqli_query($link, $sql);

    if(!$result){
        echo'<div class="alert alert-danger">Error running the query </div>'; exit;
    }

    $results = mysqli_num_rows($result);

    if($results){
        echo '<div class="alert alert-danger">The email address is already registered. Do you want to log in?</div>';
        exit;
    }

// else 
//  Create a unique activation code
$activation_key = bin2hex(openssl_random_pseudo_bytes(16));
//byte: unit of data = 8 bits
//bit: 0 or 1
// 16 bytes = 16 * 8 = 128 bits


//insert user details and activation code in the users table
$sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`, `activation_pin`) VALUES ('$username', '$email', '$password', '$activation_key')"; 

$result = mysqli_query($link, $sql);

if(!$result){
    echo '<div class="alert alert-danger">Error Inserting user details in the database</div>';
    exit;
}
// Send the user an email with a link to activate.php with their emai and activation code  
$message = 'Please click on this link to activate your account:\n\n';
$message .= "http://localhost/Online_note/activate.php?email=". urlencode($email)."&key=$activation_key";

if(mail($email, 'Confirm your Registration', $message, 'From:'.'developmentOnlineapp@gmail.com')){
    echo "<div class='alert alert-danger'>Thanks for registering: A confirmation email has been sent to $email .Please click on the activation link to activate your account</div>";
}