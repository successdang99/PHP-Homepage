<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
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

	<form action="../includes/signup.inc.php" method="post">

		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-54">
					<form class="login100-form validate-form">
						<span class="login100-form-title p-b-35">
							Sign up
						</span>

    	                <div class="wrap-input100 validate-input m-b-15" data-validate = "Fullname is required">
							<span class="label-input100">Full Name</span>
								<input class="input100" type="text" name="fullname" placeholder="Type your fullname">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>

	                    <div class="wrap-input100 validate-input m-b-15" data-validate = "Email Address is required">
							<span class="label-input100">Email Address</span>
							<input class="input100" type="text" name="email" placeholder="Type your email address">
							<span class="focus-input100" data-symbol="&#9993;"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-15" data-validate = "Username is required">
							<span class="label-input100">Username</span>
							<input class="input100" type="text" name="username" placeholder="Type your username">
							<span class="focus-input100" data-symbol="&#xf206;"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-15" data-validate="Password is required">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="pwd" placeholder="Type your password">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>
					
						<div class="wrap-input100 validate-input" data-validate=" Confirm password is required">
							<span class="label-input100">Confirm Password</span>
							<input class="input100" type="password" name="confirm" placeholder="Type your password again">
							<span class="focus-input100" data-symbol="&#xf190;"></span>
						</div>
					
						<div class="container-login100-form-btn p-t-31">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button type="submit" name="submit" class="login100-form-btn">
									Sign up
								</button>
							</div>
						</div>

						<?php
							if (isset($_GET["error"])) {
								switch ($_GET["error"]) {
									case "emptyinput":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Please fill in all fields!</p>";
										break;
									case "invaliduid":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Please enter a valid username!</p>";
										break;
									case "invalidpwd":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Please enter a valid password!</p>";
										break;
									case "invalidemail":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Please enter a valid email!</p>";
										break;
									case "confirmwrong":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>The confirm password isn't true.</p>";
										break;
									case "none":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Congratulations! You signed up successfully.</p>";
										break;
									case "usernameused":
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>The account has already existed.</p>";
										break;
									default:
										echo "<p style = 'color : red; font-size : 16px;' class='flex-col-c p-t-20'>Something went wrong. Please try again!</p>";
								}
							}
							else {
								echo "<p style = 'color : white; font-size : 16px;' class='flex-col-c p-t-20'> No error! </p>";
							}
						?>

						<div class="flex-col-c p-t-30">
							<span class="txt1 p-b-17">
								Already have an account?
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