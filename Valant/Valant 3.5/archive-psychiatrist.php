<?php
/* Template Name: Psychiatrist Blog Page */
get_header();
?>

<?php get_template_part('top_section'); ?>
<!-- Begin the Page Content-->
<div class="container-fluid" class="pageafter">
        <div class="row-fluid">
            <div class="span8 offset1">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p class="page_title">
                    <?php the_title(); ?>
                </p>
       
                 <div id="primary" class="p16 gray" style="letter-spacing: 0.01em;line-height: 23px;">
                    <?php the_content(); ?>
                  </div>
                <?php endwhile; endif; ?>
               
   <img style="margin-top: 131px;" src="<?php bloginfo( 'template_url' ); ?>/imgs/divider line/divide_line_arrow.png" alt="thedividerline" class="theposting_line" />
            </div>
      </div><!-- End Row -->
</div><!-- End the Container -->
<!-- End Page Content -->








<!-- Begin Posts Content -->
<div class="container-fluid">
	   <div class="row-fluid">
           <!-- Begin Post Column -->
                <div class="span9 offset1"  id="postColumn" >
                   
<!-- Begin the Query to get page specific category posts -->
    <?php
        
global $more;
$more=0;
$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('category_name='.$pagename.'&post_type=psychiatrist');
while ($wp_query->have_posts()) : $wp_query->the_post();
?>
                    
				    
             <!-- The Entire Post (the Module Feature) -->
              <div class="theposting">


                                 <!-- The Post Title (the Module Features Title) -->
                                    <h4 class="feature_title" class="gray">
                                        <?php the_title(); ?>
                                    </h4>
                                    <hr style="width: 200px; margin-top: -5px;" />
                                 <!-- End The Post Title (the Module Features Title) -->



     <?php if(in_category('group') or in_category('therapist') or in_category('psychiatrist') or in_category('valant-module')) 
                        
                    echo '<div style="padding-bottom:28px" class="description p14"> DESCRIPTION </div>';
       ?>





                           <!-- The Post Excerpt (the Module Feature Description Excerpt -->
                                

                                <div class="p16 gray primary" style="letter-spacing: 0.01em;line-height: 23px;">
                                    <?php the_content(); ?>
                                 </div>
                           <!-- End the Post/Feature Description -->





                        <div class="end_post_content" style="padding: 0;margin-top: 0!important;">

                            <img src="<?php bloginfo( 'template_url' ); ?>/imgs/arrows/right_arrow.png" alt="postarrow" class="theposting_arrow" />
                            <img src="<?php bloginfo( 'template_url' ); ?>/imgs/divider line/divide_line_arrow.png" alt="thedividerline" class="theposting_line" />
                        </div>
                    </div>
                    <!-- End the Entire Post-->
                   
           
                    <!-- End Next/Previous -->
                   
                 
            <?php endwhile;?>
             
                
                    
                    
                    <!-- Begin Next/Previous -->
                     <div class="row-fluid nextprevious">
                         <div class="span12">
                             <div class="pull-right" id="next">
                                <a href="">Next Page</a>
                            </div>
                            <div style="margin-right: 20px;" class="pull-right" id="previous">
                                <a href="">Previous Page</a>
                            </div>
                         </div>
                     </div>
                       
              </div><!-- End Post Column -->
       </div> 
</div>

 <img style="margin-top: 50px;width: 100%;" src="<?php bloginfo( 'template_url' ); ?>/imgs/divider line/arrow_with_line.png" alt="arrowline" />
<!-- End the Posts -->


<?php get_template_part('slider'); ?>

			<?php get_sidebar(); ?>
<?php get_footer('blog'); ?>










		

