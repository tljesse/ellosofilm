<?php
/*
 Template Name: About
 *
 * Template for the About Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">
					<div class="m-all t-1of3 d-1of3">
						<!--<?php
							$images =& get_children( array (
							'post_parent' => $post->ID,
							'post_type' => 'attachment',
							'post_mime_type' => 'image'
						));

						if ( empty($images) ) {
							echo 'No images';
						} else {
							$i = 0;
							$len = count($images);
							foreach ($images as $attachment_id => $attachment) {
								$image_meta = wp_get_attachment($attachment_id);
								?>
									<div class="m-all t-all d-all about-image">
										<img src="<?php echo $image_meta['src']; ?>" alt="<?php echo $image_meta['alt']; ?>">
									</div>
								<?php 
							}
						}
						?>-->
						<div class="m-all t-all d-all about-image">
							<?php
								$images =& get_children( array (
								'post_parent' => $post->ID,
								'post_type' => 'attachment',
								'post_mime_type' => 'image'
							));

							if ( empty($images) ) {
								echo '<img src="' . get_template_directory_uri() . '/library/images/about.png" alt="Christina Elloso">';
							} else {
								// @todo hacky and needs fixing
								$i = 0;
								$len = count($images);
								foreach ($images as $attachment_id => $attachment) {
									$image_meta = wp_get_attachment($attachment_id);
									?>
										<img src="<?php echo $image_meta['src']; ?>" alt="<?php echo $image_meta['alt']; ?>">
									<?php 
									break;
								}
							}
							?>
						</div>
					</div>

						<main id="main" class="m-all t-2of3 d-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="about-wrapper">
								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>
								<div class="social-links m-all d-all t-all text-centered">
									<p>
									<a href="https://www.instagram.com/christinaelloso" target="_blank"><img class="instagram" src="<?php echo get_template_directory_uri() . '/library/images/instagram.svg'; ?>" alt="instagram"></a>
									<a href="https://www.facebook.com/christinaellosofilmmaker" target="_blank"><img class="facebook" src="<?php echo get_template_directory_uri() . '/library/images/facebook.svg'; ?>" alt="facebook"></a>
									<a href="https://vimeo.com/christinaelloso" target="_blank"><img class="vimeo" src="<?php echo get_template_directory_uri() . '/library/images/vimeo.svg'; ?>" alt="vimeo"></a>
									<a href="http://www.imdb.com/name/nm6772458/" target="_blank"><img class="imdb" src="<?php echo get_template_directory_uri() . '/library/images/imdb.svg'; ?>" alt="imdb"></a>
									</p>
								</div>
								</div>


							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>


<?php get_footer(); ?>
