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
            margin-top: 120px;
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
            <div class="buttons">
                <button id="addNote" type="button" class="btn btn-info btn-lg">Add Note</button>

                <button id="edit" type="button" class="btn btn-info btn-lg pull-right">Edit</button>

                <button id="done" type="button" class="btn green btn-lg pull-right">Done</button>

                <button id="allNotes" type="button" class="btn btn-info btn-lg">All Note</button>
            </div>

            <div id="notepad">
                <textarea name="" id="notepad" cols="30" rows="10"></textarea>
            </div>

            <div id="notes" class="notes">
                <!-- ajax call to a php file --> 
            </div>
        </div>
    </div>
  </div>

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