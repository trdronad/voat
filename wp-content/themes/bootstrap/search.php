<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<div class="container">
<?php
$s=get_search_query();

$args = array(
                's' =>$s,
                'category_name' => 'artist'
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2><br />");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
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
        </div>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>



</div>
<?php get_footer(); ?>