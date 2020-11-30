<?php

function example_custom_post_type() {
  $labels = array(
    'name'            => 'Messages',
    'singular_name'   => 'Message',
    'menu_name'       => 'Messages',
    'name_admin_bar'  => 'Message',
  );
  $args = array(
    'labels'          => $labels,
    'show_ui'         => true,
    'show_in_menu'    => true,
    'capability_type' => 'post',
    'hierarchical'    => false,
    'menu_position'   => 26,
    'supports'        => array( 'title', 'editor')
  );
  register_post_type('example-type', $args);
}

add_action('init', 'example_custom_post_type');
