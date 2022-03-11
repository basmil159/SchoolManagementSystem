<?php
include_once('main.php');
$count=0;
$st=mysqli_query($link,"SELECT *  FROM teachers WHERE id='$check' ");
$stinfo=mysqli_fetch_array($st);

$attendmon = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$check' and  MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE )";
$resmon = mysqli_query($link,$attendmon);

while($r=mysqli_fetch_array($resmon))
{
 $count+=1;
}
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
    background-color: gray;
           }
		
		</style>
    <body>
             		 
		
			  				<?php
include_once('assests/php/tecnavbar.php');
?>
						</div>
						 
				    
			
						</li>
				</ul>
			 
			  <h1 style="font-size: 10vw; color: #377bb9; top:20%; position: relative; text-align:center;">
                              
                       <?php echo "$".$stinfo['salary'];?></td>
                       </h1>
			    

			 
			  
			  
			  
			  
								
								</div>
			<hr/>
		</body>
</html>

