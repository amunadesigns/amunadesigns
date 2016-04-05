<?php 

/**
 * Template Name: Home Page
 *
 * @package WordPress
*/


get_header(); ?>


   <section class="intro" id="top">
   	<div class="intro-container">
   		
        <img src="<?php bloginfo('template_directory'); ?>/img/intro-logo.png" class="intro-logo" />
        <p class="int-dec"></p>
        <div class="intro-btn">
        <a href="#services" class="btn scroll">Services</a>
		<a href="#portfolio" class="btn port-btn scroll">Portfolio</a>
       	</div>
        
    </div>    
   </section>
   
   <section class="int-about">
   		<div class="wrapper">
        
        	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 pad-fix about-info">
                <h1>About Us</h1>
                <p>Based in Orange County, California, Amuna Designs offers creative solutions that will take your business to the next level! We help small local businesses reach their potential by creating a stronger online presence through our various digital services. Our team is ready to create a beautiful and functional website to suit your company's needs. We also capture and tell your unique story through our professional photography services.</p>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5 pad-fix bg-logo"></div>
            
            <div class="clearfix"></div>
        
        </div> 
   </section><!-- cose int-about -->
   
   <section class="int-services" id="services">
   		
        <h2>Services</h2>
   
   		<div class="wrapper">
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        	<div class="icon-i"></div>
        	<h3>Custom Web Design</h3>
            <div class="divide"></div>
            <p>We offer responsive custom web design suited for any device: desktop, tablet, & mobile. Our beautiful and sophisticated designs will showcase your business in the best light.</p>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        	<div class="icon-ii"></div>
        	<h3>HD Photography</h3>
            <div class="divide"></div>
            <p>We capture your business' story through beautiful high-resolution images. Captivate your visitors with fast-loading high quality product, lifestyle, and portraiture photography. Our team comes to you.</p>        
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        	<div class="icon-iii"></div>
        	<h3>Copywriting</h3>
            <div class="divide"></div>
            <p>We help you express your message! Our team of bilingual copywriters will work with you to compose rich and enticing text in English and Spanish.      
            </div>       
		<div class="clearfix"></div>
      
        </div> 
   </section><!-- close int-services -->
   
   <section class="int-portfolio" id="portfolio">
   		
        <h2>Portfolio</h2>
   
   		<div class="grid-wrapper">
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
        
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
        
        
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
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
       
                    
		<div class="clearfix"></div>
      
        </div><!-- close grid-wrapper -->
   </section><!-- close int-portfolio -->    
   
        
   <section class="int-contact">
        
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2>Let's Work Together!</h2>
                <a href="/contact" class="btn">Contact</a>
            </div>

   </section><!-- cose int-contact -->



<?php get_footer(); ?>