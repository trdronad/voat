<?php get_header(); ?>
	<div class="artist_container">
		<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="artist_post">
			<?php the_content(); ?>
			<h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
		</div>
		<?php endwhile; endif; ?>
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
								if (have_posts()) : while (have_posts()) : the_post(); ?>
									<div class="artist_profile">
									<?php the_content(); ?>
									</div>
							<?php endwhile; endif; ?>
							<h5>Name: Your name here</h5>
							<h5>Gender: Your gender here</h5>
							<h5>Nationality: Your nationality here</h5>
							<h5>Religion: Your religion here</h5>
							<h5>Age: Your age here</h5>
							<h5>Address: Your address here</h5>
							<h5>Likes: Your likes here</h5>
							<h5>Dislikes: Your dislikes here</h5>
						</div>
							<ul class="soc-name">
								<li><a href="https://twitter.com" target="_blank">Twitter</a></li>
								<li><a href="https://facebook.com" target="_blank">Facebook</a></li>
								<li><a href="https://instagram.com" target="_blank">Instagram</a></li>
								<li><a href="https://blog.com" target="_blank">Blog</a></li>
							</ul>
						<div class="contactbox">
							<h1 class="text-center">CONTACT</h1>
							<h3 class="text-center">サンプルサンプル</h3>
						</div>
							<h4 class="text-right">サンプルサンプル</h4>
				</div>
				<div class="col-lg-9 main">
					<h1 style="margin-bottom: 20px;">MUSIC</h1>
						<div class="row">
							<div class="col-lg-3 musicbox">
								<h1>サンプル</h1>
							</div>
							<div class="col-lg-9 musicrec">
								<h1 class="s1">Sound Cloud</h1>
								<h1>Sound Cloud</h1>
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
						<h1 style="margin-top: 50px;">COMMENTS</h1>
				</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>


