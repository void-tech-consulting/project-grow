<?php
// Example of how to use a repeatable box
register_nav_menu("primary", "Top Navbar");



  function example_repeatable_customizer($wp_customize) {
    require 'section_vars.php';  
    require_once 'controller.php';
    
    $wp_customize->add_section($example_section, array(
      'title' => 'Classes & Events Repeater',
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
                'label' 		=> esc_html__('Classes & Events Repeater'),
                'description'   => '',
                'section'       => $example_section,
                'live_title_id' => 'question',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => 10, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                'fields'    => array(
                    'Image'  => array(
                        'title' => esc_html__('Image'),
                        'type'  =>'media',
                    ),
                    'Headline'  => array(
                        'title' => esc_html__('Headline'),
                        'type'  =>'text',
                    ),
                    'Location'  => array(
                        'title' => esc_html__('Location'),
                        'type'  =>'text',
                    ),
                    'Event_Type'  => array(
                        'title' => esc_html__('Event Type'),
                        'type'  =>'text',
                    ),
                    'Event_Date'  => array(
                        'title' => esc_html__('Event Date'),
                        'type'  =>'text',
                    ),
                    'Paragraph'  => array(
                        'title' => esc_html__('Description'),
                        'type'  =>'textarea',
                    ),
                    'Cost'  => array(
                        'title' => esc_html__('Cost'),
                        'type'  =>'text',
                    ),
                    'Time'  => array(
                        'title' => esc_html__('00:00XX-00:00XX'),
                        'type'  =>'text',
                    ),
                    'Link'  => array(
                        'title' => esc_html__('Link'),
                        'type'  =>'url',
                    ),
                ),
            )
        )
    );
  }
  add_action( 'customize_register', 'example_repeatable_customizer' );
?>
