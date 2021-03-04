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

function our_people_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($our_people_section, array(
    'title' => 'Our People',
  ));

  $wp_customize->add_setting(
    $our_people_members,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $our_people_members,
      array(
        'label'     => esc_html__('Our People'),
        'description'   => '',
        'section'       => $our_people_section,
        'live_title_id' => 'member_name',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 50, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'member_image' => array(
            'title' => esc_html__('Member Image'),
            'type'  => 'media',
          ),
          'member_name'  => array(
            'title' => esc_html__('Member Name'),
            'type'  => 'text',
          ),
          'member_title'  => array(
            'title' => esc_html__('Member Title'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'our_people_customizer');


// Example of how to use a repeatable box
function example_repeatable_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($example_section, array(
    'title' => 'Example Home Repeaters',
  ));

  $wp_customize->add_setting(
    $example_repeater,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $example_repeater,
      array(
        'label'     => esc_html__('Example Q & A Repeater'),
        'description'   => '',
        'section'       => $example_section,
        'live_title_id' => 'question',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 10, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'question'  => array(
            'title' => esc_html__('Question'),
            'type'  => 'text',
          ),
          'answer'  => array(
            'title' => esc_html__('Answer'),
            'type'  => 'editor',
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
add_action('customize_register', 'example_repeatable_customizer');

function master_composter_customizer($wp_customize)
{
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section($master_composter_section, array(
    'title' => 'Master Composter Program',
  ));

  $wp_customize->add_setting(
    $master_composter_hg,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $master_composoter_hg,
      array(
        'label'     => esc_html__('Handouts and Guidelines'),
        'description'   => '',
        'section'       => $master_composter_section,
        'live_title_id' => 'hgpage_title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 50, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'hgpage_title'  => array(
            'title' => esc_html__('Page Title'),
            'type'  => 'text',
          ),
          'hgpage_description'  => array(
            'title' => esc_html__('Page Title'),
            'type'  => 'text',
          ),
          'hgpage_link'  => array(
            'title' => esc_html__('Page Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );

  $wp_customize->add_setting(
    $master_composter_rps,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $master_composoter_rps,
      array(
        'label'     => esc_html__('CEC Reports, Presentations, and Special Projects'),
        'description'   => '',
        'section'       => $master_composter_section,
        'live_title_id' => 'rpspage_title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 50, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'rpspage_title'  => array(
            'title' => esc_html__('Page Title'),
            'type'  => 'text',
          ),
          'rpspage_description'  => array(
            'title' => esc_html__('Page Title'),
            'type'  => 'text',
          ),
          'rpspage_link'  => array(
            'title' => esc_html__('Page Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );

  $wp_customize->add_setting(
    $master_composter_pa,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $master_composoter_pa,
      array(
        'label'     => esc_html__('Community Partners and Advisors'),
        'description'   => '',
        'section'       => $master_composter_section,
        'live_title_id' => 'papage_title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 50, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'pa_name'  => array(
            'title' => esc_html__('Partner/Advisor Name'),
            'type'  => 'text',
          ),
          'pa_link'  => array(
            'title' => esc_html__('Partner/Advisor Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );

  $wp_customize->add_setting(
    $master_composter_contacts,
    array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $master_composoter_contacts,
      array(
        'label'     => esc_html__('Contacts'),
        'description'   => '',
        'section'       => $master_composter_section,
        'live_title_id' => 'contact_title',
        'title_format'  => esc_html__('[live_title]'), // [live_title]
        'max_item'      => 50, // Maximum item can add
        'limited_msg'   => wp_kses_post(__('Max items added')),
        'fields'    => array(
          'contact_name'  => array(
            'title' => esc_html__('Contact Name'),
            'type'  => 'text',
          ),
          'contact_title'  => array(
            'title' => esc_html__('Contact Title'),
            'type'  => 'text',
          ),
          'contact_email'  => array(
            'title' => esc_html__('Contact Link'),
            'type'  => 'url',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'master_composter_customizer');
?>