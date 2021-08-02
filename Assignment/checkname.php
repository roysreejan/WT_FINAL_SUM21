<?php
	include 'controllers/CategoryController.php';
	$name = $_GET["name"];
	$categories  = checkname($categories)
	if($categories)
	{
		echo "invalid"
	}
	else echo "valid";
?>	