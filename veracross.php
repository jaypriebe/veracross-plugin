<?php
/*
Plugin Name: Veracross Staff Members
Description: Create Staff Members as a post type for import from Veracross
Author: NIST
Version: .1
License: GPLv2+
 */

// Register Custom Post Type
function vc_nist_staff_members() {

	$labels = array(
		'name'                  => _x( 'Staff Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Staff Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Staff Members', 'text_domain' ),
		'name_admin_bar'        => __( 'Staff Members', 'text_domain' ),
		'archives'              => __( 'Staff Members Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Staff Members', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Staff Member', 'text_domain' ),
		'description'           => __( 'NIST Staff Members', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'staff_member', $args );

}
add_action( 'init', 'vc_nist_staff_members', 0 );

// ACF Fields

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_587ca924c8b5f',
	'title' => 'Staff Members',
	'fields' => array (
		array (
			'default_value' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_587cab5b17467',
			'label' => 'Person ID',
			'name' => 'person_pk',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'min' => '',
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802b67c3a64',
			'label' => 'Household ID',
			'name' => 'household_fk',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802b89c3a65',
			'label' => 'Name Prefix',
			'name' => 'name_prefix',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => 'put first name here',
			'prepend' => '',
			'append' => '',
			'key' => 'field_587ca96014d82',
			'label' => 'First Name',
			'name' => 'firstname',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802ba8c3a66',
			'label' => 'Nick First Name',
			'name' => 'nick_first_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_587cab2417465',
			'label' => 'Last Name',
			'name' => 'last_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802bcec3a67',
			'label' => 'Gender',
			'name' => 'gender',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_5880340c40346',
			'label' => 'Birth Day',
			'name' => 'birthday',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_587cac0317468',
			'label' => 'email_1',
			'name' => 'email_1',
			'type' => 'email',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802c24c3a68',
			'label' => 'Mobile Phone',
			'name' => 'mobile_phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802c4bc3a69',
			'label' => 'Business Phone',
			'name' => 'business_phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'new_lines' => 'wpautop',
			'maxlength' => '',
			'placeholder' => '',
			'rows' => '',
			'key' => 'field_587cab3a17466',
			'label' => 'biography',
			'name' => 'biography',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_58802cb4c3a6b',
			'label' => 'Job Title',
			'name' => 'job_title',
			'type' => 'text',
			'instructions' => 'official Job Title is added in VC by HR',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array (
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'field_588032ebc3a6d',
			'label' => 'Faculty Type',
			'name' => 'faculty_type',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'staff_member',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'categories',
		1 => 'tags',
	),
	'active' => 1,
	'description' => '',
));

endif;


//Register Taxonomy for Department(s) so that the WP core query will recognize

if ( ! function_exists( 'veracross_department_taxonomies' ) ) {

// Register Custom Taxonomy
function veracross_department_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Departments', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Departments', 'text_domain' ),
		'all_items'                  => __( 'All Departments', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Department', 'text_domain' ),
		'add_new_item'               => __( 'Add New Department', 'text_domain' ),
		'edit_item'                  => __( 'Edit Department', 'text_domain' ),
		'update_item'                => __( 'Update Department', 'text_domain' ),
		'view_item'                  => __( 'View Department', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'department', array( 'staff_member' ), $args );

}
add_action( 'init', 'veracross_department_taxonomies', 0 );

}

//Register Taxonomy for School Level(s) so that the WP core query will recognize

if ( ! function_exists( 'veracross_schoollevel_taxonomies' ) ) {

// Register Custom Taxonomy
function veracross_schoollevel_taxonomies() {

	$labels = array(
		'name'                       => _x( 'School Levels', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'School Level', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'School Levels', 'text_domain' ),
		'all_items'                  => __( 'All School Levels', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New School Level', 'text_domain' ),
		'add_new_item'               => __( 'Add New School Level', 'text_domain' ),
		'edit_item'                  => __( 'Edit School Level', 'text_domain' ),
		'update_item'                => __( 'Update School Level', 'text_domain' ),
		'view_item'                  => __( 'View School Level', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'schoollevel', array( 'staff_member' ), $args );

}
add_action( 'init', 'veracross_schoollevel_taxonomies', 0 );

}
 

/**
 * Remove Link from Title on Display Posts Shortcode
 * @author Bill Erickson
 * @link http://www.billerickson.net/code/remove-link-from-title-on-display-posts-shortcode
 *
 * @param $output string, the original markup for an individual post
 * @param $atts array, all the attributes passed to the shortcode
 * @param $image string, the image part of the output
 * @param $title string, the title part of the output
 * @param $date string, the date part of the output
 * @param $excerpt string, the excerpt part of the output
 * @param $inner_wrapper string, what html element to wrap each post in (default is li)
 * @return $output string, the modified markup for an individual post
 */
function be_display_posts_unlink_title( $output, $original_atts, $image, $title, $date, $excerpt, $inner_wrapper, $content, $class ) {
 
	// Create a new title
	$title = '<span class="title">' . get_the_title() . '</span> ';
	
	// Now let's rebuild the output
	$output = '<' . $inner_wrapper . ' class="' . implode( ' ', $class ) . '">' . $image . $title . $date . $author . $excerpt . $content . '</' . $inner_wrapper . '>';
 
	// Finally we'll return the modified output
	return $output;
}
add_filter( 'display_posts_shortcode_output', 'be_display_posts_unlink_title', 10, 9 );


/**
 * Set Defaults in Display Posts Shortcode
 * 
 * 'posts_per_page' => 999, - set this to number of staff per listing
 * 'post_type' => staff_member - refers to custom post type we made
 * 'taxonomy' => department - used to set custom taxonomy of department
 *
 * @param array $out, the output array of shortcode attributes (after user-defined and defaults have been combined)
 * @param array $pairs, the supported attributes and their defaults
 * @param array $atts, the user defined shortcode attributes
 * @return array $out, modified output
 */
function be_dps_defaults( $out, $pairs, $atts ) {
	$new_defaults = array( 
		'posts_per_page' => 999,
		'include_excerpt' => false,
		'wrapper' => div,
		'post_status' => publish,
		'orderby' => title,
		'order' => ASC,
		'post_type' => staff_member,
		'taxonomy' => department,
	);
	
	foreach( $new_defaults as $name => $default ) {
		if( array_key_exists( $name, $atts ) )
			$out[$name] = $atts[$name];
		else
			$out[$name] = $default;
	}
	
	return $out;
}
add_filter( 'shortcode_atts_display-posts', 'be_dps_defaults', 10, 3 );



/**
 * Add custom fields to Display Posts Shortcode
 * @author Bill Erickson
 * @link http://wordpress.org/extend/plugins/display-posts-shortcode/
 * @link http://www.billerickson.net/shortcode-to-display-posts/comment-page-1/#comment-4565
 *
 * @param $output string, the original markup for an individual post
 * @param $atts array, all the attributes passed to the shortcode
 * @param $image string, the image part of the output
 * @param $title string, the title part of the output
 * @param $date string, the date part of the output
 * @param $excerpt string, the excerpt part of the output
 * @return $output string, the modified markup for an individual post
 */
 
add_filter( 'display_posts_shortcode_output', 'be_display_posts_custom_fields', 10, 6 );
function be_display_posts_custom_fields( $output, $atts, $image, $title, $date, $excerpt ) {
	// Get our custom fields
	global $post;
	$job_title = esc_attr( get_post_meta( $post->ID, 'job_title', true ) );
	$email_1 = esc_attr( get_post_meta( $post->ID, 'email_1', true ) );
	$biography = esc_attr( get_post_meta( $post->ID, 'biography', true ) );
	$gender = esc_attr( get_post_meta( $post->ID, 'gender', true ) );
	$department = esc_attr( get_post_meta( $post->ID, 'department', true ) );
	// If there's a value for the custom field, let's wrap them with <span>'s so you can control them with CSS
	if( isset( $job_title ) ) $job_title = '<br /><span class="job_title">' . $job_title . '</span> ';
	if( isset( $email_1 ) ) $email_1 = '<br /><span class="email_1"><a href="mailto:' . $email_1 . '">email</a></span> ';
	if( isset( $biography ) ) $biography = '<br /><span class="biography">' . $biography . '</span> ';
	if( isset( $gender ) ) $gender = '<br /><span class="gender">' . $gender . '</span> ';
	if( isset( $department ) ) $department = '<br /><span class="department">' . $department . '</span> ';
	// Now let's rebuild the output. 
	$output = '<li>' . $image . $title . $job_title . $email_1 . $biography . $gender . $department . $date . $excerpt . '</li>';
	// Finally we'll return the modified output
	return $output;
}

?>

