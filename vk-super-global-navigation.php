<?php
/**
 * Plugin Name:       VK Super Global Navigation
 * Plugin URI:        https://github.com/vektor-inc/vk-super-global-navigation
 * Description:       ベクトルオフィシャルサイト用のスーパーグローバルメニューです。
 *  * Author:         Vektor,Inc.
 * Author URI:        https://www.vektor-inc.co.jp/
 * Version:           1.1.5
 * Text Domain:       vk-super-global-navigation
 * Domain Path:       /languages/
 * License:           GPLv2 or later (license.txt)
 * Requires PHP:      7.4
 * Requires at least: 5.7
 *
 * @package VK Super Global Navigation
 */

// Composer のファイルを読み込み ( composer install --no-dev )
require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// Update Checker
$my_update_checker = YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
	'https://github.com/vektor-inc/vk-super-global-navigation',
	__FILE__,
	'vk-super-global-navigation'
);
$my_update_checker->getVcsApi()->enableReleaseAssets();
$my_update_checker->setAuthentication('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');
/**
* Start the plugin
*/
class VKSGN_Active {
	
	/**
	* Start the plugin
	*/
	public function __construct() {
		defined( 'ABSPATH' ) || exit;
		add_filter( 'wp_footer', array( &$this, 'add_navigation' ));
		add_action( 'wp_enqueue_scripts', array( &$this, 'add_style' ));
		add_action( 'wp_enqueue_scripts', array( &$this, 'add_script' ) );
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
		wp_enqueue_style( 'vk-super-global-navigation', $filename, false, '1.1.5' );
	}

	/**
	* Add script file
	*/
	static function add_script() {
		$filename = plugin_dir_url( __FILE__ ).'build/js/script.js';
		wp_enqueue_script( 'vk-super-global-navigation', $filename, array( 'jquery' ), '1.1.5' );
	}
}
$vk_super_global_navigation = new VKSGN_Active();
?>