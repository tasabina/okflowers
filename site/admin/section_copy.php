<?php
function change_section($name)
{
    require_once 'connect.php';
    $link = mysqli_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD, DATABASE_NAME)
    or die ("<p> Error connection to Data base:". mysqli_error()."</p>");
    mysqli_select_db($link, DATABASE_NAME) or die ("<p> Error:".mysqli_error()."</p>");

    if ($name == 'hello'){

        $query = "SELECT `text`,`title`, `subtitle` FROM `article` WHERE `id` = 12";

    }
    elseif($name !=='hello' && $name == 'gallery'){

        $query = "SELECT `text`,`title`, `subtitle` FROM `article` WHERE `id` = 13";

    }
    elseif($name !=='hello' && $name == 'offer'){

        $query = "SELECT `text`,`title`, `subtitle` FROM `article` WHERE `id` = 14";

    }

    else{

        $query = "SELECT `text`,`title`, `subtitle` FROM `article` WHERE `id` = 15";
    }

    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            $sqltitle = $row["title"];
            $sqlsubtitle = $row["subtitle"];
            $sqltext = $row["text"];

        }

        mysqli_free_result($result);
    }

    printf("<div class='container'>

		<h2 class='text-center title'>%s</h2>



		<div class='row'>

			<div class='col-sm-8 col-sm-offset-2 text-center'>

				<p class='lead'>%s</p>

				<p>
				
			</p>

				<p><b>%s</b><br><br></p>



			</div>

		</div>



	</div>", $sqltitle,$sqlsubtitle, $sqltext);

}

?>