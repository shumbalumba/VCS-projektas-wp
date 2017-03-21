<?php

/* Template Name: About */

get_header();

get_template_part('elements/menu');

?>

<!-- Start Point -->

<div class='about pure-g'>
    
    <?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

            
    if(have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
                 <div class='about-left pure-u-lg-1-2'>
           <?php the_post_thumbnail('auto', array('class' => 'anon', 'alt' => '')); ?> 
               <div class='about-text'>
                    <?php echo the_content(); ?></div>
               <div class='staff'>
                <h2>Our Staff</h2>
                   <div class='pure-g'>
                   <div class='sidez pure-u-xl-1-3'><img class='an' src='<?php the_field('grid'); ?>'><div class="side"><?php the_field('grid_txt'); ?></div></div>
                   <div class='sidez pure-u-xl-1-3'><img class='an' src='<?php the_field('grid_2'); ?>'><div class="side"><?php the_field('grid_txt_2'); ?></div></div>
                   <div class='sidez pure-u-xl-1-3'><img class='an' src='<?php the_field('grid_3'); ?>'><div class="side"><?php the_field('grid_txt_3'); ?></div></div>
                   <div class='sidez pure-u-xl-1-3'><img class='an' src='<?php the_field('grid_4'); ?>'><div class="side"><?php the_field('grid_txt_4'); ?></div></div>
                   <div class='sidez pure-u-xl-1-3'><img class='an' src='<?php the_field('grid_5'); ?>'><div class="side"><?php the_field('grid_txt_5'); ?></div></div>
                   <div class='sidez pure-u-xl-1-3'><img class='an' src='<?php the_field('grid_6'); ?>'><div class="side"><?php the_field('grid_txt_6'); ?></div></div>
                 </div>
                </div>
                </div>
                <div class='about-right pure-u-lg-1-2'>
                <h2>Our Skills</h2>
                    <div class='skills'>
                    <p><?php the_field('skill_1'); ?><span><?php the_field('skill_1_level'); ?></span></p>
                       <div class='meter'><div class='video' style='width: <?php the_field('skill_1_level'); ?>'></div></div>
                        <p><?php the_field('skill_2'); ?><span><?php the_field('skill_2_level'); ?></span></p>
                        <div class='meter'><div class='video' style='width: <?php the_field('skill_2_level'); ?>'></div></div>
                        <p><?php the_field('skill_3'); ?><span><?php the_field('skill_3_level'); ?></span></p>
                        <div class='meter'><div class='video' style='width: <?php the_field('skill_3_level'); ?>'></div></div>
                        <p><?php the_field('skill_4'); ?><span><?php the_field('skill_4_level'); ?></span></p>
                        <div class='meter'><div class='singing' style='width: <?php the_field('skill_4_level'); ?>'></div></div>
                     </div>
                    
                 <dvi class='trololo'>
                     <a class="youtube"  title="Our Work" href="<?php the_field('video_url'); ?>"><div class = 'trol-video'><img src="<?php the_field('video'); ?>" alt="" /><i class="fa fa-youtube-play fa-4x" aria-hidden="true"></i></div></a></dvi>
                     
                   
<!--         </div>-->
            </div> 
            </div>


	<?php endwhile; ?>
	

<?php endif; ?>


<?php get_footer(); ?>