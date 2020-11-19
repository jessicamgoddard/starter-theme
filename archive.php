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

// Adds div around articles
add_action( 'genesis_before_while', 'starter_theme_articles_div_start' );
function starter_theme_articles_div_start() {
	echo '<div class="articles">';
}

add_action( 'genesis_after_endwhile', 'starter_theme_articles_div_end', 5 );
function starter_theme_articles_div_end() {
	echo '</div>';
}

genesis();
