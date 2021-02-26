<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="header-background">
  <div class="header-box">
    <span class="our-people-button-header-text">Growing Tips</span>
    <a href="https://www.google.com" class="no-style-link">
      <div class="connect-button">
        Connect with Us
      </div>
    </a>
  </div>
</div>
<span class="header-text">Growing Tips</span>


<div class="main-description">
  <div style="width:82%;padding-top:3rem;padding-bottom:3rem;margin:auto;">
    These articles are written by Project Grow gardeners like yourself. Many have appeared in older copies of our newsletter or been written and donated to Project Grow.
    <br><br>
    If you have suggestions or would like to contribute, please contact us at <span style="font-style: italic;">info@projectgrowgardens.org</span>
    <br><br>
    We look forward to hearing from you!
    <br><br>
    <a class="no-style-link" href="https://www.google.com"><span style="font-weight: bold;font-size: 20px;line-height: 23px;color: #53401A;">Click to learn more tips!</span></a>
  </div>
</div>

<span class="header-text">Edibles</span>
<div class="item-container">
  <!--
    <a href="<?php echo get_theme_mod('box-link') ?>" class="no-style-link">
        <div class="item-box"><?php echo get_theme_mod('box-text') ?></div>
    </a>
    -->

  <?php
  require 'inc/section_vars.php';
  // get_example_data is in /inc/template_functions.php
  $data  = get_growing_tips_data($growing_tips_edibles);
  if (!empty($data)) {
  ?>
    <?php
    foreach ($data as $k => $f) {
      // Make sure to use a semicolon; when using php on multiple lines
      $topicId = 'topic' . $k;
      $answerContent = "<div id=\"" . $topicId . "\" class=\"answer-text\">";
    ?>


      <div class="item-box">
        <?php echo $answerContent ?>
        <a class="no-style-link" href="<?php echo $f['link']; ?>">
          <div class="questionbox" <?php echo "data-topic-id=\"" . $k . "\"" ?>>
            <span class="question-text"><?php echo $f['topic'] ?> </span>
          </div>
        </a>
      </div>
</div>
<?php
    }
?>
<?php } ?>


</div>

<span class="header-text"> Ornamentals</span>
<div class="item-container">

  <?php
  require 'inc/section_vars.php';
  // get_example_data is in /inc/template_functions.php
  $data  = get_growing_tips_data($growing_tips_ornamentals);
  if (!empty($data)) {
  ?>
    <?php
    foreach ($data as $k => $f) {
      // Make sure to use a semicolon; when using php on multiple lines
      $topicId = 'topic' . $k;
      $answerContent = "<div id=\"" . $topicId . "\" class=\"answer-text\">";
    ?>

      <div class="item-box">
        <?php echo $answerContent ?>
        <a class="no-style-link" href="<?php echo $f['link']; ?>">

          <div class="questionbox" <?php echo "data-topic-id=\"" . $k . "\"" ?>>
            <span class="question-text"><?php echo $f['topic'] ?> </span>
          </div>

        </a>

      </div>
</div>
<?php
    }
?>
<?php } ?>
</div>

<span class="header-text">Organic Gardening</span>
<div class="item-container">
  <?php
  require 'inc/section_vars.php';
  // get_example_data is in /inc/template_functions.php
  $data  = get_growing_tips_data($growing_tips_organic_gardening);
  if (!empty($data)) {
  ?>
    <?php
    foreach ($data as $k => $f) {
      // Make sure to use a semicolon; when using php on multiple lines
      $topicId = 'topic' . $k;
      $answerContent = "<div id=\"" . $topicId . "\" class=\"answer-text\">";
    ?>
      <div class="item-box">
        <?php echo $answerContent ?>
        <a class="no-style-link" href="<?php echo $f['link']; ?>">

          <div class="questionbox" <?php echo "data-topic-id=\"" . $k . "\"" ?>>
            <span class="question-text"><?php echo $f['topic'] ?> </span>
          </div>

        </a>
      </div>
</div>
<?php
    }
?>
<?php } ?>
</div>

<span class="header-text">Seed Saving and Starting</span>
<div class="item-container">
  <?php
  require 'inc/section_vars.php';
  // get_example_data is in /inc/template_functions.php
  $data  = get_growing_tips_data($growing_tips_seed_saving_starting);
  if (!empty($data)) {
  ?>
    <?php
    foreach ($data as $k => $f) {
      // Make sure to use a semicolon; when using php on multiple lines
      $topicId = 'topic' . $k;
      $answerContent = "<div id=\"" . $topicId . "\" class=\"answer-text\">";
    ?>
      <div class="item-box">
        <?php echo $answerContent ?>
        <a class="no-style-link" href="<?php echo $f['link']; ?>">

          <div class="questionbox" <?php echo "data-topic-id=\"" . $k . "\"" ?>>
            <span class="question-text"><?php echo $f['topic'] ?> </span>
          </div>

        </a>
      </div>
</div>
<?php
    }
?>
<?php } ?>
</div>




<?php get_footer(); ?>