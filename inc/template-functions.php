<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package pearl
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function pearl_body_classes($classes)
{
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter('body_class', 'pearl_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function pearl_pingback_header()
{
	if (is_singular() && pings_open()) {
		printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
	}
}
add_action('wp_head', 'pearl_pingback_header');




// Adds widget: Widget
class New_Widget extends WP_Widget
{

	function __construct()
	{
		parent::__construct(
			'new_widget',
			esc_html__('Pearl Recent Post', 'pearl')
		);
	}

	private $widget_fields = array(
		array(
			'label' => 'Post Count',
			'id' => 'postcount_text',
			'default' => '3',
			'type' => 'text',
		),
	);

	public function widget($args, $instance)
	{
		echo $args['before_widget'];

		if (!empty($instance['title'])) {
			echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
		}

		// Output generated fields
		
?>
		<?php

		$args = array('post_type' => 'post', 'showposts' => $instance['postcount_text']);
		$loop = new WP_Query($args);

		if ($loop->have_posts()) :

			while ($loop->have_posts()) : $loop->the_post(); ?>

				
					<div class="singleRecent">
						<img src="<?php echo get_the_post_thumbnail_url($post_id, 'blog'); ?>" alt="<?php the_title(); ?>">
						<span><?php the_date(); ?></span>
						<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
						</a>
					</div>

			

		<?php endwhile;

		endif;

		?>
	<?php

		echo $args['after_widget'];
	}

	public function field_generator($instance)
	{
		$output = '';
		foreach ($this->widget_fields as $widget_field) {
			$default = '';
			if (isset($widget_field['default'])) {
				$default = $widget_field['default'];
			}
			$widget_value = !empty($instance[$widget_field['id']]) ? $instance[$widget_field['id']] : esc_html__($default, 'pearl');
			switch ($widget_field['type']) {
				default:
					$output .= '<p>';
					$output .= '<label for="' . esc_attr($this->get_field_id($widget_field['id'])) . '">' . esc_attr($widget_field['label'], 'pearl') . ':</label> ';
					$output .= '<input class="widefat" id="' . esc_attr($this->get_field_id($widget_field['id'])) . '" name="' . esc_attr($this->get_field_name($widget_field['id'])) . '" type="' . $widget_field['type'] . '" value="' . esc_attr($widget_value) . '">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form($instance)
	{
		$title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'pearl');
	?>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'pearl'); ?></label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
		</p>
<?php
		$this->field_generator($instance);
	}

	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		foreach ($this->widget_fields as $widget_field) {
			switch ($widget_field['type']) {
				default:
					$instance[$widget_field['id']] = (!empty($new_instance[$widget_field['id']])) ? strip_tags($new_instance[$widget_field['id']]) : '';
			}
		}
		return $instance;
	}
}

function register_new_widget()
{
	register_widget('New_Widget');
}
add_action('widgets_init', 'register_new_widget');


function ocdi_import_files() {

    return array(
     
        array(

            'import_file_name'             => 'Main Demo)',
            'categories'                   => array( 'Kurumsal' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc//plugin/demo-data/pearl.WordPress.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc//plugin/demo-data/pearl-export.dat',
			'import_widget_file_url'     =>  trailingslashit( get_template_directory() ) . 'inc//plugin/demo-data/widget.wie',
        
            //'import_preview_image_url'     => get_template_directory_uri().'/screenshot.png',
          //  'import_notice'                => __( 'A special note for this import.', 'pearl' ),
            //'preview_url'                  => 'http://pearl.ucuztemalar.com/',

        ),
    

    );
}


/****************************************/

add_filter( 'pt-ocdi/import_files', 'ocdi_import_files' );


function ocdi_before_widgets_import( $selected_import ) {
    echo "Add your code here that will be executed before the widgets get imported!";
}

add_action( 'pt-ocdi/before_widgets_import', 'ocdi_before_widgets_import' );

function ocdi_plugin_page_setup( $default_settings ) {

    $default_settings['parent_slug'] = 'themes.php';
    $default_settings['page_title']  = esc_html__( 'Demo Import' , 'pearl' );
    $default_settings['menu_title']  = esc_html__( 'Demo Import' , 'pearl' );
    $default_settings['capability']  = 'import';

 //   $default_settings['menu_slug']   = 'pt-one-click-demo-import';

    return $default_settings;
}

add_filter( 'pt-ocdi/plugin_page_setup', 'ocdi_plugin_page_setup' );