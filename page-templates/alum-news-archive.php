<?php
/**
 * Template Name: Alumni News Archive
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'uqcricket_container_type' );


?>

<div id="full-width-page-wrapper">
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
					while ( have_posts() ) {
						the_post();

						?>


						<div class="entry-content">
		<div class="container py-4">
			<div class="row">
				<div class="col-12">
				<?php the_content(); ?>
				</div>
			</div>
		</div>
<?php ?>

		<div class="container">
		<?php
	if( have_rows('item') ):
 	// loop through the rows of data
	while ( have_rows('item') ) : the_row();
	?>  <div class="row py-3">
	<div class="col-md-9">
	<h5><?php echo the_sub_field('edition_name'); ?></h5>
	</div>
	<div class="col-md-3">
	<a href="<?php echo the_sub_field('edition_link'); ?>"><button> Download Edition</button></a>
	</div>
	</div><?php
    endwhile;
	endif; ?>
		</div>

	</div><!-- .entry-content -->
	<?php

while(have_rows('module')) {
	the_row();

	uq_theme_partial('/modules/'.get_row_layout().'.php');
}

?>

						<?php

					}
					?>







</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
