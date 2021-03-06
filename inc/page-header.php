<?php if ( is_home() ) { ?>
<div class="container-fluid page-header" style="background:url(<?php if ( get_field( 'image', get_option('page_for_posts') ) ): the_field('image', get_option('page_for_posts')); else: the_field( 'default_page_header', 'option' ); endif;?>) no-repeat;background-size:cover;background-position:center center;">
<?php } else { ?>
<div class="container-fluid page-header" style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url(<?php if ( get_field( 'page_header_image' ) ): the_field('page_header_image'); else: the_field( 'default_page_header', 'option' ); endif;?>) no-repeat;background-size:cover;background-position:center center;">
<?php } ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1><?php
					if ( is_home() ) { 
				   		echo 'The Mindfulness Blog';
					} elseif ( is_search() ) { 
						echo $wp_query->found_posts . ' results found for "' . esc_html( get_search_query( false ) ) .'"';
					} else {
						the_title();
					}
				?></h1>
			</div>
		</div>
	</div>
</div>
