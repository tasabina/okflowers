	<?php

	echo "<div class='container'>

		<h2 class='text-center title'>Get in touch</h2>



		<div class='row'>

			<div class='col-sm-8 col-sm-offset-2 text-center'>

				<p class='lead'>Have a question about my works, or want to suggest a new feature?</p>

				<p>";
				$query ="SELECT `text` FROM `article`";
					$result = mysqli_query($link, $query);

					if ($result) {

					    $rows = mysqli_num_rows($result); 

					    	for ($i = 0; $i < $rows; ++$i)

					    	{
					    		$row = mysqli_fetch_row($result);

					    		foreach ($row as $key => $value) {

									echo "Значение: $value<br />\n";

					    		}

					    	}

					    /* закрытие выборки */
					    mysqli_free_result($result);
					}
			"</p>

				<p><b>flowers@okflowers.co.nz</b><br><br></p>

				<ul class='list-inline list-social'>

					<li><a href='#' class='btn btn-link'><i class='fa fa-twitter fa-fw'></i> Twitter</a></li>

					<li><a href='#' class='btn btn-link'><i class='fa fa-facebook fa-fw'></i> Facebook</a></li>

					<li><a href='#' class='btn btn-link'><i class='fa fa-vk fa-fw'></i> vkontacte</a></li>

				</ul>

			</div>

		</div>



	</div>"

	?>


