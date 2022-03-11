<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string = "";
$sql = "SELECT * FROM course order by cast(classid as unsigned) ASC ;";
$res= mysqli_query($link,$sql);
$x=1;
$tecname='';
while($row = mysqli_fetch_array($res)){
    $tem=$row['teacherid'];
    $sq = "SELECT name FROM teachers where id='$tem';";
    $re= mysqli_query($link,$sq);
    $ro = mysqli_fetch_array($re);
    $tecname=$ro['name'];
    
    $string .= '<tr><td>'.$x.'</td><td>'.$row['id'].
    '</td><td>'.$row['name'].'</td><td>'.$tecname.
    '</td><td>'.$row['classid'].'</td></tr>';
    $x=$x+1;
}

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchCourse.js"></script>
		</head>
    <body>
<?php

include_once('assests/php/mainNav.php');
?>
				</ul>
			  <hr/>
        <div align="center">
            <table>
                <tr>
                    <td><b>Search By Id Or Name: </b></td>
                    <td><input type="text" name="searchId" placeholder="Search By Id Or Name:" onkeyup="getCourse(this.value);"></td>
                </tr>
            </table>
        </div>
        <br/>
        <div align="center"><h2>Course List</h2></center>
        <div align="center">
            <table border="1" id='courseList'>
               <thead>
                <tr>
                    <th>SN</th>
                    <th>Subj code</th>
                    <th>Subject</th>
                    <th>Teacher ID</th>
                    <th>Class ID</th>
                </tr>
               </thead>
                <?php echo $string;?>
            </table>
        </div>
		</body>
</html>
