<?php get_header(); ?>
<?php
   while ( have_posts() ) : the_post(); ?>
  <?php setPostViews(get_the_ID()); ?>
<?php if ( in_category('news') ) { ?>
<div class="container">
<h2> News | <?php echo the_time('Y.m.d'); ?></h2>
<h3><?php echo the_title(''); ?></h3>
 <?php echo the_content(); ?> 
<?php
   if(in_category('news'))
   {
      echo do_shortcode('[simple-social-share]');
      
   }else
   {
      echo "";
   }
   ?>
 </div>
<?php } else { ?>
<div class="container">
<h2> <?php the_category(', '); ?> | <?php echo the_time('Y.m.d'); ?></h2>
<h3><?php echo the_title(''); ?></h3>
 <?php echo the_content(); ?> </div>
<?php }; ?>
<br />
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

<?php
   get_template_part( get_post_format() );
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