<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="login">
	<fieldset>
		<legend><h1>Login</h1></legend>
		<form method="post" action="check.php">
			<p>
				<label>username:</label><br>
				<input type="text" name="username">
			</p>
			<p>
				<label>Password:</label><br>
				<input type="Password" name="password">
			</p>
			<label>Type:</label>
			<select name="type">
				<option>Admin</option>
				<option>User</option>
			</select><br>
			<p>
		<button name="submit">Login</button>
		</p>
		</form>
	</fieldset>
</div>
</body>
</html>
