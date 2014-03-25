<?php add_theme_support( 'post-thumbnails' );
		add_action( 'init', 'my_custom_menus' );

			function my_custom_menus() {
    			register_nav_menus(
        			array(
            			'Valant-Navigation-Menu' => __( 'Valant Navigation Menu' ),
            			'Static-Sidebar_Menu' => __( 'Static Sidebar Menu' )
					)
    			);
			}
			
			    add_filter('manage_posts_columns', 'posts_columns_id', 5);
                    add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
                add_filter('manage_pages_columns', 'posts_columns_id', 5);
                    add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
        
                function posts_columns_id($defaults){
                    $defaults['wps_post_id'] = __('ID');
                    return $defaults;
                }

                function posts_custom_id_columns($column_name, $id){
                    if($column_name === 'wps_post_id'){
                        echo $id;
                    }
                }
		
                add_filter('manage_posts_columns', 'posts_columns', 5);
                    add_action('manage_posts_custom_column', 'posts_custom_columns', 5, 2);
                        function posts_columns($defaults){
                            $defaults['riv_post_thumbs'] = __('Thumbs');
                             return $defaults;
                    }

                function posts_custom_columns($column_name, $id){
                    if($column_name === 'riv_post_thumbs'){
                        echo the_post_thumbnail( 'featured-thumbnail' );
                    }
                }

               //Pages Tags &amp; Category Meta boxes
function add_pages_meta_boxes() {
    add_meta_box(   'categorydiv', __('Categories'), 'post_categories_meta_box', 'page', 'normal', 'core');
}
add_action('add_meta_boxes', 'add_pages_meta_boxes');
 
add_action('init','attach_category_to_page');
function attach_category_to_page() {
    register_taxonomy_for_object_type('category','page');
}
//end
		
		// Declaring a Main Sidebar
		register_sidebar( array(
		'name' => __( 'Main Sidebar'),
		'id' => 'main_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="sidebarHeader">',
		'after_title' => '</h3>',
	    ) );

        // Declaring a regular static sidebar
	    register_sidebar( array(
		    'name' => 'Static Sidebar',
		    'id' => 'sidebar_static',
		    'description' => __( 'This the static sidebar for the blog pages' ),
		    'before_widget' => '<aside id="%1$s" class="widget %2$s span2 pull-right"><img style="margin-bottom:20px;" src="http://emattcreations.com/valant/wp-content/themes/Valant 3.1/imgs/blog/emr_sidenav.png" />',
		    'after_widget' => "</aside>",
		    'before_title' => '<p class="sidebarHeader" style="border-bottom:1px solid #666666;">',
		    'after_title' => '</p>',
	    ) );
			
        // Declaring the Psychiatrist Sidebar
		register_sidebar( array(
		'name' => __( 'Psychiatrist Modules Sidebar'),
		'id' => 'psych_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="sidebarHeader">',
		'after_title' => '</h3>',
	    ) );

        // Declaring the Group Practice Sidebar
	    register_sidebar( array(
		    'name' => 'Group Practice Modules Sidebar',
		    'id' => 'group_sidebar',
		    'description' => __( 'This the static sidebar for the blog pages' ),
		    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		    'after_widget' => "</aside>",
		    'before_title' => '<h3 class="sidebarHeader">',
		    'after_title' => '</h3>',
	    ) );


        // Declaring the  Therapist Sidebar
		register_sidebar( array(
		'name' => __( 'Therapist Modules Sidebar'),
		'id' => 'therapist_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="sidebarHeader">',
		'after_title' => '</h3>',
	    ) );

	    


	
   //Staff Post Type
function custom_post_type4() {

	$labels = array(
		'name'                => 'staff',
		'singular_name'       => 'staff',
		'menu_name'           => 'Staff',
		'parent_item_colon'   => 'Parent Staff:',
		'all_items'           => 'All Staff',
		'view_item'           => 'View Staff Member',
		'add_new_item'        => 'New Staff Member',
		'add_new'             => 'New Staff Member',
		'edit_item'           => 'Edit Staff Member',
		'update_item'         => 'Update Staff Member',
		'search_items'        => '',
		'not_found'           => '',
		'not_found_in_trash'  => '',
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
        'rewrite' => array('slug' => 'staff'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
        
	);
	register_post_type( 'staff', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type4', 0 );

   // The Psychiatrist Post Type
   // Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => 'psychiatrist',
		'singular_name'       => 'psychiatrist',
		'menu_name'           => 'Psychiatrist',
		'parent_item_colon'   => 'Parent Psychiatrist Module:',
		'all_items'           => 'All Psychiatrist Modules',
		'view_item'           => 'View Psychiatrist Modules',
		'add_new_item'        => 'New Psychiatrist Module',
		'add_new'             => 'New Psychiatrist Module',
		'edit_item'           => 'Edit Psychiatrist Module',
		'update_item'         => 'Update Psychiatrist Module',
		'search_items'        => '',
		'not_found'           => '',
		'not_found_in_trash'  => '',
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
        'rewrite' => array('slug' => 'psychiatrist'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'psychiatrist', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );




   //Therapist Post Type
function custom_post_type2() {

	$labels = array(
		'name'                => 'therapist',
		'singular_name'       => 'therapist',
		'menu_name'           => 'Therapist',
		'parent_item_colon'   => 'Parent Module:',
		'all_items'           => 'All Therapist Modules',
		'view_item'           => 'View Therapist Modules',
		'add_new_item'        => 'New Therapist Module',
		'add_new'             => 'New Therapist Module',
		'edit_item'           => 'Edit Therapist Module',
		'update_item'         => 'Update Therapist Module',
		'search_items'        => '',
		'not_found'           => '',
		'not_found_in_trash'  => '',
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
        'rewrite' => array('slug' => 'therapist'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'therapist', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type2', 0 );

   // Group Practice Post Type
function custom_post_type3() {

	$labels = array(
		'name'                => 'group_practice',
		'singular_name'       => 'group_practice',
		'menu_name'           => 'Group Practice',
		'parent_item_colon'   => 'Parent Group Practice Module:',
		'all_items'           => 'All Group Practice Modules',
		'view_item'           => 'View Group Practice Modules',
		'add_new_item'        => 'New Group Practice Module',
		'add_new'             => 'New Group Practice Module',
		'edit_item'           => 'Edit Group Practice Module',
		'update_item'         => 'Update Group Practice Module',
		'search_items'        => '',
		'not_found'           => '',
		'not_found_in_trash'  => '',
	);
	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes', 'post-formats', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
        'rewrite' => array('slug' => 'group_practice'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'group_practice', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type3', 0 );

// Replaces the excerpt "more" text by a link

function new_excerpt_more($more) {
       global $post;
	return '...<a class="moretag" href="#">'.'read more'.'</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
class CSS_Menu_Maker_Walker extends Walker {

  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}


    	
        
        
        /* function my_scripts_method() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );*/
?>