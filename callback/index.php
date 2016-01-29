<?php 
function string($string, $callback)
{
	$results = array(
		'upper' => strtoupper($string),
		'lower' => strtolower($string)
		 );

	if (is_callable($callback)) {
		call_user_func($callback, $results);
	}
	return $results;
}

string("Mina", function($name){
	echo $name['lower'];
});
 ?>