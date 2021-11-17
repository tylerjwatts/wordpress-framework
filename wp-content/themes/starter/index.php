<?php

/* Catch-all templates */

get_header();

?>

<div class="main-content">
	<?php while ( have_posts() ) : the_post(); ?>

		<article id="<?php echo get_post_type(); ?>-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
			<div class="entry-header">
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
			</div>

			<div class="entry-content clearfix" itemprop="articleBody">
				<?php the_content(); ?>
			</div>
		</article>

	<?php endwhile; ?>
</div>

<?php

get_sidebar();
get_footer();