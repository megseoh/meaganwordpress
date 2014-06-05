<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h2><?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
