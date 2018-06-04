<?php
include ('title.inc.php');
?>
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

    <?php include("include/main.php");?>

</section>


<!-- Second (About) section -->

<section class="section" id="about">

    <?php include("include/about.php");?>

</section>

<!-- Third (Works) section -->
<section class="section" id="themes">

    <?php include("include/gallery_old.php");?>

</section>

<!-- Fourth (Offers) section -->

<section class="section" id="offer">

    <?php include("include/offer.php");?>

</section>

<!-- Fiveth (Contact) section -->

<section class="section" id="contact">

    <?php include("include/contact.php");?>

</section>

<script src="site/app/scripts/jquery-1.10.2.js"></script>

<script src="site/app/scripts/bootstrap.js"></script>

<script src="site/app/scripts/respond.js"></script>

<script src="site/app/scripts/magister.js"></script>

<script src="app/scripts/lightbox-2.6.min.js"></script>


</body>


</html>