<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" admissionContent="IE-edge">
	<meta name="viewport" admissionContent="width=device-width,intial-scale=1.0">
	<title>Cosmos School</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<!-- StyleSheet CSS File -->
	<link rel="stylesheet" type="text/css" href="css/eventstyle.css">

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
		<!-- Content Area -->
		<div class="event-container">
      <h3 class="year">2020</h3>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">8</div>
            <div class="month">Nov</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">22</div>
            <div class="month">Dec</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:45 am
          </div>
        </div>
      </div>

      <h3 class="year">2021</h3>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">8</div>
            <div class="month">Jan</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">9</div>
            <div class="month">Mar</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:30 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">4</div>
            <div class="month">Apr</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">8</div>
            <div class="month">Jun</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="images/time.png" alt="" /> 10:00 am
          </div>
        </div>
      </div>
    </div>
	<?php
		include($IPATH."footer.html");
	?>
</body>
</html>
