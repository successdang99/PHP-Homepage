<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../icon/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

</head>
<body style="background-image: url('../images/background.png');">
	<div class="logo">
        <a href="../index.php"><img src="../images/logo.png" alt="#" /></a>
    </div>

	<form action="../includes/login.inc.php" method="post">
		
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-54">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-35">
							Login
						</span>

						<div class="wrap-input100 validate-input m-b-15" data-validate = "Username is required">
							<span class="label-input100">Username / Email</span>
							<input class="input100" type="text" name="uid" placeholder="Type your username or email address">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="pwd" placeholder="Type your password">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>
					
						<div class="text-right p-t-8 p-b-25">
							<a href="forgot.php">
								Forgot password?
							</a>
						</div>
					
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" name="submit" class="login100-form-btn">
									Login
								</button>
							</div>
						</div>

						<?php
							if (isset($_GET["error"])) {
								if ($_GET["error"] == "emptyinput") {
									echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Please fill in all fields!</p>";
								}
								else if ($_GET["error"] == "loginWrong") {
									echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Username or password is incorrect!</p>";
								}
							}
							else {
								echo "<p style = 'color : white; font-size : 16px;' class='flex-col-c p-t-20'> No error! </p>";
							}
						?>

						<div class="flex-col-c p-t-30">
							<span class="txt1 p-b-17">
								Creat a new account
							</span>

							<a href="signup.php" class="txt2">
								Sign Up
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	
	</form>

</body>
</html>