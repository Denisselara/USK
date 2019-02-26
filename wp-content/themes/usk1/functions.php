<?php
  // REGISTRO DE ESTILOS
  function register_enqueue_style() {
  		$theme_data = wp_get_theme();
  		/* Registrando estilos */
      wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
      wp_register_style( 'bootstrap_theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' );
  		wp_register_style('particles', get_parent_theme_file_uri('/Assets/vendor/particleground/css/style.css'), null, '1.0.0', 'screen');
      wp_register_style('googlefont', 'https://fonts.googleapis.com/css?family=Raleway' );
      wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css' );
      wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );
      wp_register_style('gridder', get_parent_theme_file_uri('/Assets/vendor/gridder/css/gallery.css'), null, '1.0.0', 'screen');
      wp_register_style('leaflet', get_parent_theme_file_uri('/Assets/vendor/leaflet/css/leaflet.css'), null, '1.0.0', 'screen');
      wp_register_style('miestilo', get_parent_theme_file_uri('/Assets/css/style.css'), null, '1.0.0', 'screen');

  		/* Enqueue estilos */
  		wp_enqueue_style('bootstrap');
  		wp_enqueue_style('bootstrap_theme');
  		wp_enqueue_style('particles');
      wp_enqueue_style('googlefont');
      wp_enqueue_style('fontawesome');
      wp_enqueue_style('animate');
      wp_enqueue_style('gridder');
      wp_enqueue_style('leaflet');
      wp_enqueue_style('miestilo');

	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_style' );
  // REGISTRO DE SCRIPTS
  function register_enqueue_scripts() {
		$theme_data = wp_get_theme();
		/* Deregister Scripts */
		wp_deregister_script( 'jQuery' );
		/*wp_deregister_script( 'jquery-migrate' );*/
		/* Registrando Scripts */

		wp_register_script('jQuery', 'https://code.jquery.com/jquery-3.3.1.min.js');
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jQuery'), null, true );
    wp_register_script('jquery_easing', get_parent_theme_file_uri('/Assets/vendor/jquery/jquery.easing.1.3.js'),array('jQuery'), null, true);
		wp_register_script('jquery_waypoints', get_parent_theme_file_uri('/Assets/vendor/jquery/jquery.waypoints.min.js'),array('jQuery'), null, true);
		/*wp_register_script('jQuery_migrate', get_parent_theme_file_uri('/assets/vendor/js/jquery-migrate.min.js'), array('jQuery3'), '3.0.0', true);*/
    wp_register_script('particles', get_parent_theme_file_uri('/Assets/vendor/particleground/js/jquery.particleground.js'), array('jQuery'), null, true);
		wp_register_script('particles_demo', get_parent_theme_file_uri('/Assets/vendor/particleground/js/demo.js'),array('jQuery'), null, true);
    wp_register_script('gridder', get_parent_theme_file_uri('/Assets/vendor/gridder/js/gallery.js'),array('jQuery'), null, true);
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');
    wp_register_script('leaflet', get_parent_theme_file_uri('/Assets/js/leaflet.js'),array('jQuery'), null, true);
    wp_register_script('leaflet2', get_parent_theme_file_uri('/Assets/vendor/leaflet/js/leaflet.js'),array('jQuery'), null, true);
    wp_register_script('miscript', get_parent_theme_file_uri('/Assets/js/script.js'),array('jQuery'), null, true);

    $translation_array = array( 'templateUrl' => get_template_directory_uri() );
    wp_localize_script( 'leaflet', 'template', $translation_array );
		/* Enqueue Scripts */
    wp_enqueue_script('jQuery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery_easing');
    wp_enqueue_script('jquery_waypoints');
		wp_enqueue_script('particles');
		wp_enqueue_script('particles_demo');
    wp_enqueue_script('gridder');
    wp_enqueue_script('popper');
    wp_enqueue_script('leaflet2');
    wp_enqueue_script('leaflet');
		wp_enqueue_script('miscript');
    //after wp_enqueue_script


	}
	add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );





  //LOGO PERSONALIZADO

  function config_custom_logo() {
    add_theme_support( 'custom-logo', array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
    ));
  }
  add_action( 'after_setup_theme', 'config_custom_logo' );


  //MENU PERSONALIZADO

  function menus_setup() {
  	register_nav_menus(
  		array(
  			'header-menu'	=> __( 'Header Menu' ),
  			'footer-menu'	=> __( 'Footer Menu' ),
  		)
  	);
  }
  add_action( 'after_setup_theme', 'menus_setup' );

?>

<?php
// Register Custom Post Type
function frase_post_type() {

	$labels = array(
		'name'                  => _x( 'frases', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'frase', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post Types', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
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
		'label'                 => __( 'frase', 'text_domain' ),
		'description'           => __( 'mensaje tipo frase pensamiento banner', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'frase', $args );

}
add_action( 'init', 'frase_post_type', 0 );

?>
