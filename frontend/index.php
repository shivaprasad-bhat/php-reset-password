<!DOCTYPE html>
<html>

<head>
	<title>Reset Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style type="text/css">
		form {
			padding: 2%;
			margin: 2%;
			border: 1px solid black;
			border-radius: 10px;
		}

		input {
			margin: 10px;
			padding: 10px;
		}

		#login-form {
			margin-top: 10%;
			padding-top: 10px;
		}
	</style>

</head>

<body>
	<section class="container">
		<article class="row">
			<div class="col">
				<div id="login-form" align="center">
					<form action="../backend/reset.php" method="post" onsubmit="return validatePassword()">
						<h2><u>OPENVPN</u></h2>
						<h3>Login</h3>
						<p>To reset your password, please login with your user id</p>
						<div class="form-group">
							<input type="text" name="userid" id="userid" placeholder="User Id">
							<input type="password" name="password" id="password" placeholder="Password">
							<br>
							<input class="btn btn-success" type="submit" name="submit" value="Login">
							<button class="btn btn-warning">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</article>
	</section>
</body>

</html>