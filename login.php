<!doctype html>
<html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

	<link rel="stylesheet" href="login.css">

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form action="login_process.php" method="POST">

			<fieldset>

				<p><label for="email">Username</label></p>
				<p><input name="uname" type="text" id="uname" placeholder="username"></p>

				<p><label for="password">Password</label></p>
				<p><input name="pass" type="password" id="pass" placeholder="password"></p> 

				<p><input type="submit" name = "submit" value="Sign In"></p>

			</fieldset>

		</form>

	</div> 

</body>	
</html>