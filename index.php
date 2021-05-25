<?php include('functions.php') ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Aros & Søn</title>
		<link rel="stylesheet" href="css/index.css">
	</head>
	<body>
		<div class="login">
			<img src="https://via.placeholder.com/150" alt="Aros & søn logo" class="center">
			<form action="log_in.php" method="post">
        <br>
				<input type="text" name="username" placeholder="Username" class="center" id="username" required>
        <br>
				<input type="password" name="password" placeholder="Password" class="center" id="password" required>
        <br>
				<input type="submit" value="Login" class="center">
			</form>
		</div>
	</body>
</html>
