<?php
/**
 * Custom
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Excludes node_modules folder from All-in-One WP Migration plugin
add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'themes/starter-theme/assets/node_modules';
  return $exclude_filters;
});

// Adds hero image to page and posts
add_action( 'genesis_entry_header', 'starter_themeadd_page_post_hero_image', 5 );
function starter_themeadd_page_post_hero_image() {

  if( ( is_page() || is_singular() ) && has_post_thumbnail() ) :
    ?>
    <div class="page-hero">
      <div class="page-hero__image" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">

        <?php if( get_field( 'headline' ) ) : ?>
          <div class="page-hero__headline">
            <p><?= get_field( 'headline' ) ?></p>
          </div>
        <?php endif; ?>

        <?php if( is_singular() && get_the_category() ) :?>
          <div class="page-hero__meta">
            <?= starter_themecategories_with_colors() ?>
          </div>
        <?php endif; ?>

        <?= get_the_post_thumbnail() ?>
      </div>
    </div>
    <?php
  endif;
  if( is_page() || is_singular() ) :
    ?>
    <div class="wrap alignwide">
    <?php
  endif;

}

add_action( 'genesis_entry_header', 'starter_themeadd_header_wrap_close', 10 );
function starter_themeadd_header_wrap_close() {

  if( is_page() || is_singular() ) :
    echo '</div>';
  endif;

}
