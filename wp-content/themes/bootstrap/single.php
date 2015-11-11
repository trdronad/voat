<?php get_header(); ?>

	
<?php

	while ( have_posts() ) : the_post(); ?>

		<?php if ( in_category('news') ) { ?>
		<h3 class="news-date">News | <?php echo the_time('Y.m.d'); ?></h3>
		<br />
		<h3 class="category-news"><?php echo the_title(''); ?></h3>
		<?php } else { ?>
		<p></p>
		<?php } ?>
		<br />
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

	<?php

		get_template_part(  the_content(), get_post_format() );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; 
	?>
	
	</article>

	<?php
	if(in_category('news'))
	{
		echo do_shortcode('[simple-social-share]');
	}else
	{
		echo "";
	}
	?>


	<?php

	endwhile;

?>


<?php get_footer(); ?>


