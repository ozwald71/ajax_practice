<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
	$food = $_GET['food'];
	$foodArray = array('tuna', 'bacon', 'beef', 'loaf', 'ham', 'shit');
	if(in_array($food, $foodArray))
		echo 'Yes we have '.$food.'!';
	elseif($food=='')
		echo 'Enter a food';
	else
		echo 'Nope, we dont have '.$food.'!';
echo '</response>';
?>