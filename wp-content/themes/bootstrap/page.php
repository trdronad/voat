<?php get_header(); ?>
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>			 
	 	<?php the_content(); ?>
	<?php endwhile; ?>
<?php else : ?>
	<div class="alert alert-info"><strong>No content in this loop</strong></div>
<?php endif; ?></div>
<?php get_footer(); ?>









