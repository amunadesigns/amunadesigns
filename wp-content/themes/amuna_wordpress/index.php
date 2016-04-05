<?php 

/**
 * Template Name: Blog
 */
 
$loc = $_SERVER['REQUEST_URI'];


get_header(); ?>



   <section class="blog-fullWidth" id="top">
   
   		<div class="wrapper blog-ts">
        	<h1>Blog</h1>
            <div class="divide"></div>
            <p>Here you will find what inspires us. We share music, articles, videos, and art. We hope they inspire you as well. If you want to share some inspiration, please don't hesitate to send it to us!
            </p>
        </div>   		
   
   </section><!-- close blog-fullWidth -->
   
   <div class="blog-cat-fullWidth">
   		<div class="wrapper">
        	<ul>
            	<li><a href="/blog" <?php if (strpos($loc, "blog") !== false) { echo 'class="active"'; } ?>>Most Recent</a><span>//</span></li>
            	<li><a href="/category/news/" <?php if (strpos($loc, "/category/news/") !== false) { echo 'class="active"'; } ?>>News</a><span>//</span></li>
            	<li><a href="/category/music/" <?php if (strpos($loc, "/category/music/") !== false) { echo 'class="active"'; } ?>>Music</a><span>//</span></li>
            	<li><a href="/category/art/" <?php if (strpos($loc, "/category/art/") !== false) { echo 'class="active"'; } ?>>Art</a><span>//</span></li>
            	<li><a href="/category/inspiration/" <?php if (strpos($loc, "/category/inspiration/") !== false) { echo 'class="active"'; } ?>>Inspiration</a></li>
             </ul>
        </div>  
   </div>
   
   <?php 
	if (have_posts()) :
	while (have_posts()) : the_post();
	?>

   <div class="wrapper blog-wrapper">
   
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 blog-intro">
       		<h3><?php the_title(); ?></h3>
            	<h4><?php the_time('F jS, Y') ?></h4>
                
            	<?php the_excerpt(); ?>
                
            	<a href="<?php the_permalink(); ?>" class="btn-white">Read More</a>
       </div>
       
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 blog-img">
       
       		<a href="<?php the_permalink(); ?>">
			<?php 
				if ( has_post_thumbnail() ) {
				echo ('<img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" />');
				} else {
				echo ('<img src="'.get_bloginfo('template_url').'/images/blog/travismathew-placeholder.png" />');
				}
            ?>
            </a>
            
       </div>
       
       <div class="clearfix" style="clear:both;"></div>
       
   </div>
   
   <?php endwhile; ?>
   
   <div class="navigation">
    <div class="arrowLeft"><?php next_posts_link('Older Entries') ?></div>
    <div class="arrowRight"><?php previous_posts_link('Newer Entries') ?></div>
   </div>

<?php else : ?>


    <div class="wrapper">
    	<h1 style="text-align:center;">Not Found</h1>
   	 	<p style="text-align:center; padding-bottom:50px;">Sorry, but you are looking for something that isn't here.</p>
    </div>

<?php endif; ?>
   
  
  </div>
   
   
<?php get_footer(); ?>