				<div id="sidebar1" class="sidebar m-all t-1of3 d-2of7 last-col cf" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
						<div class="m-al t-all d-all about-image">
							<img src="<?php echo get_template_directory_uri() . '/library/images/about.png'; ?>" alt="Christina Elloso">
						</div>
						<br/><br/>
						<div class="m-none">
						<?php dynamic_sidebar( 'sidebar1' ); ?>
						</div>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
