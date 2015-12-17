<?php
/*
	TEMPLATE NAME: Showcase

*/


?>


<?php get_header(); ?>

<div class="container showcase">
	<center>
	<h1>SHOWCASE OF VOAT Vol.9</h1>
	<hr />
	<h2>ショーケースオブ VOAT Vol.9　出演メンバー</h2>
	<h2>HARAJYUKU Astro Hall 2016.02.25</h2>
	<hr />
	</center>
		<section>
		<div class="content">

			<!--<?php

				$date = date('j');

				/*echo "$date";*/

				$number = $date;
				if ($number % 2 == 0) {

					/*print "It's even";*/
					echo '<img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner1.jpg">';
					echo '<img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner2.jpg">';

				}
				else
				{
					/*print "It's odd";*/
					echo '<img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner1.jpg">';
					echo '<img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase-banner3.jpg">';
				}
			?>
			-->
			<img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/showcase.png">
		
		</div>
		<div class="what">
			<center>
				<h1>What's SHOW CASE OF VOAT</h1>
				<p>ショーケースオブVOATとは、メジャーデビューを目指すあなたのために行う音楽業界へのプレゼンライブです。</p>
				<p>大手レコード会社、音楽プロダクションから、毎年約30社、50名の方々がスカウトに来場するので大きなデビューチャンス！</p>
				<p>出演者は「ショーケースオーディション」から選抜されて「無料100日レッスン」の育成が受けられます。</p>
			</center>
		</div>
		<br />
		<div class="last">
			
			<center><img src="http://voat.trcorp.cho88.com/wp-content/themes/bootstrap/img/last.png" /></center>
			
		</div>
		<div class="about-social social-icons text-right">
		  <ul>
		    <li><?php echo do_shortcode('[simple-social-share]'); ?></li>
		    <li><?php include 'like.php' ?></li>
		  </ul>
		</div>
		</section>

</div>

<?php get_footer(); ?>