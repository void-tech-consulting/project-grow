<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';
  require get_template_directory() . '/inc/register-settings.php';

  // add_action('wp_head', 'classes_events_customize');

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

?>

