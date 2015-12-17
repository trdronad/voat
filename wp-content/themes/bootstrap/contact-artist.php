<?php 
	/*
	Template name: contact artist

	*/
	get_header();
?>
<?php 
	$artistname = $_GET['post-title-contact'];
?>
	<div class="wpcf7">
		<div class="form_art_name">
			<p><label>Artist Name</label><span class="wpcf7-form-control-wrap artist-name" ><input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" value="<?php echo $artistname; ?>"></span></p></div>
			<?php echo do_shortcode('[contact-form-7 id="735" title="Contact form 1"]'); ?>
	</div>
<?php
	get_footer();
?>