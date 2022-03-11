<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
?>

<html>
    <head>
            <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <script type="text/javascript" src="jquery-1.12.3.js"></script>
            <script type="text/javascript" src="getCourse.js"></script>
                <script src = "JS/login_logout.js"></script>
        </head>
    <body onload="ajaxRequestToGetSchedule();">
              
<?php

include_once('assests/php/mainNav.php');
?>
              <hr/>
        <center>
            <h2>Class Schedule List</h2><br>
            Select Class:
            <select id="myclass" name="id" onchange="ajaxRequestToGetSchedule();">
                <!-- <option selected='' disabled=''>--Student Class-- </option> -->
                <?php  
                    $classget = "SELECT  * FROM class";

                    $res= mysqli_query($link,$classget);

                    while($cln=mysqli_fetch_array($res))
                    {
                     echo '<option value="',$cln['section'],'" >',$cln['section'],'</option>';
                    }
                ?>
            </select>
            <table id="myschedule">
                
            </table>
        </center>
        </body>
</html>
