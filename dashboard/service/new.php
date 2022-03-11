<?php
include_once('mysqlcon.php');
$sql="SELECT usertype FROM users WHERE userid='st-124-1' and password='125'";
$result=mysqli_query($link,$sql);
$count=mysqli_num_rows($result);
$type=mysqli_fetch_array($result);
$control=$type['usertype'];
// echo $result;
echo $count;
// echo $type;
echo $control;
?>
