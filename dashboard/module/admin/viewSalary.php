<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$stringTeacher = "<thead><tr>
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>
    
    </tr></thead>";
$sql = "SELECT id,name,salary FROM teachers";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $stringTeacher .= "<tr><td>".$row['id'].
    "</td><td>".$row['name']."</td><td>".$row['salary'].
    "</td></tr>";
}

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
<?php

include_once('assests/php/mainNav.php');
?>
				
			  <hr/>
            <h1 align="center">Teacher Salary List</h1>
        <center>
            <table border="1">
                <?php echo $stringTeacher;?>
            </table>
        </center><hr/>
		</body>
</html>
