<?php
   /*
    Template Name: ABOUT THEMPLATE
   */
   ?>
 <?php get_header(); ?>


<div class="container">
<h1 class="about-t"><?php the_field('about-title'); ?><h1>
<h3 class="text-center"><?php the_field('about-description'); ?></h3>
<div class="about-box">
	 <img src="<?php the_field('about-image'); ?>" alt="...">
</div>
<div class="about-social social-icons text-right">
  <ul>
    <li><?php echo do_shortcode('[simple-social-share]'); ?></li>
    <li><?php include 'like.php'; ?></li>
  </ul>
</div>
</div>

<?php get_footer(); ?>

