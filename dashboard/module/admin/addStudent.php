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
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/newStudentValidation.js"></script>
		</head>
    <body>
			 
<?php
include_once('assests/php/mainNav.php');
?>      
			  <hr/>
        <div align="center" style="background-color: #fff";>
            <h2>Student Registration.</h2><hr/>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table cellpadding="6">
                    <thead>
                        
                    <tr>
                      <td>Student Id:</td>
                      <td><input id="stuId"type="text" name="studentId" placeholder="Enter Id"></td>
                    </tr>
                    </thead>
                    <tr>
                        <td>Student Name:</td>
                        <td><input id="stuName" type="text" name="studentName" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Student Password:</td>
                        <td><input id="stuPassword"type="text" name="studentPassword" placeholder="Enter Password"></td>
                    </tr>
                    <tr>
                        <td>Student Phone:</td>
                        <td><input id="stuPhone"type="text" name="studentPhone" placeholder="Enter Phone Number"></td>
                    </tr>
                    <tr>
                        <td>Student Email:</td>
                        <td><input id="stuEmail"type="text" name="studentEmail" placeholder="Enter Email"></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td><input type="radio" name="gender" value="Male" onclick="stuGender = this.value;"> Male <input type="radio" name="gender" value="Female" onclick="this.value"> Female</td>
                    </tr>
                    <tr>
                        <td>Student DOB:</td>
                        <td><input id="stuDOB"type="text" name="studentDOB" placeholder="Enter DOB(yyyy-mm-dd)"></td>
                    </tr>
                    <tr>
                        <td>Student Addmission Date:</td>
                        <td><input id="stuAddmissionDate"name="studentAddmissionDate"value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Student Address:</td>
                        <td><input id="stuAddress" type="text" name="studentAddress" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td>Student Parent Name:</td>
                        <td><input id="stuParentId"type="text" name="studentParentId" placeholder="Enter Parent Name"></td>
                    </tr>
                    <tr>
                        <?php 
                            include_once('../../service/mysqlcon.php');
                            if($r_set = $link->query("SELECT * from class order by id")){

                            echo "<td>Student Class:</td>
                                  <td><select id='stuClassId' type='text' name='studentClassId' placeholder='Enter Class Id'><option selected='' disabled=''>--Student Class-- </option>";
                            while ($row = $r_set->fetch_assoc()) {
                            echo "<option value=$row[section]>$row[section]</option>"; 
                            /* Option values are added by looping through the array */ 
                            }
                             echo "</select></td>";
                            }else{
                            echo $link ->error;
                            }
                         ?>
                    </tr>
                    <tr>
                      <td>Student Picture:</td>
                      <td><input id="file"type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td font="1rem"><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </div>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $stuId = $_POST['studentId'];
    $stuName = $_POST['studentName'];
    $stuPassword = $_POST['studentPassword'];
    $stuPhone = $_POST['studentPhone'];
    $stuEmail = $_POST['studentEmail'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['studentDOB'];
    $stuAddmissionDate = $_POST['studentAddmissionDate'];
    $stuAddress = $_POST['studentAddress'];
    $stuParentId = $_POST['studentParentId'];
    $stuClassId = $_POST['studentClassId'];
    //$filename = $_FILES['file']['name'];
    $filetmp =$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$stuId.".jpg");
    $sql = "INSERT INTO students VALUES('$stuId','$stuName','$stuPassword','$stuPhone','$stuEmail','$stugender','$stuDOB','$stuAddmissionDate','$stuAddress','$stuParentId','$stuClassId');";
    $success = mysqli_query($link,$sql);
    $sql = "INSERT INTO users VALUES('$stuId','$stuPassword','student');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error($sql));
    }
    echo "Entered data successfully\n";
}
?>
