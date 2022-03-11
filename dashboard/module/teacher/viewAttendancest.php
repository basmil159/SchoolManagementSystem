<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="stdatt.js"></script>
            <script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetAttendancePresentThisMonth();">
             		 
<?php
include_once('assests/php/tecnavbar.php');
?>
			  <hr/>
			  <div align="center" style="background-color:#7bb4e8a6;" onload="ajaxRequestToGetAttendanceAbsentThisMonth();">
			  Select Student:<select id="mystudent" name="mystudent" onchange="ajaxRequestToGetAttendancePresentThisMonth(); ">
			  <?php 
		$sql="SELECT * FROM students WHERE classid in(select section from class where id in(select classid from course where teacherid='$check'))";
		$res=mysqli_query($link,$sql);
		while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}
?>
	</select>
Select Month: Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendancePresentThisMonth();"   value="thismonth" id="present" name="present" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendancePresentAll();" value="all" id="present" name="present"/>
</div>	
<hr/>
<div align="center" >

<table id="mypresent" border="1">

</table>
</div>
<hr/>
<div align="center" style="background-color:#e0181f5c;">
	
Select Month : Current Month:<input type="radio"  onclick="ajaxRequestToGetAttendanceAbsentThisMonth();"   value="thismonth" id="absent" name="absent" checked="checked"/> ALL : <input type="radio" onclick="ajaxRequestToGetAttendanceAbsentAll();" value="all" id="absent" name="absent"/>
</div>	
<hr/>
<div align="center" >
<table id="myabsent" border="1">

</table>
</div>

							
							
		</body>
</html>

