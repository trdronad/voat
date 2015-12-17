<?php get_header(); ?>
<div class="container">
<?php
   while ( have_posts() ) : the_post(); ?>
  <?php setPostViews(get_the_ID()); ?>
<?php if ( in_category('news') ) { ?>

<h2> News | <?php echo the_time('Y.m.d'); ?></h2>

<div class="news-content">
<h3><?php echo the_title(''); ?></h3>
 <?php echo the_content(); ?>
 </div>
<?php
   if(in_category('news'))
   {
     echo '<div class="about-social social-icons text-right">';
  echo'<ul>';
    echo '<li>'; echo do_shortcode('[simple-social-share]'); echo '</li>';
     echo'<li>'; include 'like.php';  echo '</li>';
  echo '</ul>';
echo '</div>';
      
   }else
   {
      echo "";
   }
   ?>
 
<?php } else { ?>

<h2> <?php the_category(', '); ?> | <?php echo the_time('Y.m.d'); ?></h2>
<h3><?php echo the_title(''); ?></h3>
 <?php echo the_content(); ?> 
<?php }; ?>
<br />

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>


</article>



<?php
   endwhile;
   
   ?>
</div>
<?php get_footer(); ?>