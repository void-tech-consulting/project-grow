<?php
require get_template_directory() . '/inc/example-post-type.php';
require get_template_directory() . '/inc/enqueue-scripts.php';
require get_template_directory() . '/inc/register-settings.php';
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
?>