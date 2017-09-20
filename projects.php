<?php
/*
 Template Name: Projects Home
 *
 * This is meant to be used on the home page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div class="reel-container">
					<?php
						$images =& get_children( array (
						'post_parent' => $post->ID,
						'post_type' => 'attachment',
						'post_mime_type' => 'image'
					));

					if ( empty($images) ) {
						echo 'Site is currently under construction.';
					} else {
						$i = 0;
						$len = count($images);
						foreach ($images as $attachment_id => $attachment) {
							$image_meta = wp_get_attachment($attachment_id);
							?>
								<div class="m-all t-all d-1of2 ih-item square effect6 from_top_and_bottom">
									<a href="<?php echo $image_meta['href']; ?>"><div class="img"><img src="<?php echo $image_meta['src']; ?>" alt="<?php echo $image_meta['alt']; ?>"></div>
									<div class="info">
					          <h3><?php echo esc_html($image_meta['title']); ?></h3>
					          <!--<p>View</p>-->
					        </div></a>
								</div>
							<?php 
							$i++;
						}
					}
					?>
				</div><!-- end reel-container -->
				
			</div><!-- end content -->


<?php get_footer(); ?>
