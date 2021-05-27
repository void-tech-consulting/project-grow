<?php

function add_scripts()
{
  // Example if you want a js file to run only on a specific page
  if (is_front_page()) {
    // enqueue a front page specific css or js file
  } else if (is_page('example')) {
    wp_enqueue_script(
      "ajax-script",
      get_theme_file_uri("/js/example.js"),
      array('jquery'),
      '1.0.0',
      true
    );
    $title_nonce = wp_create_nonce('title_example');
    // pass data to ajax through the array
    wp_localize_script(
      'ajax-script',
      'my_ajax_obj',
      array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => $title_nonce,
      )
    );
  }
  // Added for guidelines JS
  else if (is_page( 'plot-guidelines' )) {
    wp_enqueue_script(
      "guidelines-dropdown",
      get_theme_file_uri("/js/plot-guidelines.js"),
      true
    );
  }
  else if (is_page( 'garden-sites' )) {
    wp_enqueue_script(
      "search-sort-plots",
      get_theme_file_uri("/js/garden-sites.js"),
      array('jquery'),
      '1.0.0',
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'add_scripts');

function my_ajax_handler__json()
{
  check_ajax_referer('title_example');
  wp_insert_post(array(
    'post_title'  => $_POST['title'],
    'post_type'  => 'example-type',
    'post_content' => $_POST['title'],
    'post_status' => 'pending',
  ));
  // return response json
  $return = array(
    'message'  => 'Saved',
  );
  wp_send_json_success($return, 200);
}
add_action('wp_ajax_nopriv_my_tag_count', 'my_ajax_handler__json');

function add_styles()
{
  wp_enqueue_style("style", get_stylesheet_uri());
  wp_enqueue_style("home", get_theme_file_uri('/css/home.css'));
  wp_enqueue_style("contact", get_theme_file_uri('/css/contact.css'));
  wp_enqueue_style("header", get_theme_file_uri('/css/header.css'));
  wp_enqueue_style("footer", get_theme_file_uri('/css/footer.css'));
  wp_enqueue_style("example", get_theme_file_uri('/css/example.css'));
  wp_enqueue_style("home1", get_theme_file_uri('/css/home1.css'));
  wp_enqueue_style("ourpeople", get_theme_file_uri('/css/ourpeople.css'));
  wp_enqueue_style( "plant-sale-info", get_theme_file_uri('/css/plant-sale-info.css'));
  wp_enqueue_style( "classes-events", get_theme_file_uri('/css/classes-events.css'));
  wp_enqueue_style( "rental-information", get_theme_file_uri('/css/rental-info.css'));
  wp_enqueue_style( "what-we-do", get_theme_file_uri('/css/what-we-do.css'));
  wp_enqueue_style( "garden-sites", get_theme_file_uri('/css/garden-sites.css'));
  wp_enqueue_style("growing-tips", get_theme_file_uri('/css/growing-tips.css'));
  wp_enqueue_style( "individual-plots", get_theme_file_uri('/css/indv-plots.css'));
  wp_enqueue_style("master-composter", get_theme_file_uri('/css/master-composter.css'));
  wp_enqueue_style("apply-for-plot", get_theme_file_uri('/css/apply-for-plot.css'));
  wp_enqueue_style( "plot-guidelines", get_theme_file_uri('/css/plot-guidelines.css'));
}
add_action('wp_enqueue_scripts', 'add_styles');
