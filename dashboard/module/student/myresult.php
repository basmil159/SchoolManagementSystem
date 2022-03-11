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
             <h2>Final Result</h2>
             <Table id="myclass" name="myclass">
             <thead><tr>
                 <th>Subjects</th>
                 
<?php  

$classget = "SELECT * FROM grade where studentid='$check' order by courseid";
           
$res= mysqli_query($link,$classget);
$i=0;
$x=0;
$y='';
$z='';
// $string='';

while($cln=mysqli_fetch_array($res))
{
    echo "<th>".$cln['courseid']."</th>";
}
echo "<th>GPA</th></tr></thead><tr><th>Grade</th>";
// $string='';
$classget = "SELECT * FROM grade where studentid='$check' order by courseid";
           
$res= mysqli_query($link,$classget);
while($grd=mysqli_fetch_array($res))
{
    $y=$grd['grade'];

    if ($y=='A+') {
        $x=$x+4;
    }elseif ($y=='A') {
        $x=$x+3.6;
    }elseif ($y=='B+') {
        $x=$x+3.2;
    }elseif ($y=='B') {
        $x=$x+2.8;
    }elseif ($y=='C+') {
        $x=$x+2.4;
    }elseif ($y=='C') {
        $x=$x+2;
    }elseif ($y=='D+') {
        $x=$x+1.6;
    }elseif ($y=='D') {
        $x=$x+1.2;
    }else{
        $z='Fail';
    }
    echo "<td>".$grd['grade']."</td>";
    $i++;
}
if($i!=0){
$i=$x/$i;
}
if ($z=='') {
     echo "<td>".$i."</td></tr></Table>";
}else{
    echo "<td>-</td></tr></Table>";
}
echo "</tr></Table>";
echo "<div style='margin:-20px  ;'><h3>Total Grade: ".($i >= 3.6 ? $y='A+' : ($i >= 3.2 ? $y='A' :($i >=2.8 ? $y='B+' : ($i >=2.4 ? $y='B' :($i >=2 ? $y='C+' :($i >=1.6 ? $y='C' :($i >=1.2 ? $y='D+' :$i >=0.8 ? $y='D' : $y='F')))))))."</h3></div>";
?>
                
</div>                     
        </body>
</html>