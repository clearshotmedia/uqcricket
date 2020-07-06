<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


?>

<div id="page-wrapper">
	<div class="page front-page" id="content" tabindex="-1">
			<main class="site-main" id="main">
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

					<?php
					while(have_rows('module')) {
					the_row();
					uq_theme_partial('/modules/'.get_row_layout().'.php');
					}
					?>


					</article><!-- #post-## -->

			</main><!-- #main -->


	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
