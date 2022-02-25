<?php
/**
 * Plugin Name:       VK Super Global Navigation
 * Plugin URI:        https://github.com/vektor-inc/vk-super-global-navigation
 * Description:       ベクトルオフィシャルサイト用のスーパーグローバルメニューです。
 *  * Author:         Vektor,Inc.
 * Author URI:        https://www.vektor-inc.co.jp/
 * Version:           0.0.1
 * Text Domain:       vk-super-global-navigation
 * Domain Path:       /languages/
 * License:           GPLv2 or later (license.txt)
 * Requires PHP:      7.4
 * Requires at least: 5.8
 *
 * @package VK Super Global Navigation
 */

/**
* Start the plugin
*/
class VKSGN_Active {
	
	/**
	* Start the plugin
	*/
	public function __construct() {
		defined( 'ABSPATH' ) || exit;
		define( 'VK_SUPER_GLOBAL_NAVIGATION_DIR_URL', plugin_dir_url( __FILE__ ) );
		define( 'VK_SUPER_GLOBAL_NAVIGATION_URL', plugin_dir_url( __FILE__ ) );
		define( 'NVK_SUPER_GLOBAL_NAVIGATIONPATH', plugin_dir_path( __FILE__ ) );
		load_plugin_textdomain( 'vk-super-global-navigation', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
		add_filter( 'wp_footer', array( &$this, 'add_navigation' ));
		add_action( 'wp_print_styles', array( &$this, 'add_style' ));
	}

	/**
	* Add navigation on footer
	*/
	static function add_navigation() {
		// insert  html
		require_once( 'vksgn-template.php' );
	}

	/**
	* Add style file
	*/
	static function add_style() {
		$filename = plugin_dir_url( __FILE__ ) . 'build/css/style.css';
		wp_enqueue_style( 'vk-super-global-navigation', $filename, false, '0.0.1' );
	}
}
$vk_super_global_navigation = new VKSGN_Active();
?>