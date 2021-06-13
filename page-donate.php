<?php 
  get_header(); 
?>

<div class="donate-header-img">
    <div class="donate-center-header-box">
        <h1 id="header-title">Donate</h1>
    </div>
</div>

<div class="donate-content">
    <h2 id="donate-form-heading">Make a Donation</h2>
    <p>A garden is a community of microorganisms, insects, animals, plants, and people.  All parties interact constantly, some more actively than others, to build that community.  We at Project Grow would like to encourage as much active support on the part of individuals like you, who share our passion for gardening and community-building.  Whether your gift is one of time and energy, financial support, or an in-kind donation, we thank you for being part of making this Project Grow! </p>
    <br>
    <br>
    <div class="row">
        <div class="col-60">
            <?php 
            $shortcode = get_theme_mod('donate-form-shortcode');
            echo do_shortcode($shortcode);
            ?>
        </div>
        <div class="donate-col-40">
            <h2 class="donate-check-headline">Make a Monetary Donation via Check</h2>
            <p>We will gladly accept donations via a check. Please make it payable to "Project Grow" and mail to:</p>
            <p><b>Project Grow Community Gardens</b></p>
            <p><b>P.O. Box 130293</b></p>
            <p><b>Ann Arbor, MI 48113</b></p>
            <br>
            <h2 class="donate-check-headline">Make an In-Kind Donation:</h2>
            <p>Project Grow also accepts new and gently used items. If you are interested in donating an item to Project Grow, please call the Project Grow office at 734-996-3169.</p>
            <p>Some of the items needed for the upcoming growing season include:</p>
            <div class="donate-items-list">
                <?php
                require 'inc/section_vars.php';   
                $data = get_donate_data($donate_season_repeater);
                if(!empty( $data ) ) { 
                ?>
                    <ul>
                        <?php
                        foreach ( $data as $k => $f ) {  
                        ?>
                            <li>
                                <?php echo $f['item']; ?>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>
            </div>
            <p>Items on our long-term dream list:</p>
            <div class="donate-items-list">
                <?php
                require 'inc/section_vars.php';   
                $data = get_donate_data($donate_longterm_repeater);
                if(!empty( $data ) ) { 
                ?>
                    <ul>
                        <?php
                        foreach ( $data as $k => $f ) {  
                        ?>
                            <li>
                                <?php echo $f['item']; ?>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>
            </div>
            <h2 class="donate-check-headline">Donate Through the Network for Good</h2>
            <a id="network-for-good" href="https://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=23-7288532&source=GS&cmpgn=DNT&vlrStratCode=Y5WI3keyRbI8AerSWkYsrlW%2bTBT5H8e%2bZxfuoGaNbDxFQwu4eiRO3gAe8ccZtSHe">Network for Good</a>
        </div>
    </div>
    <div>
        <h2 class="donate-thank-section">We would like to thank the landowners who allow Project Grow gardeners to grow on their land</h2>
        <div class="donate-items-list">
            <?php
            require 'inc/section_vars.php';   
            $data = get_donate_data($donate_landowners_repeater);
            if(!empty( $data ) ) { 
            ?>
                <ul>
                    <?php
                    foreach ( $data as $k => $f ) {  
                    ?>
                        <li>
                            <?php echo $f['item']; ?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
