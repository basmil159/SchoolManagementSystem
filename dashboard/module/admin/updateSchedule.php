<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateExamSchedule.js"></script>
		</head>
    <body>
			  
<?php

include_once('assests/php/mainNav.php');
?>
			  <hr/>
        <center>
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getExamScheduleForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2>Only One Class Schedule Can Update at a time.</h2>
            <form action="#" method="post">
                <table border="1" cellpadding="6" id='updateExamSchedule'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $Classdate = $_POST['examdate'];
    $Classtime = $_POST['examtime'];
    $courseid = $_POST['courseid'];
    $sql = "UPDATE schedule SET Class='$id', day='$Classdate', time='$Classtime', course='$courseid' WHERE (Class='$id' And day='$Classdate') OR (day='$Classdate' And course='$courseid') OR (course='$courseid' And Class='$id')";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not Update data: '.mysqli_error());
    }
    echo "Update data successfully\n";
}
?>
