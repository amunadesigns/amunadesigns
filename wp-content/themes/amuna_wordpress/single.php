<?php get_header(); ?>

   <section class="blog-fullWidth" id="top">
   
   		<div class="wrapper blog-ts">
        	<h1><?php the_title(); ?></h1>
            <div class="divide"></div>
            <p><?php the_time('F jS, Y') ?></p>
        </div>   		
   
   </section><!-- close blog-fullWidth -->
   
    <?php 
	if (have_posts()) :
	while (have_posts()) : the_post();
	?>   
  
   <section class="blog-post-wrapper">
        
        <p><?php the_content(); ?></p>
               
        <a href="/blog" class="btn-white">Back to Blog</a>

   </section><!-- close blog-post-wrapper -->
   
   <?php endwhile; ?>

   <?php else : ?>

	<h1>Not Found</h1>
   	<p>Sorry, but you are looking for something that isn't here.</p>

   <?php endif; ?>
   
  

<?php get_footer(); ?>
