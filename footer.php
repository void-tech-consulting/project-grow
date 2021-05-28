<!-- If you have html on the footer of each page put it here -->
<div class="footer">
    <div class="flex footer-flex">
        <ul class="footer-links">
            <li class="footer-main-link home-underline">
                <?php
                    $slug = "home1";
                    $page_object = get_page_by_path( $slug );
                    $page_id = $page_object->ID;
                    $permalink = get_permalink( $page_id );
                ?>
                <a href="<?php echo $permalink ?>"><b>Home</b></a>
            </li>
            <li class="footer-main-link">
                About Us
                <ul class="footer-sub-links">
                    <?php
                        $slug = "contact-us";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Contact Us</a></li>
                    <?php
                        $slug = "our-people";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Our People</a></li>
                    <?php
                        $slug = "what-we-do";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">What We Do</a></li>
                </ul>
            </li>
            <li class="footer-main-link">
                Plot Information
                <ul class="footer-sub-links">
                    <?php
                        $slug = "garden-sites";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Garden Sites</a></li>
                    <?php
                        $slug = "plot-guidelines";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Plot Guidelines</a></li>
                    <?php
                        $slug = "rental-information";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Rental Information</a></li>
                </ul>
            </li>
            <li class="footer-main-link">
                <?php
                    $slug = "apply-for-plot";
                    $page_object = get_page_by_path( $slug );
                    $page_id = $page_object->ID;
                    $permalink = get_permalink( $page_id );
                ?>
                <a href="<?php echo $permalink ?>"><b>Apply for a Plot</b></a>
            </li>
            <li class="footer-main-link">
                Education & Events
                <ul class="footer-sub-links">
                    <?php
                        $slug = "classes-events";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Classes & Events</a></li>
                    <?php
                        $slug = "master-composter";
                        $page_object = get_page_by_path( $slug );
                        $page_id = $page_object->ID;
                        $permalink = get_permalink( $page_id );
                    ?>
                    <li><a href="<?php echo $permalink ?>">Master Composter Program</a></li>
                </ul>
            </li>
            <li class="footer-main-link">
                <?php
                    $slug = "plant-sale-info";
                    $page_object = get_page_by_path( $slug );
                    $page_id = $page_object->ID;
                    $permalink = get_permalink( $page_id );
                ?>
                <a href="<?php echo $permalink ?>"><b>Plant Sale Information</b></a>
            </li>
            <li class="footer-main-link">
                <?php
                    $slug = "growing-tips";
                    $page_object = get_page_by_path( $slug );
                    $page_id = $page_object->ID;
                    $permalink = get_permalink( $page_id );
                ?>
                <a href="<?php echo $permalink ?>"><b>Growing Tips</b></a>
            </li>
        </ul>
        <div class="footer-main-link donate-btn">
            <?php
                    $slug = "donate";
                    $page_object = get_page_by_path( $slug );
                    $page_id = $page_object->ID;
                    $permalink = get_permalink( $page_id );
                ?>
                <a href="<?php echo $permalink ?>"><b>Donate</b></a>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
