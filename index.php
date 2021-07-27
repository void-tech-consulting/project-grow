<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="banner">
    <div class="banner-text">
        <h1 class="banner-head">
            Welcome to Project Grow
        </h1>
        Project Grow Community Gardens provides the space, education, and inspiration to make organic gardening accessible to all.
        <br><br>
        Rent a plot at one of our wonderful community garden sites, meet a diverse group of gardeners, and reap the rewards of your hard work with fresh, healthy, and beautiful plants!
        <br>
        <div class="apply-plot">
            Apply for a Plot
        </div>
    </div>
</div> <!-- end banner section -->

<div class="events">
    <div class="event-text">
        <div class="upcoming">Upcoming Events</div>
        <a href="" class="small-link">See More Events</a>
        <br>
        <div class="home-event-title">Seed Share</div>
        Location: Downtown Home & Garden <br>
        Date: 3/21/20 <br>
        Time: 10:00AM - 11:30AM <br><br>
        Did you save more seeds than you could ever use? Did you perhaps go a bit mad at the end-of-year seed sales? Then the Seed Share is for you! Why not see what you can exchange...
        <br><br>
        <div class="event-links">
            <div class="join">Join</div>
            <a href="" class="small-link">Learn More --></a>
        </div>

    </div>
    <div class="event-img-container">
        <?php if (get_theme_mod('home-upevents-image')) {?> 
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('home-upevents-image' )) ?>" alt="Event Image"  class="event-img">
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home/event-img.png" alt="Event Image" class="event-img">
        <?php }?>
    </div>
</div> <!-- end events section -->


<?php get_template_part('partials/content', 'get-started-section', array('checked' => get_theme_mod('home-season-checkbox'))); ?>

<?php if(get_theme_mod('home-form-shortcode')) { ?>
    <div class="news" id="news">
        <?php if (get_theme_mod('home-news-image')) {?> 
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('home-news-image' )) ?>" alt="news img not found" class="news-img">
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri();?>/images/home/news-img.jpg" alt="news img not found" class="news-img">
        <?php }?>
        
        <div class="home-form-right">
            <?php echo do_shortcode(get_theme_mod('home-form-shortcode')) ?>
        </div>
    </div>
<?php } ?>



<?php get_footer(); ?>