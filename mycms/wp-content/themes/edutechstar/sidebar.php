<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edutechstar
 */

 if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}

dynamic_sidebar( 'blog-sidebar' ); 