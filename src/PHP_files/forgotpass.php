<?php
if (isset($_POST["forgotpass"])){
		$connection= new mysqli("localhost", "root","", "test");
		$email = $connection->real_escape_string($_POST["email"]);

		$data = $connection->query("SELECT id FROM user WHERE email='$email'");

		if ($data->num_rows > 0){
			$str= "0123456789qwertyyuiokkgffasdasdsvcvd";
			$str = str_shuffle($str);
			$str = substr($str, 0, 9);
			$url = "http://domain.com/resetpassword.php?token=$str&email=$email";

			mail($email, "Reset Password", "To Reset the Password, Please Visit: $url", "From: support@domain.com\r\n");

			$connection->query("UPDATE user SET token='$str' WHERE email='$email'");

		}else{

		}
	}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password Using PHP and Mysql</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="http://developerguidance.com/contacts/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: #FFF;">
			<div class="wrap-login100">
				<form action="forgotpassword.php" method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						DG
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Forget Password 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="forgotpass" value="Request Password" class="login100-form-btn">
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	
</body>
</html>