<?php
  // If a feature image is set, get the id, so it can be injected as a css background property
  
  if( is_home() && get_option('page_for_posts') ) {
    $blog_page_id = get_option('page_for_posts');
    if ( has_post_thumbnail( $blog_page_id ) ) {
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $blog_page_id ), 'single-post-thumbnail' );
      $image = $image[0];
      echo '<div class="hero-image" id="heroImage" role="banner" style="background-image: url(\'' . $image .  '\')" ></div>';
    }
  } 
  elseif ( has_post_thumbnail( $post->ID ) ) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $image = $image[0];
    echo '<div class="hero-image" id="heroImage" role="banner" style="background-image: url(\'' . $image .  '\')" ></div>';
  }
?>