<?php  
include_once('main.php');
 $em = $_REQUEST['cid'];
 // $x='';

$courseinfo = "SELECT * FROM takencoursebyteacher WHERE courseid='$em' and classid in(SELECT id from class where section in (select classid from students where id='$check'))";
$rescou = mysqli_query($link,$courseinfo);

// $x=$rn['teacherid'];
$name = mysqli_query($link,"SELECT * from teachers where id in(SELECT teacherid FROM takencoursebyteacher WHERE courseid='$em' and classid in(SELECT id from class where section in (select classid from students where id='$check')))");
$tch=mysqli_fetch_array($name);

$courseid = "SELECT * FROM class WHERE section in (select classid from students where id='$check')";
$rescoud = mysqli_query($link,$courseid);

$st=mysqli_fetch_array($rescoud);//courseinfo
while($rn=mysqli_fetch_array($rescou))
{
 echo "Teacher ID: ",$rn['teacherid'],"<br/>";
  echo " Your Section : ",$st['section'],"<br/>";
  echo " Your Class Room : ",$st['room'],"<br/>";
 

echo "Teacher Name: ",$tch['name'],"<br/>";
echo "Teacher Email: ",$tch['email'],"<br/>";

}


?>
