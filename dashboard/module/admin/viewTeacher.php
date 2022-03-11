<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM teachers;";
$res= mysqli_query($link,$sql);
$string = "";
$images_dir = "../images/";
while($row = mysqli_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['address'].'</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['hiredate'].'</td><td>'.$row['salary'].
    "</td><td><img class='avatar' src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr>';
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchTeacher.js"></script>
		</head>
    <body>
			  
<?php

include_once('assests/php/mainNav.php');
?>
			  <hr/>
        <div align="center">
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getTeacher(this.value);"></td>
                </tr>
            </table>
        </div>
        <br/>
        <div align="center"><h2>Teachers List</h2></div>
        <<div align="center" class="table">
            <table id='teacherList'>
                <thead>
                    
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Hire Date</th>
                    <th>Salary</th>
                    <th>Picture</th>
                </tr>
                </thead>
                <?php echo $string;?>
            </table>
        </div>
		</body>
</html>
