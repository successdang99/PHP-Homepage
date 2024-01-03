<?php

if (isset($_POST["submit"])) {
    require 'dbh.inc.php';
    require 'functions.inc.php';

    $fullname = mysql_real_escape_string($_POST["fullname"]);
    $email = mysql_real_escape_string($_POST["email"]);
    $username = mysql_real_escape_string($_POST["username"]);
    $pwd = mysql_real_escape_string($_POST["pwd"]);
    $confirm = mysql_real_escape_string($_POST["confirm"]);

    if (emptyInputSignup($fullname, $email, $username, $pwd, $confirm)) {
        header("location: ../modules/signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username)) {
        header("location: ../modules/signup.php?error=invaliduid");
        exit();
    }
    if (invalidPwd($pwd)) {
        header("location: ../modules/signup.php?error=invalidpwd");
        exit();
    }
    if (invalidEmail($email)) {
        header("location: ../modules/signup.php?error=invalidemail");
        exit();
    }
    if (!pwdMatch($pwd, $confirm)) {
        header("location: ../modules/signup.php?error=confirmwrong");
        exit();
    }
    if (uidExists($conn, $username, $email)) {
        header("location: ../modules/signup.php?error=usernameused");
        exit();
    }

    createUser($conn, $fullname, $email, $username, $pwd);
}
else {
    header("location: ../modules/signup.php");
}