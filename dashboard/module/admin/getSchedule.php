<?php  
include_once('main.php');
$emn = $_REQUEST['class'];
// echo($emn);
echo "<thead><tr>
            <th>Period</th>
            <th>Sunday</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr></thead><tr>
        ";          
$x=1;
$fstPeriod="10:00 AM - 10:45 AM";
$secPeriod="11:00 AM - 11:45 AM";
$thdPeriod="12:35 PM - 01:20 PM";
$fthPeriod="01:35 PM - 02:20 PM";
while ($x<=4){                                
    $sql = "SELECT DISTINCT * FROM schedule where Class='$emn' and time='$x' ORDER BY case when day='Sunday' then 1
                                                when day='Monday' then 2
                                                when day='Tuesday' then 3
                                                when day='Wednesday' then 4
                                                when day='Thursday' then 5
                                                else 6
                                                end asc  
                                                ";
    $res= mysqli_query($link,$sql);

    $sun=$mon=$tue=$wed=$thu=$fri='--';
    while ($row=mysqli_fetch_array($res)) {
        if ($row['time']=='1') {
            $time=$fstPeriod;
        }elseif ($row['time']=='2') {
            $time=$secPeriod;
        }elseif ($row['time']=='3') {
            $time=$thdPeriod;
        }else{
            $time=$fthPeriod;
        }
        $day=$row['day'];
        if ($day=='Sunday') {
            $sun=$row['course'];
        }elseif ($day=='Monday') {
            $mon=$row['course'];
        }elseif ($day=='Tuesday') {
            $tue=$row['course'];
        }elseif ($day=='Wednesday') {
            $wed=$row['course'];
        }elseif ($day=='Thursday') {
            $thu=$row['course'];
        }elseif ($day=='Friday') {
            $fri=$row['course'];
        }else{
            echo "error";
        }
    }
    echo "<th>".$time."</th><td>".$sun."</td><td>".$mon."</td><td>".$tue."</td><td>".$wed."</td><td>".$thu."</td><td>".$fri."</td></tr>";
    $x++;
}
?>