<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" admissionContent="IE-edge">
	<meta name="viewport" admissionContent="width=device-width,intial-scale=1.0">
	<title>Cosmos School</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- StyleSheet CSS File -->
	<link rel="stylesheet" type="text/css" href="css/addmissionstyle.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Fav Icon -->
	<link rel="stylesheet" type="text/css" href="images/fav_icon.png">
</head>
<body>
	<?php
		$IPATH = $_SERVER["DOCUMENT_ROOT"]."/SchoolManagementSystem/assests/php/";
		include($IPATH."topheadernav.html");
	?>
	<section class="header">
		<!-- bredcrum -->
		<div class="bredcrum">
			<h1>Admission</h1>
			<nav class="bredcrum_nav">
				<ul>>
					<li><a class="bredcrum_home" href="index.php">Home</a></li>
					<li>/</li>
					<li class="active-page">Admission</li>
				</ul>
			</nav>
		</div>
	</section>
		<!-- admissionContent Area -->
		<div class="admission">
				<div class="admissionContainer">
				    <div class="title">Registration</div>
				    <div class="admissionContent">
				      <form action="#">
				        <div class="user-details">
				          <div class="input-box">
				            <span class="details">Full Name<span class="required">*</span></span>
				            <input type="text" placeholder="Enter your name" required>
				          </div>
				          <div class="input-box">
				            <span class="details">Student’s Date of Birth (DOB)<span class="required">*</span></span>
				            <input type="text" size="40" placeholder="MM/DD/YYYY" required>
				          </div>
				          <div class="input-box">
				            <span class="details">Email</span>
				            <input type="text" placeholder="Enter your email" required>
				          </div>
				          <div class="input-box">
				            <span class="details">Phone Number<span class="required">*</span></span>
				            <input type="text" placeholder="Enter your number" required>
				          </div>
				          <div class="input-box">
				            <span class="details">Permanent Address<span class="required">*</span></span>
				            <input type="text" placeholder="Enter your Permanent Address" required>
				          </div>
				          <div class="input-box">
				            <span class="details">Current Address<span class="required">*</span></span>
				            <input type="text" placeholder="Enter your Current Address" required>
				          </div>
				        </div>
				        <div class="gender-details">
				          <input type="radio" name="gender" id="dot-1">
				          <input type="radio" name="gender" id="dot-2">
				          <input type="radio" name="gender" id="dot-3">
				          <span class="gender-title">Gender<span class="required">*</span></span>
				          <div class="category">
				            <label for="dot-1">
				            <span class="dot one"></span>
				            <span class="gender">Male</span>
				          </label>
				          <label for="dot-2">
				            <span class="dot two"></span>
				            <span class="gender">Female</span>
				          </label>
				          <label for="dot-3">
				            <span class="dot three"></span>
				            <span class="gender">Prefer not to say</span>
				            </label>
				          </div>
				        </div>
				         <div class="input-box">
				            <span class="details">Class You want to apply for<span class="required">*</span></span>
				         	<select name="class">
				         		<option value="">---</option>
				         		<option value="">-Junior-</option>
				         		<option value="Grade 1">Grade 1</option>
				         		<option value="Grade 2">Grade 2</option>
				         		<option value="Grade 3">Grade 3</option>
				         		<option value="Grade 4">Grade 4</option>
				         		<option value="Grade 5">Grade 5</option>
				         		<option value="">-Intermediate-</option>
				         		<option value="Grade 6">Grade 6</option>
				         		<option value="Grade 7">Grade 7</option>
				         		<option value="Grade 8">Grade 8</option>
				         		<option value="">-Senior-</option>
				         		<option value="Grade 9">Grade 9</option>
				         	</select>
				         </div>
				        <div class="button">
				          <input type="submit" value="Submit Application">
				        </div>
				      </form>
				    </div>
				</div>

		</div>
	<?php
		include($IPATH."footer.html");
	?>
</body>
</html>
