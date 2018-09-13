<?php
/**
 * Plugin Name: Must Used Plugin
 * Plugin URI: https://raftaar1191.com
 * Description: Must used functions required when developing sites.
 * Author: raftaar1191
 * Author URI: https://raftaar1191.com
 * Version: 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Never display avatar
 *
 * @since 1.0
 *
 * @return int
 */
function raf_mu_option_show_avatars() {
	return 0;
}

add_filter( 'option_show_avatars', 'raf_mu_option_show_avatars', 10, 0 );

/**
 * Print out put in new debug log file
 */
function raf_mu_print_error( $output, $filename = 'debug_new.log' ) {
	error_log( print_r( $output, true ) . "\n", 3, WP_CONTENT_DIR . '/' . $filename );
}

/**
 * Vardump the output
 *
 * @param $output
 * @param bool $pre
 */
function raf_mu_vardump( $output, $pre = true ) {
	if ( $pre ) {
		echo '<pre>';
	}
	var_dump( $output );

	if ( $pre ) {
		echo '</pre>';
	}
}