<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string = "<thead><tr>
    <th>ID</th>
    <th>Student Id</th>
    <th>Amount</th>
    <th>Month</th>
    <th>Year</th>
    </tr></thead>";
$sql = "SELECT * FROM payment WHERE month <= MONTH(curdate()) AND year <= YEAR(curdate())";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td>".$row['id']."</td><td>".$row['studentid']."</td><td>".$row['amount'].
    "</td><td>".$row['month']."</td><td>".$row['year']."</td></tr>";
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
        <center>
            <table border="1">
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
