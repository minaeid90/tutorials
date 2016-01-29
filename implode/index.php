<?php 


$name = "Mina";
$email = "minaeid90";
$message = "Hello World";

$data = array(
	'name' => $name,
	'email' => $email,
	'message' => $message

	);

// print_r($data);


$fields_sql = "'".implode("`, `", array_keys($data))."'";

// echo $fields_sql;

$sql = "
INSERT INTO `table` (`name`, `email`, `message`) 
VALUES (`$name`, `$email`, `$message`)
";

echo $sql;
 ?>