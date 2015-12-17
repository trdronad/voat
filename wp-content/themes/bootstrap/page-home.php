<?php
   /*
    Template Name: HOME THEMPLATE
   */
   ?>

<?php get_header(); ?>

<section class="container">
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      
      <!-- Wrapper for slides -->
      <?php

        $date = date('j');

        /*echo "$date";*/

        $number = $date;
        if ($number % 2 == 0) {
        ?>
          
          <div class="carousel-inner" role="listbox">
           <div class="item active">
              <img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner1.jpg">
              <div class="carousel-caption">
              </div>
           </div>
           <div class="item">
              <img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner2.jpg">
              <div class="carousel-caption">
              </div>
           </div>
          </div>


        <?php
        }
        else
        {
        ?>
          <div class="carousel-inner" role="listbox">
           <div class="item active">
              <img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner1.jpg">
              <div class="carousel-caption">
              </div>
           </div>
           <div class="item">
              <img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner3.jpg">
              <div class="carousel-caption">
              </div>
           </div>
          </div>
      <?php

        }
      ?>
<!--
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
      </div>
-->

      <br />
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>

      <!-- Controls -->
      
   </div>
   <div class="contents container-fluid">
      <div class="row">
        <br />
         <div class="social-icons text-right">
            <ul>
            <li><?php echo do_shortcode('[simple-social-share]'); ?></li>
             <li><?php include 'like.php' ?></li>
            </ul>
         </div>
         <div class="text-center">
            <h1><?php the_field('about-title', 177); ?></h1>
            <h4><?php the_field('home-desc'); ?></h4>
         </div>
         <div class="text-left mar-l">
            <h2><?php the_field('news-release-title'); ?></h2>
         </div>
         <div class="doubleborder"></div>
         <div class="date mar-l">
             <?php
               query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 4 ) );
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
            $args = array (

              'category_name' => 'artist',
              'posts_per_page' => '1',

              );

            $my_query = new WP_Query($args);
            while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
        <div class="home-artist">
          <div class="fix">
          <div class="artistnm">
            <a class="engname"href="<?php the_permalink();?>"><?php the_title();?></a><br>
            <a class="engnamesm"href="<?php the_permalink();?>"><?php the_field('english_name'); ?></a>
          </div>
          <div class="home-artist-img" style='display: inline-block; vertical-align: middle;'>

            <a href="<?php echo post_permalink(); ?>"><?php
                $image = get_field('pic');
                if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></a>
          </div>
        </div>
      <?php endwhile; ?>
        </div>
      </div>
   </div>
</section>

<div class="viewmore">
   <h5><a href="<?php echo get_permalink("184"); ?>">>VIEW MORE</a></h5>
</div>
<?php get_footer(); ?>