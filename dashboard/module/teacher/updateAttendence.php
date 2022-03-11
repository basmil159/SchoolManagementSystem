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
		  
    <body  onload="ajaxRequestToGetMyCourse();">
	<?php
include_once('assests/php/tecnavbar.php');
?>
			
             		 
			
			 <form action="updateatt.php" method="POST">
			  <div align="center" >
                <h2>Update Present Only</h2>
			 Select Class:<select id="myclass" name="myclass" onchange="ajaxRequestToGetMyCourse();">
			 <?php  


$classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')";
$res= mysqli_query($link,$classget);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['section'],'" >',$cln['section'],'</option>';
   
}


?>

</select><br /><br />
Select Course<select id="mycourse" onchange="" name="mycourse">

</select> <br />
<br/>

Select Student<select id="mystudent" onchange="" name="mystudent">

</select><br /><br /><br /><br />
<p>Date: <input  type="date" id="datepicker" name="date"/></p>
<input class="menulista" type ="submit" value="Present" name="update"/>


</form>
<hr/>



			</div>					
							
		</body>
</html>
