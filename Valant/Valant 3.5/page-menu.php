<?php
    /* Template Name: Menu Template */
 get_header();?>



 <!-- Begin Top Content Section -->
<?php get_template_part('top_section'); ?>



<div class="container-fluid">
	   <div class="row-fluid">
                <div class="span10 offset1"  id="postColumn" >

                    <?php

                        global $more;
                        $more=0;
                        $cat = get_the_category($post->ID);

                        query_posts('category=$cat&order=ASC');
                        if(have_posts()): while(have_posts()): the_post();
                    ?>


				     
<!-- The Entire Post (the Module Features) -->
<div class="theposting">


                        <!-- The Post Title (the Module Features Title) -->
                <div class="span2" style="position:relative; margin-top:100px;"><a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();
                }
                    ?></a>
                </div> 
                        
                        
<div class="span10">
    <h4 style="color:#666666!important;margin-bottom:0;padding-bottom:0;" class="m14semi feature_title" id="dropcontainer">
        <a style="text-decoration:none; color:#333333;" href="<?php the_permalink();?>">
            <?php the_title(); ?>
        </a>
    </h4>

         <!-- End The Post Title (the Module Feature Title) -->              

                           <!-- The Post Excerpt (the Module Feature Description Excerpt -->
                               <div class="p14 gray primary" style="letter-spacing: 0.01em;line-height: 23px;">
                                    <div><?php the_content(); ?></div>
                                 </div>
</div>
                             <!-- End the Post/Feature Description -->
    
                    <!-- End Loop -->
    
                   
</div><!-- End The Posting -->
                 
				<?php endwhile;?> <?php endif;?>
<?php wp_reset_query(); ?>
           <div class="pull-right"></div>
       </div><!-- End Post Column-->



</div><!-- End Row -->
    </div><!-- End Container-->

<?php get_footer('blog'); ?>