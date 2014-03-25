<?php /* Template Name: Home Page */ ?>

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
   <?php wp_head(); ?>


</head>

<body <?php body_class($mybodyclass); ?>>

<!-- This is the site's top bar for housing the social media icons
		-The top bar will be #000021(hexadecimal) or #000033 (hexadecimal)
        -The social media icons will be on the right-hand side and colored: #CF9547 or #CC9933
-->


<!-- This is the Start of the Top Bar -->
<div id="topHome" style="background-color:#000021!important;" class="container-fluid">
        <div class="row-fluid navbar-fixed-top">
			<div id="socialM" class=" pull-right">
					<!-- This is where is the social media icons will go.
        			I plan to use a WordPress plugin here for ease of future
                	customization by Valant Medical Solutions Staff -->
        		</div> 
    		</div>

</div>	
      
<!-- This is the end of the Top Bar -->

<header>
    <div class="container">
 		<div class="row-fluid">
        
            <!-- Start Valant Logo -->
           <div id="logo" class="span2">
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
<div id="imageSlider">
	<!-- A customizable slideshow plugin will be used here, but a custom one may be added if requested -->
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
<div class="pull-left p16">
	<div class="row-fluid">
    	<h4 id="mid-title">EHR/EMR AND BILLING FOR BEHAVIORAL HEALTH PRACTICES</h4>
        <p style="" class="mtop15">Our fully integrated, 100% web-based EMR and eBilling system is tailor-made to suit the unique needs of psychiatrists, therapists 		
        and mental healthcare professionals. Choose your practice type to learn more:</p>
    </div>
</div>

<div id="iam">
<div class="row-fluid">
    		
            <!-- I AM A PSYCHIATRIST -->
    		<div class="span3 offset1 mtop80">
            	<a href="http://emattcreations.com/valant/products/psychiatrist/">
            		<h4 class="p16">I AM A</h4>
                	<img src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/homepage_gold_arrow.png" class="iamanarrow"  alt="iamanarrow1" /><h3 class="p23">PSYCHIATRIST</h3>
                   </a>
            </div>
            
            <!-- I AM A THERAPIST -->
            <div class="span3 offset1 mtop80">
            	<a href="http://emattcreations.com/valant/products/therapist-2/">
            		<h4 class="p16">I AM A</h4>
                		<img style="vertical-align: middle;padding-bottom:10px;" src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/homepage_gold_arrow.png"  class="iamanarrow"  alt="iamanarrow1" /><h3 class="p23">THERAPIST</h3>
                </a>
            </div>
            
            <!-- We ARE A GROUP PRACTICE -->
            <div  class="span3 mtop80"><a href="http://emattcreations.com/valant/products/group-practice/">
            	<h4 class="p16">WE ARE A</h4>
                <img src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/homepage_gold_arrow.png"  class="iamanarrow" alt="iamanarrow1" /><h3 class="p23">GROUP PRACTICE</h3></a>
            </div>
   

 <div class="row-fluid" style="margin-top:40px;"><img src="<?php bloginfo( 'template_url' ); ?>/imgs/divider line/arrow_with_line.png" alt="thearrowline"/></div> 
</div>
<!-- Begin CPT Codes..... -->

<div id="features">
	<div class="row" style="padding-left:6px;">
    	
        <!-- CPT Codes a WP WIDGET WILL GO HERE BY M@ -->
        <div class="span3">
        	<h4 class="m14semi web_menu_list" style="text-decoration:underline!important;">CPT CODES</h4>
            <p class="p14">The fantastic features within<br>
            Valant's easy to use modules are<br>
            perfect for psychologists.<br>
            <p class="mtop20"><a href="#" class="m12">Learn More...</a></p>
            </p>
        </div>
    
    	<!-- Meaningful Use a WP WIDGET WILL GO HERE BY M@ -->
        <div class="span3">
        <h4 class="m14semi web_menu_list" style="text-decoration:underline!important;">MEANINGFUL USE</h4>
            <p class="p14">Dr. Elizabeth Davis from<br>
            Clemons, N.C., tells us how<br>
            Valant has helped her practice.<br>
            <p class="mtop20"><a href="#" class="m12">Learn More...</a></p>
            </p>
        </div>
        
        <!-- Mobile Notes a WP WIDGET WILL GO HERE BY M@ -->
        <div class="span3">
        	<h4 class="m14semi web_menu_list" style="text-decoration:underline!important;">MOBILE NOTES</h4>
            <p class="p14">Solo Practitioner? Office support<br>
            staff? Whatever your practice<br>
             needs, we have it.<br>
            <p class="mtop20"><a href="#" class="m12">Learn More...</a></p>
            </p>
        </div>
        
        <!--Measurement Based Care a WP WIDGET WILL GO HERE BY M@ -->
    	<div class="span3" style="padding-right:-10px;">
        	<h4 class="m14semi web_menu_list" style="text-decoration:underline!important;">MEASUREMENT BASED CARE</h4>
            <p class="p14">The fantastic features within<br>
            Valant's easy to use modules<br>
             are perfect for psychologists.<br>
            <p class="mtop20"><a href="#" class="m12">Learn More...</a></p>
            </p>
        </div>
        
    </div>
    
    
</div>
<!-- End Features -->

<style type="text/css">footer{background-color: #000021;} footer p{color: #cc9933;}</style>
<?php get_footer();?>