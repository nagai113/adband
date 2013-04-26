<?php get_header(); ?>

		<div id="pagecontainer">
			<div id="pagecontent">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
					<?php } else { ?>
					<?php } ?>
						<span class="pagetitle"><strong><?php the_title(); ?></strong></span><br /><br />
						<span class="pagecontent"><?php the_content(); ?></span>
						<?php wp_link_pages(); ?>
				</div><!-- post divs -->
<?php endwhile; ?>
			</div><!-- pagecontent div -->
		</div><!-- pagecontainer div -->
<?php get_footer(); ?>