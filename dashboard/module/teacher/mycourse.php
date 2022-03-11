<?php  
include_once('main.php');
 $emn = $_REQUEST['classid'];


$courses = "SELECT distinct id , name FROM course WHERE teacherid='$check' and classid in(SELECT distinct id from class where section='$emn')";
$rescourse = mysqli_query($link,$courses);

// echo '<option selected="" disabled="">--select course--</option>';
while($r=mysqli_fetch_array($rescourse))
{
 echo '<option value="',$r['id'],'" >',$r['name'],'</option>';

}


?>
