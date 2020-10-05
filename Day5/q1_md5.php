<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action = "q1_md5.php">
		<input type = "text" name="username">
		<input type = "password" name="password">
		<input type = "submit" name = "submit" value="submit">
	</form>

	<?php

		require("connection.php");
		if(isset($_POST['submit'])){
			$username	=	$_POST['username'];
			$password	=	md5($_POST['password']);

			$insert_query = "INSERT INTO user VALUES($username,$password)";

			echo "Username :$username <br> Password: $password <br> Appended to database";


		}

	?>

</body>
</html>