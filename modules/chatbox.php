<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewpot" content="width=decive-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat box</title>

    <link rel="icon" type="image/png" href="../icon/chat-icon.png"/>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/home.js"></script>
    <link rel="stylesheet" href="../css/home.css">
</head>


<body>
    <div id="messages"></div>
    <form>
        <input type="text" id="message" autocomplete="off" autofocus placeholder="Type message...">
        <input type="submit" value="Send">
    </form>
</body>

</html>