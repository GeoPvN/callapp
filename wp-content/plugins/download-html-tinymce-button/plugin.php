<?php
/**
 * Plugin Name: Download HTML TinyMCE Button
 * Description: Download a post or page as HTML with the click of a button.
 * Version:     1.2
 * Author:      Steve Farbota
 * License:     GPLv2 or later
 * License URI:	http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'admin_head', 'download_html' );
function download_html() {
    global $typenow;

    // Only apply to posts and pages
    if( ! in_array( $typenow, array( 'post', 'page' ) ) )
        return ;
	
	// Add as an external TinyMCE plugin
    add_filter( 'mce_external_plugins', 'download_html_plugin' );
	
    // Add to first row of the TinyMCE buttons
    add_filter( 'mce_buttons', 'download_html_button' );
}

// Include the JS
function download_html_plugin( $plugin_array ) {
    $plugin_array['download_html'] = plugins_url( '/plugin.js', __FILE__ );
    return $plugin_array;
}

// Add the button key for address via JS
function download_html_button( $buttons ) {
    array_push( $buttons, 'download_html' );
    return $buttons;
}

add_action('admin_init','download_html_css');
// Include the CSS
function download_html_css() {
        $myStyleUrl = plugins_url('style.css', __FILE__);
        $myStyleFile = WP_PLUGIN_DIR . '/download-html-tinymce-button/style.css';
        if ( file_exists($myStyleFile) ) {
            wp_register_style('download-html-css', $myStyleUrl);
            wp_enqueue_style('download-html-css');
        }
}