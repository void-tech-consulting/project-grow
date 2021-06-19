<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="growing-tips-header-background">
  <div class="header-box">
    <span class="our-people-button-header-text">Growing Tips</span>
      <div class="connect-button">
        Connect with Us
      </div>
  </div>
</div>
<div class="growing-tips-header-text">Growing Tips</div>


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