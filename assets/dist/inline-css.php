<?php
/**
 * Inline CSS
 *
 * @package      Starter Theme
 * @author       P&P Creative
 * @since        1.0.0
**/


add_action( 'wp_enqueue_scripts', 'starter_theme_custom_gutenberg_css' );
function starter_theme_custom_gutenberg_css() {

  $css = '';
  $colors = $starter_config[ 'theme-supports' ][ 'editor-color-palette' ];

  foreach( $colors as $color ) {

    $css .= <<<CSS

    .has-{$color['slug']}-color {
      color: {$color['color']};
    }

CSS;

  }

  wp_add_inline_style( 'starter-theme-inline-css', $css );

}
