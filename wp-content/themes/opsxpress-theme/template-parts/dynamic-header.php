<?php
/**
 * Dynamic header rendered by the opsxpress/header block.
 *
 * @package OpsXpress
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_url       = $custom_logo_id ? wp_get_attachment_image_url( $custom_logo_id, 'full' ) : get_theme_file_uri( 'assets/logo/Company logo navbar-B8ZEAKe_.svg' );
$home_url       = home_url( '/' );
$site_name      = get_bloginfo( 'name' );
?>
<header class="site-header">
	<div class="header-container">
		<div class="header-left">
			<a href="<?php echo esc_url( $home_url ); ?>" class="site-logo" aria-label="<?php echo esc_attr( $site_name ); ?>">
				<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $site_name ); ?>">
			</a>
		</div>
                <nav id="site-navigation" class="header-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'opsxpress' ); ?>">
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
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Services', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><?php esc_html_e( 'Case Studies', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'opsxpress' ); ?></a></li>
				</ul>
			<?php endif; ?>
                </nav>
	</div>
</header>
