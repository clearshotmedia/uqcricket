<?php
/**
 * Template Name: Blues Academy Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>
<div  id="page-wrapper">

		<main class="site-main" id="main" role="main">

				<?php while(have_rows('module')) {
					the_row();
					uq_theme_partial('/modules/'.get_row_layout().'.php');
						} ?>
				</main><!-- #main -->





</div><!-- #page-wrapper -->

<?php
get_footer();
