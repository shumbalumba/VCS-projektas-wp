<?php get_header();

get_template_part('elements/menu');

?>

<div class="grids">
           <div class="pure-g">
<?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;
//                   $grid = get_field('grid');
//                   $grid16 = get_field('grid_16');
//                   $grid2 = get_field('grid_2');
//                   $grid3 = get_field('grid_3');
//                   $grid4 = get_field('grid_4');
//                   $grid5 = get_field('grid_5');
//                   $grid6 = get_field('grid_6');
//                   $grid7 = get_field('grid_7');
//                   $grid8 = get_field('grid_8');
//                   $grid9 = get_field('grid_9');
//                   $grid10 = get_field('grid_10');
//                   $grid11 = get_field('grid_11');
//                   $grid12 = get_field('grid_12');
//                   $grid13 = get_field('grid_13');
//                   $grid14 = get_field('grid_14');
//                   $grid15 = get_field('grid_15');
//                   $size = 'full';
               
               
if(have_posts()): ?>
               
     
           <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge' href="<?php the_field('grid') ?>"><img class="filler" src="<?php the_field('grid') ?>"><div class="on"><?php the_field('grid_txt'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_2') ?>">  <img class="filler" src="<?php the_field('grid_2') ?>"><div class='on'><?php the_field('grid_txt_2'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_3') ?>">  <img class="filler" src="<?php the_field('grid_3') ?>"><div class="on"><?php the_field('grid_txt_3'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_4') ?>"><img class="filler" src="<?php the_field('grid_4') ?>"><div class="on"><?php the_field('grid_txt_4'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                 <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_5') ?>"><img class="filler" src="<?php the_field('grid_5') ?>"><div class="on"><?php the_field('grid_txt_5'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
               <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_6') ?>"><img class="filler" src="<?php the_field('grid_6') ?>"><div class="on"><?php the_field('grid_txt_6'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_7') ?>"><img class="filler" src="<?php the_field('grid_7') ?>"><div class="on"><?php the_field('grid_txt_7'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
               <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_8') ?>"> <img class="filler" src="<?php the_field('grid_8') ?>"><div class="on"><?php the_field('grid_txt_8'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_9') ?>">  <img class="filler" src="<?php the_field('grid_9') ?>"><div class="on"><?php the_field('grid_txt_9'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
              <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_10') ?>">   <img class="filler" src="<?php the_field('grid_10') ?>"><div class="on"><?php the_field('grid_txt_10'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_11') ?>"><img class="filler" src="<?php the_field('grid_11') ?>"><div class="on"><?php the_field('grid_txt_11'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
               <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_12') ?>"><img class="filler" src="<?php the_field('grid_12') ?>"><div class="on"><?php the_field('grid_txt_12'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
               <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_13') ?>"> <img class="filler" src="<?php the_field('grid_13') ?>"><div class="on"><?php the_field('grid_txt_13'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_14') ?>"> <img class="filler" src="<?php the_field('grid_14') ?>"><div class="on"><?php the_field('grid_txt_14'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_15') ?>">  <img class="filler" src="<?php the_field('grid_15') ?>"><div class="on"><?php the_field('grid_txt_15'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
                <div class="tevukas pure-u-sm-1-2 pure-u-md-1-3 pure-u-xl-1-4"><a class='enlarge'href="<?php the_field('grid_16') ?>">  <img class="filler" src="<?php the_field('grid_16') ?>"><div class="on"><?php the_field('grid_txt_16'); ?><br/><br/><i class="fa fa-plus-square-o fa-3x" aria-hidden="true"></i></div></a></div>
    
                              
               
               
               
<?php else: ?>
<?php endif; ?>   
     


<?php get_footer(); ?>