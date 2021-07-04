<?php
    get_header();
    require 'inc/section_vars.php';
    $header_args = array(
        "img_src" => get_theme_mod($our_people_sub_head_img, "/images/header-images/our-people-header-img.png"),
        "page_title" => get_theme_mod($our_people_sub_head_title, "Our People"),
        "button_text" => get_theme_mod($our_people_sub_head_button_text, "Connect with Us"), 
        "page_slug" => get_theme_mod($our_people_sub_head_slug, "contact")
        );
    get_template_part('partials/content', 'page-sub-header', $header_args);
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

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
            // get_media_url function is in template_functions.php
            $media = '';
            $media_hide_on_hover = $f['member_desc'] ? "hide-person-img" : "";
            if ($f['member_image'] && $f['member_image']['url']) {
                $media = '<img class="person-img ' . $media_hide_on_hover . '" src="' . esc_url(get_media_url($f['member_image'])) . '">';
            } else {
                $media = '<img class="person-img-default ' . $media_hide_on_hover . '" src="' . get_template_directory_uri() . '/images/our-people/person.png' . '">';
            }
        ?>
            <div class="person-box-container">
                <?php echo $media ?>
                <?php if ($f['member_desc']) {?>
                    <div class="people-hover-state-bio flex">
                        <p><?php echo $f['member_desc'] ?></p>
                    </div>
                <?php } ?>
                <div class="people-non-hover-state">
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