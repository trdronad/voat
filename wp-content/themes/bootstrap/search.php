<?php /* Template Name: Artist Search Page */ ?>
<?php get_header(); ?>
<div class="search_heading"><h2></h2></div>
<div class="search_results">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
			<div class="artist_post"><?php the_content(); ?><?php the_title(); ?></div>
		<?php endwhile; ?>
	<?php else : ?>
		<div class="alert alert-info"><strong>No content in this loop</strong></div>
	<?php endif; ?></div>
</div>
<?php get_footer(); ?>