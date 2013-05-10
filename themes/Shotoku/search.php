<?php global $wp_query;
query_posts(
	array_merge(
		array('post__not_in' => array(227)),
		$wp_query->query
	)
);?>

<?php get_header(); ?>



	<article class="index_article"> 
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
	<section class="one-third column feature"> 
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php if (get_post_meta($post->ID, "p-name", true)) : ?>
		<span class="p-name"><?php $key="p-name"; echo get_post_meta($post->ID, $key, true); ?></span>
			<?php else : ?>
			<?php endif; ?>
	</section> 
			<?php endwhile; else : ?>
				<section class="eleven single-main noresults"> 
					<h4>見つからないねぇ...</h4><br><br>
						<p>Not found.</p>
						<br>
				</section> 
			<?php endif; ?>	
					<div class="clear"></div>
	</article>

		<nav class="navigation">
			<div class="fl"><?php next_posts_link(trim(__('&laquo; Older Entries', 'default'))) ?></div>
			<div class="fr"><?php previous_posts_link(trim(__('Newer Entries &raquo;', 'default'))) ?></div>
					<div class="clear"></div>
		</nav>
<?php get_footer(); ?>
