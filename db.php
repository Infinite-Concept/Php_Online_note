<?php
//<!-- connect to thr database -->
$link = mysqli_connect("localhost", "root", "", "onlineNote");

if(mysqli_connect_error()){
    die("ERROR: Unable to coonect". mysqli_connect_error());
}

