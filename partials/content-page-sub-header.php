<div class="sub-head-wrap">
    <img class="sub-head-img" src="<?php echo get_template_directory_uri() . $args['img_src'] ?>">
    <div class="sub-head-center-box">
        <h1 class="sub-head-title"><?php echo $args['page_title'] ?></h1>
        <?php
            if ($args['page_slug']) {
                $page_object = get_page_by_path( $args['page_slug'] );
                $page_id = $page_object->ID;
                $permalink = get_permalink( $page_id );
        ?>
                <a class="sub-head-link" href="<?php echo $permalink ?>"><b><?php echo $args['button_text'] ?></b></a>
        <?php } ?>
    </div>
</div>