<?php
/**
 * Plugin Name: Give - Must Used Plugin
 * Plugin URI: https://raftaar1191.com
 * Description: Must used functions required when working with Give Plugin.
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
function give_mu_option_show_avatars() {
	return 0;
}

add_filter( 'option_show_avatars', 'give_mu_option_show_avatars', 10, 0 );