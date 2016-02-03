<?php 
$config['db'] = array(
	'host' 		=> 'localhost',
	'username' 	=> 'root',
	'password' 	=> '',
	'dbname' 	=> 'youtube'
	);

$host = $config['db']['host'];
$dbname = $config['db']['dbname'];
$username = $config['db']['username'];
$password = $config['db']['password'];

$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$query = $db->query("SELECT * FROM `customers`");

while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
	echo $row['name'], '<br>';
}

 ?>