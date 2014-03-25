<?php
/* Template Name: Psychiatrist Blog  */
get_header();
?>

<?php get_template_part('top_section'); ?>







<?php if(have_posts()):while(have_posts()):the_post(); ?>


<?php the_title( '<li class="entry-title">', '' ); ?>



<?php endwhile; ?>

<?php endif;?>



		
<?php get_template_part('slider'); ?>

<?php get_footer(); ?>