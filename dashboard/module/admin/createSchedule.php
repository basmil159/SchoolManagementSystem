
<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <script type="text/javascript" src="jquery-1.12.3.js"></script>
                <script src = "getCourse.js"></script>
				<script src = "JS/login_logout.js"></script>
		</head>
    <body onload="ajaxRequestToGetCourse();">
			  
<?php

include_once('assests/php/mainNav.php');
?>
			  <hr/>
        <div align='center'>
            <h2>Class Schedule List</h2>
            <form action="#" method="post">
              <table cellpadding="6">
                 <thead>
                     
                  <tr>
                        <td>Class:</td>
                        <td>
                            <select id="myclass" name="id" onchange="ajaxRequestToGetCourse();">
                            <!-- <option selected='' disabled=''>--Student Class-- </option> -->
                            <?php  
                                $classget = "SELECT  * FROM class";

                                $res= mysqli_query($link,$classget);

                                while($cln=mysqli_fetch_array($res))
                                {
                                 echo '<option value="',$cln['section'],'" >',$cln['section'],'</option>';
                                }
                            ?>
                            </select>
                        </td>
                    
                     
                  </tr>
                 </thead>
                  <tr>
                    <td> Day:</td>
                    <td>
                        <select type="text" name="day">
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                        </select>
                    </td>
                  </tr>
                  <tr>
                      <td> Time:</td>
                      <td><select id="Time" name="Time">
                            <option value="1">10:00 AM - 10:45 AM</option>  
                            <option value="2">11:00 AM - 11:45 AM</option>  
                            <option value="3">12:35 PM - 01:20 PM</option>  
                            <option value="4">01:35 PM - 02:20 PM</option>
                          </select>
                    </td>
                  </tr>
                  <tr>
                      <td>Course:</td>
                      <td>
                        <select id="mycourse"name="mycourse">
                        </select>
                      </td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit"value="Submit"></td>
                  </tr>
              </table>
            </form>
        </div>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $Day = $_POST['day'];
    $Time = $_POST['Time'];
    $courseId = $_POST['mycourse'];
    $x=0;
    $sq=mysqli_query($link,"SELECT * FROM schedule");
    while ($row=mysqli_fetch_array($sq)) {
        if ($row['day']==$Day and $row['Class']==$id and $row['course']==$courseId) {
            $x=1;
        }
    }
    if ($x==1) {
        echo "<div align='center'><font  color='red'>Data Exists</font></div>";
    }else{
        $sql = "INSERT INTO schedule VALUES('','$id','$Day','$courseId','$Time')";
        $success = mysqli_query($link,$sql);
        if(!$success) {
            die('Could not enter data: '.mysqli_error($link));
    }
        echo "<div align='center'><font align='center' color='green'>Entered data successfully</font></div>\n";
    }
}
?>
