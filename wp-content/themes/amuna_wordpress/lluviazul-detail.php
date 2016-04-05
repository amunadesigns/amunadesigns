<?php 

/**
 * Template Name: Portfolio > Lluviazul
 *
 * @package WordPress
*/

$embedURL = get_bloginfo('template_directory');
$scriptEmbed='<script src="'.$embedURL.'/js/port-detail.js"></script>';

get_header(); ?>

   <section class="port-fullWidth" id="top">
   
   		<div class="wrapper port-ts">
        	<h1>Lluviazul</h1>
            <div class="divide"></div>
            <p>A women's online boutique based in Los Angeles</p>
        </div>
   </section><!-- close port-fullWidth -->
   
   <section class="port-detail">
   		
        <div class="wrapper">
   
            <img src="<?php bloginfo('template_directory'); ?>/img/lluviazul.jpg" />
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 port-fb">
               <h3>About this project</h3>
               <div class="divide"></div>
               <p>For this project, our team photographed Lluviazul's Summer/Fall 2015 Muses lookbook, wrote copy, and designed and developed their Muses page. We created a minimal style layout that featured an asymmetrical grid displaying Lluviazul's featured products for the season. Our responsive design looks great on all devices. This project was completed with waypoint trigged animations that made the page interactive and enhanced user experience.</p>
               <a href="http://www.lluviazul.com/muses" target="_blank" class="btn-white">Visit Site</a>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/lluvia-mobile-display.jpg" />
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/phone-display.png" />
            	<img src="<?php bloginfo('template_directory'); ?>/img/lluvia-mobile.jpg" class="mobile-display" id="mobile-animation-2" />
            </div>
            
            <div class="clearfix"></div>
                
        </div>
        
   </section><!-- close port-photo -->

   
   
   <?php get_footer(); ?>