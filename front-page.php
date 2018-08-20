<?php 
	/*Template Name: Home*/
	get_header();
	get_template_part('inc/slider-home'); ?>
	<div class="container-fluid container-padding intro">
		<div class="container">
			<div class="row">
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="10"]'); ?>
			</div>
		</div>
	</div>
	
<?php
	get_template_part('inc/intro-home');
	get_template_part('inc/funnels-home');
	get_template_part('inc/site-wide-cta');
	get_footer(); 
?>
