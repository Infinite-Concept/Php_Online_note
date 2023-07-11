<!-- start session -->
<!-- connect to thr database -->

<!-- check user inputs  -->
    <!-- Define error messages -->
    <!-- get email and password -->
    <!-- store errors in errors variable -->
    <!-- if there are any errors -->
        <!-- print error message -->
    <!-- else: no errors -->
        <!-- prepare variables for the queries -->
        <!-- Run query: check combination of email & password exits -->
        <!-- if email & password don't match print error -->
        <!-- else -->
            <!-- log the user in: set session variables -->
            <!-- if remember me is not checked-->
                <!-- print "success" -->
            <!-- else -->
                <!-- Create two variables $authentificator1 and $authentificator2 -->
                <!-- stoes them in a cookie -->
                <!-- Run query to store them in a remember me table -->
                <!-- if query unsuccessful -->
                    <!-- print error -->
                <!-- else -->
                <!-- print "success" -->