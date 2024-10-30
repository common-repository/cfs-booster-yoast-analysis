<?php
 /**
 * Plugin Name: CFS Booster Yoast Analysis
 * Version: 1.0
 * Plugin URI: http://store.wphound.com/?plugin=cfs-booster-yoast-analysis
 * Description: This plugin includes Custom Field Suits created fields for Yoast SEO Analysis Calculation.
 * Author: WP Hound
 * Author URI: http://www.wphound.com
 * Text Domain: cfs-booster-yoast-analysis
 * License: GPL v3
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * The code that runs during plugin activation.
 */
register_activation_hook( __FILE__, 'activate_np_yacfsb' );

function activate_np_yacfsb() {
		update_option('yacfsb_activated_on',@date('d-m-Y h:i:s'));
}

/**
 * The code that runs during plugin deactivation.
 */
register_deactivation_hook( __FILE__, 'deactivate_np_yacfsb' );

function deactivate_np_yacfsb() {
	update_option('yacfsb_deactivated_on',@date('d-m-Y h:i:s'));
}

$plgprefix = 'yacfsb_';

/* Include JS */
function yacfsb_js() {
	
	global $post;
   if($post->post_type == 'page'){  // include only on pages
	    wp_enqueue_script('yoastseoscript', plugins_url('cfs-booster-yoast-analysis.js',__FILE__ ), array('yoast-seo-admin-script'));
   }
}
add_action('admin_enqueue_scripts', 'yacfsb_js');