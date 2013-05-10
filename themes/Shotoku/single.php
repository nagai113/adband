<?php get_header(); ?>		

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

	<article class="single_article">
		<section id="headerImage" class="eleven single-main"> 
			<aside>
			<?php if (get_post_meta($post->ID, "p-name", true)) : ?>
		<span class="p-name"><?php $key="p-name"; echo get_post_meta($post->ID, $key, true); ?></span>
			<?php else : ?>
			<?php endif; ?>

				<address>
		<span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"></a></span>
				</address>
			</aside>
			
		</section> 

		<section class="eleven single-main"> 
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
				<aside><data value="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></data>&nbsp Categries: <?php the_category(', ') ?></aside><br>
	
	<?php the_content(); ?>

			<aside class="tags">
				<ul>
			<li><?php the_tags( 'Tags: ', ', ', '' ); ?></li>
		<?php if(current_user_can('read_private_pages')) :?>
			<li><?php edit_post_link( __( 'Edit this post' ), '<span class="edit-link">', '</span>' ); ?></li>
		<?php endif; ?>
				</ul>
			</aside>
		</section> 
				<div class="clear"></div>

		<?php endwhile; ?>
	<?php endif; ?>

		<section class="eleven single-main commnetsarea">
		</section> 
	</article>
<?php get_footer(); ?>
