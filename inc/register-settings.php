<?php

register_nav_menu( "primary", "Top Navbar" );
function home_customizer($wp_customize) {
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
  $wp_customize->add_control( new WP_Customize_Image_Control( 
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
add_action( 'customize_register', 'home_customizer' );



// Example of how to use a repeatable box
function example_repeatable_customizer($wp_customize) {
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
    ) );

  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          $example_repeater,
          array(
              'label' 		=> esc_html__('Example Q & A Repeater'),
              'description'   => '',
              'section'       => $example_section,
              'live_title_id' => 'question',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 10, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'title'  => array(
                    'title' => esc_html__('Title'),
                    'type'  =>'text',
                  ),
                  'question'  => array(
                      'title' => esc_html__('Question'),
                      'type'  =>'text',
                  ),
                  'answer'  => array(
                      'title' => esc_html__('Answer'),
                      'type'  =>'editor',
                  ),
                  'link'  => array(
                      'title' => esc_html__('Link'),
                      'type'  =>'url',
                  ),
              ),
          )
      )
  );
}
add_action( 'customize_register', 'example_repeatable_customizer' );


function classes_events_customize($wp_customize) {
  $wp_customize->add_section('classes-events-section', array(
    'title' => 'Classes & Events'
  ));
  
  // Start img
  $wp_customize->add_setting('classes-events-img');
  $wp_customize->add_control( new WP_Customize_Cropped_Image_control(
    $wp_customize, 'classes-events-img-control', array(
    'label' => 'Image',
    'section' => 'classes-events-section',
    'settings' => 'classes-events-img',
    'width' => 250,
    'height' => 250
  )));

  //Start Headline
  $wp_customize->add_setting('classes-events-headline', array(
    'default' => 'Headline'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-headline', array(
    'label' => 'Headline', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-headline'
  )));

  // Start body paragraph
  $wp_customize->add_setting('classes-events-paragraph', 
    array('default'=> 'Paragraph'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-paragraph', array(
    'label' => 'Event Details', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-paragraph',
    'type' => 'textarea'
  )));

  // Start Location
  $wp_customize->add_setting('classes-events-location', 
    array('default'=> 'Location'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-location', array(
    'label' => 'Location', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-location',
    'type' => 'textarea'
  )));
  // Start Event Type
  $wp_customize->add_setting('classes-events-event-type', 
    array('default'=> 'Class or Event?'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-event-type', array(
    'label' => 'Event type', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-event-type',
    'type' => 'textarea'
  )));

  // Start Cost
  $wp_customize->add_setting('classes-events-cost', 
    array('default'=> '5.00'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-cost', array(
    'label' => 'Cost', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-cost',
    'type' => 'textarea'
  )));

  // Start Time
  $wp_customize->add_setting('classes-events-time', 
    array('default'=> '00:00AM - 00:00PM'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-time', array(
    'label' => 'Time', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-time',
    'type' => 'textarea'
  )));

  // Start Date
  $wp_customize->add_setting('classes-events-date', 
    array('default'=> 'Jan 01, 2021'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-date', array(
    'label' => 'Date', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-date',
    'type' => 'textarea'
  )));

  // Start Join Link
  $wp_customize->add_setting('classes-events-join-link');
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-join-link', array(
    'label' => 'Link', 
    'section' => 'classes-events-section', 
    'settings' => 'classes-events-join-link',
    'type' => 'dropdown-pages'
  )));
}

add_action('customize_register', 'classes_events_customize');



