<?php
/**
 * Dynamic footer rendered by the opsxpress/footer block.
 *
 * @package OpsXpress
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo_url       = $custom_logo_id ? wp_get_attachment_image_url( $custom_logo_id, 'full' ) : get_theme_file_uri( 'assets/logo/Company logo navbar-B8ZEAKe_.svg' );
$home_url       = home_url( '/' );
$site_name      = get_bloginfo( 'name' );
?>
<footer class="site-footer">
	<video class="footer-video" src="<?php echo esc_url( get_theme_file_uri( 'assets/video/footer_vid.mp4' ) ); ?>" autoplay loop muted playsinline preload="metadata" aria-hidden="true" tabindex="-1"></video>
	<div class="footer-overlay" aria-hidden="true"></div>

	<div class="footer-container">
		<div class="footer-top">
			<div class="footer-brand reveal">
				<a href="<?php echo esc_url( $home_url ); ?>" class="footer-logo" aria-label="<?php echo esc_attr( $site_name ); ?>">
					<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( $site_name ); ?>" width="180" height="28" loading="lazy">
				</a>
				<p class="footer-description"><?php esc_html_e( 'We monitor & optimize infrastructure, applications, and databases 24/7, resolving issues proactively to safeguard uptime, performance, security, compliance, and efficiency.', 'opsxpress' ); ?></p>
			</div>

			<nav class="footer-col reveal" aria-labelledby="footer-services-title">
				<h2 id="footer-services-title" class="footer-col-title"><?php esc_html_e( 'Services', 'opsxpress' ); ?></h2>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( '24×7 Monitoring', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Security Operations', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'DevOps & Infrastructure', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><?php esc_html_e( 'Database Management', 'opsxpress' ); ?></a></li>
				</ul>
			</nav>

			<nav class="footer-col reveal" aria-labelledby="footer-resources-title">
				<h2 id="footer-resources-title" class="footer-col-title"><?php esc_html_e( 'Resources', 'opsxpress' ); ?></h2>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>"><?php esc_html_e( 'Case Studies', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'About', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php esc_html_e( 'FAQ', 'opsxpress' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'opsxpress' ); ?></a></li>
				</ul>
			</nav>

			<div class="footer-col footer-connect reveal">
				<h2 class="footer-col-title" id="footer-connect-title"><?php esc_html_e( 'Get in Touch', 'opsxpress' ); ?></h2>
				<form class="footer-form" action="<?php echo esc_url( home_url( '/contact/' ) ); ?>" method="get" aria-labelledby="footer-connect-title">
					<label class="screen-reader-text" for="footer-email"><?php esc_html_e( 'Your email address', 'opsxpress' ); ?></label>
					<input class="footer-input" type="email" id="footer-email" name="email" placeholder="<?php esc_attr_e( 'Enter your email', 'opsxpress' ); ?>" autocomplete="email" required>
					<button class="footer-submit" type="submit">
						<span><?php esc_html_e( "Let's Connect", 'opsxpress' ); ?></span>
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h13"/><path d="M13 6l6 6-6 6"/></svg>
					</button>
				</form>
				<ul class="footer-social">
					<li>
						<a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'LinkedIn', 'opsxpress' ); ?>">
							<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM10 9h3.8v1.7h.05c.53-.95 1.83-1.95 3.77-1.95 4.03 0 4.78 2.5 4.78 5.76V21h-4v-5.6c0-1.34-.02-3.06-1.9-3.06-1.9 0-2.2 1.45-2.2 2.96V21h-4z"/></svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'opsxpress' ); ?></p>
		</div>
	</div>
</footer>
