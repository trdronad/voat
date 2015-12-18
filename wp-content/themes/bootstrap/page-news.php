<?php 
/*
	Template Name: NEWS TEMPLATE
*/
?>

<?php get_header(); ?>

<?php 
	query_posts( array('category_name'=>'NEWS'));?>
		<div class="newspage container">
		<h3 class="newsheadrelease">NEWS &amp; RELEASE</h3><h4 class="japrelease"> 新着情報</h4>
		<div class="doubleborder" style="margin-bottom: 20px;"></div>
		<?php

			while ( have_posts() ) : the_post(); ?>
				<div class="dateandhead"><span><?php echo the_time('Y.m.d'); ?></span><a href="<?php echo post_permalink(); ?>"><?php echo substr(the_title(), 0,40); ?> </a></div>


			<?php endwhile;?>
		
		</div>

<?php get_footer(); ?>





