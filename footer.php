<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package krystof-marasek
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer">
		    <div class="footer-container container-xl container-lg container-fluid">
		        <div class="footer-row row g-0 d-flex col-lg-12 align-items-center">

					<div class="social-links">
                	    <div class="social-container">
                	        <div class="social">
                	            <a href="https://linkedin.com/in/krystof-marasek" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.svg" alt=""></a>
                	            <a href="https://www.youtube.com/channel/UCwCNVn2brnJdMAb2BgMHeBw" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.svg" alt=""></a>
                	            <a href="https://krystof-marasek.itch.io" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/img/itchio.svg" alt=""></a>
                	            <a href="https://github.com/krystof-marasek" target=”_blank”><img src="<?php echo get_template_directory_uri(); ?>/img/github.svg" alt=""></a>
                	        </div>
                	    </div>
                	</div>

		        </div>
		    </div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
