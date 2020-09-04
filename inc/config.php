<?php
/**
 * Config
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

function starter_theme_config() {

  return [
    'fonts-url'         => null,
    'acf-options-page'  => true,
    'image-sizes'       => [
      [
        'name'    => 'medium-square',
        'width'   => '300',
        'height'  => '300',
        'crop'    => true
      ],
    ],
    'responsive-menus'             => [
      'script'  => [
        'menuClasses' => [
          'others'  => [ '.nav-primary' ],
        ]
      ],
      'extras'  => [
        'media_query_width' => '960px',
      ],
    ],
    'reduce-secondary-nav'        => true,
    'theme-supports'    => [
      'responsive-embeds'           => true,
      'align-wide'                  => true,
      'disable-custom-colors'       => true,
      'genesis-responsive-viewport' => true,
      'html5'                       => [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ],
      'genesis-structural-wraps'    => [ 'header', 'menu-secondary', 'site-inner', 'footer-widgets', 'footer' ],
      'genesis-accessibility'       => [ '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links', 'screen-reader-text' ],
      'genesis-menus'               => [
        'primary'   => 'Primary Menu',
        'secondary' => 'Secondary Menu',
      ],
      'editor-font-sizes'           => [
        [
          'name'        => __( 'Small', 'starter' ),
          'shortName'   => __( 'S', 'starter' ),
          'size'        => 14,
          'slug'        => 'small',
        ],
        [
          'name'        => __( 'Normal', 'starter' ),
          'shortName'   => __( 'M', 'starter' ),
          'size'        => 20,
          'slug'        => 'normal',
        ],
        [
          'name'        => __( 'Large', 'starter' ),
          'shortName'   => __( 'L', 'starter' ),
          'size'        => 24,
          'slug'        => 'large',
        ],
      ],
      'editor-color-palette'        => [
        [
          'name'  => __( 'White', 'starter' ),
          'slug'  => 'white',
          'color' => '#ffffff',
        ],
        [
          'name'  => __( 'Black', 'starter' ),
          'slug'  => 'black',
          'color' => '#000000',
        ],
      ]
    ],
    'remove-sidebars'             => [ 'sidebar', 'sidebar-alt', 'header-right', 'after-entry' ],
    'genesis-footer-widgets'      => 3,
    'remove-layouts'              => [ 'conent-sidebar-sidebar', 'sidebar-content-sidebar', 'sidebar-sidebar-content', 'sidebar-content', 'content-sidebar' ],
    'force-full-width'            => true,
  ];

}
