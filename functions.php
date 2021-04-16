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

function apply_for_plot_customize($wp_customize)
{
  $wp_customize->add_section('apply_for_plot_section', array(
    'title' => 'Apply For Plot'
  ));

  $wp_customize->add_setting('full-plot-fee');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'full-plot-control', array(
    'label' => 'Full Plot Fee',
    'section' => 'apply_for_plot_section',
    'settings' => 'full-plot-fee'
  )));

  $wp_customize->add_setting('half-plot-fee');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'half-plot-control', array(
    'label' => 'Half Plot Fee',
    'section' => 'apply_for_plot_section',
    'settings' => 'half-plot-fee'
  )));
}
add_action('customize_register', 'apply_for_plot_customize');

function growingtips_custom($wp_customize)
{
  $wp_customize->add_section('growingtips-content', array(
    'title' => 'Growing Tips Content'
  ));

  $wp_customize->add_setting('box-text');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'box-text-control', array(
    'label' => 'Tips text',
    'section' => 'growingtips-content',
    'settings' => 'box-text'
  )));

  $wp_customize->add_setting('box-link');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'box-link-control', array(
    'label' => 'Tips link',
    'section' => 'growingtips-content',
    'settings' => 'box-link'
  )));
}

add_action('customize_register', 'growingtips_custom');

function apply_for_plot_form_customize($wp_customize) {
  $wp_customize->add_section('apply_for_plot_form', array(
      'title' => 'Apply for Plot Form'
  ));
  $wp_customize->add_setting('apply_for_plot_form-shortcode');
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'shortcode-control', array(
      'label' => 'Apply for Plot Shortcode',
      'section' => 'apply_for_plot_form',
      'settings' => 'apply_for_plot_form-shortcode'
  )));
}
add_action('customize_register', 'apply_for_plot_form_customize');
?>