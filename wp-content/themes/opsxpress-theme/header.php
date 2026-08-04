<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="header-container">
		<div class="header-left">
			<button class="menu-toggle" type="button" aria-label="Open menu" aria-controls="site-navigation" aria-expanded="false">
				<span class="menu-arrow" aria-hidden="true">&#9654;</span>
				<span class="menu-label">Menu</span>
			</button>
		</div>
		
		<div class="header-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<img src="<?php echo esc_url( get_theme_mod( 'opsxpress_navbar_logo', get_theme_file_uri( 'assets/logo/Company logo navbar-B8ZEAKe_.svg' ) ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			</a>
		</div>
		
		<div class="header-right">
			<span class="header-service">24/7 Managed Ops</span>
		</div>
	</div>
</header>

<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'opsxpress' ); ?>" aria-hidden="true">
	<div class="navigation-inner">
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'depth'          => 1,
				)
			);
			?>
		<?php else : ?>
			<ul class="primary-menu">
				<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
				<li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">Case Studies</a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
				<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
			</ul>
		<?php endif; ?>
	</div>
</nav>
