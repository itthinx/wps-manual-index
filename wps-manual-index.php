<?php
/**
 * Plugin Name: WPS Manual Index
 */

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', 'wps_manual_index', 99999 );

function wps_manual_index() {
	if ( class_exists( 'WooCommerce_Product_Search_Worker' ) ) {
		if ( !empty( $_REQUEST['wps_manual_index'] ) ) {
			WooCommerce_Product_Search_Worker::work();
		}
	}
}
