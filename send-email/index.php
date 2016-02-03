<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send Email</title>
</head>
<body>
<?php 
$to = "minaeid90@gmail.com";
$subject = "Hello message";
$message = "This is me mina sending email to myself.";
$headers = "From: minaeid90@gmail.com";

mail($to, $subject, $message, $headers);
 


 ?>
	
</body>
</html>