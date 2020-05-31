<?php
/**
 * Plugin Name: ACF to REST API Extend
 * Description: Add ACF to REST API functionality.
 * Author: Gabriel Fiocchi
 * Author URI: http://github.com/gabfiocchi
 * Version: 0.1.0
 * Plugin URI: http://github.com/gabfiocchi/acf-to-rest-api-extend
 */
/**
 * Register the WooCommerce endpoints so they will be cached.
 */
// Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );