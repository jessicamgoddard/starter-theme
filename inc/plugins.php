<?php
/**
 * Custom
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Excludes node_modules folders in All-in-One export
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {

  $exclude_filters[] = 'themes/starter-theme/assets/node_modules';
  $exclude_filters[] = 'plugins/custom-blocks/node_modules';

  return $exclude_filters;

});
