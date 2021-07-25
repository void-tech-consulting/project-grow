<?php 
  get_header(); 
  require 'inc/section_vars.php';
  $header_args = array(
    "img_src" => get_theme_mod($plant_sale_img, "/images/header-images/classes-events-header-img.png"),
    "page_title" => get_theme_mod($plant_sale_title, "Plant Sale Information"),
    );
    get_template_part('partials/content', 'page-sub-header', $header_args); 
?>
<div class="psi-indent psi-main-page psi-title"><b>Project Grow Plant Sale</b></div>
<div class="psi-indent psi-description">
    <?php echo get_theme_mod('plant-sale-banner')?>
</div>
<div class="psi-sale-container">
    <div class="sale-headers sale-flex-format">
        <div class="sale-table-format"><b>Sale Date</b></div>
        <div><b>Price</b></div>
        <div class="sale-table-format"><b>Size</b></div>
    </div>
    <div class="sale-flex-format">
        <?php $data = get_plant_sale_data('plant-sale-date-repeater');
        if(!empty($data)) {
            ?>
            <div class="psi-dates">
            <?php
                foreach($data as $k => $f) {
                    ?>
                    <div class="psi-sale-date">
                        <br/>
                        <div><i><?php echo $f['plant-sale-day-of-week']?></i></div>
                        <br/>
                        <div><b><?php echo $f['plant-sale-date']?></b></div>
                        <br/>
                        <div><?php echo $f['plant-sale-time']?></div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
        <div class="psi-prices">
            <br/>
            <div><b><?php echo get_theme_mod('plant-sale-cost')?></b></div>
        </div>
        <div class="sale-table-format psi-sizes"><br/><b><?php echo get_theme_mod('plant-sale-size')?></b></div>
    </div>
</div>
<div class="psi-indent organic-container">
    <div class="psi-section-spacer psi-title">Organic</div>
    <div class="organic-paragraph">
        The plants are grown in USDA Organic Sunshine Mix. However, they are fertilized with Fertrell 3-2-3 Garden Food. 
        Fertrell is a natural fertilizer made of blood meal, feather meal and other natural products, but is not USDA organic 
        because the blood, feathers and other products are not from organically raised animals. We use this fertilizer only 
        after having tried other organically certified fertilizers in the past, which produced unsatisfactory results. Whenever 
        possible, the plants are grown from seeds saved by local gardeners.

    </div>
</div>
<div class="psi-indent new-items-container">
    <div class="psi-section-spacer psi-title">New Items</div>
    <div class="hdr-over-list">
        Every year Project Grow strives to replace the least popular items with new varieties we have not offered before or think 
        should be grown more often. This year we are adding:<br/>
    </div>

    <?php $data = get_new_items_data('plant-sale-new-items-repeater');
    if(!empty($data)) {
        ?>
        <div class="psi-flex-container">
            <?php
            $flag = False;
            for($x = 0; $x <= count($data); $x++) {
                if($data[$x]['ps-new-item-category']) {
                    ?>
                    <div class="psi-whole-category"> <!-- Not closed -->
                        <div class="list-spacing psi-category"><b><?php echo $data[$x]['ps-new-item-name'];?></b></div>
                <?php
                }
                else {
                    while(!$data[$x]['ps-new-item-category']) {
                ?>
                        <div class="list-spacing">- <?php echo $data[$x]['ps-new-item-name'];?></div>
                <?php
                        $x++;
                        //Exit condition
                        if($x >= count($data)) {
                            $flag = True;
                            break;
                        }
                    }
                    // Revert previous increment -- went too far and entered next category
                    if(!$flag) $x--;
                    ?>
                    </div>
                <?php
                }
            }
            ?>
        </div>
    <?php
    }
    ?>
</div>
<div class="psi-indent discont-items-container">
    <div class="psi-section-spacer psi-title">Discontinued Items</div>
    <div class="hdr-over-list">
        The following items have been dropped because of poor sales, difficulty finding good seed, or work 
        required to grow. If you were particularly fond of any of these, let us know,  we may be able to 
        sell you seed so you can grow your own.
    </div>

    <?php $data = get_discont_items_data('plant-sale-discont-items-repeater');
    if(!empty($data)) {
        ?>
        <div class="psi-flex-container">
            <?php
            $flag = False;
            for($x = 0; $x <= count($data); $x++) {
                if($data[$x]['ps-discont-item-category']) {
                    ?>
                    <div class="psi-whole-category"> <!-- Not closed -->
                        <div class="list-spacing psi-category"><b><?php echo $data[$x]['ps-discont-item-name'];?></b></div>
                <?php
                }
                else {
                    while(!$data[$x]['ps-discont-item-category']) {
                ?>
                        <div class="list-spacing">- <?php echo $data[$x]['ps-discont-item-name'];?></div>
                <?php
                        $x++;
                        //Exit condition
                        if($x >= count($data)) {
                            $flag = True;
                            break;
                        }
                    }
                    // Revert previous increment -- went too far and entered next category
                    if(!$flag) $x--;
                    ?>
                    </div> <!-- This closes "psi-whole-category" -->
                <?php
                }
            }
            ?>
        </div>
    <?php
    }
    ?>
    </div>
    <div class="psi-indent psi-tomatoes-section">
            Tomatoes come in a wide range of colors. The most common colors are red-orange and pinkish-red. 
            There are also yellow, orange, green and purplish black tomatoes. If you are looking for classic 
            tomato flavor, choose red-orange or pinkish-red tomatoes. Yellow, orange and green tomatoes tend 
            to have a fruitier and sweeter flavor profile. Bi-color tomatoes have skin and flesh that is a mixture 
            of two or more colors. Typically the color is a combination of red and yellow. Bi-color tomatoes usually 
            are very sweet and may have subtle blends of fruit flavors. Black tomatoes tend to be richly flavored with 
            smoky flavor notes.<br/>

            <br/>Tomatoes are usually separated into groups based on their type (beefsteak, cherry, paste, oxheart, saladette 
            and patio). If you are not familiar with these types, the following profiles include descriptions and some 
            recommendations.
        </div>
</div>
<div class="psi-indent disclaimer-container">
    <div class="psi-section-spacer psi-title">Disclaimer</div>
    <div class="disclaimer-body">
        To make this work, we ask that our customers follow a few simple requests. 
        <b>Please read these limitations carefully</b>, and if you cannot meet these requirements, 
        do not advance order plants, but come to the sale in person to make your purchases!
        <br/><b>1.</b> You must pay for your order by check by Saturday May 2nd. Orders that are received 
        later than May 2nd or are not paid for will not be pulled and saved for you.
        <br/><b>2.</b> You must come to Dawn Farm to pick up your order. If you can't make it, ask a 
        friend to pick up the order for you. Orders which are not picked up during the assigned 
        days and hours will be lost and you will receive no refund.
    </div>
</div>

<?php get_footer(); ?>
