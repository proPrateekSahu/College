<?php
get_header();
get_template_part('index', 'bannerstrip');
 ?>

<!-- 404 Error Section -->
<div id="content">
<section id="section" class="404">
	<div class="container">

		<!-- Section Title -->
		<div class="row">
			<div class="col-md-12">
				<div class="error-404">
					<h1><?php esc_html_e('Error 404','busiprof'); ?></h1>
					<h3><span class="txt-color"><?php esc_html_e('Oops! Page not found','busiprof'); ?></span></h3>
					<p><?php esc_html_e('We are sorry, but the page you are looking for does not exist.','busiprof'); ?></p>
					<div class="btn-wrap"><a href="<?php echo esc_url(home_url('/'));?>" class="btn-error btn-large"><?php esc_html_e('Go Back','busiprof'); ?></a></div>
				</div>
			</div>
		</div>
		<!-- /Section Title -->					
	</div>
</section>
</div>
<!-- End of 404 Error Section -->

<?php get_footer();
