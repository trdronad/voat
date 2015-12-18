<?php /* Template Name: Artist Template */ ?>
<?php get_header(); ?>
	<div class="artist_container container">

		<?php
            $args = array (

              'category_name' => 'artist',
              'posts_per_page' => 1,
              'meta_key' => 'post_views_count',
              'orderby' => 'meta_value_num',
              'order' => 'DESC'  

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

		<div class="artist_cat">
			<div class="cat_rank"><div class="ranks"><a href="?rank=true">アクセスランキング | </><a href="?rank=true&cat=8"><?php echo get_cat_name(8); ?> .</a><a href="?rank=true&cat=9"> <?php echo get_cat_name(9); ?></a></div></div>
			<?php get_search_form( true ); ?>
		</div><div class="delimiter"></div>
		<div class="artist_ranking"> 
			<center><ul><?php rank_artist(); ?></ul></center>
		</div>
		<div class="color_date"><img src="http://voat.trcorp.cho88.com/wp-content/uploads/2015/11/color-code.jpg" alt=""></div>
	</div>


<?php function rank_artist(){
	$args = array( 'category_name' => 'artist', 'posts_per_page' => -1, 'meta_key' => 'post_views_count'  );
	if(isset($_REQUEST["cat"]))	
		$args["cat"] = $_REQUEST["cat"];
	if(isset($_REQUEST["rank"]) && $_REQUEST["rank"]=="true") {
		$args["meta_key"] = 'post_views_count';
		$args["orderby"] = 'meta_value_num';
		$args["order"] = 'DESC';
	}
	
	 
			$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			$args = array(
			   'posts_per_page' => 10,
			   'paged' => $paged,
			   'category_name' => 'artist'
			);
			$custom_query = new WP_Query( $args );

		$popularpost = new WP_Query($args);
	while ( $popularpost && $custom_query->have_posts() ) : $popularpost && $custom_query->the_post(); ?><?php
			
	   ?>
			<li>
				<?php $post_date = get_the_date( $format, $post_id );  ?>
				<?php if (date('Y-m-d',strtotime($post_date)) == date('Y-m-d',strtotime('-2 days'))): ?>
						<div class="artist_post" style="background-color: red">
				<?php elseif(date('Y-m-d',strtotime($post_date)) == date('Y-m-d',strtotime('-5 days'))): ?>
						<div class="artist_post" style="background-color: yellow">
				<?php elseif(date('Y-m-d',strtotime($post_date)) == date('Y-m-d',strtotime('-1 week'))): ?>
						<div class="artist_post" style="background-color: green">
				<?php elseif(date('Y-m-d',strtotime($post_date)) == date('Y-m-d',strtotime('-2 weeks'))): ?>
						<div class="artist_post" style="background-color: rgba(0, 0, 0, 0);">
				<?php else: ?>
						<div class="artist_post" style="">
				<?php endif; ?>
				<a href="<?php echo post_permalink(); ?>"><?php
	                $image = get_field('pic');
	                if( !empty($image) ): ?>
	                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /><?php endif; ?></a>
				<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
			</div></li>
	<?php 
		endwhile; } 
	?>
	
	<?php	
	/*Nath pagination*/
	
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	 
	$args = array(
	   'posts_per_page' => 10,
	   'paged' => $paged,
	   'category_name' => 'artist'
	);
	$custom_query = new WP_Query( $args );?>
	<div class="paginumbers col-lg-12" style="clear:both;">
	<?php
	if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
	} 
	/*ENDNath pagination*/
	?></div>
<?php get_footer(); ?>