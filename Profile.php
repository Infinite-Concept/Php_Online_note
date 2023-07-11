<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Note</title>

    <!-- Bootstrap -->
    <link href="./bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styling -->
    <link rel="stylesheet" href="index.css">
    <style>
        #container{
            margin-top: 100px;
        }
        #allNotes, #notepad, #done{
            display: none;
        }
        .buttons{
            margin-bottom: 20px;
        }
        textarea{
            width: 100%;
            max-width: 100%;
            font-size: 16px;
            line-height: 1.5em;
            border-left-width: 20px;
            border-color: #CA3DD9;
            color: #CA3DD9;
            background-color: #FBEFFF;      
            padding: 10px; 
        }
        tr{
            cursor: pointer;
        }
    </style>

  <body>

  <!-- Navigation Bar -->
  <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand">Online Notes</a>
            
            <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                <span class="sr-only">Toggle nagivation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="navbar-collapse collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li><a href="">Profile</a></li>
                <li><a href="">Help</a></li>
                <li><a href="">Contact</a></li>
                <li class="active"><a href="">My Notes</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Logged in as <b>username</b></a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </div>
    </div>
  </nav>

  <!-- container -->
  <div class="container" id="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h2>General Account Settings:</h2>

            <div class="table-responsive">
                <table class="table table-hover table-condensed table-bordered">
                    <tr data-target="#updateUsername" data-toggle="modal">
                        <td>Username:</td>
                        <td>Value</td>
                    </tr>

                    <tr data-target="#updateemail" data-toggle="modal"> 
                        <td>Email</td>
                        <td>Values</td>
                    </tr>

                    <tr data-target="#updatepassword" data-toggle="modal">
                        <td>Password</td>
                        <td>Hidden</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
  </div>

    <!-- update username Form -->

    <form action="" method="post" id="updateUsernameform">

        <div class="modal" id="updateUsername" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Edit Username:
                        </h4>
                    </div>
                    <div class="modal-body">

                        <!-- Login message error -->
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" maxlength="30" class="form-control" id="username" value="username">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="updateusername" class="btn green" value="Submit">
                        <button class="btn btn-default" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>

     <!-- update email Form -->

    <form action="" method="post" id="updateemailform">

        <div class="modal" id="updateemail" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Enter new email:
                        </h4>
                    </div>
                    <div class="modal-body">

                        <!-- Login message error -->
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" maxlength="50" class="form-control" id="email" value="email">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="updateusername" class="btn green" value="Submit">
                        <button class="btn btn-default" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- update password Form -->

    <form action="" method="post" id="updatepasswordform">

        <div class="modal" id="updatepassword" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">
                            &times;
                        </button>
                        <h4 id="myModalLabel">
                            Enter Current and New Password:
                        </h4>
                    </div>
                    <div class="modal-body">

                        <!-- Login message error -->
                        <div id="loginmessage"></div>

                        <div class="form-group">
                            <label for="currentpassword" class="sr-only">Your Current Password:</label>
                            <input type="password" name="currentpassword" maxlength="30" class="form-control" id="currentpassword" placeholder="Your Current Password">
                        </div>

                        <div class="form-group">
                            <label for="updatepassword" class="sr-only">Choose Password:</label>
                            <input type="password" name="updatepassword" maxlength="30" class="form-control" id="updatepassword" placeholder="Choose Password">
                        </div>

                        <div class="form-group">
                            <label for="comfirmpassword" class="sr-only">Your Current Password:</label>
                            <input type="password" name="comfirmpassword" maxlength="30" class="form-control" id="comfirmpassword" placeholder="Comfirm Password">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="updateusername" class="btn green" value="Submit">
                        <button class="btn btn-default" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </form>

    <!-- Footer -->

    <div class="footer">
        <div class="container">
            <p>Ifenowo Copyright &copy; 2022-<?php $today = date("Y"); echo $today ?>.</p>
        </div>
    </div>

  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  </body>
</html>