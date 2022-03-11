<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<title>Cosmos School</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<?php
		$IPATH = $_SERVER["DOCUMENT_ROOT"]."/SchoolManagementSystem/assests/php/";
		include($IPATH."topheadernav.html");
	?>
	<section class="header">
		<!-- bredcrum -->
		<div class="bredcrum">
			<h1>Contact</h1>
			<nav class="bredcrum_nav">
				<ul>>
					<li><a class="bredcrum_home" href="index.php">Home</a></li>
					<li>/</li>
					<li class="active-page">Contact</li>
				</ul>
			</nav>
		</div>
	</section>
		<!-- Content Area -->
		<div class="contact">
			<div class="content">
				<h2>Contact US</h2>
				<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Eveniet architecto repellat, voluptates provident, consequatur suscipit voluptate obcaecati quod laudantium nihil eaque est veniam ipsum placeat aperiam illum nulla. Modi, fuga.</p>
				<div class="container">
					<div class="contactInfo">
						<div class="address-box">
							<div class="icon"><i class="fas fa-map-marked-alt"></i></div>
							<div class="address-text">
								<h3>Address</h3>
								<p>Kalighat, Byasi, Bhaktapur-2, Nepal</p>
							</div>
						</div>
						<div class="address-box">
							<div class="icon"><i class="fas fa-phone-alt"></i></div>
							<div class="address-text">
								<h3>Phone</h3>
								<p> +977-01-6619014 / 6620300</p>
							</div>
						</div>
						<div class="address-box">
							<div class="icon"><i class="fas fa-envelope"></i> 	</div>
							<div class="address-text">
								<h3>Email</h3>
								<p>cosmosschool@gmail.com</p>
							</div>
						</div>
					</div>
					<div class="contactForm">
						<form action="">
							<h2>Send Message</h2>
							<div class="inputBox">
								<input type="text" required="required" >
								<span>Full name</span>
							</div>
							<div class="inputBox">
								<input type="text" required="required">
								<span>Email</span>
							</div>
							<div class="inputBox">
								<input type="text" required="required">
								<span>Phone number</span>
							</div>
							<div class="inputBox">
								<textarea required="required"></textarea>
								<span>Type Your Message...</span>
							</div>
							<div class="inputBox">
								<input type="submit" value="Send">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	<?php
		include($IPATH."footer.html");
	?>
</body>
</html>
