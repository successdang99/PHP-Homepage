<?php
    $serverName = "home.nda.ac.jp";
    $dBUsername = "s67956";
    $dBPassword = "conglhp9x";
    $dBName = "s67956";

    $conn = mysql_connect($serverName, $dBUsername, $dBPassword);
    mysql_select_db($dBName);

    if (!$conn) {
        die("Connection failed: " . mysql_connect_error());
    }