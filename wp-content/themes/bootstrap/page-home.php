<?php
   /*
    Template Name: HOME THEMPLATE
   */
   ?>
<?php get_header(); ?>
<section>
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
         <div class="item active">
            <img src="<?php the_field('slide-img-1'); ?>" alt="...">
            <div class="carousel-caption">
            </div>
         </div>
         <div class="item">
            <img src="<?php the_field('slide-img-2'); ?>" alt="...">
            <div class="carousel-caption">
            </div>
         </div>
         <div class="item">
            <img src="<?php the_field('slide-img-3'); ?>" alt="...">
            <div class="carousel-caption">
            </div>
         </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
   </div>
   <div class="contents container-fluid">
      <div class="row">
         <div class="social-icons text-right">
            <ul>
            <li><?php echo do_shortcode('[simple-social-share]'); ?></li>
            <li><?php include 'like.php'; ?></li>
            </ul>
         </div>
         <div class="text-center">
            <h1><?php the_field('voat-home-title'); ?></h1>
            <h4><?php the_field('voat-home-description'); ?></h4>
         </div>
         <div class="text-left mar-l">
            <h2><?php the_field('news-release-title'); ?></h2>
         </div>
         <div class="doubleborder"></div>
         <div class="date mar-l">
             <?php
               query_posts( array ( 'category_name' => 'news', 'posts_per_page' => -1 ) );
               ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <strong><?php echo  the_time('Y.m.d');?></strong>
                <?php echo '<span class="margin-l"><span>'; ?>
                <a href="<?php echo post_permalink(); ?>" style="text-decoration:underline;color:#000;font-size:25px;">
                <?php echo the_title();?> </a>
                <br />
                  <?php endwhile;?>

                 <?php
                 wp_reset_query();
                 ?>
         </div>
         <div class="mar-l">
            <h2><?php the_field('pickup-artist-title'); ?></h2>
         </div>
         <div class="doubleborder"></div>
         <?php
            query_posts( array ( 'category_name' => 'artist', 'posts_per_page' => 2) );
            ?>
         <?php while ( have_posts() ) : the_post(); ?>
         <div class="box1 col-lg-12">
            <a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
           <?php the_post_thumbnail(); ?>
            </a>
         </div>
         <?php endwhile;?>

          <?php
            wp_reset_query();
          ?>

      </div>
   </div>
</section>
<div class="text-right">
   <h5><a href="<?php echo get_permalink("184"); ?>"><button>VIEWMORE</button></a></h5>
</div>
<?php get_footer(); ?>