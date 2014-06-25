<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="blog clear">

			<div class="blog">

				<h2><?php _e( 'Latest Posts', 'html5blank' ); ?></h2>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</div>

			<?php get_sidebar(); ?>
	
		</section>
		<!-- /section -->

	</main>

<?php get_footer(); ?>
