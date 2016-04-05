<?php 

/**
 * Template Name: Portfolio > Trinity 
 *
 * @package WordPress
*/


get_header(); ?>

   <section class="port-fullWidth" id="top">
   
   		<div class="wrapper port-ts">
        	<h1>Trinity Brooks</h1>
            <div class="divide"></div>
            <p>A collection of images reflecting contemporary urban fashion.</p>
        </div>
   </section><!-- close port-fullWidth -->
   
   <section class="port-detail">
   		
        <div class="wrapper">
   
            <img src="<?php bloginfo('template_directory'); ?>/img/trin-1.jpg" />
            
       
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<h3>About this project</h3>
                <div class="divide"></div>
                <p>Our team was inspired by the geometric lines and shapes found in the Los Angeles urban landscape. In addition to photography, we styled, casted, and location scouted.</p>
                
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/detail-ph.gif" class="port-project-image"/>
            </div>
            
            <div class="clearfix"></div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/trin-2.jpg" />
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 port-desc">
            	<img src="<?php bloginfo('template_directory'); ?>/img/trin-3.jpg" />
            </div>
            
            <div class="clearfix"></div>
                
        </div>
        
   </section><!-- close port-photo -->
   
   

   <?php get_footer(); ?>