<?php get_header(); ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      	<h2><?php the_title(); ?></h2>
      	<?php the_content(); ?>

      	<h3><?php the_field( 'client_name' ); ?></h3>

      	<p><?php the_field( 'short_description' ); ?></p>

		<div class="portfolio-images">

      		<?php while ( has_sub_field( 'images' ) ):  ?>
      		
				<div class="portfolio-image">

					<?php $image = get_sub_field ( 'image' ); ?>

					<img src="<?php echo $image [ 'sizes' ] [ 'large' ];?>" alt="">
					
					<p><?php the_sub_field ( 'caption' ); ?></p>

				</div>

      	<?php endwhile; ?>

<!-- 			<pre>
				<?php //print_r ( $image ); ?>
			</pre> -->
		</div>

        
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>