<?php
  get_header();
?>
<div class="header-img">
    <div class="center-header-box">
        <h1 id="header-title">Classes & Events</h1>
    </div>
</div>
<div class="indent main-page title"><b>Classes & Events</b></div> 

<!--Start code for event page-->
<div class="event-container">
    <div class="event-img">
        <img src="<?php echo wp_get_attachment_url(
            get_theme_mod('classes-events-img')) ?>">
    </div>
    <div class="right-side-content">
        <div class="event-details">
            <div class="event-what-where">
                <div class="event-title">
                    <b>Seed Share</b>
                </div>
                <div id="event-where">
                    <b>Downtown Home and Garden</b>
                </div>
                <div id="class-or-event">
                    <u>Event</u>
                </div>
            </div>
            <div class="event-when">
                <div class="event-date">
                    March 21, 2020
                </div>
                <div class="event-time">
                    10:00AM - 11:30AM
                </div>
            </div>
        </div>
        <div class="event-description">
            <p>Did you save more seeds than you could ever use? 
                Did you perhaps go a bit mad at the end-of-year 
                seed sales? Then the Seed Share is for you! Why 
                not see what you can exchange with other gardeners? 
                Who knows, perhaps you'll find seeds for that 
                delicious corn variety you couldn't buy enough of 
                at the farmer's market! Please do not park in the 
                Downtown Home and Garden parking lot for this event.
            </p>
        </div>
        <div class="event-cost-join">
            <div class="event-cost">
                Cost: $5.00
            </div>
            <button class="register-event">Join</button>
        </div>
    </div>
</div>

<?php
  get_footer();
?>