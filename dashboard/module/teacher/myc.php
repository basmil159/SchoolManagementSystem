$link,<?php  
include_once('main.php');
 $emn = $_REQUEST['classid'];


$courses = "SELECT distinct id , name FROM  takencoursebyteacher WHERE classid='$emn' and teacherid='$check'";
$rescourse = mysqli_query($link,$courses);

while($r=mysqli_fetch_array($rescourse))
{
 echo $r['name'];

}


?>
