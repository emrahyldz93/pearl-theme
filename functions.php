<?php



/**

 * pearl functions and definitions

 *

 * 

 *

 * @package pearl

 */



if (!defined('_S_VERSION')) {

	// Replace the version number of the theme on each release.

	define('_S_VERSION', '1.0.0');

}



if (!function_exists('pearl_setup')) :

	/**

	 * Sets up theme defaults and registers support for various WordPress features.

	 *

	 * Note that this function is hooked into the after_setup_theme hook, which

	 * runs before the init hook. The init hook is too late for some features, such

	 * as indicating support for post thumbnails.

	 */

	function pearl_setup()

	{

		/*

		 * Make theme available for translation.

		 * Translations can be filed in the /languages/ directory.

		 * If you're building a theme based on pearl, use a find and replace

		 * to change 'pearl' to the name of your theme in all the template files.

		 */

		load_theme_textdomain('pearl', get_template_directory() . '/languages');



		// Add default posts and comments RSS feed links to head.

		add_theme_support('automatic-feed-links');



		/*

		 * Let WordPress manage the document title.

		 * By adding theme support, we declare that this theme does not use a

		 * hard-coded <title> tag in the document head, and expect WordPress to

		 * provide it for us.

		 */

		add_theme_support('title-tag');



		/*

		 * Enable support for Post Thumbnails on posts and pages.

		 *

		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

		 */

		add_theme_support('post-thumbnails');

		add_image_size('blog', 350, 235);

		add_image_size('single-blog', 779, 394);



		// This theme uses wp_nav_menu() in one location.

		register_nav_menus(

			array(

				'main-menu' => esc_html__('Primary', 'pearl'),

			)

		);







		/*

		 * Switch default core markup for search form, comment form, and comments

		 * to output valid HTML5.

		 */

		add_theme_support(

			'html5',

			array(

				'search-form',

				'comment-form',

				'comment-list',

				'gallery',

				'caption',

				'style',

				'script',

			)

		);



		// Set up the WordPress core custom background feature.

		add_theme_support(

			'custom-background',

			apply_filters(

				'pearl_custom_background_args',

				array(

					'default-color' => 'ffffff',

					'default-image' => '',

				)

			)

		);



		// Add theme support for selective refresh for widgets.

		add_theme_support('customize-selective-refresh-widgets');



		/**

		 * Add support for core custom logo.

		 *

		 * @link https://codex.wordpress.org/Theme_Logo

		 */

		add_theme_support(

			'custom-logo',

			array(

				'height'      => 250,

				'width'       => 250,

				'flex-width'  => true,

				'flex-height' => true,

			)

		);

	}

endif;

add_action('after_setup_theme', 'pearl_setup');



/**

 * Set the content width in pixels, based on the theme's design and stylesheet.

 *

 * Priority 0 to make it available to lower priority callbacks.

 *

 * @global int $content_width

 */

function pearl_content_width()

{

	$GLOBALS['content_width'] = apply_filters('pearl_content_width', 640);

}

add_action('after_setup_theme', 'pearl_content_width', 0);



/**

 * Register widget area.

 *

 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar

 */

function pearl_widgets_init()

{

	register_sidebar(

		array(

			'name'          => esc_html__('Sidebar', 'pearl'),

			'id'            => 'sidebar-1',

			'description'   => esc_html__('Add widgets here.', 'pearl'),

			'before_widget' => '<section id="%1$s" class="widget %2$s">',

			'after_widget'  => '</section>',

			'before_title'  => '<h2 class="widget-title">',

			'after_title'   => '</h2>',

		)

	);

}

add_action('widgets_init', 'pearl_widgets_init');



/**

 * Enqueue scripts and styles.

 */

function pearl_scripts()

