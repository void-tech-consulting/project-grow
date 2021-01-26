<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';
  require get_template_directory() . '/inc/register-settings.php';

  // add_action('wp_head', 'classes_events_customize');

  function classes_events_customize($wp_customize) {
    /*Added img just so I could style around it
      Absolutely feel free to change variable names
      I just needed the image to appear on the site*/
    $wp_customize->add_section('classes-events-section', array(
      'title' => 'Classes & Events'
    ));

    
    $wp_customize->add_setting('classes-events-img');

    $wp_customize->add_control( new WP_Customize_Cropped_Image_control(
      $wp_customize, 'classes-events-img-control', array(
      'label' => 'Image',
      'section' => 'classes-events-section',
      'settings' => 'classes-events-img',
      'width' => 750,
      'height' => 750
    )));


    $wp_customize->add_setting('classes-events-headline', 
    array('default'=> 'Example Headline Text'));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-headline', array(
      'label' => 'Headline', 
      'section' => 'classes-events-section', 
      'settings' => 'classes-events-headline'
      )));

    $wp_customize->add_setting('classes-events-paragraph', 
    array('default'=> 'Example Paragraph Text'));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-paragraph', array(
      'label' => 'Text', 
      'section' => 'classes-events-section', 
      'settings' => 'classes-events-paragraph',
      'type' => 'textarea'
      )));

      $wp_customize->add_setting('classes-events-location', 
      array('default'=> 'Example Location Text'));
  
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-location', array(
        'label' => 'Text', 
        'section' => 'classes-events-section', 
        'settings' => 'classes-events-location',
        'type' => 'textarea'
        )));

      $wp_customize->add_setting('classes-events-event-type', 
        array('default'=> 'Example Event Type Text'));
  
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-event-type', array(
        'label' => 'Text', 
        'section' => 'classes-events-section', 
        'settings' => 'classes-events-event-type',
        'type' => 'textarea'
        )));

      $wp_customize->add_setting('classes-events-cost', 
        array('default'=> 'Example Cost Text'));
  
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-cost', array(
        'label' => 'Text', 
        'section' => 'classes-events-section', 
        'settings' => 'classes-events-cost',
        'type' => 'textarea'
        )));

      $wp_customize->add_setting('classes-events-time', 
        array('default'=> '00:00 - 00:00'));
  
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-time', array(
        'label' => 'Text', 
        'section' => 'classes-events-section', 
        'settings' => 'classes-events-time',
        'type' => 'textarea'
        )));

        $wp_customize->add_setting('classes-events-date', 
        array('default'=> 'Month day, year'));
  
      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-date', array(
        'label' => 'Text', 
        'section' => 'classes-events-section', 
        'settings' => 'classes-events-date',
        'type' => 'textarea'
        )));
  }

  add_action('customize_register', 'classes_events_customize');

  // add callout section for section 1

  

?>

