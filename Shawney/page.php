<?php /*Template Name: Basic Shawney Page*/ ?>



<!--The page header-->
<?php get_header();?>

<!--Begin Loop-->
<?php if ( have_posts() ) : ?>

				

				<?php while ( have_posts() ) : the_post(); ?>

					

			    <?php the_content();
       endwhile;
    endif;
    ?>
<!--End Loop-->
<div style="clear:both; height:5px;"></div>
</div>
<?php get_footer();?>