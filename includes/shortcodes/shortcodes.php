<?php 

/**
 * Remove paragraphs around shortcodes in widget_text
 * (Used in default text-widget and blackstudio visual editor)
 */
add_filter( 'widget_text', 'shortcode_unautop', 9 );

/**
 * Include shortcodes
 */

/* Common Shortcodes */
require_once( __DIR__ . '/common.php' ); 

/* Author Shortcodes */
require_once( __DIR__ . '/author.php' ); 

/* EJOweb Shortcodes */
require_once( __DIR__ . '/ejoweb.php' ); 

