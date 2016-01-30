<?php 

$name = trim("     Mina     Rizk                     Shehata          ");
$name = preg_split('/[\s]+/', $name);
print_r($name);

 ?>