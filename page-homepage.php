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

							<h1 class="text-center">Unfunny Facts About Arctic Drilling</h1>
							<?php echo do_shortcode('[carousel-horizontal-posts-content-slider]'); ?>

					</section>

			</div> <!-- end #content -->

		</div>

<?php get_footer(); ?>