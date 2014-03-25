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



<ul>
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