<div class="get-started">
    <?php if ($args['checked']) { ?>
    <div class="get-started-header">
        How to Get Started
    </div>
    <!-- version 2 -->
    <div class="get-started-steps">
        <div class="process-step">
            <div class='flex step-img-wrapper'>
                <img src="<?php echo get_template_directory_uri();?>/images/home/sprout-icon.png" alt="step image not found" class="step-img">
            </div>
            <div class="step-text">
                Choose the type of plot you're interested in
            </div>
            <a href="" class="step-link">Check Rental Info</a>
        </div>

        <div class="process-step-divider"></div>

        <div class="process-step">
            <div class='flex step-img-wrapper'>
                <img src="<?php echo get_template_directory_uri();?>/images/home/location-icon.png" alt="step image not found" class="step-img">
            </div>
            <div class="step-text">
                Check out which site will be home to your garden
            </div>
            <a href="" class="step-link">View Garden Sites</a>
        </div>

        <div class="process-step-divider"></div>

        <div class="process-step">
            <div class="flex step-img-wrapper">
                <img src="<?php echo get_template_directory_uri();?>/images/home/writing-icon.png" alt="step image not found" class="step-img">
            </div>
            <div class="step-text">
                Apply for the plot!
            </div>
            <a href="" class="step-link">Apply</a>

        </div>
    </div>
    <?php } else { ?>
        <!-- version 1 -->
        <div class="get-started-header">
        Join Us
    </div>
    <div class="get-started-steps">
        <div class="process-step">
            <div class='flex step-img-wrapper'>
                <img src="<?php echo get_template_directory_uri();?>/images/home/sprout-icon.png" alt="step image not found" class="step-img">
            </div>
            <div class="step-text">
                Learn from us about our favorite growing tips
            </div>
            <a href="" class="step-link">View Growing Tips</a>
        </div>

        <div class="process-step-divider"></div>

        <div class="process-step">
            <div class='flex step-img-wrapper'>
                <img src="<?php echo get_template_directory_uri();?>/images/home/potted-plant-icon.png" alt="step image not found" class="step-img">
            </div>
            <div class="step-text">
                Join us for our large Annual Plant sale 
            </div>
            <a href="" class="step-link">View Plant Sale</a>
        </div>

        <div class="process-step-divider"></div>

        <div class="process-step">
            <div class="flex step-img-wrapper">
                <img src="<?php echo get_template_directory_uri();?>/images/home/writing-icon.png" alt="step image not found" class="step-img">
            </div>
            <div class="step-text">
                Join us in providing for the Ann Arbor Community
            </div>
            <a href="" class="step-link">Donate</a>

        </div>
    </div>
    <?php } ?>
</div> <!-- end get-started section -->