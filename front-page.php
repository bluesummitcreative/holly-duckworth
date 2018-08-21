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
	<div class="container-fluid container-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
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
	<div class="container-fluid bg-yellow text-center" style="padding:10px;">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2>Holly Duckworth is a leading mindfulness speaker, coach, and author.</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid container-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center">
					<img class="img-fluid" src="http://via.placeholder.com/400x400" alt="" />
				</div>
				<div class="col-sm-6 text-center">
					<h3>Lorem Ipsum dolor...</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis interdum massa. Nulla eu diam id nisi porta convallis nec sed mauris. Donec vitae turpis.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mattis interdum massa. Nulla eu diam id nisi porta convallis nec sed mauris. Donec vitae turpis.</p>
					<p><a href="#" class="btn btn-primary">LEARN MORE</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-yellow text-center" style="padding:10px 20px;">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h4>Holly has written for the following publications:</h4>
					<a href="#"><img class="img-fluid" src="http://via.placeholder.com/150x75" alt="" /></a> <a href="#"><img class="img-fluid" src="http://via.placeholder.com/150x75" alt="" /></a> <a href="#"><img class="img-fluid" src="http://via.placeholder.com/150x75" alt="" /></a> <a href="#"><img class="img-fluid" src="http://via.placeholder.com/150x75" alt="" /></a> 
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid container-padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 text-center">
					<img class="img-fluid" src="http://via.placeholder.com/800x800" alt="" />
				</div>
				<div class="col-sm-9 text-center">
					<blockquote>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam efficitur diam nunc, at rutrum turpis rutrum non. Nullam vehicula elit ut sagittis cursus. Cras ultricies, lorem et dignissim eleifend, metus."</blockquote>
					<p><a href="#" class="btn btn-primary">Read All Testimonials</a>
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
