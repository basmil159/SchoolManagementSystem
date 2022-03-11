<?php
include_once('main.php');

?>
<html>
    <head>
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <script type="text/javascript" src="jquery-1.12.3.js"></script>
            <script type="text/javascript" src="studentClassCourse.js"></script>
            <script src = "JS/login_logout.js"></script>
            
                
                
        </head>
    <body  onload="ajaxRequestToGetCourseCurrentClassSchedule();">
                     
             <?php
include_once('../assests/php/banner.php');
include_once('assests/php/stdnavbar.php');
?>
<div align="center" >
             <h2>Total Due Amount</h2>
             <Table id="myclass" name="myclass">
             <thead><tr>
                 <th>Date</th>
                 <th>Amount</th></tr></thead>
                 
<?php  

$classget = "SELECT * FROM payment where studentid='st-133-1'";
           
$res= mysqli_query($link,$classget);
$x='0';
$y='';
$z='1';
$string='';
while($cln=mysqli_fetch_array($res))
{
    $y=$cln['amount'];
    $x=$x+$y;
    $string.="<tr><td>".$cln['year']."-".$cln['month']."</td><td>".$cln['amount']."</td></tr>";
    $z=$z+1;
}
echo $string."<tr><th rowspan='".$z."'>Total</th>
             <td>".$x."</td></tr></Table>";

?>
                
                            
        </body>
</html>