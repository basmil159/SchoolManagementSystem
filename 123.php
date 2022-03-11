<!-- <?php 
			$dir=glob('images/{*.jpg,*.png}',GLOB_BRACE);
			print_r($dir);
		 ?> -->
         <?php
$str1 = 'The_man/man/heman';
// echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $str1)."\n";
// $myString = 'This is a string';
$words = explode('/', $str1);
$lastWord = array_pop($words);
echo ($lastWord);
?>