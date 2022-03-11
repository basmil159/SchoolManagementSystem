<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateStudent.js"></script>
		</head>
    <body>
			 
<?php

include_once('assests/php/mainNav.php');
?>
			  <hr/>
        <div align="center">
            <table>
                <thead>
                    
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getStudentForUpdate(this.value);"></td>
                </tr>
                </thead>
            </table>
          <h2>Only One Student Can Update in a time.</h2>
        </div>
        <br/>
        <div align="center" class="table">
            <form action="#" method="post" onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateStudentData'>
                    
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $stuId = $_POST['id'];
    $stuName = $_POST['name'];
    $stuPassword = $_POST['password'];
    $stuPhone = $_POST['phone'];
    $stuEmail = $_POST['email'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['dob'];
    $stuAddmissionDate = $_POST['addmissiondate'];
    $stuAddress = $_POST['address'];
    $stuParentId = $_POST['parentid'];
    $stuClassId = $_POST['classid'];
    $image = $_FILES['pic']['tmp_name'];
    $uploads_dir = "../images";
    move_uploaded_file($image, $uploads_dir."/".$stuId.".jpg");
    $sql = "UPDATE students SET id='$stuId', name='$stuName', password='$stuPassword', phone='$stuPhone', email='$stuEmail', sex='$stugender', dob='$stuDOB', addmissiondate='$stuAddmissionDate', address='$stuAddress', parentid='$stuParentId', classid='$stuClassId' WHERE id='$stuId'";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not Update data: '.mysqli_error($link));
    }
    echo "Update data successfully\n";
}
?>
