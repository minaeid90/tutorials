<?php 


$name = "Mina";
$email = "minaeid90";
$message = "Hello World";
$mobile = "01283675510";

$data = array(
	'name' => $name,
	'email' => $email,
	'message' => $message,
	'mobile'	=> $mobile

	);

// print_r($data);


$fields_sql = "`".implode("`, `", array_keys($data))."`";
$values_sql = "`".implode("`, `", array_values($data))."`";
// echo $fields_sql;

$sql = "
INSERT INTO `table` ($fields_sql)
VALUES ($values_sql);
";

echo $sql;
 ?>