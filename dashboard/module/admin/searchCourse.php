<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<tr>
    <th>SN</th>
    <th>ID</th>
    <th>Name</th>
    <th>Teacher</th>
    <th>Class ID</th>
</tr>";
$sql = "SELECT * FROM course WHERE id like '$searchKey%' OR name like '$searchKey%' OR teacherid like '$searchKey%' OR classid = '$searchKey' order by cast(classid as unsigned) ASC  ";
$res = mysqli_query($link,$sql);
$x=1;
while($row = mysqli_fetch_array($res)){
    $string .= '<tr><td>'.$x.'</td><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['teacherid'].'</td><td>'.$row['classid'].'</td></tr>';
    $x=$x+1;
}
echo $string;
?>
