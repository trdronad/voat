<?php



get_header(); ?>



   <div id="primary" class="content-area">

      <main id="main" class="site-main" role="main">

          <div class="social-icons text-right">

            <ul>

            <li><?php echo do_shortcode('[simple-social-share]'); ?></li>

             <li><?php include 'like.php' ?></li>

            </ul>

         </div>

        

          <?php while ( have_posts() ) : the_post(); ?>

            <?php setPostViews(get_the_ID()); ?>

            <div class="container single-artist-post"><article class="cat_artist_post">

              <div class="thumbnail-artist-post col-lg-12 col-md-12 col-sm-12 col-xs-12">



              <?php $valuetw = post_custom('twitter');

                        $valuefa = post_custom('facebook');

                        $valuein = post_custom('instagram');

                        $valuebl = post_custom('blog');

                        $valuevi = get_field('video');

                        $valuevi2 = get_field('video2');

                        $valuecom = post_custom('comment');

                        $valuepic = post_custom('pic');
                        $valuename = post_custom('english_name');

                        $soundcloud = get_field('soundcloud');
                        $soundcloud2 = get_field('soundcloud2');

              ?>



                <div class="the-artist-image"><?php
                $image = get_field('pic');
                if( !empty($image) ): ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?>
                </div> 

              </div>

              <div class="artist-content-post col-lg-12 "><p><?php echo $valuename; ?><p></div>

              <div class="row profile-meta col-lg-4 col-md-12 col-sm-12 col-xs-12">

                <h3 class="profile-title">PROFILE</h3>

                  <?php $valuep = post_custom('profile');?>

                  <div class="profile-meta-value"><p class="valuepro"> <?php  echo $valuep; ?></p></div>

                 <div class="profile-meta-social">

                  

                  <a href="<?php  echo $valuetw; ?>" target="_blank">Twitter</a><br/>

                  <a href="<?php  echo $valuefa; ?>" target="_blank">Facebook</a><br/>

                  <a href="<?php  echo $valuein; ?>" target="_blank">Instagram</a><br/>

                  <a href="<?php  echo $valuebl; ?>" target="_blank">Blog</a><br/>

                  </div>

                  <div class="post-meta-contact">

                    <form action="http://voat.trcorp.cho88.com/contact-form/" method="get">
                      <input type="text" class="get-artist-value" name="post-title-contact" value="<?php the_title();  ?>" />
                    
                       <button class="contact-blue" type="submit">
                          <div>

                          <h1>CONTACT</h1>

                          <p class="artist-interest-contact">このアーティストに興味がある </p>
                          </div>
                        </button>
                         <!--<a href="http://voat.trcorp.cho88.com/contact-form/" class="my-subject" dataTitle="<?php the_title(); ?>">WALA NA</a> -->
                      

                    
                    </form>
                    <div class="reply-staff-head">

                      <h5 class="reply-staff">スタッフよりご返信します。 </h5>

                    </div>

                  </div>



                  

              </div>

              <div class="multimedia-meta col-lg-8 col-sm-12">

                <div class="music-meta col-lg-4 cold-md-4 col-sm-4 col-xs-8">
                
                  <?php $valuemu_null = get_field('');



                        $music_meta_val = get_post_meta($post_id, $key = 'album_art');

                    if( $valuemu ==  $valuemu_null):

                      $valuemu = "<img src='http://voat.trcorp.cho88.com/wp-content/uploads/2015/11/img_placeholder.png'/>";

                      else:

                    endif;

                   ?>

                  <h3>MUSIC</h3>
                  <div class="album-image">
                    <?php the_field('field_name'); ?>
                    <?php
                    $albumimage = get_field('album_art');
                    if( !empty($albumimage) ): ?>
                    <img src="<?php echo $albumimage['url']; ?>" alt="<?php echo $albumimage['alt']; ?>" /><?php endif; ?>
                  </div>

                  <h4>OOOOOOSingle</h4>

                </div>

                <div class="soundcloud-meta col-lg-8 cold-md-8 col-sm-8 col-xs-12">

                  <div class="soundcloud1-meta col-lg-12 col-md-12 col-xs-12">
                    <?php echo $soundcloud; ?>

                  </div>

                  <div class="soundcloud2-meta col-lg-12 col-md-12 sol-xs-12">
                    <?php echo $soundcloud2; ?>

                  </div>

                </div>

                <div class="video-meta">

                  <h3>VIDEO</h3>

                  <?php $valuevi_null = get_field('');

                        $valuevi2_null = get_field('');





                    if( $valuevi ==  $valuevi_null):

                      $valuevi = "<img src='http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/pause.jpg' />";

                     

                      elseif($valuevi2 ==  $valuevi2_null && $valuevi ==  $valuevi_null):
                       $valuevi2 = "<img src='http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/pause.jpg' />";
                      $valuevi = "<img src='http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/pause.jpg' />";

                      elseif($valuevi2 ==  $valuevi2_null):
                       $valuevi2 = "";
                     else:
                    endif;

                   ?>



                  <div class="video-panel col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    

                    <div class="video1-meta col-lg-6 col-md-6 cold-sm-12 cold-xs-12">

                      <div class="video-holder"><?php  echo $valuevi; ?></div>

                    </div>

                    <div class="video2-meta col-lg-6 col-md-6 cold-sm-12 cold-xs-12">

                      <div class="video-holder"><?php  echo $valuevi2; ?></div>

                    </div>

                  </div>

                </div>



                <div class="latest-news-section col-lg-12 col-md-12 col-sm-12 col-xs-12">

                  <h3>NEWS</h3>

                    <div class="newspage">

                    <?php $newsid = post_custom('news_category_id'); ?>

                    <?php
                      if(empty($newsid))
                      {
                        echo '<h4 class="no-news">' . 'no news for this artist' . '</h4>';
                      }else{

                      $my_query = new WP_Query('cat=' . $newsid); ?>

                          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                          <div class="dateandhead"><span><?php echo the_time('Y.m.d'); ?></span><a href="<?php echo post_permalink(); ?>"><?php echo the_title();?> </a></div><br/>

                          <?php endwhile; wp_reset_query();

                        } ?>

                      </div>

                </div>

                <div class="comment-section-artist">

                  <h3>COMENT</h3>

                  <div class="coment-holder col-lg-12 col-sm-12">

                    <p><?php echo $valuecom;?></p>

                  </div>

                </div>

                

              </div>



            </article>

          </div>



    <?php

          // End the loop.

          endwhile;

          ?>



      </main><!-- .site-main -->

   </div><!-- .content-area -->



<?php get_footer(); ?>

