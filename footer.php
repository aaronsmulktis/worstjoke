<div id="footer" class="container-fluid">
	
	<div id="inner-footer" class="text-center row-fluid">
		
		<div class="arctic-logo"></div>
		<nav class="text-center">
			<div class="footer-links">
				<ul id="menu-footer">
					<!-- Button trigger modal -->
					<li><a id="signupButton" class="menu-item" data-toggle="modal" data-target="#myModal">Keep In Touch</a></li>
					<li>|</li>
					<li class="pull-right menu-item"><a href="" target="_blank">Visit Our Website</a></li>
				</ul>
			</div>
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
		<!-- Button trigger modal -->

		<div id="signup">
			<?php get_template_part( 'signup' ); ?>
		</div>
		
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<script type="text/javascript">
			$('div#myModal').on('shown.bs.modal', function () {
				$('#CenterSignup').focus();
			});
		</script>
		<script>
		function clearDefault(el) {
		if (el.defaultValue==el.value) el.value = "";
		}
		function replaceInputMsg(el, type) {
		if (el.value == "" && type == 'email') el.value = "Enter your E-mail address";
		if (el.value == "" && type == 'fname') el.value = "First name";
		if (el.value == "" && type == 'zip') el.value = "US Zip";
		}
		function verifySubscribeForm()
		{
		f = document.listsform;
		if (f.email.value == f.email.defaultValue || f.email.value == '')
		{
		alert("Please enter your E-mail");
		return false;
		}
		if (f.fname.value == f.fname.defaultValue || f.fname.value == '')
		{
		alert("Please enter your first name");
		return false;
		}
		// _gaq.push(['_linkByPost', document.getElementById('listsform')]);
		_gaq.push(['_trackPageview','/funnel/GPsite/E-mail_SignUp/Submitted4']);
		}
		</script>
		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>
</html>