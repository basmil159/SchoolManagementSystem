
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
                                $classget = "SELECT  * FROM class  group by name order by id";

                                $res= mysqli_query($link,$classget);

                                while($cln=mysqli_fetch_array($res))
                                {
                                 echo '<option value="',$cln['section'],'" >',$cln['name'],'</option>';
                                }
                            ?>
                            </select>
                        </td>
                    
                     
                  </tr>
                 </thead>
                  
                  <tr>
                      <td>Course:</td>
                      <td>
                        <select id="mycourse" name="mycourse">
                        </select>
                      </td>
                  </tr>
                    <tr>
                        <?php 
                            include_once('../../service/mysqlcon.php');
                            if($r_set = $link->query("SELECT * from teachers order by name")){

                            echo "<td>Teacher Name:</td>
                                  <td><select name='tehrName' value=''>Teacher Name</option>";
                            while ($row = $r_set->fetch_assoc()) {
                            echo "<option value=$row[id]>$row[name]</option>"; 
                            /* Option values are added by looping through the array */ 
                            }
                             echo "</select></td>";
                            }else{
                            echo $link ->error;
                            }
                        ?>
                    </tr>
                    <tr>
                        
                        <td colspan="2"><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </center>
		</body>
</html>

<?php
include_once('../../service/mysqlcon.php');

if(!empty($_POST['submit'])){
    $class = $_POST['id'];
    $teacher=$_POST['tehrName'];
    $course = $_POST['mycourse'];
    // $courseId = "";
    $classid='';
    $r_set =  mysqli_query($link,"SELECT distinct(id) from class where section='$class' ");
    while ( $row = mysqli_fetch_array($r_set)) {
    // $courseId = $row['id'];
    $classid=$row['id'];
    };   
    $sql = "UPDATE `course` SET `teacherid`='$teacher' WHERE id='$course'";
    $success = mysqli_query($link,$sql);
    $sql = "INSERT INTO `takencoursebyteacher` Values ('$classid','$course','$teacher')";
    $success = mysqli_query($link,$sql);
    if (!$success) {
        echo "<center><font color='red'>Course".$classid."already added or is not on the list of class ".$class.".</font></center>";
    }else{
    echo " <center> <font color='green'>Course Assined to ".$teacher." successfully\n</font></center>";
    }
}

?>
