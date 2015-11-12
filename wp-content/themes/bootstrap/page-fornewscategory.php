<?php 
/*
	Template Name: NEWS
*/
?>

<?php get_header(); ?>

<?php 
	query_posts( array('category_name'=>'NEWS'));?>
		<div class="newspage">
		<h3>NEWS &amp; RELEASE ニュースリリース</h3>
		<div class="doubleborder" style="margin-bottom: 20px;"></div>
		<?php

			while ( have_posts() ) : the_post(); ?>
				<span><?php echo the_time('Y.m.d'); ?></span><a href="<?php echo post_permalink(); ?>"><?php echo the_title();?> </a>
				<br/>


			<?php endwhile;?>
		
		</div>

<?php get_footer(); ?>





