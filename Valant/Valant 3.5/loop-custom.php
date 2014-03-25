<?php
/* Dynamic Loop to Display Posts According to the Valant Practice Type and the Category of the Post */
?>


<?php global $post; // required
$args = array('category_name' =>  ); // exclude category 9
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);
...
endforeach;
?>
   