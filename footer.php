<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'uqcricket_container_type' );
?>




<footer id="colophon" class="site-footer">
			 <div id="fullwidth" class="container-fluid">
	    <div id="footer-sidebar" class="row">
<div id="footer-sidebar1" class="col-sm-4">
<?php
if(is_active_sidebar('footer-sidebar-1')){
dynamic_sidebar('footer-sidebar-1');
}
?>
</div>
<div id="footer-sidebar2" class="col-sm-4">
<?php
if(is_active_sidebar('footer-sidebar-2')){
dynamic_sidebar('footer-sidebar-2');
}
?>
</div>
<div id="footer-sidebar3" class="col-sm-4">
<?php
if(is_active_sidebar('footer-sidebar-3')){
dynamic_sidebar('footer-sidebar-3');
}
?>
</div>
</div>
</div>

		<div class="site-info">

				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ' %1$s.' ), '<a href="http://clearshot.media/"><img class="built-by" src="/wp-content/uploads/2018/04/clearshot-white.png"></a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

