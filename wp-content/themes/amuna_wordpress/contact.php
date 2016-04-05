<?php 

/**
 * Template Name: Contact
 *
 * @package WordPress
*/


get_header(); ?>
   

   <section class="contact-fullWidth" id="top">
   
   		<div class="wrapper contact-ts">
        	<h1>Contact</h1>
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
   
   
   <section class="contact-wrapper">
   
       <div class="wrapper">
    
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 contact-info">
          
            <h3>Let's work together</h3>
            <p>Contact us for general inquiries and quotes. Please allow a 24-hour period for a response.</p>
            
            <ul>
            <li class="i-one"><i class="fa fa-home"></i> Orange County, CA</li>
            <li class="i-two"><i class="fa fa-phone"></i> 714.661.3857</li>
            <li class="i-three"><i class="fa fa-envelope-o"></i> <a href="mailto:info@amunadesigns.com">info@amunadesigns.com</a></li>
            <li class="i-four"><i class="fa fa-clock-o"></i> Hours: 9:00 am - 3:00 pm M-F</li>           
            </ul>

       </div><!-- close contact-info -->
            
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 contact-form" id="contact"> 
       
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone (optional)" id="phone">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <div id="success" style="color:#27ba00; margin-bottom:30px;"></div>
                                    <button type="submit" class="btn btn-xl">Send</button>
                                </div>

                            </div>
                            
                        </form>		
                                       
       </div>
              
       </div><!-- close wrapper -->   
   
       <div style="clear:both;"></div>

   </section><!-- close contact-fullWidth --> 
   
   
      
   <!-- <section class="contact-oc">
   
   <h2>Based out of OC</h2>
   <p>Quisque volutpat turpis justo, nec tincidunt enim vestibulum sed nec tincidunt enim</p>
   
   </section><!-- close contact-oc -->
   
  <!-- <div style="background-color:#000; height:250px; width:100%;"></div> -->
  
  
   
<?php get_footer(); ?>