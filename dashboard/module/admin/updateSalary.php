<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateTeacherSalary.js"></script>
		</head>
    <body>
<?php

include_once('assests/php/mainNav.php');
?>
				<h2 align="center">Update Teacher Salary</h2>
			  <hr/>
        <div align="center">
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getTeacherForUpdateSalary(this.value);"></td>
                </tr>
            </table>
          <h4 style="color: red">NOTE: Only One Teacher Salary Can Update at a time.<br/> Please Search For A Specific Teacher !!</h4>
        </div>
        <br/>
        <div align="center" class="table">
            <form action="#" method="post">
                <table border="1" cellpadding="6" id='updateTeacherSalary'>
                </table>
            </form>
        </div>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $salary = $_POST['salary'];
    $sql = "UPDATE teachers SET id='$Id', name='$Name', salary='$salary' WHERE id='$Id'";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not Update data: '.mysqli_error());
    }
    echo "Update data successfully\n";
}
?>
