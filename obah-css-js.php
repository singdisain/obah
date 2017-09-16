<?php

/*
Plugin Name:   Obah CSS and JS Plugin
Plugin URI:    
Description:   Nambah obahan css lan js ke wordpress
Version:       1.0
Author:        SingDisain
Author URI:    http://singdisain.com
*/

function obah_css_js_enqueue_scripts() {

  /* enqueue obah-style.css file */
  wp_enqueue_style( 'obah-css', plugins_url( '/css/obah-style.css', __FILE__ ), $ver = false );

  /* enqueue obah-scripts.js file */
  wp_enqueue_script( 'obah-js', plugins_url( '/js/obah-scripts.js', __FILE__ ), $deps = array( 'jquery' ), $ver = false, $in_footer = true );
}
add_action( 'wp_enqueue_scripts', 'obah_css_js_enqueue_scripts' );