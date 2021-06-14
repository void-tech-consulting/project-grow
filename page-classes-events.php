<?php
  get_header();
  require 'inc/section_vars.php';
  $header_args = array(
    "img_src" => get_theme_mod($classes_events_img, "/images/header-images/classes-events-header-img.png"),
    "page_title" => get_theme_mod($classes_events_title, "Classes & Events")
    );
    get_template_part('partials/content', 'page-sub-header', $header_args); 
?>

<div class="indent main-page title"><b>Classes & Events</b></div>


<div class = "repeatable-boxes-class">
    <div>
        <div class = "third-try">
            <?php
            require 'inc/section_vars.php';   

            // get_example_data is in /inc/template_functions.php
            $data  = get_class_event_data($classes_events_setting);
            if(!empty( $data ) ) { 
                ?>
                <section class="example">
                <?php
                foreach ( $data as $k => $f ) {  
                    $media = '';
            
                    if ($f['Image']) {
                        // get_media_url function is in template_functions.php
                        $media = '<img class="event-image" src="' . esc_url(get_media_url($f['Image'])) . '">';
                    }
                    ?>
                <!--Start code for event page-->
        <div class="event-container">
            <div id="event-img">
                <?php echo $media?>
            
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
                        Cost:$<?php echo $f['Cost']?>
                    </div>
                    
                    <a href = "<?php echo $f['Link'] ?>">
                        <button class="register-event">
                            <!-- Join Link -->
                            Join
                        </button>
                    </a>
                </div>
            </div>
        </div>
                
            <?php
                }
            ?>
                </section>
        <?php } ?>

    </div>
</div>

<?php
  get_footer();
?>
