<?php if (!empty($args['data'])) { ?>
    <div class="growing-tips-header-text"><?php echo $args['title'] ?></div>
    <div class="item-container">
        <?php
        foreach ($args['data'] as $k => $f) {
        ?>
            <div class="garden-tips-item-box">
                <a class="no-style-link align-text" href="<?php echo $f['link']; ?>">
                    <div>
                        <?php echo $f['topic'] ?>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
<?php } ?>