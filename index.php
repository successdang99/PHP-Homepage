<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <title>Success Dang</title>
  <link href="fonts/fontawesome-free-5.15.1/css/all.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="icon/gameicon.png"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>


<body class="main-layout" id = "all">
  
  <?php
	  include('modules/loader.php');
	  include('modules/header.php');
	  include('modules/me.php');
	  include('modules/about.php');
	  include('modules/footer.php');
  ?>
  
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>