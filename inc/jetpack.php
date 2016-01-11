<?php
/**
 * Jetpack Compatibility File
 * @link http://jetpack.me/
 *
 * @package Whimsical Love
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function whimsical_love_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'whimsical_love_infitine_scroll_render',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'whimsical_love_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function whimsical_love_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function whimsical_love_infinite_scroll_render
