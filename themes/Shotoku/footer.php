
			<?php if (is_page_template('page-facebook-template.php')): ?>
			<?php else : ?>

	<footer class="footer">
		<ul>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<li class="one-third column"> 
			<h3>Categories</h3>
	<ul>
	<?php wp_list_categories('title_li='); ?>
	</ul>
		</li> 

		<li class="one-third column"> 
			<h3 class="widget-title">Links</h3>	
	<ul>
	<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
	</ul>
		</li> 

		<li class="one-third column"> 
			<h3 class="widget-title">Meta</h3>	
	<ul>
	<?php wp_register(); ?>
	<li><?php wp_loginout(); ?></li>
	<?php wp_meta(); ?>
	</ul>
		</li> 

			<?php endif; ?>
		</ul>

	</footer>
			<?php endif; ?>
			<div class="clear"></div>

	<p class="copyright"></p>
	<small class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> . All Rights Reserved.</small>
	</div><!-- container --> 

<?php wp_footer(); ?>

</body> 
</html>