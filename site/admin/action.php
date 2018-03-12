<?php
	require_once 'connection.php';
	$link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
		or die ("<p> Error connection to Data base:". mysql_error()."</p>");
			mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysql_error()."</p>");
			echo "<p> You are connected!</p>";

	mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysql_error()."</p>");
			echo "<p>You are connected to MySQL:".DATABASE_NAME."</p>";

	$id=0;
	$title=$_POST['title'];
	$subtitle=$_POST['subtitle'];
	$article=$_POST['article'];

	$query = "INSERT INTO `article`(`id`, `title`, `subtitle`, `text`, `date`) VALUES ('".$id."','".$title."','".$subtitle."','".$article."','".$article."')";
    
   	mysqli_query($link, $query);

   	echo $query;

	header("Location:../index.php");

?>


