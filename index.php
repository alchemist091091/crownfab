<?php

	include_once 'config.php';
	if (!empty($_SESSION["id"]))
	{
		header("location: main.php");
	} 
	if(isset($_POST['sign-up']))
	{

	$LastName 		= $_POST['LastName'];
	$FirstName 		= $_POST['FirstName'];
	$Email 			= $_POST['Email'];
	$Username		= $_POST['Username'];
	$Password 		= $_POST['Password'];
	$cpass			= $_POST['cpass'];
	$duplicate 		= mysqli_query($conn, "SELECT * FROM registrations WHERE Username = '$Username' OR Email = '$Email'");

		if(mysqli_num_rows($duplicate) > 0)
		{
			echo
			"<script> alert('Username or Email already exist!'); </script>";
		}
		else
		{
			if($Password == $cpass)
			{
				$sql = "INSERT INTO registrations (LastName, FirstName, Email, Username, Password) VALUES ('$LastName', '$FirstName', '$Email', '$Username', '$Password')";
				$query = mysqli_query($conn, $sql);
				echo 
				"<script>alert('Registration succesessful!');</script>";
			}
			else
			{
				echo 
				"<script>alert('Password does not match!');</script>";
			}
		}
	}
	else if(isset($_POST['login']))
	{
		$uname			= $_POST['uname'];
		$password		= $_POST['password'];
		$result 		= mysqli_query($conn, "SELECT * FROM registrations WHERE Username = '$uname'");
		$row 			= mysqli_fetch_assoc($result);

		if (mysqli_num_rows($result) > 0)
		{
			if ($password == $row["Password"])
			{
				$_SESSION["login"] = true;
				$_SESSION["id"] = $row["id"];
				echo 
				"<script>alert('Login successful!');</script>";
				header("location: main.php");
			}			
			else
			{
			echo 
			"<script>alert('Incorrect password!');</script>";
			}
		}
		else if ($uname == "admin" AND $password == "12345")
		{
			header("location: crud.php");
		}
		else
		{
			echo 
			"<script>alert('User not found!');</script>";
		}
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Crown Fabric</title>
		<link rel = "stylesheet" href = "style.css">
		<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

	</head>
	<body>
		<<div class = "container">
		<header>
			<nav2>
				<div class = "logo">
					<h1 style = "color: white">white</h1>
				</div>
				<div class ="menu">
					<ul>
						<li style = "font-family: helvetica; font-size: 12px; margin-right: 10px; ">NEW<li>
						<li style = "font-family: helvetica; font-size: 12px;margin-left: -5px; margin-right: 25px">MEN</li>
						<li style = "font-family: helvetica;font-size: 12px; margin-right: 20px">WOMEN</li>
						<li style = "margin-right: px;font-size: 12px;">OFFERS</li>
						<li style = "font-family: helvetica;font-size: 12px;">SALES</li>
					</ul>
				</div>
				<div class = "login"> 
				<ul>
					<li onclick = "signupToggle()" style = "font-size:12px; font-family: helvetica; ">SIGN UP</li>
					<li onclick = "loginToggle()" style = "font-size: 12px; font-family: helvetica;">LOG IN</li>
				</ul>
				</div>
			</nav2>
		</header>
	</div>
	
	</div>
	<img src = "images/a.jpg" style ="width: 250px; height:  250x; margin-left: 200px; margin-top: 20px; border: 2px solid black; " >
	<img src = "images/b.jpg" style ="width: 250px; height:  250px; margin-left: 100px;  margin-top: 19px;border: 2px solid black" >
	<img src = "images/1.jpg" style ="width: 250px; height:  250px; margin-left: 100px;  margin-top: 19px;border: 2px solid black" >
	<p onclick = "loginToggle()"style = "margin-left: 290px; margin-top: 10px">Purchase</p> 
	<p onclick = "loginToggle()"style = "margin-left: 1000px; margin-top: -20px">Purchase </p> 
	<p onclick = "loginToggle()"style = "margin-left: 645px; margin-top: -20px">Purchase</p>
	<div class = "signup-form">
		<?php
			if(isset($_SESSION['status']))
			{
				echo $_SESSION['status'];
				unset($_SESSION['status']);

			}
		?>
		<div class = "form">
			<div class = "close" onclick = "signupToggle()">&times;</div>
			<div class = "text">
			<h1 style = "font-family: helvetica">Registration Form</h1>
			</div>
			<form action = "#" method = "post" >
			<div class = "row">
			<input type = "text" name = "FirstName" placeholder = "First Name" required >
			<input type = "text" name = "LastName" placeholder = "Last Name" required >
			</div>
			<input type = "text" name = "Email" placeholder = "Email" required  >
			<input type = "text" name = "Username" placeholder = "Username" required  >
			<input type = "password" name = "Password" placeholder = "Password" required >
			<input type = "password" name = "cpass" placeholder = "Confirm Password" required >
			<button type = "submit" name = "sign-up">Sign Up</button>

			</form>
		</div>
	</div>
	<div class = "login-form">
		<div class = "form">
			<div class = "close" onclick = "loginToggle()">&times;</div>
			<div class = "text">
			<h1 style = "font-family: helvetica">Login Form</h1>
			</div>
				<form action = "#" method = "post">
					<?php if (isset($_GET['error']))
						{
							?><p class = "error"><?php echo $_GET['error'];?></p>
							<?php
						} 
					?>
					<input type = "text" name = "uname"placeholder = "Username" >
					<input type = "password" name = "password"placeholder = "Password" >
					<button type = "submit" name = "login">Login</button>
				</form>
		</div>
	</div>
		<script>
			function signupToggle()
			{
				var container = document.querySelector('.container');
				container.classList.toggle('active');
				var popup = document.querySelector('.signup-form');
				popup.classList.toggle('active');
			}
			function loginToggle()
			{
				var container = document.querySelector('.container');
				container.classList.toggle('active');
				var popup = document.querySelector('.login-form');
				popup.classList.toggle('active');
			}
		</script>
		<nav>
			<ul>
				<li>
					<a href = "#">
							<img src = "images/logo.png" style = "width:50px; height: 50px; margin-left: 10px; margin-top: 10px;">
							<h2 style = "position: relative; margin-left: 80px; margin-top: -40px; margin-bottom: 10px; font-size: 25px; font-family: helvetica">C R O W N</h2>
					</a>
				</li>
				<li>	
					<a href = "#">
						<i class = "fas fa-home" style="font-size: 22px;"></i>
						<span class = "nav-item" style="font-size: 14px;">Home</span>
					</a>
				</li>
				<li>
					<a href = "#">
						<i class = "fas fa-user" style="font-size: 22px;"></i>
						<span class = "nav-item" style="font-size: 14px;">Profile</span>
					</a>
				</li>
				<li>
					<a href = "#">
						<i class = "fas fa-shopping-cart" style="font-size: 22px;"></i>
						<span class = "nav-item" style="font-size: 14px;">Cart</span>
					</a>
				</li>
				<li>
					<a href = "#">
						<i class = "fas fa-headset" style="font-size: 22px;"></i>
						<span class = "nav-item" style="font-size: 14px;">Help</span>
					</a>
				</li>
			</ul>
		</nav>
	</body>
</html>