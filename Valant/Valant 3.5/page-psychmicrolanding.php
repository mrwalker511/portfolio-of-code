<?php
    /* Template Name: Psychiatrist Microlanding */ 
?>
<!doctype html>
<html style="margin-top:0!important;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Valant Medical Solutions Home Page</title>

	<!-- Begin Stylesheets -->
		<!--<link rel="stylesheet" href="css/Normalize.css" />-->
        
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-responsive.min.css" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<!-- End Stylesheets -->

   <!-- Begin IE Browser Checks-->
    	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
   <!-- End IE Browser Checks-->
   
 <?php if(!is_home()){
            $categories = get_the_category();
            $thetree = get_category_parents($categories[0]->term_id,FALSE,',',TRUE);

            $parent2 = split(',',$thetree);
            $mybodyclass = $parent2[0];}?>

<?php wp_head(); ?>
</head>

<body <?php body_class($mybodyclass); ?>>




<!-- This is the site's top bar for housing the social media icons
		-The top bar will be #000021(hexadecimal) or #000033 (hexadecimal)
        -The social media icons will be on the right-hand side and colored: #CF9547 or #CC9933
-->
<div id="topHome" class="container-fluid">
        <div class="row-fluid navbar-fixed-top">
			<div id="socialM" class=" pull-right">
					<ul class="social" style="list-style-type:none;">



                    </ul>
        		</div> 
    		</div>

</div>	
      
<!-- This is the end of the Top Bar -->

<header>
    <div class="container">
 		<div class="row-fluid">
        
                    <!-- Start Valant Logo -->
           <div id="logo" class="span3">
                <a href="http://emattcreations.com/valant/">
                    <img alt="Valant EMR/EHR for Behavioral Health Professionals" src="<?php bloginfo( 'template_url' ); ?>/imgs/logo.png" />
                </a>
           </div>
                     <!-- End of Logo -->
                     
					<!-- This will hold the site's main navigation menu -->
                 	<div class="span9 pull-right" id="navHolder">
              			
				<div id="main-nav" class="pull-right">
<?php 
wp_nav_menu(array(
  'menu' => 'Valant Navigation', 
  'container_id' => 'main-nav', 
  'walker' => new CSS_Menu_Maker_Walker()
)); 
?>
					
				</div>

				
                 	</div>
               <!-- End Nav Holder -->

            </div><!-- End Row -->
    </div>
</header>
<!-- End Header -->

<!-- This Wraps the Entire Page Content M@-->
<div id="wrapper">



<!-- Main Image Slider Section -->               
<div class="container-fluid" id="imageSlider">
	<!-- A customizable slide show plugin will be used here, but a custom one may be added if requested -->
		<!-- This area is for showing the location and dimensions of the image slider area -->
       <div class="row-fluid"> 
       
        	<div id="theSlides" class="span12">
        		<?php do_action('slideshow_deploy', '1588'); ?>
        
        	</div>
        
        
        <!-- This is for the "Book a Demo" Image -->
        	
        </div>
        <!-- End Row-->
        
</div>
<!-- End Image Slider Section -->

<!-- Main Title Section -->
<div class="container-fluid mtop25">
	<div class="row-fluid">
    	
        <p class="p14">A smarter approach to managing a successful practice.
                        We appreciate the needs of the modern psychiatrist.  We understand the trade-offs you make between quality of care, administrative duties, and personal time. We know that  
                        to provide better service, you need better tools.
        </p>

    </div>

</div>



<!-- Begin Main Section -->
<div class="container-fluid mtop80" style="margin-bottom:100px;" id="iam">
	
	<div class="row-fluid">
    		<a href="#" class="span3 offset1"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/black_sm_arrow.png" alt="iamanarrow" /><h3 class="p19">GO PAPERLESS!</h3></a>
            
            <a href="#"  class="span3 offset1"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/black_sm_arrow.png" alt="iamanarrow" /><h3 class="p19">OUTCOME MEASURES</h3></a>
            
            <a href="#" class="span3 offset1"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/black_sm_arrow.png" alt="iamanarrow" /><h3 class="p19">THERAPIST PACKAGE</h3></a>
    
    </div>
    
    <div class="row-fluid">
    	
            <!-- Go Paperless -->
    		<div class="span4">
                <p class="p14">See what is possible with Valant’s EMR, perfect for psychologists in private practice.</p>
            </div>
            

            <!-- Outcome Measures -->
            <div class="span4">
                <p class="p14"> See and view how Valant’s Mobile Notes and
					Patient Portal modules will help you assess patient outcomes.
               </p>
            </div>
            
            
            <!-- THERAPIST PACKAGE -->
            <div class="span4">
                <p class="p14"  style="margin-left:15px;">Solo practitioner? Oce support sta?
					Whatever your practice needs, we have the
					package for you.
               </p>
            </div>
    </div>
    
    
    <div class="row-fluid" id="learnMore">
    	

    	<a href="#" class="span4 pull-left black m14">Learn more...</a>
    	

    	<a href="#" class="span4 pull-left black m14">Learn more...</a>
    	
    	
    	 <a href="#" class="span4 pull-left black m14" style="padding-left:18px;">Learn more...</a>
    	
    	
    </div>
</div>




<?php get_footer('blog'); ?>