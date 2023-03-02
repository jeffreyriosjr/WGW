<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whats_good_wednesday
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="https://kit.fontawesome.com/ba414641d6.js" crossorigin="anonymous"></script>
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<?php wp_body_open();?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'smyle-co');?></a>
	<header id="masthead" class="site-header">
	<div class="main-header">
		<nav id="site-navigation" class="smyle-navbar main-navigation navbar-expand-sm pt-3">
			<button class="menu-items navbar-toggler menu-toggle" aria-controls="primary-menu" aria-expanded="false" data-target="#home">WGW<br>
			</button>
			<?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-1',
        'menu_id' => 'primary-menu',
    )
);
?>
<div>
			<a type="button" href="http://whats-good-wednesday.local/">
			<img class="logo" src="http://whatsgw.flywheelsites.com/wp-content/uploads/2023/03/Dark-Blue-and-Purple-Neon-Podcast-Circle-Sticker-1.png">
			</a>
		</div>
		</nav>

		</div><!-- #site-navigation -->
	</header><!-- #masthead -->