<?php

	require_once 'connection.php';
	$link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
		or die ("<p> Error connection to Data base:". mysqli_error()."</p>");
			mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");
	$date = new DateTime();

	mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");


?>