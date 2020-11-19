<?php
/**
 * Theme Supports
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/


$starter_theme_config = genesis_get_config( 'theme-supports' );

// Sets theme supports based on config options
if( $starter_theme_config ) {

  foreach( $starter_theme_config as $theme_support => $value ) {

    if( false === $value ) :

      remove_theme_support( $theme_support );

    else :

      add_theme_support( $theme_support, $value );

    endif;

  }

}

// Allow and set custom units
if( $starter_theme_config[ 'custom-units' ] ) :

  $units = implode( ', ', $starter_theme_config[ 'custom-units' ] );

  add_theme_support( 'custom-units', $starter_theme_config[ 'custom-units' ] );

endif;
