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
<div class="people-header-text">Who Makes Project Grow, Grow?</div>

<div class="person-repeater">
    <?php
    require 'inc/section_vars.php';
    // get_example_data is in /inc/template_functions.php
    $data  = get_our_people_data($our_people_members);
    if (!empty($data)) {
    ?>
        <?php
        foreach ($data as $k => $f) {
            $media = '';
            if ($f['member_image']) {
                // get_media_url function is in template_functions.php
                $media = '<img class="person-img" src="' . esc_url(get_media_url($f['member_image'])) . '">';
            }
        ?>
            <div class="person-box-container">
                <div class="person-box">
                    <?php echo $media ?>
                    <div class="people-hover-state-bio flex">
                        <!-- TODO: make this editable -->
                        <p>Joe has been gardening since his early teenage years. After buying a condo he had to rent garden plots, originally in Livonia Michigan located at Greenmead.   At that time he decided to specialize in heirloom tomatoes. The desire to grow organically drew him to Project Grow. He gardens at Food Gatherers. While he still grows mostly heirloom varieties, he always includes hybrids plants to as they are better for donation to Food Gatherers.</p>
                    </div>
                    <div class="person-name"><?php echo $f['member_name']  ?></div>
                    <div class="person-title"><?php echo $f['member_title'] ?></div>
                </div>
            </div>
        <?php
        }
        ?>
    <?php } else {
    } ?>
</div>




<?php get_footer(); ?>