<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h2><?php the_title(); ?></h2>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<div class="images">

					<h2>Services</h2>
					 
				    <ul>
				 
				    <?php while( has_sub_field('services') ): ?>
				    	<li>
				    		<p><?php the_sub_field('services_desc'); ?></p>
				    		
				    	</li>
				    <?php endwhile; ?>
				 
				    </ul>
				
				</div>

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
