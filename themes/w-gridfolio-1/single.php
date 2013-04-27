<?php get_header(); ?>

<!-- imgload -->
<script type="text/javascript">
	$(function () {
		$('img').hide();//hide all the images on the page
	});

	var i = 0;//initialize
	var int=0;//Internet Explorer Fix
	$(window).bind("load", function() {//The load event will only fire if the entire page or document is fully loaded
		var int = setInterval("doThis(i)",300);//300 is the fade in speed in milliseconds
	});

	function doThis() {
		var images = $('img').length;//count the number of images on the page
		if (i >= images) {// Loop the images
			clearInterval(int);//When it reaches the last image the loop ends
		}
		$('img:hidden').eq(0).fadeIn(600);//fades in the hidden images one by one
		i++;//add 1 to the count
	}
</script>
<!-- imgload -->

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div id="content"> <!-- content -->
<div id="contentcopy"> <!-- copy -->
<span class="pagetitle"><strong><?php the_title(); ?></strong> &mdash; <a href="<?php bloginfo('url'); ?>" target="_self">Close</a></span><br /><br />
<span class="pagecontent"><?php the_content(); ?></span><br />

</div><!-- copy -->
<!--
<div id="imgcontent">
<?php my_attachment_gallery(0, 'large', 'alt="' . $post->post_title . '"'); ?>
</div>
-->



<?php endwhile; // end of the loop. ?>

</div><!-- content -->
</div><!-- container -->
<?php get_footer(); ?>