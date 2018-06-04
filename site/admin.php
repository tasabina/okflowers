<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="admin_page.css" />
		<title>Okflowers</title>
	</head>
	<body>
		<header>
			<h1>Administration page</h1>
			<p>The changing page</p>
		</header>
		<main>
			<div>
				<form action="admin/action_update.php" method="post" enctype="multipart/form-data">
				<div>
				<label>Section:</label>
				</div>
				<div>
				<select id="id" name="id">
					<option value="1">Hello</option>
					<option value="2">About me</option>
					<option value="3">My work</option>
					<option value="4">My offer</option>
					<option value="5">Contact</option>
				</select>
				</div>
				<div>
					<label>Title:</label>
				</div>
				<div>
					<input type="text" name="title" placeholder="Title" size="65"/>
				</div>
				<div>
					<label>Subtitle:</label>
				</div>
				<div>
					<input type="text" name="subtitle" placeholder="Subtitle" size="65"/>
				</div>
				<div>
					<label>Text:</label>
				</div>
				<div>
					<textarea name="article" placeholder="Text"></textarea>
				</div>
				<div>
					<input type="submit" value="Send form" class="btn">
				</div>
				</form>
			</div>
			<div class="upload">
				<form action="data/get_image.php" method="POST" enctype="multipart/form-data" id="uploadImage">
				<div>
					<label for="image">File:</label>
				</div>
				<div>
					<input type="file" name="image" id="image"/>
				</div>
				<div>
					<input type="submit" name="image" id="image" value="Upload" class="btn"/>
				</div>
				</form>
			</div>
			<div>
			<?php
				$dir = "data\img";
				$files = scandir($dir);
				for ($i = 0; $i < count($files); $i++) { ?>
					<img src="<?=$dir."/".$files[$i]?>" alt="" />
					<?php if (($i + 1) % 4 == 0) { ?><br /><?php } ?>
				<?php } ?>
			</div>
		</main>
		<footer>
			<div>2017</div>
		</footer>
	</body>
</html>
