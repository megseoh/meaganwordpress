<?php

/*
Template Name: Portfolio Page
*/

	get_header(); ?>

	<div class="innerWrapper">
		<div class="section">
			<div class="full">

				<?php

				$onePageQuery = new WP_Query( 
					array( 
						'posts_per_page' => -1,
						'post_type' => 'page', 
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'post__not_in' => array( 6 ) // if you wanted to exclude a page with the ID of 42
						) 
				); ?>

				<?php if ( $onePageQuery->have_posts() ) : ?>

					<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

						<section id="<?php echo $post->post_name; ?>">
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</section>
					<?php endwhile; ?>
					
					<?php wp_reset_postdata(); ?>
					
				<?php else:  ?>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				<?php endif; ?>

				</div>
			</div> <!-- .section -->
		</div> <!-- .innerWrapper -->

<?php get_footer(); ?>
