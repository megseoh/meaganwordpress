<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="contact clear">

			<h2><?php the_title(); ?></h2>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
