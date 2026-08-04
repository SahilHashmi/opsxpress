<?php
/**
 * 404 Error Page Template
 *
 * @package OpsXpress
 */

get_header();
?>

<main id="main" class="site-main error-404">
	<div class="error-container">
		<div class="error-content">
			<h1 class="error-title">404</h1>
			<h2 class="error-subtitle"><?php esc_html_e( 'Page Not Found', 'opsxpress' ); ?></h2>
			<p class="error-text"><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'opsxpress' ); ?></p>
			<div class="error-actions">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Go Home', 'opsxpress' ); ?></a>
			</div>
		</div>
	</div>
</main>

<?php
get_footer();
