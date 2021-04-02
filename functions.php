<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';
  require get_template_directory() . '/inc/register-settings.php';
  require get_template_directory() . '/inc/customizer.php';
  require get_template_directory() . '/inc/template_functions.php';
?>

<?php
//adding images for home1
function home1_image_placement($wp_customize)
{
  $wp_customize->add_section('home1-images', array(
    'title' => 'Home Page Images'
  ));

  //upcoming events image
  $wp_customize->add_setting('home1-upevents-image');
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'home1-upevents-control', array(
    'label' => 'Upcoming Events Image',
    'section' => 'home1-images',
    'settings' => 'home1-upevents-image',
    'width' => 610,
    'height' => 407
  )));

  //latest news image
  $wp_customize->add_setting('home1-news-image');
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'home1-newsimg-control', array(
    'label' => 'Latest News Image',
    'section' => 'home1-images',
    'settings' => 'home1-news-image',
    'width' => 431,
    'height' => 613
  )));
}

add_action('customize_register', 'home1_image_placement');


//customizability for Our People page
function ourpeople_customize($wp_customize)
{
  $wp_customize->add_section('ourpeople-content', array(
    'title' => 'Our People Content'
  ));

  $wp_customize->add_setting('person-image');
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'staffimg-control', array(
    'label' => 'Staff Image',
    'section' => 'ourpeople-content',
    'settings' => 'person-image',
    'width' => 210,
    'height' => 234
  )));

  $wp_customize->add_setting('person-name');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'staffname-control', array(
    'label' => 'Staff Name',
    'section' => 'ourpeople-content',
    'settings' => 'person-name'
  )));

  $wp_customize->add_setting('person-title');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stafftitle-control', array(
    'label' => 'Staff Title',
    'section' => 'ourpeople-content',
    'settings' => 'person-title'
  )));
}

add_action('customize_register', 'ourpeople_customize');


// Customize the Garden Sites page
// function garden_sites_customize($wp_customize) {
//   $wp_customize->add_section('garden-sites-content', array(
//       'title' => 'Garden Sites Content'
//   ));

//   // Number of sites
//   $wp_customize->add_setting('garden-sites-number');
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gs-number', array(
//       'label' => 'Site Number',
//       'section' => 'garden-sites-content',
//       'settings' => 'garden-sites-number'
//   )));

//   // Site name
//   $wp_customize->add_setting('garden-sites-name');
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gs-name', array(
//       'label' => 'Site Name',
//       'section' => 'garden-sites-content',
//       'settings' => 'garden-sites-name'
//   )));

//   // Plot Capacity
//   $wp_customize->add_setting('garden-sites-capacity');
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gs-capacity', array(
//       'label' => 'Plot Capacity',
//       'section' => 'garden-sites-content',
//       'settings' => 'garden-sites-capacity'
//   )));

//   // Location
//   $wp_customize->add_setting('garden-sites-location');
//   $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gs-location', array(
//       'label' => 'Location',
//       'section' => 'garden-sites-content',
//       'settings' => 'garden-sites-location'
//   )));

//   // Site Notes
//   // $wp_customize->add_setting('garden-sites-notes');
//   // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'gs-notes', array(
//   //     'label' => 'Site Notes',
//   //     'section' => 'garden-sites-content',
//   //     'settings' => 'garden-sites-notes'
//   // )));
// }
// add_action('customize_register', 'garden_sites_customize');

?>