<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel = "stylesheet" href = "style.css">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

	<style>

.wrapper
{
	height: 40px;
	width: 120px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: white;
	border-radius: px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

.wrapper span
{
	width: 100%;
	text-align: center;
	font-size: 20px;
	cursor: pointer;

}

.wrapper span.num

{
	font-size: 20px;
	border-right: 1px solid black;
	border-left: 1px solid black;
	pointer-events: none;
}

	</style>
</head>
<body>
	<div>
		<img src = "images/a.jpg" style ="width: 400px; height:  400x; margin-left: 140px; margin-top: 90px; border: 2px solid black; " >
	<p style="margin-left: 600px; margin-top: -405px; padding-top: -180px; margin-bottom: -20px; font-size: 30px;">KHAKI COLLECTIONS</p>
	<p style="margin-left: 600px; margin-top: px; font-size: 30px;">______________________________________	</p>
	<p style="margin-left: 600px; margin-top: px; font-size: 15px; margin-top: 10px;">C R O W N F A B R I C </p>
	<p style="margin-left: 600px; margin-top: px; font-size: 18px; margin-top: 20px;"><b>₱ 1,499</b></p>
	<p style="margin-left: 600px; margin-top: px; font-size: 15px; margin-top: 20px;"><b>Tags:</b></p>
	<p style="margin-left: 600px; margin-top: px; font-size: 15px; margin-top: 15px;">Size:</p>
	<select style="margin-left: 600px;margin-top: 10px; width: 500px; height: 40px; border: 1px solid black; box-shadow: 0 5px 10px rgba(0,0,0,0.1);">
		<option value="Small">Select a size</option>
		<option value="Small">Small</option>
  		<option value="Medium">Medium</option>
	 	 <option value="Large">Large</option>
 		 <option value="XL">Extra Large</option>
	</select>
	<p style="margin-left: 600px; margin-top: px; font-size: 15px; margin-top: 15px;">Type:</p>
	<select style="margin-left: 600px;margin-top: 10px; width: 500px; height: 40px; border: 1px solid black;box-shadow: 0 5px 10px rgba(0,0,0,0.1); ">
		<option value="Small">Select a type</option>
		<option value="Small">Set</option>
  		<option value="Medium">Top</option>
	 	 <option value="Large">Pants</option>
	</select>
	<p style="margin-left: 600px; margin-top: px; font-size: 15px; margin-top: 15px;">Quantity:</p>
	<div class = "wrapper" style="margin-left:  600px; margin-top: 10px; border: 1px solid black;">
		<span class = "minus">-</span>
		<span class = "num">01</span>
		<span class = "plus">+</span>
	</div>
	<button style = "width: 645px; height: 50px; margin-left: 600px; background-color: white; font-size: 13px;">Purchase</button>

	<script>
		
		const 	plus = document.querySelector(".plus"),
				minus = document.querySelector(".minus"),
				num = document.querySelector(".num");

		let a = 1;
		plus.addEventLister("click", ()=>
		{
			a++;
			a = (a < 10) ? "0" + a : a;
			num.innertext = a;
			console.log(a);
		});

	</script>

	
	</div>
	<div>
	<nav>
			<ul>
				<li>
					<a href = "#">
							<img src = "images/logo.png" style = "width:50px; height: 50px; margin-left: 10px; margin-top: 10px;">
							<h2 style = "position: relative; margin-left: 80px; margin-top: -40px; margin-bottom: 10px; font-size: 25px; font-family: helvetica">C R O W N</h2>
					</a>
				</li>
				<li>	
					<a href = "main.php">
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
	</div>
</body>
</html>