<?php
/**
 * Fired when plugin will be uninstall
 * Text Domain:   cfs-booster-yoast-analysis
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

delete_option('yacfsb_activated_on');
delete_option('yacfsb_deactivated_on');