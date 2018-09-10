<div class="col-sm-9 order-sm-2">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row post">
		<div class="col-sm-12">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p style="font-size: 12px;"><em>By <span class="author"><?php the_author(); ?></span> - <span class="date"><?php the_time( get_option( 'date_format' ) ); ?></span><br />Categories: <span class="categories"><?php the_category(', '); ?></span></em></p>			<?php if(has_post_thumbnail()) { ?>
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full',array('class' => 'img-fluid'));?></a>
			<?php } else {} ?>
			<p style="margin-top:10px;"><?php the_excerpt(); ?></p>
		</div>
	</div>
	
	<?php wp_link_pages(); ?>
    <?php endwhile; endif; ?>
    <?php wpex_pagination(); ?>
</div>
