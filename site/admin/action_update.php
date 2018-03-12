<?php
	session_start();
	require_once 'connection.php';
	$link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
		or die ("<p> Error connection to Data base:". mysqli_error()."</p>");
			mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");
			echo "<p> You are connected!</p>";

	mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");
			echo "<p>You are connected to MySQL:".DATABASE_NAME."</p>";

	$id=0;
	$title=$_POST['title'];
    $subtitle=$_POST['subtitle'];
	$article=$_POST['article'];
	$section=$_REQUEST['id'];

	if ($section == 1){

        $query = "UPDATE `contact` SET `title`='$title',`subtitle`='$subtitle',`text`= '$article' WHERE `id` = '$section'";

    }
    elseif ($section !== 1){
        $query = "UPDATE `article` SET `title`='$title',`subtitle`='$subtitle',`text`= '$article' WHERE `id` = '$section'";
    }

   	mysqli_query($link, $query);

   	echo $section;

	#header("Location:../index.php");
	session_destroy();

?>


