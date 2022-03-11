<?php  
include_once('main.php');
 $emn = $_REQUEST['classname'];


$courses = "SELECT DISTINCT id,name FROM course WHERE classid in (select id from class where  section='$emn')";
$rescourse = mysqli_query($link,$courses);

// echo "<option value='' selected='' disabled=''>courses</option>";
while($r=mysqli_fetch_array($rescourse))
{
 echo '<option value="',$r['id'],'" >',$r['id'],'</option>';

}


?>
