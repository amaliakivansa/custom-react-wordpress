<?php

/*
  Plugin Name: Custom Gutenberg Blocks
  Version: 1.0
  Author: Amalia
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function custom_gutenberg_plugin() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'custom_gutenberg_plugin' );