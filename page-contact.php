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
        <!-- <div class="col-60">
            <form class="contact-form" method="post">
                <div class="row">
                    <div class="col-50">
                        <label for="first-name">First Name</label>
                        <input id="first-name" name="first-name" type="text" required>
                    </div>

                    <div class="col-45">
                        <label for="last-name">Last Name</label>
                        <input id="last-name" name="last-name" type="text" required>
                    </div> 
                </div>

                <div class="col-100">
                    <label for="from">From</label>
                    <input id="from" name="from" type="text" required>

                    <label for="to">To</label>
                    <input id="to" name="to" type="text" value="info@projectgrowgardens.org" readonly>

                    <label for="subject">Subject</label>
                    <input id="subject" name="subject" type="text" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" required></textarea>

                    <div class="button-right">
                        <button id="contact-submit-btn" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div> -->
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
            <p class="contact-details">Email: <a href="mailto:info@projectgrowgardens.org">info@projectgrowgardens.org</a></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
