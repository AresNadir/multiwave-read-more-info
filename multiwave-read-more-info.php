<?php
/*
Plugin Name: Read More Buttons
Description: Read More Buttons For Homepage
Version: 1.1
Author: Ares Ioakimidis
*/

function read_more_shortcode($attr) {

  $sc_atts = shortcode_atts( array(
    'content' => '#',
  ), $attr );

  // Enqueue the styles
  

  // Construct the body of the button
  $viewMoreContent = '
<div class="hiddenMessageShortcode">
  <div class="hiddenMessage_container">
    <p>
    '.$sc_atts['content'].'
    </p>
  </div>
  <div class="hiddenMessage_readMoreBtn">
    <a>
      Read more
    </a>
  </div>
</div>
  ';
  
  return $viewMoreContent;
}

add_shortcode('read-more-btn', 'read_more_shortcode');

wp_enqueue_style('read-more-styles', plugins_url('css/style.css', __FILE__));
wp_enqueue_script( 'read-more-script', plugins_url( 'js/read-more-script.js', __FILE__ ), array(), false, true );
?>
