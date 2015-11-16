<?php /* Template Name: Artist Template */ ?>
<?php get_header(); ?>
	<div class="artist_container">
		<?php // create a custom wordpress query
			//query_posts("cat=5&posts_per_page=4"); ?>
			<?php
				$popularpost = new WP_Query( array( 'category_name' => 'artist', 'posts_per_page' => 2, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
				while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
					<div class="artist_post">
						<?php echo getPostViews(get_the_ID()); ?>
						<?php the_content(); ?>
						<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
					</div>
				<?php endwhile; ?>
		<div class="artist_cat">
			<label  class="screen-reader-text" for="s"><a href="?rank=true">アクセスランキング | </><a href="?rank=true&cat=8"><?php echo get_cat_name(8); ?> .</a><a href="?rank=true&cat=9"> <?php echo get_cat_name(9); ?></a></label>
			<?php get_search_form( true ); ?>
		</div><div class="delimiter"></div>
		<div class="artist_ranking"> 
			<ul><?php rank_artist(); ?></ul>
		</div>
	</div>
<?php get_footer(); ?>


<?php function rank_artist(){
	$args = array( 'category_name' => 'artist', 'posts_per_page' => -1, 'meta_key' => 'post_views_count'  );
	if(isset($_REQUEST["cat"]))
		$args["cat"] = $_REQUEST["cat"];
	if(isset($_REQUEST["rank"]) && $_REQUEST["rank"]=="true") {
		$args["meta_key"] = 'post_views_count';
		$args["orderby"] = 'meta_value_num';
		$args["order"] = 'DESC';
	}
	if(isset($_REQUEST["search_posts"]))
		$args['s']= $_REQUEST["search_posts"];
		
	$popularpost = new WP_Query($args);
	while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
		<li><div class="artist_post">
			<?php the_content(); ?>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		</div></li>
	<?php endwhile; } ?>
	
	
