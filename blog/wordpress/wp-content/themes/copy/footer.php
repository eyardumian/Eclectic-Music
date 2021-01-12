<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

			<div class="site-info">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>

			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<div id='contact' class="animatedParent">
	<div class=" animated growIn" id='contactTitle'>
	CONTACT PAUL
	</div>
	<div class="animated growIn" id="contactInfo">
		<div>(626)384-8926</div>
		<div>eclecticstring@gmail.com</div>
		<div>21210 E. Arrow Hwy #148
		</div>
		<div>Covina, CA 91724
		</div>
	</div>
	<div class="links animated growIn">
		<a href = "https://www.facebook.com/paul.grether.3" target = "_blank">
			<!-- <img src="/projects/PGrether/images/002-facebook-logo.png" alt="Facebook link"> -->
			<i class="fab fa-facebook-f fa-lg" style="color:black"></i>
		</a>
	 <a id="thumbtack" href="https://www.thumbtack.com/ca/covina/music-lessons/guitar-instruction">
			<img src="/images/thumbtackIcon.png" alt="Thumbtack link">
		</a>
		<a id="linkedin" href="https://www.linkedin.com/in/paul-grether-5185b3110/">
			<!-- <img src="/projects/PGrether/images/linkedin-logo.png" alt="Linkedin link"> -->
			<i class="fab fa-linkedin-in fa-lg" style="color:black"></i>
		</a>
	  </div>
		<div id="copyright">
			 <div>© 2018 Eclectic String Music</div>
			 <a href="http://www.erikayardumian.com" id="webdesignLink" >Website developed by: erikayardumian.com</a>
		</div>
</div>
<?php wp_footer(); ?>

<script src="/js/css3-animate-it.js"></script>

</body>
</html>
