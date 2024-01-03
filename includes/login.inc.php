<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require 'dbh.inc.php';
    require 'functions.inc.php';

    if (emptyInputLogin($username, $pwd)) {
        header("location: ../modules/login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../modules/login.php");
}