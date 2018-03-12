<?php
	

	if (isset($_POST['text'])){

		$uploaddir = getcwd() .'\text/';
		move_uploaded_file($_FILES['text']['tmp_name'], $uploaddir.$_FILES['text']['name']);

	}

	header("Location:../index.php");

?>
