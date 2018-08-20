<?php 
	/*Template Name: Home*/
	get_header();
	get_template_part('inc/slider-home'); ?>
	<div class="container-fluid home-monday">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<p>Subscribe to the <strong>Mindful Monday</strong> Newsletter:</p>
				</div>
				<div class="col-sm-9">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="10"]'); ?>
				</div>
			</div>
		</div>
	</div>
	
<?php
	get_template_part('inc/intro-home');
	get_template_part('inc/funnels-home');
	get_template_part('inc/site-wide-cta');
	get_footer(); 
?>
