<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="banner">
    <div class="banner-text">
        <div class="banner-head">
            Welcome to Project Grow
        </div>
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
        <div class="event-title">Seed Share</div>
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
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('home1-upevents-image')) ?>" alt="event image not fount" class="event-img">
    </div>
</div> <!-- end events section -->

<div class="get-started">
    <div class="process-step">
        <img src="./plant.jpg" alt="step image not found" class="step-img">
        <div class="step-text">
            Choose the type of plot you're interested in
        </div>
        <a href="" class="step-link">Check Rental Info</a>
    </div>

    <div class="process-step">
        <div class="get-started-header">
            How to Get Started
        </div>
        <img src="./location.jpg" alt="step image not found">
        <div class="step-text">
            Check out which site will be home to your garden
        </div>
        <a href="" class="step-link">View Garden Sites</a>
    </div>
    <div class="process-step">
        <img src="./apply.jpg" alt="step image not found" class="step-img">
        <div class="step-text">
            Apply for the plot!
        </div>
        <a href="" class="step-link">Apply</a>

    </div>
</div> <!-- end get-started section -->

<div class="news">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('home1-news-image')) ?>" alt="news img not found" class="news-img">
    <div class="news-text">
        <div class="latest-news">
            Latest News
        </div>
        <div class="news-head">
            Tomato Tasting
        </div>
        You will be amazed by the wide range of flavors, textures, colors, sizes and shapes. We guarantee that you will find that special tomato you will want to grow next year! Most of the tomatoes offered at the tasting are also offered at our plant sale, but we usually also have a few new varieties we are trying out for next year . . .
        <div class="interested">
            Interested in More News From Us?<br>
            Sign Up For Our Newsletter!
        </div>

        <form action="">
            <div class="input-fields">
                <input type="text" id="fname" name="fname" placeholder="First Name">
                <input type="text" id="email" name="email" placeholder="Email Address">
            </div>
            <input type="submit" id="signup" name="signup" value="Sign Up">
        </form>
    </div>

</div>



<?php get_footer(); ?>