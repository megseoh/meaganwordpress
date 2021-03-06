<?php

/*
Template Name: Front Page
*/

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="innerWrapper clear">
			<!-- section -->
			<section class="featured clear">

				<h2>Featured Work</h2>

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

						<section id="<?php echo $post->post_name; ?>" class ="clear">

							<a href="<?php the_permalink(); ?>">
								<figcaption>
									<div class="overlay">
										<h3><?php the_title(); ?></h3>
										<h4><?php the_field('technologies'); ?></h4>
									</div>
								</figcaption>
								<figure>
									<?php 
										if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										  the_post_thumbnail();
										} 
									?>
								</figure>
							</a>
						</section>
					<?php endwhile; ?>
					
					<?php wp_reset_postdata(); ?>
					
				<?php else:  ?>
					[stuff that happens if there aren't any posts]
				<?php endif; ?>

			</section> <!-- /section -->

			<section class="services clear">

				<h2>Services</h2>
				 
			    <?php while( has_sub_field('services') ): ?>

			    		<section id="<?php echo the_sub_field('services_title'); ?>">

						<h3><?php the_sub_field('services_title'); ?></h3>
			    		<p><?php the_sub_field('services_desc'); ?></p>

			    		</section>
			
			    <?php endwhile; ?>

			    		<?php wp_reset_postdata(); ?>

			</section>
			<!-- /section -->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>