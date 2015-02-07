		
		</div> <!-- end #content-container -->

		<div id="lower-homepage" class="container-fluid">
			<div class="row">	
						
				<div class="col-sm-6 col-sm-offset-3">

					<div id="lower-box" class="col-sm-12">
						<?php get_sidebar('lower-homepage'); // jumbotron ?>
					</div>
											
				</div>

			</div>
			
		</div>

		<div id="shareYours" class="container-fluid">
			<div class="row-fluid">
				<div class="col-sm-6 col-sm-offset-3">
					<h1 class="text-center">Share Your Own #WorstJoke</h1>
					<hr>
					<ol class="">
						<li>RECORD a video of your joke and UPLOAD it to your favorite social platform: YouTube, Facebook, Tumblr, Vine, etc.<br />Pssst...Have a webcam, but don't know how to use it? <a href="https://www.youtube.com/my_webcam">Try YouTube's Video Uploader</a></li>
						<li>TAG your video with #WorstJoke and #SaveTheArctic - so we can share the best of the worst!</li>
						<li>SHARE your joke and CHALLENGE your friends to do the same!</li>
					</ol>
					<p class="span" style="padding-left: 22px;"><strong>Need some inspiration? No problem! Try our joke generator below.</strong></p>
					<hr>
				</div>
			</div>
			<div class="row-fluid">
				<div class="col-sm-4 col-sm-offset-3">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('lower-homepage2') ) : ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
		</div>

		<div id="footer" class="container-fluid">
			
			<div id="inner-footer" class="text-center row">
				
				<div class="arctic-logo"></div>

				<nav class="text-center">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>
			
			</div> <!-- end #inner-footer -->
			
		</div> <!-- end footer -->

		<div id="drips" class="container-fluid">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<img src="<?php echo get_template_directory_uri(); ?>/images/drips.png">
				</div>
			</div>
		</div>
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>