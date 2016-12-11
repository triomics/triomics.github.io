<?php
/**
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage AS
 * @since AS 1.0
 */
 
add_action( 'after_setup_theme', 'triomics_setup' );


remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter( 'wpcf7_load_css', '__return_false' );
add_filter( 'wpcf7_load_js', '__return_false' );


// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');
// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid', 'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
// Отключаем события REST API
remove_action( 'init', 'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );
// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init', 'wp_oembed_register_route' );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

//remove wp embed
function my_deregister_scripts(){
	wp_deregister_script( 'wp-embed' );;
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//remove jquerz migrate
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
function remove_jquery_migrate($scripts) {
	if(!is_admin()){
			$scripts->remove( 'jquery');
			$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
		}
}




if(!function_exists("triomics_setup")){
	function triomics_setup() {
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1920, 9999 );

		add_image_size('blog-thumb', 318, 206, true );

		// This theme uses wp_nav_menu() in two locations.
		
		register_nav_menu( 'primary', 'Главное Меню' );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}

// If Dynamic Sidebar Exists

function as_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'triomics' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'triomics' ),
		'before_widget' => '<div class="col-md-3 col-md-offset-1 col-sm-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<span class="alt-font text-uppercase dark-gray-text font-weight-600 text-large">',
		'after_title'   => '</span>',
	) );

}
add_action( 'widgets_init', 'as_widgets_init' );


// Add custom post create_project_type

// Create post type Project
function create_project_type() {

  $args = array(
    'labels' => array(
      'name' => __('Портфолио'),
      'singular_name' => __('Портфолио'),
      'all_items' => __('Все Portfolies'),
	  	'add_new' => 'Новое Портфолио',
      'add_new_item' => __('Новое Портфолио'),
      'edit_item' => __('Редактировать Портфолио'),
    ),
		'public' => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'portfolio'),
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'capability_type' => 'post',
		'supports' => array('title', 'editor'),
		'exclude_from_search' => true,
		'menu_position' => 16,
		'menu_icon' => 'dashicons-images-alt'
    );

  register_post_type('portfolio', $args);
}
add_action( 'init', 'create_project_type');


// Post post type Слайдер 
function create_slider_type() {

  $args = array(
    'labels' => array(
      'name' => __('Слайдер(Главная)'),
      'singular_name' => __('Слайды'),
      'all_items' => __('Все Слайды'),
	  'add_new' => __('Новый Слайд'),
      'add_new_item' => __('Новый Слайд'),
      'edit_item' => __('Редактировать Слайд'),
    ),

		'public' => false,
		'hierarchical' => false,
		'has_archive' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'capability_type' => 'post',
		'supports' => array('title', 'editor', 'thumbnail'),
		'exclude_from_search' => true,
		'menu_position' => 15,
		'menu_icon' => 'dashicons-admin-page'
    );

  register_post_type('slider', $args);
}

add_action( 'init', 'create_slider_type');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Настройки сайту',
		'menu_title'	=> 'Настройки сайту',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
		
}

//Функция для определения мобильного
function is_mobile(){
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	if(
		// добавить '|android|ipad|playbook|silk' в первую регулярку для определения еще и tablet
		preg_match(
			'/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',
			$useragent
		)
		||
		preg_match(
			'/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
			substr($useragent,0,4)
		)
	)
		return true;
	return false;   
}
