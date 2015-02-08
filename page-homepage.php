<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
		<div id="content" class="container-fluid">

			<div class="clearfix row-fluid">
			
				<div id="main" class="col-sm-10 col-sm-offset-1 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<section class="row-fluid post_content">

							<div class="col-sm-12">
						
								<?php the_content(); ?>
								
							</div>
													
						</section> <!-- end article header -->						
					
					</article> <!-- end article -->
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    		</div>
    	</div>

    	<div id="facts" class="container-fluid">

    		<div class="clearfix row-fluid">
				
					<section class="col-sm-10 col-sm-offset-1">

							<h2 class="text-center">Unfunny Facts About Arctic Drilling</h2>
							<?php echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>

					</section>

			</div> <!-- end #content -->

		</div>

		<div id="lower-homepage" class="container-fluid">
			<div class="row-fluid">	

				<div class="col-sm-10 col-sm-offset-1">

					<div class="doodle"></div>

					<div id="lower-box">
						<?php get_sidebar('lower-homepage'); // jumbotron ?>
					</div>
					
					<div class="heart"></div>

				</div>

			</div>
			
		</div>

		<div id="#shareHead"></div>

		<div id="shareYours" class="container-fluid">
			<div class="row-fluid">
				<div class="col-sm-6 col-sm-offset-3">
					<h2 class="text-center">Share Your Own #WorstJoke</h2>
					<hr>
					<ol class="">
						<li>RECORD a video of your joke with your phone or webcam.</li>
						<li>UPLOAD it to your favorite social platform: Facebook, Vine, Instagram, etc.</li>
						<li>TAG your video with #worstjoke and #savethearctic - so we can share the best of the worst! (Check out the feed above)</li>
						<li>SHARE your joke and CHALLENGE a few friends to share a worse one!</li>
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

<?php get_footer(); ?>