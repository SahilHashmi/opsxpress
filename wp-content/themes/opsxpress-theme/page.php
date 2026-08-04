<?php
/**
 * Default Page Template
 *
 * @package OpsXpress
 */

get_header();
?>

<main id="main" class="site-main page-content">
	<div class="page-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="page-header">
					<h1 class="page-title"><?php the_title(); ?></h1>
				</header>
				
				<div class="page-content-inner">
					<?php the_content(); ?>
				</div>
			</article>
			
		<?php endwhile; ?>
	</div>
</main>

<?php
get_footer();
