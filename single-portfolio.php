<?php get_header(); ?>

<main role="main">
  <!-- section -->
  <section class="portfolio">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="details">

            <h2><?php the_title(); ?></h2>

            <h3><?php the_field( 'client_name' ); ?></h3>

            <h3><?php the_field('technologies'); ?></h3>
            
            <p><?php the_field( 'year' ); ?></p>

            <p><?php the_field('short_description'); ?></p>

        </div>

        <div class="portfolio-images">

      		<?php while ( has_sub_field('images')): ?>
      		
				<div class="portfolio-image">

					<?php $image = get_sub_field ('image'); ?>

					<a href="<?php the_field('live_site'); ?>"><img src="<?php echo $image ['sizes'] ['large']; ?>" alt="" target="_blank"></a>
					
					<p><?php the_sub_field ('caption'); ?></p>

				</div>

            <?php endwhile; ?>

<!-- 			<pre>
				<?php //print_r ( $image ); ?>
			</pre> -->
		</div>

        
      <?php endwhile; // end of the loop. ?>

      </section>
      <!-- /section -->
</main>

<?php get_footer(); ?>