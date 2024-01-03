<?php
require 'hash.php';

function emptyInputSignup($fullname, $email, $username, $pwd, $confirm) {
    $result = false;
    if (empty($fullname) || empty($email) || empty($username) || empty($pwd) || empty($confirm)) {
        return true;
    }
    return $result;
}

function invalidUid($username) {
    $result = true;
    if (preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = false;
    }
    return $result;
}

function invalidPwd($pwd) {
    $result = true;
    if (preg_match("/^[a-zA-Z0-9]*$/", $pwd)) {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    return $result;
}

function pwdMatch($pwd, $confirm) {
    $result = false;
    if ($pwd == $confirm) {
        $result = true;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    /*$sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("localtion; ../modules/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    $result = false;
    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        return $result;
    }*/
    $ans = false;
    $result = mysql_query("select * from users");
    while ( $row = mysql_fetch_array($result)) {
        if ($username == $row['usersUid'] || $email == $row['usersEmail']) {
            $ans = true;
            break;
        }
    }
    if ($ans) {
        return $row;
    }
    else {
        return $ans;
    }
}

function createUser($conn, $fullname, $email, $username, $pwd){
    /*$sql = "INSERT INTO users (usersName, usersEmail,usersUid, usersPwd, lenPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("localtion; ../modules/signup.php?error=stmtfailed");
        exit();
    }*/

    //Shorten the fullname
    if (strlen($fullname)>16) {
        $fullname =  substr($fullname, 0, 13).'...';
    }

    //Encode the password
    $lenPwd = strlen($pwd);
    $new_data = new Encode($pwd);
    $hashedPwd = $new_data->Encode($pwd);

    /*mysqli_stmt_bind_param($stmt, "ssssi", $fullname, $email, $username, $hashedPwd, $lenPwd); //hash
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);*/

    $qs = "insert into users set usersName='".$fullname."', usersEmail='".$email."', usersUid='"
        .$username."', usersPwd='".$hashedPwd."', lenPwd=".$lenPwd; //insert new account
    
    mysql_query($qs) or die("Error!\n");
    echo $qs;
    mysql_close($conn);
    header("location: ../modules/signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd) {
    $result = false;
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../modules/login.php?error=loginWrong");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $lenPwd = $uidExists["lenPwd"];

    $new_data = new Decode($pwd);
    $hashedPwd = $new_data->Decode($pwd);

    $checkPwd = ($hashedPwd == $pwdHashed && strlen($pwd) == $lenPwd);

    if (!$checkPwd) {
        header("location: ../modules/login.php?error=loginWrong");
        exit();
    }
    else {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        $_SESSION["username"] = $uidExists["usersName"];
        header("location: ../index.php");
        exit();
    }
}