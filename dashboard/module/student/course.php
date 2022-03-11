<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetCourse();">
             		 
			 <?php
include_once('../assests/php/banner.php');
include_once('assests/php/stdnavbar.php');
?>
    
			  <hr/>
			  <div align="center"  style="background-color: #0084fd52;">
			 Select Class:<select id="myclass" name="myclass" onchange="ajaxRequestToGetCourse();"><?php  


$classget = "SELECT * FROM class where section in(select DISTINCT classid from students where id='$check')";
            // SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')"
$res= mysqli_query($link,$classget);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['section'],'" >',$cln['section'],'</option>';
   
}


?>
</select>
Select Course<select id="mycourse" onchange="ajaxRequestToGetCourseInfo();" name="mycourse">
<option value="" selected="" disabled=""></option>
</select>
</div>
<div align="center">
<h4>Course Information:</h4><hr/></br><label id="mycourseteacher"></label><br/>
<table id="mycourseinfo">
</table>
<hr/>



			</div>					
							
		</body>
</html>

