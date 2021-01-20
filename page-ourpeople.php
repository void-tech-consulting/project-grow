<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="header-background">
      <div class="header-box">
        <span class="our-people-button-header-text">Our People</span>
        <a href="https://www.google.com" class="connect-button-link">
          <div class="connect-button">
              Connect with Us
          </div>
        </a>
      </div>
</div>
<span class="header-text">Who Makes Project Grow, Grow?</span>

<div class="person-box">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('person-image')) ?>" alt="" class="person-img">
    <div class="person-name">Calin Sferdean</div>
    <div class="person-title">President</div>
</div>


<?php get_footer(); ?>