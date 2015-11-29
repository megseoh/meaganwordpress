<?php get_header(); ?>

<main role="main">
  <!-- section -->
  <section class="portfolio">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="details">

            <h2><?php the_title(); ?></h2>

            <?php if( get_field( 'client_name' ) ): ?>
                <h3><?php the_field( 'client_name' ); ?></h3>
            <?php endif; ?>

            <?php if( get_field( 'technologies' ) ): ?>
                <h3><?php the_field( 'technologies' ); ?></h3>
            <?php endif; ?>

            <?php if( get_field( 'year' ) ): ?>
                <p><?php the_field( 'year' ); ?></p>
            <?php endif; ?>

            <?php if( get_field( 'short_description' ) ): ?>
                <p><?php the_field( 'short_description' ); ?></p>
            <?php endif; ?>

            <?php if( get_field( 'live_site' ) ): ?>
                <a href="<?php the_field('live_site'); ?>"><i class="fa fa-5x fa-eye"></i></a>
            <?php endif; ?>

        </div>

        <div class="portfolio-images">

      		<?php while ( has_sub_field('images')): ?>
    				<div class="portfolio-image">
    					<?php $image = get_sub_field ('image'); ?>
              <?php if( get_field( 'live_site' ) ): ?>
                <a href="<?php the_field('live_site'); ?>">
              <?php endif; ?>
              <img src="<?php echo $image ['sizes'] ['large']; ?>" alt="">
              <p><?php the_sub_field ('caption'); ?></p>
              <?php if( get_field( 'live_site' ) ): ?>
                </a>
              <?php endif; ?>
    				</div>
          <?php endwhile; ?>


          <?php if( get_field( 'metaslider' ) ): ?>
            <?php
                echo do_shortcode('[metaslider id=158]');
            ?>
            <img src="/wp-content/uploads/2015/09/landscape-ipad.png" alt="" class="tablet-image">
          <?php endif; ?>

  <!-- 			<pre>
  				<?php //print_r ( $image ); ?>
  			</pre> -->
    		</div>


      <?php endwhile; // end of the loop. ?>

      </section>
      <!-- /section -->
</main>

<?php get_footer(); ?>