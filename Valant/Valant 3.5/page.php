<?php
/* In the absence of a Page template, this will show by default */
 get_header(); ?>

<?php get_template_part('top_section'); ?>
	
<?php query_posts('post_type=psychiatrist&post_status=publish&posts_per_page=10&category_name=ehr'); ?>
<!-- Page Content Here --><?php if( have_posts() ): ?>

 
        <?php while( have_posts() ): the_post(); ?>
   
    


<?php the_title( '<li class="entry-title">', '' ); ?>

<?php endwhile; ?>

<?php endif;?>



		
<?php get_template_part('slider'); ?>

<?php get_footer(); ?>