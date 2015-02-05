		
		</div> <!-- end #content-container -->

		<div id="lower-homepage" class="container-fluid">
			<div class="row">	
						
				<div class="col-sm-6 col-sm-offset-3">

					<div id="lower-box" class="col-sm-12">
						<?php get_sidebar('lower-homepage'); // jumbotron ?>
						<div class="container-fluid text-center"><a href="https://www.savethearctic.org/"><button>Sign the Petition</button></a></div>
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
						<li>Record yourself telling your worst joke. Need ideas? Try our joke generator below.</li>
						<li>Tag it #worstjoke and #savethearctic and share it on your favorite social platform.</li>
						<li>Tag a couple friends and challenge them to tell a worse joke.</li>
					</ol>
					<p class="span">Together we can tell Shell and President Obama that Arctic Drilling is No Joke.</p>
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

		<!-- remove this for production -->

		<!-- LIVE RELOAD -->
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

	</body>

</html>