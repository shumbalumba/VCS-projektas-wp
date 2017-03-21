<?php

/* Template Name: Services */

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

<div class='services'>
            <div class='options pure-g'>
                <div class='option pure-u-1-3'>
                    <div class='option-img'><img src='<?php the_field('grid'); ?>'></div>
                    <h3>Hacking</h3>
                <ul>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Fast</li>
                         <li><i class="fa fa-check" aria-hidden="true"></i> Discreet</li>
                         <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support</li>
                         <li><i class="fa fa-check" aria-hidden="true"></i> No Questions Asked</li>
                         <li><i class="fa fa-check" aria-hidden="true"></i> Money Back Guarantee</li>
                         <li><i class="fa fa-check" aria-hidden="true"></i> Fun</li>
                    </ul>
                    <p>From $599</p>
                    <div class='order-service'>
                    <a href='#' class='order-button'><p>Order</p></a>
                    
                    </div>
                </div>
                <div class='option pure-u-1-3'>
                    <div class='option-img'><img src='<?php the_field('grid_2'); ?>'></div>
                    <h3>Organise a Protest</h3>
                    <ul>
                     <li><i class="fa fa-check" aria-hidden="true"></i> A Bit Less Fast</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Semi-Discreet</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> 24/7 Support</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Free Extras</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Awesome</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Fun</li>
                    </ul>
                    <p> From $1999</p>
                    <div class='order-service'>
                    
                        <a href='#' class='order-button'><p>Order</p></a>
                    </div>
                </div>
                <div class='option pure-u-1-3'>
                    <div class='option-img'><img src='<?php the_field('grid_3'); ?>'></div>
                    <h3>Order a Pizza</h3>
                    <ul>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Fast</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Discreet</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Delicious</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Free Extras</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Amazing</li>
                     <li><i class="fa fa-check" aria-hidden="true"></i> Fun</li>
                    </ul>
                    <p>From $5.99</p>
                    <div class='order-service'>
                    <a href='#' class='order-button'><p>Order</p></a>
                    
                    </div>
                </div>
                
                
                
                
                </div>
            
            
            </div>
            






<?php endwhile; ?>
	

<?php endif; ?>


<?php get_footer(); ?>