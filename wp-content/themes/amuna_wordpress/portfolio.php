<?php 

/**
 * Template Name: Portfolio
 *
 * @package WordPress
*/


get_header(); ?>

    
  <section class="contact-fullWidth" id="top">
   
   		<div class="wrapper contact-ts">
        	<h1>Portfolio</h1>
            <div class="divide"></div>
            <p>
			<?php
                global $wp_query;
                $postid = $wp_query->post->ID;
                echo get_post_meta($postid, 'introSnippet', true);
                wp_reset_query();
            ?>
            </p>
        </div>
   </section><!-- close port-fullWidth -->
    
    <div class="grid-wrapper b_space">
    
    <div class="sort-btn">
    
        <button class="filter" data-filter="all">All</button>
        <button class="filter" data-filter=".grid_web">Web Design</button>
        <button class="filter" data-filter=".grid_photo">Photography</button>
    
    </div><!-- close sort-btn -->
    
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid_web grid_photo mix">
        <div class="portGridInner">      
          <a href="/portfolio/lluviazul/">
            <img src="<?php bloginfo('template_directory'); ?>/img/lluvia-thumb.jpg" />    
            <div class="portGridContent">
              <img src="<?php bloginfo('template_directory'); ?>/img/i-eye.png" class="icon"/>
              <h2>Lluviazul</h2>
              <p>Web Design + Photography</p>
            </div> <!-- close portGridContent -->
          </a>
        </div> <!-- close portGridContent -->
    </div>    
    
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid_web mix">
        <div class="portGridInner">      
          <a href="/portfolio/travismathew/">
            <img src="<?php bloginfo('template_directory'); ?>/img/tm-thumb.jpg" />    
            <div class="portGridContent">
              <img src="<?php bloginfo('template_directory'); ?>/img/i-eye.png" class="icon"/>
              <h2>TravisMathew</h2>
              <p>Web Design</p>
            </div> <!-- close portGridContent -->
          </a>
        </div> <!-- close portGridContent -->
    </div>    
    
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid_web grid_photo mix">
        <div class="portGridInner">      
          <a href="/portfolio/native-being/">
            <img src="<?php bloginfo('template_directory'); ?>/img/native-being-thumb.jpg" />    
            <div class="portGridContent">
              <img src="<?php bloginfo('template_directory'); ?>/img/i-eye.png" class="icon"/>
              <h2>Native Being</h2>
              <p>Web Design + Photography</p>
            </div> <!-- close portGridContent -->
          </a>
        </div> <!-- close portGridContent -->
    </div>
    
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 grid_photo mix">
        <div class="portGridInner">      
          <a href="/portfolio/trinity-brooks/">
            <img src="<?php bloginfo('template_directory'); ?>/img/fashion-thumb.jpg" />    
            <div class="portGridContent">
              <img src="<?php bloginfo('template_directory'); ?>/img/i-eye.png" class="icon"/>
              <h2>Trinity Brooks</h2>
              <p>Photography</p>
            </div> <!-- close portGridContent -->
          </a>
        </div> <!-- close portGridContent -->
    </div>    
       
        
    <div class="clearfix"></div>
  
    </div><!-- close grid-wrapper -->
    
    
<?php get_footer(); ?>