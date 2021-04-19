<?php
  get_header();
?>
<style>
    <?php include 'CSS/main.css'; ?>
</style>
<div class="header-img">
    <div class="center-header-box">
        <h1 id="header-title">Classes & Events</h1>
    </div>
</div>
<div class="indent main-page title"><b>Classes & Events</b></div>



</div>
<div>
    <?php
      require 'inc/section_vars.php';   
      // get_example_data is in /inc/template_functions.php
      $data  = get_example_data($example_repeater);
      if(!empty( $data ) ) { 
        ?>
        <section class="example">
        <?php
          foreach ( $data as $k => $f ) {  
            ?>
            <!-- TODO: change Image  -->
            <div><?php echo $f['Image']?></div>
            <div><?php echo $f['Headline']?></div>
            <div><?php echo $f['Location']?></div>
            <div><?php echo $f['Event_Type']?></div>
            <div><?php echo $f['Paragraph']?></div>
            <div><?php echo $f['Cost']?></div>
            <div><?php echo $f['Time']?></div>
            <div><?php echo $f['Link']?></div>
           
      <?php
          }
      ?>
        </section>
<?php } ?>

</div>


<!--Start code for event page-->
<div class="event-container">
    <div class="event-img">
        <img src="<?php echo $f['Image']?> ?>">
    </div>
    <div class="right-side-content">
        <div class="event-details">
            <div class="event-what-where">
                <div class="event-title">
                    <!-- used to be "Seed Share" heading  -->
                    <b><?php echo $f['Headline']?></b>
                    <!-- <b></b> -->
                </div>
                <div id="event-where">
                    <!-- used to be <b>Downtown Home and Garden</b> -->
                    <b><?php echo $f['Location']?></b>
                    
                </div>
                <div id="class-or-event">
                    <!-- Used to be <u>Event</u> -->
                    <u><?php echo $f['Event_Type']?></u>
                </div>
            </div>
            <div class="event-when">
                <div class="event-date">
                    <!-- March 21, 2020 -->
                    <?php echo $f['Event_Date']?>
                </div>
                <div class="event-time">
                    <!-- 10:00AM - 11:30AM -->
                    <b><?php echo $f['Time']?></b>
                </div>
            </div>
        </div>
        <div class="event-description">
            <?php echo $f['Paragraph']?>
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
                Cost:$
            </div>
            <div class = "event-cost">
                <?php echo $f['Cost']?>
            </div>
            <button class="register-event">
                <!-- Join Link -->
                <a href = "<?php echo $f['Link'] ?>">Join</a>
            </button>
        </div>
    </div>
</div>

<?php
  get_footer();
?>
