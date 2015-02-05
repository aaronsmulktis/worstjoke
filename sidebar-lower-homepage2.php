				<div id="hero" role="complementary">
				
					<?php if ( is_active_sidebar( 'lower-homepage' ) ) : ?>

						<?php dynamic_sidebar( 'lower-homepage' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="alert alert-message">
						
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						
						</div>

					<?php endif; ?>

				</div>