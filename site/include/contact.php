<?php
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $sqltitle = $row["title"];
        $sqlsubtitle = $row["subtitle"];
        $sqltext = $row["text"];

    }

    mysqli_free_result($result);
}

printf ("<div class='container'>

	

		<h2 class='text-center title'>%s</h2>



		<div class='row'>

			<div class='col-sm-8 col-sm-offset-2 text-center'>

				<p class='lead'>%s</p>

				<p>%sk</p>

				<p><b>okflowers@okflowers.co.nz</b><br><br></p>

				<ul class='list-inline list-social'>

					<li><a href='#' class='btn btn-link'><i class='fa fa-twitter fa-fw'></i> Twitter</a></li>

					<li><a href='https://www.facebook.com/OKFlowersNZ/' class='btn btn-link'><i class='fa fa-facebook fa-fw'></i> Facebook</a></li>

					<li><a href='#' class='btn btn-link'><i class='fa fa-vk fa-fw'></i> vkontacte</a></li>

				</ul>

			</div>

		</div>



	</div>", $sqltitle,$sqlsubtitle, $sqltext);

?>
