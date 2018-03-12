<?php
function block_print($name){
    require_once 'section.php';
    if ($name == 'hello'){
        printf("<div class=\"container\">

            <div class=\"row\">
    
                <div class=\"col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center\">	
    
    
    
                    <!-- Site Title, your name, HELLO msg, etc. -->
    
                    <h1 class=\"title\">%s</h1>
    
                    <h2 class=\"subtitle\">%s</h2>
    
    
    
                    <!-- Short introductory (optional) -->
    
                    <h3 class=\"tagline\">%s</h3>
    
                    
    
                    <!-- Nice place to describe your site in a sentence or two -->
    
                    <p><a class=\"btn btn-default btn-lg\" href=\"#about\">Learn a little bit more now</a></p>
    
        
    
                </div> <!-- /col -->
    
            </div> <!-- /row -->
    
        
    
        </div>", $sqltitle,$sqlsubtitle, $sqltext);

    }
    elseif($name !=='hello' && $name == 'aboutme'){
        printf(
            "<div class='container'>

	

		<h2 class='text-center title'>About me</h2>

		<div class='row'>

			<div class='col-sm-4 col-sm-offset-2'>    

				<h5><strong>About me<br></strong></h5>

				<p>So, this page about me, all this about me. My work, my family, my hobbies.

			    	As was the case with the mobile revolution, and the web before that, machine learning will cause us to rethink, restructure, and reconsider what’s possible in virtually every experience we build. In the Google UX community, we’ve started an effort called “human-centered machine learning” to help focus and guide that conversation. Using this lens, we look across products to see how machine learning (ML) can stay grounded in human needs while solving for them—in ways that are uniquely possible through ML. Our team at Google works across the company to bring UXers up to speed on core ML concepts, understand how to best integrate ML into the UX utility belt, and ensure we're building ML and AI in inclusive ways.</p>    

			</div>

			<div class='col-sm-4'>

				<h5><strong>And a little bit more<br></strong></h5>    

				<p>Google Clips is an intelligent camera designed to capture candid moments of familiar people and pets. It uses completely on-device machine intelligence to learn to only focus on the people you spend time with, as well as to understand what makes for a beautiful and memorable photograph. Using Google Clips as a case study, we’ll walk through the core takeaways after three years of building the on-device models, industrial design, and user interface—including what it means in practice to take a human-centered approach to designing an AI-powered product.</p>    

				<h5><strong>Get in touch<br></strong></h5>    

				<p><a href='#'>Vimeo</a> / <a href='#'>Twitter</a> / <a href='#'>LinkedIn</a> / <a href='#'>Facebook</a></p>

			</div>

		</div>

	</div>",$sqltitle,$sqlsubtitle, $sqltext);

    }
    elseif($name !=='hello' && $name == 'gallery'){

        printf("<div class=\"container\">

	

		<h2 class=\"text-center title\">My works</h2>

		<p class=\"lead text-center\">

			Huge my works on <br>

			<a href=\"#\">Facebook</a>.

		</p>

		<div class=\"row\">

			<div class=\"col-sm-4 col-sm-offset-2\">

				<div class=\"thumbnail\">

					<img src=\"data/img/Desert.jpg\" alt=\"Third slide\">

					<div class=\"caption\">

						<h3>Flowers</h3>

						<p>My text</p>

						<p><a href=\"#\" class=\"btn btn-default\" role=\"button\">Learn more</a></p>

					</div>

				</div>

			</div>

			<div class=\"col-sm-4\">

				<div class=\"thumbnail\">

					<img src=\"data/img/Desert.jpg\" alt=\"Third slide\">

					<div class=\"caption\">

						<h3>Flowers</h3>

						<p>My text</p>

						<p><a href=\"#\" class=\"btn btn-default\" role=\"button\">Learn more</a></p>

					</div>

				</div>

			</div>

			<div class=\"col-sm-4 col-sm-offset-2\">

				<div class=\"thumbnail\">

					<img src=\"data/img/Desert.jpg\" alt=\"Third slide\">

					<div class=\"caption\">

						<h3>Flowers</h3>

						<p>My text</p>

						<p><a href=\"#\" class=\"btn btn-default\" role=\"button\">Learn more</a></p>

					</div>

				</div>

			</div>

			<div class=\"col-sm-4\" >

				<div class=\"thumbnail\">

					<img src=\"app/images/img_1.jpg\" alt=\"\">

					<div class=\"caption\">

						<h3>Flowers</h3>

						<p>My text</p>

						<p><a href=\"#\" class=\"btn btn-default\" role=\"button\">Learn more</a></p>

					</div>

				</div>

			</div>



		</div>



	</div>", $sqltitle,$sqlsubtitle, $sqltext);

    }
    elseif($name !=='hello' && $name == 'offer'){

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

    else{

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

    }


}

?>