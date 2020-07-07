<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UQCricket
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php uqcricket_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<header id="masthead" class="site-header">


<div class="contr-fluid top-header-3">

<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$uqcricket_description = get_bloginfo( 'description', 'display' );
			if ( $uqcricket_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $uqcricket_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->



				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><img src="/wp-content/uploads/2018/07/menu.png"></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'main-menu',
				) );
				?>

<div class="social">
        	<?php

        add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {

    $fragments['div.header-cart-count'] = '<div class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</div>';

    return $fragments;
}
        	?>

        	<a href="https://www.facebook.com/UQCricketClub/"><img class="social-icon" src="/wp-content/uploads/2018/06/facebook-logo.png"></a>
        	<a href="https://twitter.com/UQCC_Blues"><img class="social-icon" src="/wp-content/uploads/2018/06/twitter-logo-silhouette.png">
        	<a href="/cart"><span class="fa-stack fa-2x has-badge" data-count="<?php echo WC()->cart->get_cart_contents_count(); ?>">

  <img src="/wp-content/uploads/2018/06/empty-shopping-cart.png" class="social-icon">
</span></a>


        </div>
		</nav><!-- #site-navigation -->




		</div>
	<div class="container">
    <div class="row navigation-3">
        <div class="col-sm-12">


        </div>
    </div>
</div>




	</header><!-- #masthead -->
