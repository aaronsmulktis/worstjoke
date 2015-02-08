

		<div id="footer" class="container-fluid">
			
			<div id="inner-footer" class="text-center row-fluid">
				
				<div class="arctic-logo"></div>

				<nav class="text-center">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>
			
			</div> <!-- end #inner-footer -->
			
		</div> <!-- end footer -->

		<div id="drips" class="container-fluid">
			<div class="row-fluid">
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