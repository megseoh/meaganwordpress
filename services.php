<section class="services">

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