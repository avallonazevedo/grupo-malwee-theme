<?php
/**
 *  Defining variables and constants
 */

define('THEME_DIR', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('THEME_STATIC', THEME_URL . '/static');
define('THEME_IMAGES', THEME_STATIC . '/images');
define('THEME_VIDEOS', THEME_STATIC . '/videos');
define('THEME_ASSETS', THEME_URL . '/assets');
define('THEME_ASSETS_DIST', THEME_URL . '/assets/dist');
define('THEME_INC', THEME_DIR . '/inc');
define('THEME_FUNCTIONS', THEME_INC . '/functions');

// Theme versioning

$theme_version = wp_get_theme()->version;
define('MALWEE_THEME_VERSION', $theme_version);

// Requires
require_once(THEME_FUNCTIONS . '/clean-code.php');
require_once(THEME_FUNCTIONS . '/generate-title.php');
require_once(THEME_FUNCTIONS . '/responsive-images.php');
require_once(THEME_DIR . '/widgets/footer-widgets.php');

$admin_files = array(
	'redux_core'    => __DIR__ . '/inc/admin/redux-core/framework.php',
	'theme_options' => __DIR__ . '/inc/admin/theme-options/setup.php',
);

/* Redux Framework */
if ( ! class_exists( 'ReduxFramework' ) && file_exists( $admin_files['redux_core'] ) ) {
	require_once $admin_files['redux_core'];
}

if ( ! isset( $redux_demo ) && file_exists( $admin_files['theme_options'] ) ) {
	require_once $admin_files['theme_options'];
}


// Theme Setup

if (!function_exists('malwee_theme_setup')) {
	function malwee_theme_setup() {
		// Allow thumbnails
		add_theme_support( 'post-thumbnails' );

		add_filter(
			'allowed_block_types_all',
			function () {
				return array(
					'core/heading',
					'core/list',
				);
			}
		);


		// Allow SVG Upload
		function cc_mime_types($mimes) {
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}
		add_filter('upload_mimes', 'cc_mime_types');

		// Custom excerpt
		function the_limited_excerpt($limit) {
			$excerpt = get_the_excerpt();
			echo substr($excerpt, 0, $limit) . '...';
		}

		// Register menus
		register_nav_menus(
			array(
                'main' => __('Principal', 'malwee'),
				'mobile' => __('Mobile', 'malwee'),
				'header' => __('Header', 'malwee'),
				'footer' => __('Footer', 'malwee'),
			)
		);
	}
}

add_action('init', 'malwee_theme_setup', '5');
