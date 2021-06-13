<?php
// Example of how to use a repeatable box
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
      $master_composter_hg,
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
      $master_composter_rps,
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
            'title' => esc_html__('Page Description'),
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
      $master_composter_pa,
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
      $master_composter_contacts,
      array(
        'label'     => esc_html__('Contacts'),
        'description'   => '',
        'section'       => $master_composter_section,
        'live_title_id' => 'contact_name',
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
            'title' => esc_html__('Contact Email'),
            'type'  => 'text',
          ),
        ),
      )
    )
  );
}
add_action('customize_register', 'master_composter_customizer');


function classes_events_customize($wp_customize) {
    require 'section_vars.php';
    require_once 'controller.php';

    $wp_customize->add_section($classes_events_section, array(
      'title' => 'Classes & Events'
    ));

    $wp_customize->add_setting(
        $classes_events_setting,
        array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
        )
      );
  
    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $classes_events_setting,
            array(
                'label' 		=> esc_html__('Classes & Events Repeater'),
                'description'   => '',
                'section'       => $classes_events_section,
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
  add_action('customize_register', 'classes_events_customize');
  // function donate_repeatable_customizer($wp_customize) {
  //   require 'section_vars.php';  
  //   require_once 'controller.php';
    
  //   $wp_customize->add_section($donate_section, array(
  //     'title' => 'Donate Page',
  //   ));
    
  //   $wp_customize->add_setting(
  //     $donate_season_repeater,
  
    // // Start img
    // $wp_customize->add_setting('classes-events-img');
    // $wp_customize->add_control( new WP_Customize_Cropped_Image_control(
    //   $wp_customize, 'classes-events-img-control', array(
    //   'label' => 'Image',
    //   'section' => 'classes-events-section',
    //   'settings' => 'classes-events-img',
    //   'width' => 250,
    //   'height' => 250
    // )));

    // //Start Headline
    // $wp_customize->add_setting('classes-events-headline', array(
    //   'default' => 'Headline'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-headline', array(
    //   'label' => 'Headline', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-headline'
    // )));

    // // Start body paragraph
    // $wp_customize->add_setting('classes-events-paragraph', 
    //   array('default'=> 'Paragraph'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-paragraph', array(
    //   'label' => 'Event Details', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-paragraph',
    //   'type' => 'textarea'
    // )));

    // // Start Location
    // $wp_customize->add_setting('classes-events-location', 
    //   array('default'=> 'Location'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-location', array(
    //   'label' => 'Location', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-location',
    //   'type' => 'textarea'
    // )));
    // // Start Event Type
    // $wp_customize->add_setting('classes-events-event-type', 
    //   array('default'=> 'Class or Event?'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-event-type', array(
    //   'label' => 'Event type', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-event-type',
    //   'type' => 'textarea'
    // )));

    // // Start Cost
    // $wp_customize->add_setting('classes-events-cost', 
    //   array('default'=> '5.00'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-cost', array(
    //   'label' => 'Cost', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-cost',
    //   'type' => 'textarea'
    // )));

    // // Start Time
    // $wp_customize->add_setting('classes-events-time', 
    //   array('default'=> '00:00AM - 00:00PM'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-time', array(
    //   'label' => 'Time', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-time',
    //   'type' => 'textarea'
    // )));

    // // Start Date
    // $wp_customize->add_setting('classes-events-date', 
    //   array('default'=> 'Jan 01, 2021'
    // ));
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-date', array(
    //   'label' => 'Date', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-date',
    //   'type' => 'textarea'
    // )));

    // // Start Join Link
    // $wp_customize->add_setting('classes-events-join-link');
    // $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'classes-events-callout-join-link', array(
    //   'label' => 'Link', 
    //   'section' => 'classes-events-section', 
    //   'settings' => 'classes-events-join-link',
    //   'type' => 'dropdown-pages'
    // )));
// }
// add_action( 'customize_register', 'donate_repeatable_customizer' );


function garden_sites_repeater($wp_customize) {
  require 'section_vars.php';
  require_once 'controller.php';

  $wp_customize->add_section('garden-sites-section', array(
      'title' => 'Garden Sites Repeater',
  ));

  $wp_customize->add_setting('garden-sites-repeater',
      array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
      ) );
  
    $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $donate_season_repeater,
            array(
                'label' 		=> esc_html__('Upcoming Season Wishlist'),
                'description'   => '',
                'section'       => $donate_section,
                'live_title_id' => 'item',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => 30, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                'fields'    => array(
                    'item'  => array(
                        'title' => esc_html__('Item'),
                        'type'  =>'text',
                    ),
                ),
            )
        )
    );

    $wp_customize->add_setting(
        $donate_longterm_repeater,
        array(
            'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
            'transport' => 'refresh',
        ) );
    
      $wp_customize->add_control(
          new Onepress_Customize_Repeatable_Control(
              $wp_customize,
              $donate_longterm_repeater,
              array(
                  'label' 		=> esc_html__('Long Term Wishlist'),
                  'description'   => '',
                  'section'       => $donate_section,
                  'live_title_id' => 'item',
                  'title_format'  => esc_html__('[live_title]'), // [live_title]
                  'max_item'      => 30, // Maximum item can add
                  'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                  'fields'    => array(
                      'item'  => array(
                          'title' => esc_html__('Item'),
                          'type'  =>'text',
                      ),
                  ),
              )
          )
      );

    $wp_customize->add_setting(
        $donate_landowners_repeater,
        array(
            'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
            'transport' => 'refresh',
        ) );
    
      $wp_customize->add_control(
          new Onepress_Customize_Repeatable_Control(
              $wp_customize,
              $donate_landowners_repeater,
              array(
                  'label' 		=> esc_html__('List of Landowners'),
                  'description'   => '',
                  'section'       => $donate_section,
                  'live_title_id' => 'item',
                  'title_format'  => esc_html__('[live_title]'), // [live_title]
                  'max_item'      => 30, // Maximum item can add
                  'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                  'fields'    => array(
                      'item'  => array(
                          'title' => esc_html__('Landowner'),
                          'type'  =>'text',
                      ),
                  ),
              )
          )
      );


  $wp_customize->add_control(
      new Onepress_Customize_Repeatable_Control(
          $wp_customize,
          'garden-sites-repeater',
          array(
              'label' 		=> esc_html__('Garden Sites Repeater'),
              'description'   => '',
              'section'       => 'garden-sites-section',
              'live_title_id' => 'Site_Name',
              'title_format'  => esc_html__('[live_title]'), // [live_title]
              'max_item'      => 100, // Maximum item can add
              'limited_msg' 	=> wp_kses_post( __( 'Max sites added' ) ),
              'fields'    => array(
                  'Site_Number'  => array(
                      'title' => esc_html__('Site Number'),
                      'type'  =>'text',
                  ),
                  'Site_Name'  => array(
                      'title' => esc_html__('Site Name'),
                      'type'  =>'text',
                  ),
                  'Plot_Capacity'  => array(
                      'title' => esc_html__('Plot Capacity'),
                      'type'  =>'textarea',
                  ),
                  'Location'  => array(
                      'title' => esc_html__('Location'),
                      'type'  =>'text',
                  ),
                  'Soil_Checkbox'  => array(
                      'title' => esc_html__('Toggle Soil Conditions'),
                      'type'  =>'checkbox',
                      'default' => '1',
                  ),
                  'Soil_Conditions'  => array(
                      'title' => esc_html__('Soil Conditions'),
                      'type'  => 'text',
                  ),
                  'Access_Checkbox'  => array(
                      'title' => esc_html__('Toggle Accessibility'),
                      'type'  =>'checkbox',
                      'default' => '1',
                  ),
                  'Accessibility'  => array(
                      'title' => esc_html__('Accessibility'),
                      'type'  =>'text',
                  ),
                  'Special_Checkbox'  => array(
                      'title' => esc_html__('Toggle Special Conditions'),
                      'type'  =>'checkbox',
                      'default' => '1',
                  ),
                  'Special_Conditions'  => array(
                      'title' => esc_html__('Special Conditions'),
                      'type'  =>'text',
                  ),
              ),
          )
      )
  );
}
add_action( 'customize_register', 'garden_sites_repeater' );


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
?>
