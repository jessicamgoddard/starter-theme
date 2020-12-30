<?php
/**
 * Custom
 *
 * @package      StarterTheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Adds hero image to page and posts
add_action( 'genesis_entry_header', 'starter_theme_add_page_post_hero_image', 5 );
function starter_theme_add_page_post_hero_image() {

  if( ( is_page() || is_singular() ) && has_post_thumbnail() ) :
    ?>
    <div class="page-hero">
      <div class="page-hero__image" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">

        <?php if( is_singular() && get_the_category() ) :?>
          <div class="page-hero__meta">
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

add_action( 'genesis_entry_header', 'starter_theme_add_header_wrap_close', 10 );
function starter_theme_add_header_wrap_close() {

  if( is_page() || is_singular() ) :
    echo '</div>';
  endif;

}
