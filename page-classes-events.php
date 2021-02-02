<?php
  get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Classes&Events</title>
</head>
<body>
    <div id="class-header-img">
        <div class="class-center-header-box">
            <h1 id="class-header-title">Classes & Events</h1>
        </div>
    </div>
    <div class="indent main-page title"><b>Classes & Events</b></div>
    <!--Start code for event page-->
    <div class="event-container">
        <div>
            <img id="event-img" src="<?php echo wp_get_attachment_url(
                get_theme_mod('classes-events-img')) ?>">
        </div>
        <div class="right-side-content">
            <div class="event-details">
                <div class="event-what-where">
                    <div class="event-title">
                        <!-- used to be "Seed Share" heading  -->
                        <b><?php echo get_theme_mod('classes-events-headline')?></b>
                    </div>
                    <div id="event-where">
                        <!-- used to be <b>Downtown Home and Garden</b> -->
                        <b><?php echo get_theme_mod('classes-events-location')?></b>
                        
                    </div>
                    <div id="class-or-event">
                        <!-- Used to be <u>Event</u> -->
                        <u><?php echo get_theme_mod('classes-events-event-type')?></u>
                    </div>
                </div>
                <div class="event-when">
                    <div class="event-date">
                        <!-- March 21, 2020 -->
                        <?php echo get_theme_mod('classes-events-date')?>
                    </div>
                    <div class="event-time">
                        <!-- 10:00AM - 11:30AM -->
                        <?php echo get_theme_mod('classes-events-time')?>
                    </div>
                </div>
            </div>
            <div class="event-description">
                <?php echo wpautop(get_theme_mod('classes-events-paragraph'))?>
                <!-- <p>Did you save more seeds than you could ever use?
                    Did you perhaps go a bit mad at the end-of-year
                    seed sales? Then the Seed Share is for you! Why
                    not see what you can exchange with other gardeners?
                    Who knows, perhaps you'll find seeds for that
                    delicious corn variety you couldn't buy enough of
                    at the farmer's market! Please do not park in the
                    Downtown Home and Garden parking lot for this event.
                </p> -->
            </div>
            <div class="event-cost-join">
                <div class="event-cost">
                    Cost: $
                    <?php echo get_theme_mod('classes-events-cost')?>
                </div>
                <button class="register-event">
                    <!-- Join Link -->
                    <a id="join-event-btn" href = "<?php echo get_permalink(get_theme_mod('classes-events-join-link')) ?>">Join</a>
                </button>
            </div>
        </div>
    </div>
</body>
</html>

<?php
  get_footer();
?>
