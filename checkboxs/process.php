<?php 
if (isset($_GET['language'])) {
	$language = $_GET['language'];

	
}

 ?>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Language Choosen</title>
 </head>
 <body>
 		<strong><?php echo "Your prefered language is ".$language; ?></strong>
 </body>
 </html>