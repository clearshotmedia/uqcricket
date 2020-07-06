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
				<header class="gold-heading">

				<div class="container">
		<div class="row aligncenter">
			<div class="col-12">

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>


</header><!-- .entry-header -->
			 <?php
		}
		?>


	<div class="entry-content">
		<div class="container py-4">
			<div class="row">
				<div class="col-12">
				<?php the_content(); ?>
				</div>
			</div>
		</div>

	</div><!-- .entry-content -->
	<?php

while(have_rows('module')) {
	the_row();

	uq_theme_partial('/modules/'.get_row_layout().'.php');
}

?>
	<footer class="entry-footer">



	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
