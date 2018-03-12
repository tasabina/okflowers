<?php 

$lines = file('data/text/text.txt');
$output_title = $lines[0];

foreach ($lines as $line_num => $line) {

	$num = $line_num;
}

$text = $lines[$num-1];

	printf("<div class='container'>

		<h2 class='text-center title'>%s</h2>



		<div class='row'>

			<div class='col-sm-8 col-sm-offset-2 text-center'>

				<p class='lead'>%s</p>

				<p>
				
			</p>

				<p><b>flowers@okflowers.co.nz</b><br><br></p>



			</div>

		</div>



	</div>", $output_title, $text) 

	
?>


