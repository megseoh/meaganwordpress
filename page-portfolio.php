<?php

/*
Template Name: Portfolio Page
*/

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="portfolio">

			<?php

			$portfolioQuery = new WP_Query( 
				array( 
					'posts_per_page' => -1,
					'post_type' => 'page', 
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'post__not_in' => array( 6 ) // if you wanted to exclude a page with the ID of 42
					) 
			); ?>

			<?php if ( $portfolioQuery->have_posts() ) : ?>

				<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>

					<section id="<?php echo $post->post_name; ?>">
						<h3><?php //the_title(); ?></h3>
						<h3><?php //the_field('technologies'); ?></h3>
						<?php //the_content(); ?>
						<p><?php //the_field('year'); ?></p>
					</section>
				
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
				
			<?php else:  ?>
				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			<?php endif; ?>	

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
