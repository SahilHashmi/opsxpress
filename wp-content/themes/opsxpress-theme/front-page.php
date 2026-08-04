<?php
/**
 * Front Page Template
 *
 * @package OpsXpress
 */

get_header();
?>

<main id="main" class="site-main">
	<!-- Hero Section -->
	<section class="hero-section" aria-labelledby="hero-title">
		<div class="hero-container">
			<div class="hero-content">
				<h1 id="hero-title" class="hero-title">
					<span class="hero-title-line hero-title-main"><span><?php echo esc_html( get_theme_mod( 'opsxpress_hero_title', 'Infrastructure that never sleeps.' ) ); ?></span></span>
					<span class="hero-title-line hero-title-sub"><span><?php echo esc_html( get_theme_mod( 'opsxpress_hero_accent', 'Continuous monitoring, rapid resolution,' ) ); ?></span></span>
					<span class="hero-title-line hero-title-sub hero-title-third"><span><?php echo esc_html( get_theme_mod( 'opsxpress_hero_third_line', 'built for performance.' ) ); ?></span></span>
				</h1>
			</div>
		</div>
	</section>

	<!-- Additional sections will go here -->
	
</main>

<?php
get_footer();
