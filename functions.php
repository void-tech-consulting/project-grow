<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';
  require get_template_directory() . '/inc/register-settings.php';

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
  }

  add_action('customize_register', 'classes_events_customize');

?>

