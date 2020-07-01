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
		if ( ! is_front_page() ) {
			?>
				<header class="entry-header">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

</header><!-- .entry-header -->
			 <?php
		}
		?>

<?php

while(have_rows('module')) {
	the_row();

	uq_theme_partial('/modules/'.get_row_layout().'.php');
}

?>


	<div class="entry-content">

		<?php the_content(); ?>



	</div><!-- .entry-content -->

	<footer class="entry-footer">



	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
