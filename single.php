<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="post clear">

		<div class="post">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<!-- post title -->
					<h2>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					<!-- /post title -->

					<!-- post thumbnail -->
					<?php// if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a> -->
					<?php// endif; ?>
					<!-- /post thumbnail -->

					<!-- post details -->
					<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
					<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
					<!-- <span class="comments"><?php //comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span> -->
					<!-- /post details -->

					<?php the_content(); // Dynamic Content ?>

					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

					<!-- <p><?php //_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->

					<?php //comments_template(); ?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>

				<!-- article -->
				<article>

					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

				</article>
				<!-- /article -->

			<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
