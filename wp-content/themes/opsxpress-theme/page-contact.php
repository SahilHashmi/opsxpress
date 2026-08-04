<?php
/**
 * Template Name: Contact Page
 *
 * @package OpsXpress
 */

get_header();
?>

<main id="main" class="site-main contact-page">
	<section class="page-hero">
		<div class="page-hero-container">
			<h1 class="page-hero-title"><?php the_title(); ?></h1>
		</div>
	</section>

	<div class="page-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="contact-content">
					<div class="contact-info">
						<h2><?php esc_html_e( 'Get in Touch', 'opsxpress' ); ?></h2>
						<?php the_content(); ?>
					</div>
					
					<div class="contact-form-wrapper">
						<h3><?php esc_html_e( 'Send us a message', 'opsxpress' ); ?></h3>
						<!-- Contact form will be added here using a plugin like Contact Form 7 or WPForms -->
						<p><?php esc_html_e( 'Please install a contact form plugin to display the form here.', 'opsxpress' ); ?></p>
					</div>
				</div>
			</article>
			
		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
