<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
			  
<?php
include_once('assests/php/mainNav.php');
?>			  <hr/>
        <div align='center'>
            <h1>Student Tuition Fees</h1>
            <form action="#" method="post">
                <table cellpadding="6">
                  <thead>
                      
                  <tr>
                      <td>Student ID:</td>
                      <td><input type="text" name="id" placeholder="Enter Student Id."></td>
                  </tr>
                  </thead>
                  <tr>
                      <td>Ammount:</td>
                      <td><input type="text" name="ammount" placeholder="Enter Ammount."></td>
                  </tr>
                  <tr>
                      <td>Month:</td>
                      <td><input type="text" name="month" placeholder="Enter Month.(April as 4)"></td>
                  </tr>
                  <tr>
                      <td>Year:</td>
                      <td><input type="text" name="year" placeholder="Enter Year.(2016)"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit" value="Submit"></td>
                  </tr>
                </table>
            </form>
        </div>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $ammount = $_POST['ammount'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $sql = "INSERT INTO payment VALUES('','$id','$ammount','$month','$year')";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: '.mysqli_error());
    }
    echo "Transaction successfull\n";
}
?>
