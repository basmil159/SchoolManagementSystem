<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM availablecourse order by classid;";
$res= mysqli_query($link,$sql);
$string = "";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteCourseTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='Delete'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['classid'].'</td></tr></form>';
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
				</ul>
			  <hr/>
        <div align="center">
            <h2>Delete Course</h2><hr/>
              <table border="1">
                <thead>
                    
                <tr>
                    <th>Select For Delete</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                </tr>
                </thead>
                <?php echo $string;?>
              </table>
        </div>
		</body>
</html>
