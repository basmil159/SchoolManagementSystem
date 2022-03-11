<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<thead><tr>
    <th>ID</th>
    <th>Name</th>
    <th>Salary</th>

    </tr></thead>";
$sql = "SELECT id,name,salary FROM teachers WHERE id like '$searchKey%' OR name like '$searchKey%' ";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td><input value='".$row['id']."'name='id' readonly>".
    "</td><td><input type='text' value='".$row['name']."'name='name' readonly>".
    "</td><td><input type='text' value='".$row['salary']."'name='salary'></td></tr>";
}
echo $string."<input type='submit' name='submit'value='Submit'>";
?>
