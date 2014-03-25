<?php
/* Template Name: Group Practice Page */
 get_header(); ?>

<?php get_template_part('top_section'); ?>
	
<!-- Page Content Here -->

<?php
    
    //get the post category
	$category = get_the_category();
	$cat = $category[0]->cat_ID;

    $args = array('post_type'=> 'group_practice','category'=>$cat);?>

    <?php $loop = new WP_Query($args); ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="row-fluid padd50">
				<div class="row span9 offset1">
				<h4 style="color:#666666!important;margin-bottom:0;padding-bottom:0;" class="span2 offset1 m14semi" id="dropcontainer1"><?php the_title();?></h4>
    <div class="span10 p14 mtop50"><?php the_content(); ?></div>

</div></div>
<?php endwhile; ?>






		
<?php get_template_part('slider'); ?>

<?php get_footer(); ?>