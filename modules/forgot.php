<!DOCTYPE html>
<html lang="en">
<head>
	<title>Reset Password</title>
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
	<form action="../includes/forgot.inc.php" method="post">
	
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-54">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-10">
							Forgot Password
						</span>

                    	<div class="flex-col-c p-t-10">
							<span class="txt1 p-b-55">
								Please enter your username or email address. You will receive a link to create a new password via email.
							</span>
						</div>

	                    <div class="wrap-input100 validate-input m-b-15" data-validate = "Input is required">
							<span class="label-input100">Email Address Or Username</span>
							<input class="input100" type="text" name="emailOrusername" placeholder="Type your email address or username">
							<span class="focus-input100" data-symbol="&#10047;"></span>
						</div>

	                    <div class="container-login100-form-btn p-t-45">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" name="submit" class="login100-form-btn">
									Send email
								</button>
							</div>
						</div>
						<?php
							if (isset($_GET["error"])) {
								echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'> FAIL! </p>";
							}
							else {
								echo "<p style = 'color : white; font-size : 16px;' class='flex-col-c p-t-20'> Please wait! </p>";
							}
						?>
						<div class="flex-col-c p-t-30">
							<span class="txt1 p-b-17">
								Back to Login?
							</span>

							<a href="login.php" class="txt2">
								Login here
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>

	</form>

</body>
</html>