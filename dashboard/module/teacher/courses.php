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
    <body  onload="ajaxRequestToGetMyCourse();">
             		 
			<?php
include_once('assests/php/tecnavbar.php');
?>
			  <div align="center" style="background-color:#7bb4e8a6;">
			     Select Class:<select id="myclass"  name="myclass" onchange="ajaxRequestToGetMyCourse();"><?php  


                $classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check') ";
                $res= mysqli_query($link,$classget);

                while($cln=mysqli_fetch_array($res))
                {
                 echo '<option value="',$cln['section'],'" >',$cln['section'],'</option>';
                   
                }


                ?>

                </select>
        </div>
<div align="center" style="margin: 2%;">
    <label id="mycourse" onload="ajaxRequestToGetMyC();" name="mycourse">
</div>
<hr/>



			</div>					
							
		</body>
</html>

