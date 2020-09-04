<?php
/**
 * Theme Supports
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/


$theme_supports = $starter_theme_config[ 'theme-supports' ];

if( $theme_supports ) {

  foreach( $theme_supports as $theme_support => $value ) {

    add_theme_support( $theme_support, $value );

    // if( $value === true ) {
    //
    //   add_theme_support( $theme_support );
    //
    // } elseif( $value !== false ) {
    //
    //   add_theme_support( $theme_support, $value );
    //
    // }

  }

}
