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

<div class="wrapper" id="page-wrapper">

	<div class="page" id="content" tabindex="-1">





			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );


				}
				?>

			</main><!-- #main -->





	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
