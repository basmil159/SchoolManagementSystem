<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<title>Cosmos School</title>
	<!-- StyleSheet CSS File -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Fav Icon -->
	<link rel="stylesheet" type="text/css" href="images/fav_icon.png">
</head>
<body>
	<?php
		$IPATH = $_SERVER["DOCUMENT_ROOT"]."/SchoolManagementSystem/assests/php/";
		include($IPATH."topheadernav.html");
	?>
	<section class="header">
		<!-- bredcrum -->
		<div class="bredcrum">
			<h1>Gallery</h1>
			<nav class="bredcrum_nav">
				<ul>>
					<li><a class="bredcrum_home" href="index.php">Home</a></li>
					<li>/</li>
					<li class="active-page">Gallery</li>
				</ul>
			</nav>
		</div>
	</section>
		<!-- Content Area -->
		<div class="gallery-container">
			<?php
				$dir=glob('images/gallery/{*.jpg,*.png}',GLOB_BRACE);
				foreach ($dir as $key => $value) {
			?>
			<div class="image">
				<h1>
					<?php
						$str1=preg_replace('/\W\w+\s*(\W*)$/', '$1', $value);
						$words = explode('/', $str1);
						$lastWord = array_pop($words);
						echo ($lastWord);
					 ?>
				</h1>
				<img src="<?php echo($value);?>" alt="
					<?php
						$words = explode('/', $value);
						$lastWord = array_pop($words);
						echo ($lastWord);
					?>
				">
			</div>

				<?php

				}
			 ?>
		</div>
	<?php
		include($IPATH."footer.html");
	?>
</body>
</html>