function repeat_plant_sale($wp_customize) {
  require 'section_vars.php';
  require_once 'controller.php';
  $wp_customize->add_section('plant-sale-section', array(
    'title' => 'Annual Plant Sale',
  ));

  // Customize header at top -not in repeater
  $wp_customize->add_setting('plant-sale-banner', array(
    'default' => 'Annual Sale details here'
  ));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'plant-sale-header-callout', array(
    'label' => 'Sale Description',
    'section' => 'plant-sale-section',
    'settings' => 'plant-sale-banner',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('plant-sale-date-repeater', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          'plant-sale-date-repeater',
          array(
              'label' 		=> esc_html__('Plant Sale Date'),
              'description'   => 'Add these for each day of the sale',
              'section'       => 'plant-sale-section',
              'live_title_id' => 'plant-sale-date',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 7, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'plant-sale-day-of-week' => array(
                    'title' => esc_html__('Day of Week'),
                    'type'  =>'text',
                  ),
                  'plant-sale-date'  => array(
                      'title' => esc_html__('Date'),
                      'type'  =>'text',
                  ),
                  'plant-sale-time'  => array(
                      'title' => esc_html__('Time'),
                      'type'  =>'text',
                  ),
              ),
          )
      )
  );
  // Cost - not repeatable
  $wp_customize->add_setting('plant-sale-cost',
  array('default' => '$3.00 per plant'));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'plant-sale-callout-cost', array(
    'label' => 'Cost',
    'section' => 'plant-sale-section',
    'settings' => 'plant-sale-cost',
    'type' => 'text'
  )));

  // Size - not repeatable
  $wp_customize->add_setting('plant-sale-size',
  array('default' => '3 1/2 inch plot'));
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'plant-sale-callout-size', array(
    'label' => 'Size',
    'section' => 'plant-sale-section',
    'settings' => 'plant-sale-size',
    'type' => 'text'
  )));

  // New items - repeatable
  $wp_customize->add_setting('plant-sale-new-items-repeater', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          'plant-sale-new-items-repeater',
          array(
              'label' 		=> esc_html__('New Items'),
              'description'   => '',
              'section'       => 'plant-sale-section',
              'live_title_id' => 'ps-new-item-name',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 50, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'ps-new-item-name' => array(
                    'title' => esc_html__('Item Name'),
                    'type'  =>'text',
                  ),
                  'ps-new-item-category'  => array(
                      'title' => esc_html__('Category Title'),
                      'type'  =>'checkbox',
                  ),
              ),
          )
      )
  );

  // Discont items - repeatable
  $wp_customize->add_setting('plant-sale-discont-items-repeater', array(
    'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          'plant-sale-discont-items-repeater',
          array(
              'label' 		=> esc_html__('Discontinued Items'),
              'description'   => '',
              'section'       => 'plant-sale-section',
              'live_title_id' => 'ps-discont-item-name',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 50, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
              'fields'    => array(
                  'ps-discont-item-name' => array(
                    'title' => esc_html__('Item Name'),
                    'type'  =>'text',
                  ),
                  'ps-discont-item-category'  => array(
                      'title' => esc_html__('Category Title'),
                      'type'  =>'checkbox',
                  ),
              ),
          )
      )
  );
}
add_action('customize_register', 'repeat_plant_sale');

  // // New item category
  // $wp_customize->add_setting('psi-new-category',
  // array('default' => 'Peppers'));
  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'psi-callout-new-category', array(
  //   'label' => 'New Item (Cateogry)',
  //   'section' => 'plant-sale-section',
  //   'settings' => 'psi-new-category',
  //   'type' => 'text'
  // )));

  // // New item plant
  // $wp_customize->add_setting('psi-new-plant',
  // array('default' => 'Czech Black'));
  // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'psi-callout-new-plant', array(
  //   'label' => 'New Item (Plant)',
  //   'section' => 'plant-sale-section',
  //   'settings' => 'psi-new-plant',
  //   'type' => 'text'
  // )));

  //   // Discontinued item category
  //   $wp_customize->add_setting('psi-discont-category',
  //   array('default' => 'Tomatoes'));
  //   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'psi-callout-discont-category', array(
  //     'label' => 'Discontinued Item (Cateogry)',
  //     'section' => 'plant-sale-section',
  //     'settings' => 'psi-discont-category',
  //     'type' => 'text'
  //   )));
  
  //   // Discontinued item plant
  //   $wp_customize->add_setting('psi-discont-plant',
  //   array('default' => 'German Red Strawberry'));
  //   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'psi-callout-discont-plant', array(
  //     'label' => 'Discontinued Item (Plant)',
  //     'section' => 'plant-sale-section',
  //     'settings' => 'psi-discont-plant',
  //     'type' => 'text'
  //   )));

?>