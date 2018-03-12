<?php
	require_once 'connection.php';
	$link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
		or die ("<p> Error connection to Data base:". mysql_error()."</p>");
			mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysql_error()."</p>");
			echo "<p> You are connected!</p>";

	mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysql_error()."</p>");
			echo "<p>You are connected to MySQL:".DATABASE_NAME."</p>";

?>