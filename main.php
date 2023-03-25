<?php
session_start();
require 'config.php';
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
						<li style = "font-family: helvetica; font-size: 12px; margin-right: 10px; padding-left: 145px;">NEW<li>
						<li style = "font-family: helvetica; font-size: 12px;margin-left: -5px; margin-right: 25px">MEN</li>
						<li style = "font-family: helvetica;font-size: 12px; margin-right: 20px">WOMEN</li>
						<li style = "margin-right: px;font-size: 12px;">OFFERS</li>
						<li style = "font-family: helvetica;font-size: 12px;">SALES</li>
					</ul>
				</div>
				<div class = "login"> 
				<ul>
					<a href = "logout.php">
					<li style = "font-size:16px; font-family: helvetica; color: white;">.......... <li>
					<li  style = "font-size: 12Px; font-family: helvetica; ">LOG OUT</li>
					</a>

				</ul>
				</div>
			</nav2>
		</header>
	</div>
	</div>
	<img src = "images/a.jpg" style ="width: 250px; height:  250x; margin-left: 200px; margin-top: 20px; border: 2px solid black; " >
	<img src = "images/b.jpg" style ="width: 250px; height:  250px; margin-left: 100px;  margin-top: 19px;border: 2px solid black" >
	<img src = "images/1.jpg" style ="width: 250px; height:  250px; margin-left: 100px;  margin-top: 19px;border: 2px solid black" >
	<a href = "khaki.php">
		<p style = "margin-left: 280px; margin-top: px">Purchase</p> 
	<a>
	<a href = "hoodies.php">
		<p style = "margin-left: 1000px; margin-top: -57px">Purchase</p> 
	<a>
	<a href = "colors.php">
		<p style = "margin-left: 640px; margin-top: -97px">Purchase</p>
	<a>

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
					<input type = "text" name = "password"placeholder = "Password" >
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
							<img src = "logo.png" style = "width:50px; height: 50px; margin-left: 10px; margin-top: 10px;">
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