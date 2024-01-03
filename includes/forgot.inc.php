<?php

if (isset($_POST["submit"])) {
    header("location: ../modules/forgot.php?error=fail");
}
else {
    header("location: ../modules/forgot.php");
}