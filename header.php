<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

  		<link href="<?php echo get_template_directory_uri(); ?>/jquery.socialist.css" rel="stylesheet" />

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->

		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.isotope.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.socialist.js"></script>

		<!-- basic stylesheet -->
		<link rel="stylesheet" href="/wp-content/plugins/new-royalslider/lib/royalslider/royalslider.css">

		<!-- skin stylesheet (change it if you use another) -->
		<link rel="stylesheet" href="/wp-content/themes/worstjoke/rs-red/rs-red.css">

		<!-- JQUERY  -->
		<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

		<!-- Main slider JS script file --> 
		<!-- Create it with slider online build tool for better performance. -->
		<script src="/wp-content/plugins/new-royalslider/lib/royalslider/jquery.royalslider.min.js"></script>

		// <script type="text/javascript">
		// 	$(document).ready(function () {
		// 	    $('#social-content').socialist({
		// 	        networks: [
		// 	            {name:'facebook',id:'greenpeace.international'},
		// 	            // {name:'twitter',id:'aaronsmulktis'},
		// 	            // {name:'pinterest',id:'potterybarn'},
		// 	            {name:'rss',id:'http://widget.websta.me/rss/tag/worstjoke'},
		// 	            {name:'rss2',id:'https://script.googleusercontent.com/macros/echo?user_content_key=NMtqTTVDgIMVhcgSCv9mQWWyGmu3MGhPo93xkbIa6QQwBwQk_xPsJN4iE0eIDRimX1LIL6dBGUwfqD6XravKwR8r5-_JDmrcm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnMNsNYpISpo-Jg9GdSwHPBc5eYeyH6PuHAmHCZMn-CJiCmL2EEHmea5iV3pVgc1_asapA19qtLci5_Pq-VP3zMaBOfI2CXewjcGD6mYBOprp&lib=MTrtdZmoSB9S4R3YMLCDMLVDLLuzzHBvJ'},
		// 	           ],
		// 	        isotope:true,
		// 	        random:true,
		// 	        maxResults:100,
		// 	        fields:['source','heading','text','date','image','followers','likes']
		// 	    });
		// 	});
		// </script>

		<!-- RANDOM POST GENERATOR -->
		// <script type="text/javascript">
	 //        $(document).ready(function(e) {
  //               $("#loadJoke").on('click', function(){

  //                   $.post('random.php', 
  //                   function(data){
  //                       $('#randomJoke').html(data);
  //                   });
  //               });
	 //        });
  //    	</script>

	</head>
	
	<body <?php body_class(); ?>>

		<div class="container-fluid nomargins nopadding">
			<div class="jumbotron">

				<a href="/"><div id="logo" class="pull-left"></div></a>
				<a id="bigButton" href="#shareYours">Share Your<br />#Worstjoke</a>

				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<h1 class="text-center">Arctic Drilling Is No Joke!</h1>
								<hr>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4 text-left">
								<?php get_sidebar('jumbotron'); // jumbotron ?>		
							</div>
							<div class="col-sm-8">
								<?php get_sidebar('jumbotron2'); // jumbotron 2 ?>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		
		<div class="content-container container-fluid">
