<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<title>Cosmos School</title>
	<link rel="stylesheet" href="css/model.css">

	<?php
		$IPATH = $_SERVER["DOCUMENT_ROOT"]."/SchoolManagementSystem/assests/php/";
		include($IPATH."topheadernav.html");
	?>
	<?php
		include($IPATH."models/modelbox.html");
	?>
	<section class="header">
		<div class="sliderbody">
			<div class="img-slider">
		      <div class="slidehead active">
		        <img src="images/slide/1.jpg" alt="">
		        <div class="info">
		          <h2>Welcome to Cosmos School
								
							</h2>
		          <p>Committed to educating and nurturing all students so they may grow towards responsible						global citizenship. Dedicated To Excellence</p>
		        </div>
		      </div>
		      <div class="slidehead">
		        <img src="images/slide/2.jpg" alt="">
		        <div class="info">
		          <h2>Slide 02</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        </div>
		      </div>
		      <div class="slidehead">
		        <img src="images/slide/3.jpg" alt="">
		        <div class="info">
		          <h2>Slide 03</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        </div>
		      </div>
		      <div class="slidehead">
		        <img src="images/slide/4.jpg" alt="">
		        <div class="info">
		          <h2>Slide 04</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        </div>
		      </div>
		      <div class="slidehead">
		        <img src="images/slide/5.jpg" alt="">
		        <div class="info">
		          <h2>Slide 05</h2>
		          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		        </div>
		      </div>
		      <div class="navigation">
		        <div class="btn active"></div>
		        <div class="btn"></div>
		        <div class="btn"></div>
		        <div class="btn"></div>
		        <div class="btn"></div>
		      </div>
	    </div>
    </div>

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slidehead');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slidehead) => {
        slidehead.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>

	</section>

	<!-- Content Area -->
	<div class="header-content" id="headerContent">
		<!-- Headings -->
		<div class="header-text">
			<h1>WELCOME TO <span>COSMOS</span></h1>
			<p><b>WELCOME TO COSMOS SCHOOL! </b>Cosmos School of Management and Technology was established in the year 2001 AD and it has successfully completed more than 19 glorious years in providing competent education in the engineering and management sectors.</p>
			<p>The School has been established under the chairmanship of Prof. Dr. Uttam N. Shrestha, (former Dean, IOE Pulchowk).</p>
			<!-- button -->
			<b class="header-btn">Read More</b>
		</div>
		<div class="header-image">
			<img src="images/ladytecher.png" alt="Student">
		</div>
	</div>

	<!-- js code for model to be opened after the click of readmore button on first paragraph of index page -->
	<?php
		include($IPATH."models/modelscript.js");
	?>

	  // Get the button that opens the modal
	  var btnheader = document.getElementsByClassName("header-btn")[0];

	  // Get the <span> element that closes the modal
	  var headerText = document.getElementsByClassName("model-text")[0];

	  <?php
	  	include($IPATH."models/modelscript2.js");
	  ?>

	<section class="subjects">
		<!-- mission/vision/objective Box -->
		<div class="box-container">
			<!-- BOX 1 -->
			<div class="box">
				<!-- <img src="images/mission.png" alt=""> -->
				 <div class="icons mission">
				 	<i class="fas fa-rocket"></i>
					<font>Mission</font>
				 </div>
				<div class="contents">
					<font>Mission</font>
					<p>To provide quality education at low cost. To produce students with confidence and skills, forge them into a capable and responsible citizen. To promote good conduct, high sense of morality and discipline so as to develop and shape multi-dimensional personality of students.</p>
					<!-- button -->
					<!-- <b class="box-btn1">View</b> -->
				</div>
			</div>

			<!-- BOX 2 -->
			<div class="box">
				<div class="icons vision">
					<i class="fas fa-eye"></i>
					<font>Vision</font>
				</div>
				<div class="contents">
					<font>Vision</font>
					<p>To creat an environment for educational world where every children can have access to quality edcation at affordable low price.</p>
				</div>
			</div>

			<!-- BOX 3 -->
			<div class="box">
				<div class="icons objective">
					<i class="fas fa-bullseye"></i>
					<font>Objectives</font>
				</div>
				<div class="contents">
					<font>Objectives</font>
					<p>Our aim is to provide quality education to help student realize their inherent potential and bring out their latent talents, to make them aware of what they are capable of, to enable them to face challenges of this modern era and to prepare them for the future.</p>
				<!-- button -->
				</div>
			</div>
		</div>
	</section>
	<section class="about">
		<!-- About Area -->
		<div class="about-content">
			<!-- image -->
			<div class="about-image">
				<img src="images/teacher.png">
			</div>
			<div class="about-text">
				<h1>Education for <span>Everyone</span></h1>
				<p><b>WELCOME TO COSMOS SCHOOL! </b>Cosmos School of Management and Technology was established in the year 2001 AD and it has successfully completed more than 19 glorious years in providing competent education in the engineering and management sectors.</p>
				<p>The School has been established under the chairmanship of Prof. Dr. Uttam N. Shrestha, (former Dean, IOE Pulchowk).</p>
				<!-- button -->
				<a href="about.php" class="about-btn">Read More</a>
			</div>
		</div>
	</section>
	<!-- Messages -->
		<div class="box-message-container">
			<!-- BOX chairman -->
			<div class="box-message">
				<h2>Message From School Chairman</h2>
				<img src="images/profile.png" alt="">
				<font>Saroj Raj Gosain</font>
				<p>On behave of our school management committee, faculty and staffs, i would like to welcome all the deserving students to Basu Secondary School. As a chairman of BSS, I congratulate you on your decision to...</p>
				<!-- button -->
				<b class="box-btn1">Read More</b>
				<!-- js code for model to be opened after the click of readmore button on first paragraph of index page -->
			  <?php
				include($IPATH."models/modelscript.js");
				?>
			  var modelTextBox1 = document.getElementsByClassName("box-text1")[0];

			  // Get the button that opens the modal
			  var btnbox1 = document.getElementsByClassName("box-btn1")[0];
			   <?php
					include($IPATH."models/modelscript2.js");
				?>
			</div>
			<!-- BOX Principal-->
			<div class="box-message">
				<h2>Message From School Principal</h2>
				<img src="images/profile.png" alt="">
				<font>Amvika Nyaichyai</font>
				<p>Guided by philosophy of intellectualization of the society, we are playing one of the major role in making Bhaktapur as a center of excellences. Once called the capital of traditional songs, dances, and festivals, Bhaltapur...</p>
				<!-- button -->
				<b class="box-btn2">Read More</b>
				<!-- js code for model to be opened after the click of readmore button on first paragraph of index page -->
				<?php
						include($IPATH."models/modelscript.js");
					?>
				  var modelTextBox2 = document.getElementsByClassName("box-text2")[0];

				  // Get the button that opens the modal
				  var btnbox2 = document.getElementsByClassName("box-btn2")[0];
				   <?php
						include($IPATH."models/modelscript2.js");
					?>
			</div>
			<!-- BOX Vice-principle -->
			<div class="box-message">
				<h2>Message From Vice Principal</h2>
				<img src="images/profile.png" alt="">
				<font>Laxman Joshi</font>
				<p>o materialize the mission "One graduate in One family in Bhaktapur", Basu College was established in 2066 B.S. At the moment, I'd like to express my sincere gratitude to all the students and the guardians...</p>
				<!-- button -->
				<b class="box-btn3">Read More</b>
			<!-- js code for model to be opened after the click of readmore button on first paragraph of index page -->
			<?php
					include($IPATH."models/modelscript.js");
				?>
			  var modelTextBox3 = document.getElementsByClassName("box-text3")[0];

			  // Get the button that opens the modal
			  var btnbox3 = document.getElementsByClassName("box-btn3")[0];
			   <?php
					include($IPATH."models/modelscript2.js");
				?>
			</div>
		</div>
	</section>
	<!-- What our students says -->
	<section class="std-says">
		<div id="slider">
   <input type="radio" name="slider" id="slide1" checked>
   <input type="radio" name="slider" id="slide2">
   <input type="radio" name="slider" id="slide3">
   <input type="radio" name="slider" id="slide4">
   <div id="slides">
      <div id="overflow">
         <div class="inner">
            <div class="slide slide_1">
               <div class="slide-content">
                  <h1>What Our Student Says?</h1>
                  <img src="images/user.png">
                  <div class="slide_content">
	                  <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Placeat, perferendis quo quod quasi quibusdam tenetur! Voluptates, voluptatibus. Sapiente accusantium qui perferendis nobis assumenda dolorum doloribus id mollitia, magni quas quae.</p>
	                  <h4>Kaushal Upadhaya</h4>
	              </div>
               </div>
            </div>
            <div class="slide slide_2">
               <div class="slide-content">
                  <h1>What Our Student Says?</h1>
                  <img src="images/user.png">
                  <div class="slide_content">
	                  <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Placeat, perferendis quo quod quasi quibusdam tenetur! Voluptates, voluptatibus. Sapiente accusantium qui perferendis nobis assumenda dolorum doloribus id mollitia, magni quas quae.</p>
	                  <h4>Susan Sapkota</h4>
	              </div>
               </div>
            </div>
            <div class="slide slide_3">
               <div class="slide-content">
                  <h1>What Our Student Says?</h1>
                  <img src="images/user.png">
                  <div class="slide_content">
	                  <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Placeat, perferendis quo quod quasi quibusdam tenetur! Voluptates, voluptatibus. Sapiente accusantium qui perferendis nobis assumenda dolorum doloribus id mollitia, magni quas quae.</p>
	                  <h4>Anish Silwal</h4>
	              </div>
               </div>
            </div>
            <div class="slide slide_4">
               <div class="slide-content">
                  <h1>What Our Student Says?</h1>
                  <img src="images/user.png">
                  <div class="slide_content">
	                  <p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Placeat, perferendis quo quod quasi quibusdam tenetur! Voluptates, voluptatibus. Sapiente accusantium qui perferendis nobis assumenda dolorum doloribus id mollitia, magni quas quae.</p>
	                  <h4>Milan Bhandari</h4>
	              </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="controls">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   <div id="bullets">
      <label for="slide1"></label>
      <label for="slide2"></label>
      <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
</div>
	</section>


<?php
		include($IPATH."footer.html");
	?>
</body>
</html>
