<?php
include_once('main.php');

$st=mysqli_query($link,"SELECT password  FROM students WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
				<script src = "JS/modifyValidate.js"></script>
		</head>
		<style>
		input {
    text-align: center;
    background-color: #e7e6e4;
           }
		
		</style>
    <body>
             		 
<?php
include_once('../assests/php/banner.php');
include_once('assests/php/stdnavbar.php');
?>
			<br/><br/>

			  <hr/>
			  
			  <div align="center" class="mod">
			  	<h1>Change Password</h1>
				
				<form  onsubmit="return modifyValidate();" action="modifysave.php" method="post">
              <p id="myP"></p>
			  <table border="1" style="width: fit-content;">
			  <thead>  
                <tr>
    			  <th align="center">Student Password</th>
    			 </tr>
              </thead>
              <tbody>
                  
			  <tr>
			  
			  <td>
                  
              <input type="text"  id="password" name="password" value="<?php echo $stinfo['password'];?>"/></td>
              </tbody>
              
			</table>
			  <br/>
			  <input type="submit" value="Change Password"/>
			  </form>
								
								</div>
		</body>
</html>


