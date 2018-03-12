<?php
	if (isset($_POST['image'])){

		$uploaddir =  getcwd() .'\img/';
		$images = $_FILES['image']['name'];
		$fdata = pathinfo($images);
		$ext = $fdata['extension'];

		$newimgname = 'img_'.time().'.'.$ext;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploaddir.$newimgname);

	}

	header("Location:../index.php");

?>
