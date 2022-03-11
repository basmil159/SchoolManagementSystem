<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchKey = $_GET['key'];
$string = "<thead><tr>
    <th>ID</th>
    <th>Class Date</th>
    <th>Class Time</th>
    <th>Course ID</th>
</tr></thead>";
$sql = "SELECT * FROM schedule WHERE Class like '$searchKey%' OR day like '$searchKey%' OR course like '$searchKey%'";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
    $string .= "<tr><td><input value='".$row['Class']."'name='id' readonly >".
    "</td><td><input type='text' value='".$row['day']."'name='examdate'>".
    "</td><td><input type='text' value='".$row['time']."'name='examtime'>".
    "</td><td><input type='text' value='".$row['course']."'name='courseid'>"."</td></tr>";
}
echo $string."<input type='submit' name='submit'value='Submit'>";
?>
