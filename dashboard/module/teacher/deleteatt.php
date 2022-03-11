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
include_once('assests/php/tecnavbar.php');
?>
			  <hr/>
			  <form align="center" action="#" method="post">
			  <h2>Update Absent</h2>
			  Student id: <input type="text" name="stdid" placeholder="Student id" /><br />
			  Date:       <input type ="text" name="date" placeholder="YYYY-MM-DD" /><br />
			  <input type="submit" name="submit" value="Absent" />
			  </form>
			  
			  
		</html>
		<div align="center">
			 <?php  
			 if(!empty($_POST['submit'])){
			 //print_r($_REQUEST);
			 $s=$_REQUEST['stdid'];
			$d= $_REQUEST['date'];
			$sql="DELETE FROM attendance WHERE attendedid='$s' and date='$d'";
			$s=mysqli_query($link,$sql);
			if(!$s)
			{
			echo "problem";
			}
			echo "success";
			 }
			?>
			
			</div>

