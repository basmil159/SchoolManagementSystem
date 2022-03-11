<?php
error_reporting(1);
include_once('main.php');
$atten=$_REQUEST['curid'];
//print_r($_REQUEST);
 $d=date("Y-m-d");

  
   foreach($atten as $a)
   {
      
      $sql="insert into attendance(date,attendedid) values('$d','$a')";
      mysqli_query($link,$sql);
   }
   
   
   
   
   
  


  

?>
<html>
    <head>
          <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
            <script src = "JS/login_logout.js"></script>
            <script src = "JS/modifyValidate.js"></script>
      </head>

                    <body>
                   
      
                     <?php
include_once('assests/php/tecnavbar.php');
?>
 <center>
 <h4>Attendance Successfully.</h4>
  <p>go home page.click Home button.<p>
 </center>
</body>
</html>