  <div class='page'>
        
        
       <!-- Menu -->
      <div class="squeezed">
          <div class="logo1"> <?php 
      
      $pic = get_field('logo');
      $size= 'full';
      
      if ($pic) {
          echo wp_get_attachment_image($pic, $size);
      }
      
      
?></div>
            <div class='burger'>
                <div> <?php $nav_menu = wp_get_nav_menu_object(2); echo $nav_menu->name; ?> </div>
          </div>
          
              </div><!--
        --><div class="left-nav"><div class='left'>
           <div class='logo'> <?php 
      
      $pic = get_field('logo');
      $size= 'full';
      
      if ($pic) {
          echo wp_get_attachment_image($pic, $size, array('class' => 'logo'));
      }
      
      
               ?></div>
           
    <div class='nav'>
        <nav>
            <?php wp_nav_menu(array(
'container' => '<ul></ul>',
    'menu_class' => 'menu lol li'
)); ?>
         </nav>
            </div>
        <!-- Social -->
<?php 

// The number of all posts for a given query
$posts_found = $GLOBALS['wp_query']->found_posts;
// The number of posts for just the page
$posts_count = $GLOBALS['wp_query']->post_count;

if(have_posts()): ?>
   <div class='social'>   <?php 
      $flickr = get_field('flickr_link');
      $flickrurl = get_field('flickr_url');
       $google = get_field('google_plus');
       $googleurl = get_field('google_plus_url');
       $twitter = get_field('twitter');
       $twitterurl = get_field('twitter_url');
       $facebook = get_field('facebook');
       $facebookurl = get_field('facebook_url');
      ?>
       <a href="<?php echo $flickrurl?>" target="_blank"><img class='icon' src="<?php the_field('flickr_link') ?>"></a>
       <a href="<?php echo $googleurl?>" target="_blank"><img class='icon' src="<?php the_field('google_plus') ?>"></a>
       <a href="<?php echo $twitterurl?>" target="_blank"><img class='icon' src="<?php the_field('twitter') ?>"></a>
       <a href="<?php echo $facebookurl?>" target="_blank"><img class='icon' src="<?php the_field('facebook') ?>"></a>
      </div>
<div class='rights'>
	<p> &copy <?php echo date ("Y"). " "; echo bloginfo('title');?>, All Rights Reserved </p>
     
      




<?php else: ?>

	

<?php endif; ?>
      
      
     <!--
        <div class='social'>
        <a href="https://www.flickr.com/" target="_blank"><img class='icon' src="images\icon1.png"alt='flickr'></a>
            <a href="https://plus.google.com/" target="_blank"><img class= 'icon' src="images\icon2.png"alt='g.plus'></a>
            <a href="https://twitter.com/?lang=en" target="_blank"><img class='icon' src="images\icon3.png"alt='twitter'></a>
            <a href="https://www.facebook.com/" target="_blank"><img class='icon' src="images\icon4.png"alt='facebook'></a>
        </div>
            <div class='rights'>
            <p> &copy 2014 Kappe, All Rights Reserved </p>
            </div>
-->
             </div>
        </div><!-- 

        Home Grids
        -->
        
            </div>