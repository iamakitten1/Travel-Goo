<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'starter' ); ?></a>

	<header id="masthead" class="site-header  travel-go-header">
		<div class="container">
			<div class="logo"> <h1>Travel <span>Goo</span></h1></div>

			<div class= "header-content">
			<div class="site-branding">
			<?php
			// the_custom_logo();

			?>
			<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation travel-go-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'starter' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu-class'    => 'header-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

			</div>
		</div>
		
	</header><!-- #masthead -->
