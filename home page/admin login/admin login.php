<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
	<div class="login">
		<h1>Admin Login</h1>
		<form method="post" action="admin.php">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>
