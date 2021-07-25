<?php
    get_header();
    require 'inc/section_vars.php';
    $header_args = array(
        "img_src" => get_theme_mod($growing_tips_sub_head_img, "/images/header-images/growing-tips-header-img.png"),
        "page_title" => get_theme_mod($growing_tips_sub_head_title, "Growing Tips"),
        "button_text" => get_theme_mod($growing_tips_sub_head_button_text, "Connect with Us"), 
        "page_slug" => get_theme_mod($growing_tips_sub_head_slug, "contact")
        );
    get_template_part('partials/content', 'page-sub-header', $header_args);
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">



<div class="main-description">
  <div class="main-desc-inside">
    These articles are written by Project Grow gardeners like yourself. Many have appeared in older copies of our newsletter or been written and donated to Project Grow.
    <br><br>
    If you have suggestions or would like to contribute, please contact us at <span style="font-style: italic;">info@projectgrowgardens.org</span>
    <br><br>
    We look forward to hearing from you!
    <br><br>
    <span class="bold-brown-text">Click the boxes below to learn more tips!</span>
  </div>
</div>
  <?php
  require 'inc/section_vars.php';
  $edible_args = array(
    "title" => "Edibles",
    "data" => get_growing_tips_data($growing_tips_edibles)
  );
  get_template_part('partials/content', 'growing-tips-boxes', $edible_args);

  $ornamental_args = array(
    "title" => "Ornamentals",
    "data" => get_growing_tips_data($growing_tips_ornamentals)
  );
  get_template_part('partials/content', 'growing-tips-boxes', $ornamental_args);

  $organic_args = array(
    "title" => "Organic Gardening",
    "data" => get_growing_tips_data($growing_tips_organic_gardening)
  );
  get_template_part('partials/content', 'growing-tips-boxes', $organic_args);


  // get_growing_tips_data is in /inc/template_functions.php
  $seed_args = array(
    "title" => "Seed Saving and Starting",
    "data" => get_growing_tips_data($growing_tips_seed_saving_starting)
  );
  get_template_part('partials/content', 'growing-tips-boxes', $seed_args);
?>

<?php get_footer(); ?>