<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
$embedURL = get_bloginfo('template_directory');
$scriptEmbed='<script src="'.$embedURL.'/js/jquery.vide.min.js"></script>';

get_header(); ?>


<style>
.misc-fullWidth {
	width:100%;
	height:100%;
	min-height:400px;
	background-color:#161616;
	
}

.misc-error {
	text-align:center;
	color:#fff;
	max-width:400px;
	max-height:200px;
	margin: auto;
	position: absolute;
	background-color:transparent;
	top: 0; left: 0; bottom: 0; right: 0;
	z-index:66;
}
.misc-error a {
	color:#fff;
	text-transform:uppercase;
	letter-spacing: 2px;
	font-size:11px;
	padding:25px 0;
}
.forward-video {
	width:100%;
	height:100%;
	padding:0;
	margin:0;
	position:relative;
	z-index:1;ß
	opacity: 0.5;
	filter: alpha(opacity=50);
}
.misc-fullWidth .page-title {
	margin-top: 50px;
}
.page-content h2 {
	text-transform: uppercase;
	font-size: 16px;
	letter-spacing:2px;
}
</style>

	
    <div class="misc-fullWidth">   
    
        <div class="wrapper misc-error">
            <header class="page-header">
                <h1 class="page-title">Page Not Found</h1>
            </header>
            <div class="page-content">
                <h2>Return back to</h2>
                <a href="/">Amunadesigns.com</a></p>
            </div><!-- /page-content -->
        </div><!-- /content -->
        
        <div class="forward-video"
             data-vide-bg="<?php bloginfo('template_directory'); ?>/img/404.mp4"
             data-vide-options="posterType: png">
        </div><!-- /forward-video --> 

    </div>
        
        
        

<?php get_footer(); ?>