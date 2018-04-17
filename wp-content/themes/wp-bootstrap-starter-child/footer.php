<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

 

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-fluid p-3 p-md-5 d-flex">
            <div class="site-info w-100 row justify-content-center align-items-center">
				<div>
					&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					<span class="sep"> | </span>
				</div>
				<a class="credits" href="https://github.com/AniDedej/" target="_blank" title="GitHub" alt="GitHub">
					<i class="fab fa-github fa-2x"></i>
					<span class="credits-info"> <?php echo esc_html__('@AniDedej','wp-bootstrap-starter'); ?> </span>
				</a>
				<a class="credits" href="https://www.linkedin.com/in/antonio-dedej-b40271154" target="_blank" title="LinkedIn" alt="LinkedIn">
					<i class="fab fa-linkedin fa-2x"></i>	
					<span class="credits-info"> <?php echo esc_html__('@Antonio Dedej','wp-bootstrap-starter'); ?> </span>
				</a>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri()?>/scripts/main.js"></script>
</body>
</html>
