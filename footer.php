			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<div class="m-1of2 t-2of3 d-2of3">
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>
					<div class="m-1of2 t-1of3 d-1of3">
						<div class="social-links">
							<p>
							<a href="https://www.instagram.com/christinaelloso" target="_blank"><img class="instagram" src="<?php echo get_template_directory_uri() . '/library/images/instagram.svg'; ?>" alt="instagram"></a>
							<a href="https://www.facebook.com/christinaellosofilmmaker" target="_blank"><img class="facebook" src="<?php echo get_template_directory_uri() . '/library/images/facebook.svg'; ?>" alt="facebook"></a>
							<a href="https://vimeo.com/christinaelloso" target="_blank"><img class="vimeo" src="<?php echo get_template_directory_uri() . '/library/images/vimeo.svg'; ?>" alt="vimeo"></a>
							<a href="http://www.imdb.com/name/nm6772458/" target="_blank"><img class="imdb" src="<?php echo get_template_directory_uri() . '/library/images/imdb.svg'; ?>" alt="imdb"></a>
							</p>
						</div>
					</div>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
