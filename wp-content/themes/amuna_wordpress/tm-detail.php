<?php 

/**
 * Template Name: Portfolio > TravisMathew 
 *
 * @package WordPress
*/

$embedURL = get_bloginfo('template_directory');
$scriptEmbed='<script src="'.$embedURL.'/js/port-detail.js"></script>';

get_header(); ?>

   <section class="port-fullWidth" id="top">
   
   		<div class="wrapper port-ts">
        	<h1>TravisMathew</h1>
            <div class="divide"></div>
            <p>A men's golf apparel brand, based out of Huntington Beach.</p>
        </div>
   </section><!-- close port-fullWidth -->
   
   <section class="port-detail">
   		
        <div class="wrapper">
   
            <img src="<?php bloginfo('template_directory'); ?>/img/tm-main.jpg" />
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 port-fb">
               <h3>About this project</h3>
               <div class="divide"></div>
               <p>For this project, we redesigned the homepage for Winter 2015. This clean and modern design was created using CSS media queries and looks great on any device. A swipe slider makes viewing images on mobile devices faster and easier. We worked alongside TravisMathew's graphic designer to select images and detail effects. The company's Instagram feed was also pulled to create a gallery on the homepage.</p>
               <a href="http://www.travismathew.com/" target="_blank" class="btn-white">Visit Site</a>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/tm-sub.jpg" />
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/phone-display.png" />
            	<img src="<?php bloginfo('template_directory'); ?>/img/tm-mobile.jpg" class="mobile-display" id="mobile-animation-1" />
            </div>
            
            <div class="clearfix"></div>
                
        </div>
        
   </section><!-- close port-photo -->

   
   
   <?php get_footer(); ?>