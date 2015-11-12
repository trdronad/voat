<?php /* Template Name: Artist2 Template */ ?>
<?php get_header(); ?>
	<div class="artist_container">
		<?php
		if (have_posts()) : the_post(); ?>
		<div class="artist_post"> 
			<?php the_post_thumbnail();?>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		</div>
		<?php the_meta();  ?>
		<?php  endif; ?>
	</div>
<div class="container-fluid artist2 min-h">
	<div class="row">
		<div class="container">
			<div class="row">
				<h1>The quick brown fox jumps over the lazy dog near the river by the sea.</h1>
			</div>
			<div class="row">
				<div class="col-lg-3 side">
					<h1>PROFILE</h1> 
						<div class="side-box">
							<?php
								if (have_posts()) : the_post(); ?>
									<div class="artist_profile">
									<?php echo get_post_meta(get_the_ID(), 'Music', true); ?>
									</div>
							<?php endif; ?>
						</div>
							<ul class="soc-name">
								<li><a href="https://twitter.com" target="_blank">Twitter</a></li>
								<li><a href="https://facebook.com" target="_blank">Facebook</a></li>
								<li><a href="https://instagram.com" target="_blank">Instagram</a></li>
								<li><a href="https://blog.com" target="_blank">Blog</a></li>
							</ul>
						<div class="contactbox">
							<h1 class="text-center">CONTACT</h1>
							<h3 class="text-center">このアーティストに興味を持っています</h3>
						</div>
							<h4 class="text-right">スタッフから返信されます。</h4>
				</div>
				<div class="col-lg-9 main">
					<h1 style="margin-bottom: 20px;">MUSIC</h1>
						<div class="row">
							<div class="col-lg-3 musicbox">
								<h1>サンプル</h1>
							</div>
							<div class="col-lg-9 musicrec">
								<?php echo do_shortcode('[soundcloud]http://soundcloud.com/forss/flickermood[/soundcloud]'); ?><br>
								<?php echo do_shortcode('[soundcloud]http://soundcloud.com/forss/flickermood[/soundcloud]'); ?>
							</div>
						</div>
							<h3>OOOOOOOSingle</h3>
							<h1>VIDEO</h1>
						<div class="row" style="margin: 0 20px;">
							<div class="col-lg-5 vid-box1">
								<iframe width="100%" height="auto" src="https://www.youtube.com/embed/8OBfr46Y0cQ" frameborder="0" allowfullscreen></iframe>
							</div>
							<div class="col-lg-5 vid-box2">
								<iframe width="100%" height="auto" src="https://www.youtube.com/embed/8OBfr46Y0cQ" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
							<h1>NEWS</h1>
						<div class="artist2-news">2015.10.20<strong>12/24OOサンプルサンプルサンプル</strong></div>
						<h1 style="margin-top: 50px;">COMMENT</h1>
						<article id="post-<?php the_ID(); ?>">
						<?php 
						if ( comments_open() || get_comments_number() ) : comments_template(); 
						endif; ?>
						</article>
				</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>


