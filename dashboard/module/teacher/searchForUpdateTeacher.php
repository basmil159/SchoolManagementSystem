<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$string = "<thead><tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
    <th>Phone</th>
</tr></thead><tbody>";
$sql = "SELECT * FROM teachers WHERE id='$check';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td><input value='".$row['id']."'name='id' readonly >".
    "</td><td><input type='text' value='".$row['name']."'name='name' readonly>".
    "</td><td><input type='text' value='".$row['password']."'name='password'>".
    "</td><td><input type='text' value='".$row['phone']."'name='phone'>";
}
echo $string."</td></tr></tbody></table>";
$string = "<table><thead><tr>
    <th>Email</th>
    <th>Gender</th>
    <th>DOB</th>
    <th>Address</th>
</tr></thead><tbody>";
$sql = "SELECT * FROM teachers WHERE id='$check';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td><input type='text' value='".$row['email']."'name='email'>".
    "</td><td><input type='text' value='".$row['sex']."'name='gender' readonly>".
    "</td><td><input type='text' value='".$row['dob']."'name='dob' readonly>".
    "</td><td><input type='text' value='".$row['address']."'name='address'>".
    "</td></tr>";
}
echo $string."</tbody>";
?>
<!--<input type="submit" value="Submit">
<input type="text" name="fname"><br>-->
