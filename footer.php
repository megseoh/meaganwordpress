			<!-- footer -->
			<footer class="footer clear" role="contentinfo">

				<div class="footerWrapper clear">

					<a href="#top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/arrow.svg" class="svg"></a>

					<a href="#top"><?php //get_template_part( 'img/icons/inline', 'arrow.svg' ); ?></a>

					<?php //get_template_part('searchform'); ?>

					<div class="connect clear">

						<h3>Contact</h3>
						<h3>Connect</h3>
						<h3>Create</h3>

						<ul class="social_media clearfix">

							<li><a href="mailto:ohara.meagan@gmail.com"><i class="fa fa-4x fa-envelope"></i></a></li>

							<li><a href="http://twitter.com/megseoh" target="_blank"><i class="fa fa-4x fa-twitter"></i></a></li>

							<li><a href="http://ca.linkedin.com/in/meaganeohara/" target="_blank"><i class="fa fa-4x fa-linkedin"></i></a></li>

							<li><a href="http://github.com/megseoh" target="_blank"><i class="fa fa-4x fa-github-alt"></i></a></li>

							<li><a href="http://instagram.com/megseoh" target="_blank"><i class="fa fa-4x fa-instagram"></i></a></li>

							<li><a href="http://pinterest.com/megseoh" target="_blank"><i class="fa fa-4x fa-pinterest"></i></a></li>

							<li><a href="http://codepen.io/megseoh" target="_blank"><i class="fa fa-4x fa-codepen"></i></a></li>

						</ul>

					</div>

				</div>

					<!-- copyright -->
					<p class="copyright clear">
						Designed &amp; coded by <?php bloginfo('name'); ?>
						&copy; <?php echo date('Y'); ?>
					</p>
					<!-- /copyright -->
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>