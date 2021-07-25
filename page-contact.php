<?php 
  get_header(); 
?>

<div class="header-img">
    <div class="center-header-box">
        <h1 id="header-title">Contact Us</h1>
    </div>
</div>

<div class="contact-content">
    <div class="content-row">
        <div class="col-60">
            <h2 id="contact-form-heading">Contact Form</h2>
            <?php 
            $shortcode = get_theme_mod('contact-form-shortcode');
            echo do_shortcode($shortcode);
            ?>
        </div>
        <div class="col-40">
            <p class="contact-title">Mailing Address</p>
            <p class="contact-details">P.O. Box 130293, Ann Arbor, MI 48113</p>
            <br>
            <p class="contact-title">Phone Number</p>
            <p class="contact-details">(734) 996-3169</p>
            <br>
            <p class="contact-title">Want to Volunteer?</p>
            <p class="contact-details">Email: info@projectgrowgardens.org</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
