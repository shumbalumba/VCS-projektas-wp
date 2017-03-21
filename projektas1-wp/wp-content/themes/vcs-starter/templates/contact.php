<?php

/* Template Name: Contact */

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

<div class="contact-background">
            <div ID="map">
            <script>
                function initMap() {
        var location = {lat: 51.5100756, lng: -0.1427526};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: location,
          scrollwheel: false
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }
                </script>
            </div>
            <div class='contact-page'>
            <div class="contact">
            <div class="contact-text"><?php echo the_content(); ?></div>
            <div class="input">
                <h3>Don't be shy, give us a try!</h3>
                <div class="pure-g">
                    <div class="pure-u-lg-1-2">
            <div class='inputas'><input class="inputs" type="text" placeholder="Your Name..." required><i class="input-icon fa fa-user-circle-o fa-2x" aria-hidden="true"></i></div>
                        <div class='inputas'><input class="inputs" type="text" placeholder="e-mail" required><i class="input-icon fa fa-envelope-o fa-2x" aria-hidden="true"></i></div>
                        <div class='inputas'><input class="inputs" type="text" placeholder="website"><i class="input-icon fa fa-link fa-2x" aria-hidden="true"></i></div></div>
                    <div class="pure-u-lg-1-2">
                        <div class='inputas'> <input class="message" type="text" placeholder="Message..."> </div>
                        <div class='inputas'><div class="submit"><a href='#'>Send Now!</a></div></div>
                    </div>
                </div>
                    </div>
            
            </div>
            </div>
            </div>








<?php endwhile; ?>
	

<?php endif; ?>


<?php get_footer(); ?>