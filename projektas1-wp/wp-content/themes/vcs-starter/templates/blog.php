<?php

/* Template Name: Blog */

get_header();

get_template_part('elements/menu');

?>

<!-- Start Point -->
 <?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

            
    if(have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>


<div class="blog">
            <div class="pure-g">
                <div class="pure-u-md-1-2 pure-u-lg-1-4 pure-u-sm-1-1"><div class="blogai"><img class="blogimg"  src="<?php the_field('grid'); ?>"><h4><?php the_field('grid_txt'); ?></h4><p class="blog-p"><?php the_field('blog1'); ?></p></div></div>
                <div class="pure-u-md-1-2 pure-u-lg-1-4 pure-u-sm-1-1"><div class="blogai"><img class="blogimg" src="<?php the_field('grid_2'); ?>"><h4><?php the_field('grid_txt_2'); ?></h4><p class="blog-p"><?php the_field('blog2'); ?></p></div></div>
                <div class="pure-u-md-1-2 pure-u-lg-1-4 pure-u-sm-1-1"><div class="blogai"><img class="blogimg" src="<?php the_field('grid_3'); ?>"><h4><?php the_field('grid_txt_3'); ?></h4><p class="blog-p"><?php the_field('blog3'); ?></p></div></div>
              <div class="pure-u-md-1-2 pure-u-lg-1-4 pure-u-sm-1-1"><div class="blogai"><img class="blogimg" src="<?php the_field('grid_4'); ?>"><h4><?php the_field('grid_txt_4'); ?></h4><p class="blog-p"><?php the_field('blog4'); ?></p></div></div>
               <div class="pure-u-md-1-2 pure-u-lg-1-4 pure-u-sm-1-1"><div class="blogai"><img class="blogimg" src="<?php the_field('grid_5'); ?>"><h4><?php the_field('grid_txt_5'); ?></h4><p class="blog-p"><?php the_field('blog5'); ?></p></div></div>
               <div class="pure-u-md-1-2 pure-u-lg-1-4 pure-u-sm-1-1"><div class="blogai"><img class="blogimg" src="<?php the_field('grid_6'); ?>"><h4><?php the_field('grid_txt_6'); ?></h4><p class="blog-p"><?php the_field('blog6'); ?></p></div></div>
            
            
            
            
            </div>
            
            </div>

<?php endwhile; ?>
	

<?php endif; ?>
            

<?php get_footer(); ?>