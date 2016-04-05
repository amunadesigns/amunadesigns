   <a href="#top"  alt="back to top" id="btt-btn" class="btt-wrap scrollTop">↑</a>                   
   
   <footer>
   		<div class="wrapper">
   
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <p></p>
            </div>
            
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <img src="<?php bloginfo('template_directory'); ?>/img/footer-icon.png" />
            </div>
    
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <p>Copyright Amunadesigns &copy; <?php echo date("Y") ?></p>
            </div>

   		</div>
   </footer> 
   
   <div id="preload">
   		<img src="<?php bloginfo('template_directory'); ?>/img/done.gif" />
   		<p class="loading">Loading...</p>
   </div>
   
   
   
   
<!--------------------- SCRIPTS  --------------------->
<?php global $scriptEmbed; ?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.0.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/contact_me.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mixitup.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/basic.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
<script src="http//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<?php echo $scriptEmbed; ?>


<script>

	$( function() {
		$( ".grid-wrapper").mixItUp();
	});
	
   $(".blog-post-wrapper").fitVids();

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72961309-1', 'auto');
  ga('send', 'pageview');

</script>
       
           
</body>
</html>