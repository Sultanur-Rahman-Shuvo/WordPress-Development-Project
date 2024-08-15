<?php
function shuvo_child_theme(){
    wp_enqueue_style("shuvo-child-style", get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','shuvo_child_theme', PHP_INT_MAX);