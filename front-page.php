<?php 
	/*Template Name: Home*/
	get_header();
	get_template_part('inc/slider-home'); ?>
	<div class="container-fluid bg-yellow home-monday">
		<div class="container">
			<div class="row">
				<div class="offset-sm-1 col-sm-3 text-center">
					<p>Subscribe to the<br /><strong>Mindful Monday</strong> Newsletter:</p>
				</div>
				<div class="offset-sm-1 col-sm-7">
					<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="10"]'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center container-padding">
					<h2>Benefits of Mindfulness Training</h2>
				</div>
				<div class="col-sm-4 text-center">
					ICON ETC.
				</div>
				<div class="col-sm-4 text-center">
					ICON ETC.
				</div>
				<div class="col-sm-4 text-center">
					ICON ETC.
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-yellow text-center">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2>Holly Duckworth is a leading mindfulness speaker, coach, and author.</h2>
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
