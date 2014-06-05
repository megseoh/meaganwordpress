<?php

/*
Template Name: Front Page
*/

get_header(); ?>

<div class="innerWrapper">
	<div class="section">
		<div class="full">

			<?php

			$portfolioQuery = new WP_Query( 
				array( 
					'posts_per_page' =>3,
					'post_type' => 'portfolio', 
					'orderby' => 'menu_order',
					'order' => 'ASC',
					'featured' => 'Featured'/*,
					'post__not_in' => array( 6 ) // if you wanted to exclude a page with the ID of 42*/
					) 
			); ?>

			<?php if ( $portfolioQuery->have_posts() ) : ?>

				<?php while ($portfolioQuery->have_posts()) : $portfolioQuery->the_post(); ?>

					<section id="<?php echo $post->post_name; ?>">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
						<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						  the_post_thumbnail();
						} 
						?>
						<?php the_content(); ?></a>
					</section>
				<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
				
			<?php else:  ?>
				[stuff that happens if there aren't any posts]
			<?php endif; ?>

			</div>
		</div> <!-- .section -->
	</div> <!-- .innerWrapper -->

	<div class="services">

		<h2>Services</h2>
		 
	    <ul>
	 
	    <?php while( has_sub_field('services') ): ?>
	    	<li>
	    		<p><?php the_sub_field('services_desc'); ?></p>

	    	</li>
	    <?php endwhile; ?>
	 
	    </ul>
	</div>

<?php get_footer(); ?>