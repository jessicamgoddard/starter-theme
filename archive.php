<?php
/**
 * Archive
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Adds body class to all pages using this template
add_filter( 'body_class', 'starter_theme_blog_archive_body_class' );
function starter_theme_blog_archive_body_class( $classes ) {
	$classes[] = 'archive';
	return $classes;
}

genesis();
