<?php
include('main.php');


?>
        <html>
		
			<head>
              
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				</head>
		  <?php
include_once('../assests/php/banner.php');
include_once('assests/php/attennavbar.php');
?>
			  <hr/>
		</html>
		<?php
		
		
$atten=$_REQUEST['mystudent'];
 $d=$_REQUEST['date'];
 /*
$conn=mysqli_connect('localhost','root','');
if(!$conn){
   die('error connecting ');
   }
   mysqli_select_db('schoolmanagementsystemdb',$conn);
  
	   */
	   $sql="insert into attendance(date,attendedid) values('$d','$atten')";
	  $sd= mysqli_query($link,$sql);
	  
	  if(!$sd){
	  echo "problem";
	  }
	  echo "<div align='center'>succeed</div>";
  
   		?>
		