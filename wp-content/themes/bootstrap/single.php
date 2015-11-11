<?php get_header(); ?>

	
<?php

	while ( have_posts() ) : the_post(); ?>

		<?php if ( in_category('news') ) { ?>
		<h3 class="news-date">News | <?php echo the_time('Y.m.d'); ?></h3>
		<br />
		<h3 class="category-news"><?php echo the_title(''); ?></h3>
		<?php } else { ?>
		<p></p>
		<?php } ?>
		<br />
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>

	<?php

		get_template_part(  the_content(), get_post_format() );
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; 
	?>
	
	</article>

	<?php if ( in_category('news') ) { ?>

			<div id="s-share-buttons" class="">
			<div class="s-single-share">
			<div class="fb-share-button fb_iframe_widget" data-href="http://voat.localhost/2015/10/28/news-post/" data-type="button_count" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=88&amp;href=http%3A%2F%2Fvoat.localhost%2F2015%2F10%2F28%2Fnews-post%2F&amp;locale=en_US&amp;sdk=joey&amp;type=button_count"><span style="vertical-align: bottom; width: 88px; height: 20px;"><iframe name="f23538767" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:share_button Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/share_button.php?app_id=&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FwjDNIDNrTQG.js%3Fversion%3D41%23cb%3Df2e9d91e8c%26domain%3Dvoat.localhost%26origin%3Dhttp%253A%252F%252Fvoat.localhost%252Ff3f91be70c%26relation%3Dparent.parent&amp;container_width=88&amp;href=http%3A%2F%2Fvoat.localhost%2F2015%2F10%2F28%2Fnews-post%2F&amp;locale=en_US&amp;sdk=joey&amp;type=button_count" style="border: none; visibility: visible; width: 88px; height: 20px;" class=""></iframe></span></div></div><div class="s-single-share"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="http://platform.twitter.com/widgets/tweet_button.3beb63f1e7d4b547a42d79c021627bc3.en.html#_=1447205038125&amp;count=horizontal&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Fvoat.localhost%2F2015%2F10%2F28%2Fnews-post%2F&amp;size=m&amp;text=%C2%BB%20NEWS%20POST%20VOAT%20MUSIC&amp;type=share&amp;url=http%3A%2F%2Fvoat.localhost%2F2015%2F10%2F28%2Fnews-post%2F" style="position: static; visibility: visible; width: 79px; height: 20px;"></iframe>
			</div><div class="s-single-share">
			<div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"><iframe frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1447205037731" name="I0_1447205037731" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=medium&amp;origin=http%3A%2F%2Fvoat.localhost&amp;url=http%3A%2F%2Fvoat.localhost%2F2015%2F10%2F28%2Fnews-post%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.497u-M4HQ6w.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Ft%3Dzcms%2Frs%3DAGLTcCO4dIIAGjeagp-1ISk1GO4scDWFxQ#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1447205037731&amp;parent=http%3A%2F%2Fvoat.localhost&amp;pfname=&amp;rpctoken=28219609" data-gapiattached="true" title="+1"></iframe></div>
			</div></div>
			
		<?php } else { ?>
		<p></p>
	<?php } ?>


	<?php

	endwhile;

?>


<?php get_footer(); ?>


