<?php
	
	$path = "laogou.html";
	$ch = file_get_contents("http://www.ploveruav.com");
	file_put_contents($path, $ch);
?>