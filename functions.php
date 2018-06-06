<?php
/*
  Description: Functie uitbreidingen t.b.v. kleistad thema
  Version: 1.1
  Author: Eric Sprangers
  Author URI:
  License: GPL2
 */

/*
 * Voeg eigen styles toe aan parent theme.
 */
add_action( 'wp_enqueue_scripts', function () {
		$parent_style = 'parent-style';
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [$parent_style], wp_get_theme()->get( 'Version' ) );
	}
);
