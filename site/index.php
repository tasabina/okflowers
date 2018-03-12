<?php
	require_once 'admin\connection.php';
	$link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
		or die ("<p> Error connection to Data base:". mysqli_error()."</p>");
			mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");
	$date = new DateTime();

	mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Okflowers</title>

	<link rel="shortcut icon" href="app/images/ok_favicon.png">

    <link rel="stylesheet" type="text/css" href="app/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css" href="app/site.css" />

	<link rel="stylesheet" type="text/css" href="app/magister.css" />

    <script src="app/scripts/modernizr-2.6.2.js"></script>

	<!-- Fonts -->

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 

	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Pacifico" rel="stylesheet">

</head>



<body class="theme-invert">



<nav class="mainmenu">

	<div class="container">

		<div class="dropdown">

			<button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

			<!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->

			<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">

				<li><a href="#head" class="active">Hello</a></li>

				<li><a href="#about">About me</a></li>

				<li><a href="#themes">My works</a></li>

				<li><a href="#offer">My offer</a></li>

				<li><a href="#contact">Contact</a></li>

			</ul>

		</div>

	</div>

</nav>





<!-- Main (Home) section -->

<section class="section" id="head">

	<div class="container">



		<div class="row">

			<div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">	



				<!-- Site Title, your name, HELLO msg, etc. -->

				<h1 class="title">OK flowers</h1>

				<h2 class="subtitle">Wounderful flowers for you</h2>



				<!-- Short introductory (optional) -->

				<h3 class="tagline">

					You can write all about you suggestions<br>

					So, this is a page for short information about you.

				</h3>

				

				<!-- Nice place to describe your site in a sentence or two -->

				<p><a class="btn btn-default btn-lg" href="#about">Learn a little bit more now</a></p>

	

			</div> <!-- /col -->

		</div> <!-- /row -->

	

	</div>

</section>



<!-- Second (About) section -->

<section class="section" id="about">

	<div class="container">

	

		<h2 class="text-center title">About me</h2>

		<div class="row">

			<div class="col-sm-4 col-sm-offset-2">    

				<h5><strong>About me<br></strong></h5>

				<p>So, this page about me, all this about me. My work, my family, my hobbies.

			    	As was the case with the mobile revolution, and the web before that, machine learning will cause us to rethink, restructure, and reconsider what’s possible in virtually every experience we build. In the Google UX community, we’ve started an effort called “human-centered machine learning” to help focus and guide that conversation. Using this lens, we look across products to see how machine learning (ML) can stay grounded in human needs while solving for them—in ways that are uniquely possible through ML. Our team at Google works across the company to bring UXers up to speed on core ML concepts, understand how to best integrate ML into the UX utility belt, and ensure we're building ML and AI in inclusive ways.</p>    

			</div>

			<div class="col-sm-4">

				<h5><strong>And a little bit more<br></strong></h5>    

				<p>Google Clips is an intelligent camera designed to capture candid moments of familiar people and pets. It uses completely on-device machine intelligence to learn to only focus on the people you spend time with, as well as to understand what makes for a beautiful and memorable photograph. Using Google Clips as a case study, we’ll walk through the core takeaways after three years of building the on-device models, industrial design, and user interface—including what it means in practice to take a human-centered approach to designing an AI-powered product.</p>    

				<h5><strong>Get in touch<br></strong></h5>    

				<p><a href="#">Vimeo</a> / <a href="#">Twitter</a> / <a href="#">LinkedIn</a> / <a href="#">Facebook</a></p>

			</div>

		</div>

	</div>

</section>



<!-- Third (Works) section -->
<section class="section" id="themes">

<?php include("include/gallery.php");?>

</section>

<!-- Fourth (Offers) section -->

<section class="section" id="offer">

	<?php include("include/offer.php");?>

</section>

<!-- Fiveth (Contact) section -->

<section class="section" id="contact">

	<?php include("include/contact.php");?>

</section>









    <script src="app/scripts/jquery-1.10.2.js"></script>

    <script src="app/scripts/bootstrap.js"></script>

    <script src="app/scripts/respond.js"></script>

	<script src="app/scripts/magister.js"></script>





</body>

</html>