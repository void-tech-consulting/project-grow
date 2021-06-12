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
<span class="header-text">Who Makes Project Grow, Grow?</span>

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