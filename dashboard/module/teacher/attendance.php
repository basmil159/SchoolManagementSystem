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
				
				</ul>
			  <hr/>
		</html>
		<html>
    <head>
				
	            
		</head>
    <body  onload="ajaxRequestToGetMyCourse();">
             		 
			
    	<form action="atn.php" method="POST">
        	<div align="center" >
                        <h2>Class Attendance</h2>
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




            <input class="menulista" type ="submit" value="Make Attendance" name="update"/>


        </form>
<hr/>



			</div>					
							
		</body>
</html>
