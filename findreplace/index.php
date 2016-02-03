
<?php 

function addDelimiter(&$value) {
	$value = '/'.trim($value).'/';	

}
function trimValue(&$value){
	$value = trim($value);
}

if (isset($_POST['find'],$_POST['replace'], $_POST['text'])) {

	if (!empty($_POST['find'])) {
		$find = explode(',', $_POST['find']);
		array_walk($find, 'addDelimiter');
	}

	

	$replace = (!empty($_POST['replace']))?preg_split('/,\s+/', $_POST['replace']):'';
	echo '<pre>',print_r($replace, true),'</pre>';
	$text = (!empty($_POST['text']) and isset($_POST['text'])) ? preg_replace($find, $replace, $_POST['text']) : '';
	

}


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Find Replace</title>
</head>
<body>
	<form action="" method="POST">
		<p>
			<input type="text" name="find" placeholder="text, to, find">
			<input type="text" name="replace" placeholder="Replace with">
		</p>
		<p>
			<textarea name="text"  placeholder="text" cols="30" rows="10"><?php echo (isset($text))?$text:""; ?></textarea>
		</p>
		<input type="submit" value="Submit">
	</form>
</body>
</html>