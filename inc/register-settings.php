<?php

register_nav_menu("primary", "Top Navbar");
function home_customizer($wp_customize)
{
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Videos and News',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img);
  $wp_customize->add_control(new WP_Customize_Image_Control(
    $wp_customize,
    $home_top_img,
    array(
      'label' => 'Top Image',
      'section' => $home_section
    )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc);
  $wp_customize->add_control($home_top_desc, array(
    'label' => 'Top Description',
    'section' => $home_section,
    'type' => 'textarea'
  ));
}
add_action('customize_register', 'home_customizer');

// Example of how to use a repeatable box
function growing_tips_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($growing_tips_section, array(
    'title' => 'Growing Tips',
  ));

  $wp_customize->add_setting(
    $growing_tips_edibles,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_setting(
    $growing_tips_ornamentals,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_setting(
    $growing_tips_organic_gardening,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_setting(
    $growing_tips_seed_saving_starting,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );



  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $growing_tips_edibles,
      array(
        'label'     => esc_html__('Growing Tips Edibles'),
        'description'   => '',
        'section'       => $growing_tips_section,
        'live_title_id' => 'topic',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'topic'  => array(
            'title' => esc_html__('Topic'),
            'type'  => 'text',
          ),
          'link'  => array(
            'title' => esc_html__('Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $growing_tips_ornamentals,
      array(
        'label'     => esc_html__('Growing Tips Ornamentals'),
        'description'   => '',
        'section'       => $growing_tips_section,
        'live_title_id' => 'topic',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'topic'  => array(
            'title' => esc_html__('Topic'),
            'type'  => 'text',
          ),
          'link'  => array(
            'title' => esc_html__('Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $growing_tips_organic_gardening,
      array(
        'label'     => esc_html__('Growing Tips Ornamentals'),
        'description'   => '',
        'section'       => $growing_tips_section,
        'live_title_id' => 'topic',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'topic'  => array(
            'title' => esc_html__('Topic'),
            'type'  => 'text',
          ),
          'link'  => array(
            'title' => esc_html__('Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $growing_tips_seed_saving_starting,
      array(
        'label'     => esc_html__('Growing Tips Ornamentals'),
        'description'   => '',
        'section'       => $growing_tips_section,
        'live_title_id' => 'topic',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'topic'  => array(
            'title' => esc_html__('Topic'),
            'type'  => 'text',
          ),
          'link'  => array(
            'title' => esc_html__('Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'growing_tips_customizer');
