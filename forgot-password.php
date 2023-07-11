<!-- start session -->
<!-- connect to thr database -->

<!-- check user inputs  -->
    <!-- Define error messages -->
    <!-- get email -->
    <!-- store errors in errors variable -->
    <!-- if there are any errors -->
        <!-- print error message -->
    <!-- else: no errors -->
        <!-- prepare variables for the queries -->
        <!-- Run query to check if the email exits in the users table -->
        <!-- if the email does not exits -->
            <!-- print error message -->
        <!-- else -->
            <!-- get the user_id -->
            <!-- create a unique activation code-->
            <!-- insert user details and activation code in the forgotpassword table -->
            <!-- send email with link to resetpassword.php with user id and activation code -->
            <!-- if emails sent successfully -->
                <!-- print success message -->