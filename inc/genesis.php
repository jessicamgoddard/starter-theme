<?php
/**
 * Genesis
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Remove Genesis SEO settings from post/page editor
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

// Remove Genesis SEO settings option page
remove_theme_support( 'genesis-seo-settings-menu' );

// Remove Genesis SEO settings from taxonomy editor
remove_action( 'admin_init', 'genesis_add_taxonomy_seo_options' );

// Moves navigation menus
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_nav' );

// Wraps front page title in h1
add_filter( 'genesis_site_title_wrap', function( $wrap ) { return is_front_page() ? 'h1' : $wrap; } );

// Removes Genesis templates
add_filter( 'theme_page_templates', 'starter_theme_remove_genesis_templates' );
function starter_theme_remove_genesis_templates( $page_templates ) {

	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );

	return $page_templates;

}

// Adds search to secondary navigation
add_filter( 'wp_nav_menu_items', 'starter_themeadd_search_to_menu', 10, 2 );
function starter_themeadd_search_to_menu( $menu, $args ) {

  if( ( 'secondary' !== $args->theme_location ) )
    return $menu;

  ob_start();
  get_search_form();
  $search = ob_get_clean();
  $menu .= '<li class="search-toggle"><span class="dashicons dashicons-search"></span></li>';
  $menu .= '<li class="search">' . $search . '</li>';

  return $menu;

}
