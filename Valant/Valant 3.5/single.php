<?php
 /* Template Name: Single Post */

 get_header(); the_post(); ?>

<?php get_template_part('top_section') ;?>

 
 
			
	               
<div class="container-fluid">

<!-- The Post -->

        <div class="row-fluid">
            <div class="span9 offset1" id="postColumn">
                <div class="theposting">
                <p class="page_title">

                    <!-- Page Title -->
                    <?php the_title(); ?>
                </p>
                
                    

                    <!-- Post Content -->
                    <div id="primary" class="p16 gray" style="padding-bottom:80px;letter-spacing: 0.01em;line-height: 23px; border-bottom:1px solid #cccccc;">
                        <?php the_content(); ?>
                        
                    </div>
            </div></div>
            
        </div>
<!-- End the Post -->
</div>

<!-- End the Posts -->
<?php get_template_part('iamsection'); ?>
 <img style="margin-top: 50px;width: 100%;" src="<?php bloginfo( 'template_url' ); ?>/imgs/divider line/arrow_with_line.png" alt="arrowline" />

<?php get_template_part('slider') ;?>
<?php get_sidebar(); ?>
<?php get_footer('blog'); ?>