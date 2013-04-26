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

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if(has_tag('featured')){ ?>

<figure>

<div id="figcaptionwrap">

<figcaption class="featuredcaptag">

Featured

</figcaption>

</div>

<div id="figcaptionwrap">

<figcaption class="featuredcap">

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

</figcaption>

</div>

<div id="featpost">

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>

</div>

</figure>



<?php } else { ?>

<figure>

<div id="figcaptionwrap">

<figcaption class="featuredcaptag">

Featured

</figcaption>

</div>

<div id="figcaptionwrap">

<figcaption class="featuredcap">

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

</figcaption>

</div>

<div id="featpost">

<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('large'); ?></a>

</div>

</figure>

<?php } ?>



<?php endwhile; else: ?>

Sorry, no posts matched your criteria.

<?php endif; ?>