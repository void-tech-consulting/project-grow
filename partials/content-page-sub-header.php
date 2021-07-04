<div class="sub-head-wrap">
    <?php if ($args['img_src']) { ?>
        <img class="sub-head-img" src="<?php echo get_template_directory_uri() . $args['img_src'] ?>">
    <?php }?>
    <div class="sub-head-center-box">
        <h1 class="sub-head-title"><?php echo $args['page_title'] ?></h1>
        <?php
            if ($args['page_slug']) {
                if ($args['page_slug'] == 'home') {
                    $permalink = get_home_url();
                }
                else {
                    $page_object = get_page_by_path( $args['page_slug'] );
                    $page_id = $page_object->ID;
                    $permalink = get_permalink( $page_id );
                }
            if ($args['link_section']) {
                $permalink = $permalink . '/#' . $args['link_section'];
            }
        ?>
                <a class="sub-head-link" href="<?php echo $permalink ?>"><b><?php echo $args['button_text'] ?></b></a>
        <?php } ?>
    </div>
</div>