<?php get_header();

/* Template Name: Work */

get_template_part('elements/menu');

?>

<div class="work">
     <div class="pure-g">
    <?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

            
    if(have_posts()): ?>
    
           
            <div class="work-left pure-u-lg-1-2 pure-u-1-1">
                <div class='peleda'>
            <div class="owl-carousel">
                <div class='owlz'><img src="<?php the_field('grid'); ?>" alt="hacking"><p><?php the_field('grid_txt'); ?></p></div>
                <div class='owlz'><img src="<?php the_field('grid_2'); ?>" alt="protesting"><p><?php the_field('grid_txt_2'); ?></p></div>
                <div class='owlz'><img src="<?php the_field('grid_3'); ?>" alt="talking in videos"><p><?php the_field('grid_txt_3'); ?></p></div>
               </div>
<!--
             <div class='owl-prev'><img src='images/Untitled-2.png'></div>
                        <div class='owl-next'> <img src="images/Untitled-1.png"></div>
-->
            </div>
                
            <?php while (have_posts()) : the_post(); ?>
                
                <div class="our-work">
                    <p><?php echo the_content(); ?></p></div>
            
            </div>
            <div class="work-right pure-u-lg-1-2 pure-u-1-1">
                <div class = 'jobs'>
                    <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job'); ?><p><?php the_field('job_dscrb') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_2'); ?><p><?php the_field('job_dscrb_2') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_3'); ?><p><?php the_field('job_dscrb_3') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_4'); ?><p><?php the_field('job_dscrb_4') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_5'); ?><p><?php the_field('job_dscrb_5') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_6'); ?><p><?php the_field('job_dscrb_6') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_7'); ?><p><?php the_field('job_dscrb_7') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i>M<?php the_field('job_8'); ?><p><?php the_field('job_dscrb_8') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_9'); ?><p><?php the_field('job_dscrb_9') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_10'); ?><p><?php the_field('job_dscrb_10') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_11'); ?><p><?php the_field('job_dscrb_11') ?></p></div>
                <div class='job'><i class="fa fa-briefcase" aria-hidden="true"></i><?php the_field('job_12'); ?><p><?php the_field('job_dscrb_12') ?></p></div>
                    <a href="#" id='loadMore'><p>Load More</p></a>
                
                </div>
                <div class='project-galery'>
                    <h3>Our Project Gallery</h3>
                 <div class="owl-carousel"> 
                <img src="http://lorempixel.com/200/200" />
                     <img src="http://lorempixel.com/200/200/technics/1" />
                     <img src="http://lorempixel.com/200/200/technics/2" />
                     <img src="http://lorempixel.com/200/200/technics/3" />
                     <img src="http://lorempixel.com/200/200/technics/4" />
                     <img src="http://lorempixel.com/200/200/technics/5" />
                     <img src="http://lorempixel.com/200/200/technics/6" />
                
                
                    </div>
                   
                </div>
                  <div class='project-features'>
                    <h4>Our Projecy Features:</h4>
                        <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Fun</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Amazing</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Absolutely Fantastic</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> The Best of Best</li>
                        </ul>
                    </div>
                
                
                
                </div>
            
            
            
            </div>
            
            </div>
            



		

	<?php endwhile; ?>
	

<?php endif; ?>


<?php get_footer(); ?>