{



	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), _S_VERSION);

	wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION);

	wp_enqueue_style('stroke', get_template_directory_uri() . '/assets/css/stroke-gap-icons.css', array(), _S_VERSION);

	wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/css/icofont.css', array(), _S_VERSION);

	wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), _S_VERSION);

	wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION);

	wp_enqueue_style('lightslider', get_template_directory_uri() . '/assets/css/lightslider.css', array(), _S_VERSION);

	wp_enqueue_style('scrollbar', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.css', array(), _S_VERSION);

	wp_enqueue_style('preset', get_template_directory_uri() . '/assets/css/preset.css', array(), _S_VERSION);

	wp_enqueue_style('ignore', get_template_directory_uri() . '/assets/css/ignore_for_wp.css', array(), _S_VERSION);

	wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', array(), _S_VERSION);

	wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION);

	wp_enqueue_style('light', get_template_directory_uri() . '/assets/css/light.css', array(), _S_VERSION);

	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), _S_VERSION);



	wp_enqueue_style('pearl-style', get_stylesheet_uri(), array(), _S_VERSION);

	wp_style_add_data('pearl-style', 'rtl', 'replace');



	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), _S_VERSION, true);

	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('jquery-appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array(), _S_VERSION, true);

	wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('mixer', get_template_directory_uri() . '/assets/js/mixer.js', array(), _S_VERSION, true);

	wp_enqueue_script('light-slider', get_template_directory_uri() . '/assets/js/lightslider.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('gmaps', get_template_directory_uri() . '/assets/js/gmaps.js', array(), _S_VERSION, true);

	wp_enqueue_script('anime', get_template_directory_uri() . '/assets/js/anime.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('folio', get_template_directory_uri() . '/assets/js/folio.js', array(), _S_VERSION, true);

	wp_enqueue_script('scrollbar', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', array(), _S_VERSION, true);



	if (is_singular() && comments_open() && get_option('thread_comments')) {

		wp_enqueue_script('comment-reply');

	}

}

add_action('wp_enqueue_scripts', 'pearl_scripts');



/**

 * Implement the Custom Header feature.

 */

require get_template_directory() . '/inc/custom-header.php';



/**

 * Custom template tags for this theme.

 */

require get_template_directory() . '/inc/template-tags.php';



/**

 * Functions which enhance the theme by hooking into WordPress.

 */

require get_template_directory() . '/inc/template-functions.php';



/**

 * Customizer additions.

 */

require get_template_directory() . '/inc/customizer.php';



/**

 * Codestar Framework

 */



require_once get_theme_file_path() . '/inc/codestar-framework/codestar-framework.php';

require_once get_theme_file_path() . '/inc/codestar-framework/samples/customize-options.php';

require_once get_theme_file_path() . '/inc/codestar-framework/samples/metabox-options.php';



/**

 * TGM

 */

require_once get_theme_file_path() . '/inc/plugin/activation.php';











/**

 * Codestar Framework Menu

 */



// Control core classes for avoid errors

if (class_exists('CSF')) {



	//

	// Set a unique slug-like ID

	$prefix = '_prefix_menu_options';



	//

	// Create profile options

	CSF::createNavMenuOptions($prefix, array(

		'data_type' => 'serialize', // The type of the database save options. `serialize` or `unserialize`

	));



	//

	// Create a section

	CSF::createSection($prefix, array(

		'fields' => array(



			array(

				'id'    => 'icon',

				'type'  => 'text',

				'title' => esc_html__('Icon Enter', 'pearl'),

				'desc' => esc_html__('You can also use Stroke Gap Icons', 'pearl'),

			),



		)

	));

}





function prefix_wp_nav_menu_objects($items, $args)

{



	foreach ($items as &$item) {



		// ------------------------------------------------------------------------------

		// "data_type => serialize" usage.

		$meta = get_post_meta($item->ID, '_prefix_menu_options', true);

		// alternative: $meta = $item->_prefix_menu_options;



		if (!empty($meta['icon'])) {

			$item->title = '<i class="' . $meta['icon'] . '"></i>' . $item->title;

		}

		// ------------------------------------------------------------------------------



		// ------------------------------------------------------------------------------

		// "data_type => unserialize" usage.

		$icon = get_post_meta($item->ID, 'icon', true);

		// alternative: $icon = $item->icon;



		if (!empty($icon)) {

			$item->title = '<i class="' . $icon . '"></i>' . $item->title;

		}

		// ------------------------------------------------------------------------------



	}



	return $items;

}



add_filter('wp_nav_menu_objects', 'prefix_wp_nav_menu_objects', 10, 2);



/* İnfinite  portgolio*/

add_action('wp_ajax_nopriv_home_load_more', 'home_load_more');

add_action('wp_ajax_home_load_more', 'home_load_more');

function home_load_more()

{

	//$options = get_option('pearl_settings');

	$paged = $_POST["page"] + 1;





	$query = new WP_Query(array(

		'post_type' => 'portfolio',

		'paged' => $paged

	));

	if ($query->have_posts()) :

		while ($query->have_posts()) : $query->the_post();

			get_template_part('template-parts/content-archive', get_post_format());

		

		endwhile;

	endif;

	wp_reset_postdata(); 

	die();

}





//  Check for email return in share folders

add_action( 'wp_ajax_share_email', 'share_email' );

add_action( 'wp_ajax_nopriv_share_email', 'share_email' );

function share_email(){

	$options = get_option('pearl_settings');

	$full_name = $_POST['full_name'];

	$email = $_POST['email'];

	$phone = $_POST['phone'];

	$sjubject = $_POST['sjubject'];

	$message = $_POST['message'];



   // $admin_email = get_bloginfo('admin_email');

	//$form_email   =  "iletisim@emrahyldz.com";

	$to        = $pearl_settings['contact-sendmail'];

	$subject = '[Contact Form] From ' . $sjubject;



	$message .= "Name:" . $full_name . "</br>";

	$message .= "Email:" . $email . "</br>";

	$message .= "Phone:   " . $phone . "</br>";

	$message .= "Phone:   " . $subject . "</br>";

	$message .= "Message:   " . $message . "</br>";



	wp_mail( $to, $subject, $message ); 



}



function pagination(){

	$args = array (

	  'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __( 'More pages: ', 'pearl' ) . '</span>',

	  'after'             => '</div>',

	  'link_before'       => '<span class="page-link">',

	  'link_after'        => '</span>',

	  'next_or_number'    => 'next',

	  'separator'         => ' | ',

	  'nextpagelink'      => __( 'Next &raquo', 'pearl' ),

	  'previouspagelink'  => __( '&laquo Previous', 'pearl' ),

  );

   

  wp_link_pages( $args );;

  }

  



/**

 * Load Jetpack compatibility file.

 */

if (defined('JETPACK__VERSION')) {

	require get_template_directory() . '/inc/jetpack.php';

}





