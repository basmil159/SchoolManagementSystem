<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$session=mysqli_query($link,"SELECT name  FROM admin WHERE id='$check' ");
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/getClassName.js"></script>
        <script src = "JS/getCourseIdAndNAme.js"></script>
		</head>
    <body >
			 
<?php
include_once('../assests/php/banner.php');
include_once('assests/php/mainNav.php');
?>
			  <hr/>
        <div align="center">
            <h2>Course Registration For Student.</h2><hr/>
            <form action="#" method="post" enctype="multipart/form-data">
                <table cellpadding="6">
                    <thead>
                        
                    <tr>
                        <?php 
                            include_once('../../service/mysqlcon.php');
                            if($r_set = $link->query("SELECT  distinct(name),id from class order by id")){

                            echo "<td>Class:</td>
                                  <td><select name='clsName' value=''>Student Name</option>";
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
                    </thead>
                    <tr>
                        <td>Course Name:</td>
                        <td><input id="courseName" name="crsName" style="text-transform: capitalize;"></td>
                    </tr>
                    <tr>
                        <td>Course ID:</td>
                        <td><input id="courseId" name="crsId" placeholder=" class 1 Math = MTH01" style="text-transform: uppercase;"></td>
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
    $class = $_POST['clsName'];
    $course = $_POST['crsName'];
    $courseId = $_POST['crsId'];
    $sql = "INSERT INTO availablecourse VALUES('$courseId','$course','$class');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die("<div align='center'><font color='red'>Could not enter data:".mysqli_error($link)."<br>Please enter first 3 or 4 letter of the course name with class number <br> for eg: <font color='green'>SCI01</font> for <font color='green'>class 1 science</font></font></div>");
    }
    echo " <div align='center'> <font color='green'>Entered data successfully\n</font></div>";

    $sql = "INSERT INTO course (`name`, `teacherid`, `classid`, `id`) VALUES('$course','','$class','$courseId');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die("<div align='center'><font color='red'>Could not enter data:".mysqli_error($link)."<br>Please enter first 3 or 4 letter of the course name with class number <br> for eg: <font color='green'>SCI01</font> for <font color='green'>class 1 science</font></font></div>");
    }
}
?>