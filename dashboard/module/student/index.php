<?php
include_once('main.php');

$st=mysqli_query($link,"SELECT *  FROM students WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
             		 

			<br/><br/>
<?php
include_once('../assests/php/banner.php');
include_once('assests/php/stdnavbar.php');
?>
			  <hr/>
			  
			  <div align="center">
			  	<h1>My Information</h1>
                <img class="avatar"src="../images/<?php echo $check.".jpg";?>" height="95" width="95" alt="<?php echo $check." photo";?> ">
			  <table border="1">
			  <thead>
			  <tr>
			  <th>Student ID</th>
			  <th>Student Name</th>
			  <th>Student Phone</th>
			  <th>Student Email</th>
			  <th>Student Gender</th></tr></thead><tbody>
			  <tr>
			  
			  <td><?php echo $stinfo['id'];?></td>
			  <td><?php echo $stinfo['name'];?></td>
			  <td><?php echo $stinfo['phone'];?></td>
			  <td><?php echo $stinfo['email'];?></td>
			  <td><?php echo $stinfo['sex'];?></td></tr></tbody>
              <thead>
              <tr style="margin-top:10px; ">
			  <th>Student DOB</th>
			  <th>Student Admission Date</th>
			  <th>Student Address</th>
			  <th>Student Parent ID</th>
			  <th>Student class ID</th>
			  
			  </tr></thead><tbody>
              <tr>
			  <td><?php echo $stinfo['dob'];?></td>
			  <td><?php echo $stinfo['addmissiondate'];?></td>
			  <td><?php echo $stinfo['address'];?></td>
			  <td><?php echo $stinfo['parentid'];?></td>
			  <td><?php echo $stinfo['classid'];?></td>
			  </tr></tbody>
			  
			  
			  <table
								
								</div>
		</body>
</html>

