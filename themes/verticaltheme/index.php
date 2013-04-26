<?php get_header(); ?>

    <?php $shortname = "vertical"; ?>
    
    <?php if(get_option($shortname.'_disable_slideshow','') != "Yes") { ?>

    <div id="slider_container">
      <div id="slideshow">

          
          <?php
          $slider_arr = array();
          $args = array(
                       //'category_name' => 'blog',
                       'post_type' => 'post',
                       'meta_key' => 'ex_show_in_slideshow',
                       'meta_value' => 'Yes',
                       'posts_per_page' => 10
                       //'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                       );
          query_posts($args);
          $y = 0;
          while (have_posts()) : the_post(); ?>
          
          <?php if($y == 0) { ?>
          <a href="<?php the_permalink(); ?>" class="active">
          <?php } else { ?>
          <a href="<?php the_permalink(); ?>">
          <?php } ?>
          
          <?php the_post_thumbnail('featured-slideshow',array('alt' => '', 'class' => 'slide_img', 'title' => '')); ?></a>
          
          <?php array_push($slider_arr,get_the_ID()); ?>
          <?php $y++; ?>
          <?php endwhile; ?>
          <?php wp_reset_query(); ?>
          
<!--              <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slider.png" alt="" />
              <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slider.png" alt="" />
              <img src="<?php //bloginfo('stylesheet_directory'); ?>/images/slider.png" alt="" />-->

      </div><!--//slideshow-->

      <a href="javascript:void(0)" onclick="slideSwitch_prev()" style="display: block;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-prev.png" class="slide_prev" /></a>
      <a href="javascript:void(0)" onclick="slideSwitch()" style="display: block;"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slide-next.png" class="slide_next" /></a>            
    </div><!--//slider_container-->
    
    <?php } ?>
    
    <div class="clear"></div>
    
    <div id="content">
    
        <?php
        $category_ID = get_category_id('blog');
        
        if (ereg('iPhone',$_SERVER['HTTP_USER_AGENT'])) {
        
        $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => -1,
                     'post__not_in' => $slider_arr,
                     'cat' => '-' . $category_ID
                     //'meta_key' => 'ex_show_in_slideshow',
                     //'meta_value' => 'Yes',                
                     //'meta_compare' => '!='
    //                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                     );
        
        } else {
        
        $args = array(
                     'post_type' => 'post',
                     'posts_per_page' => 3,
                     'post__not_in' => $slider_arr,
                     'cat' => '-' . $category_ID
                     //'meta_key' => 'ex_show_in_slideshow',
                     //'meta_value' => 'Yes',                
                     //'meta_compare' => '!='
    //                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                     );        
        
        }
        
        query_posts($args);
        $x = 0;
        while (have_posts()) : the_post(); ?>        
        
            <?php if($x == 2) { ?>
            <div class="home_post_box home_post_box_last">
            <?php } else { ?>
            <div class="home_post_box">
            <?php } ?>        
    
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-post'); ?></a>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
             <p><?php $temp_arr_content = explode(" ",substr(strip_tags(get_the_content()),0,190)); $temp_arr_content[count($temp_arr_content)-1] = ""; $display_arr_content = implode(" ",$temp_arr_content); echo $display_arr_content; ?><?php if(strlen(strip_tags(get_the_content())) > 190) echo "..."; ?></p> 
            </div><!--//home_post_box-->
            
        <?php $x++; ?>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>    
        
        <div class="clear"></div>
        
    </div><!--//content-->
    
<?php get_footer(); ?>        