<?php
if(isset($POST["submit"]))
{
	$LastName 		= $_POST['LastName'];
	$FirstName 		= $_POST['FirstName'];
	$Email 			= $_POST['Email'];
	$Username		= $_POST['Username'];
	$Password 		= $_POST['Password'];
	$cpass			= $_POST['cpass'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Registration</h2>
		<form class = "" action = "" method = "post" autocomplete="off">
			<label for = "FirstName">First Name: </label>
			<input type="text" name="FirstName" id = "FirstName" required value = ""> <br>
			<label for = "LastName">Last Name: </label>
			<input type="text" name="LastName" id = "LastName" required value = ""> <br>
			<label for = "Email">Email: </label>
			<input type="text" name="Email" id = "Email" required value = ""> <br>
			<label for = "Username">Username: </label>
			<input type="text" name="Username" id = "Username" required value = ""> <br>
			<label for = "Password">Password: </label>
			<input type="password" name="Password" id = "Password" required value = ""> <br>
			<label for = "cpass">Password: </label>
			<input type="type" name="cpass" id = "cpass" required value = ""> <br>
			<button type = "submit" name = "submit">Sign Up</button>
		</form>
		<br>
		<a href="login.php">Login</a>

</body>
</html>