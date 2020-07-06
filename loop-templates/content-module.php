<?php
/**
 * Partial template for content in page.php
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">



	<?php

while(have_rows('module')) {
	the_row();

	uq_theme_partial('/modules/'.get_row_layout().'.php');
}

?>
	<footer class="entry-footer">



	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
