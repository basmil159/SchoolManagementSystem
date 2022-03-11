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
include_once('assests/php/tecnavbar.php');
?>
<div align="center">
<img alt="Avatar" class="avatar" src="../images/<?php echo $check ?>.jpg" alt="<?php echo $check ?>"/>
</div>


<div class ="header">
<?php
$sql = "SELECT * FROM teachers WHERE id='$check';";
$res = mysqli_query($link,$sql);
while($row = mysqli_fetch_array($res)){
   echo "<center>";
   echo "<p>ID: ".$row['id']."<br />";
   echo "Name: ".$row['name']."<br />";
   echo "Phone: ".$row['phone']."<br />";
   echo "Date of Birth: ".$row['dob']."<br />";
   echo "Phone ".$row['phone']."<br />";
   echo "Email Address: ".$row['email']."<br />";
   echo "Sex: ".$row['sex']."<br />";
   echo "Hire DAte: ".$row['hiredate']."<br />";
   echo "Salary: ".$row['salary']."<br /></p>";
   
   
}

?>
<DIV align='center'>
	<a href="updateTeacher.php"><button>Edit Profile</button></a>		
</DIV>
</center>		 
			  <hr/>
		</body>
</html>
