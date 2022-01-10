<?php
/**
 *  Defining variables and constants
 */

define('THEME_DIR', get_template_directory());
define('THEME_URL', get_template_directory_uri());
define('THEME_STATIC', THEME_URL . '/static');
define('THEME_IMAGES', THEME_STATIC . '/images');
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

// Theme Setup

if (!function_exists('malwee_theme_setup')) {
	function malwee_theme_setup() {
		// Allow thumbnails
		add_theme_support( 'post-thumbnails' );

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
			)
		);
	}
}

add_action('init', 'malwee_theme_setup', '5');