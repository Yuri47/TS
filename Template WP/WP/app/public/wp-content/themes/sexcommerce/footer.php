<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<footer id="footer" role="contentinfo">
		<div class="container">
			<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Odin</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>
		</div><!-- .container -->
	</footer><!-- #footer -->
   
   	<?php wp_footer(); ?>
   
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/jquery-3.2.1.slim.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/libs/app.js"></script>
    
    

</body>
</html>
