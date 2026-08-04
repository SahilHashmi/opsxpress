<?php
/**
 * Template Name: About Page
 *
 * @package OpsXpress
 */

get_header();
?>

<main id="main" class="site-main about-page">
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
				<div class="page-content-inner">
					<?php the_content(); ?>
				</div>
			</article>
			
		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
