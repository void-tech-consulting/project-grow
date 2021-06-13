<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="apply-plot-header-background">
  <div class="header-box">
    <span class="our-people-button-header-text">Apply For a Plot</span>
    </a>
  </div>
</div>
<div class="apply-body">
    <div class="apply-header">
        Gardener Application Form
    </div>
    <p>
        <br>
        <b>Terms of Sale:</b> This is an application, not a registration. Unless you are a returning gardener applying for the same plot you gardened last year, this application does not guarantee you a garden plot. We typically begin assigning plots to new gardeners after March 15th on a first come first serve basis and by availability at your preferred site/s.
        <br><br>
        <b>If we are unable to confirm you for a plot, your application fee will be refunded.</b>
    </p>
    <div class="apply-form-info">
        <div class="apply-application">
            <!-- php application form thing here -->
        </div>
        <!-- <div class="apply-info">
             info about plots here
        </div> -->
    </div>
    <div class="apply-agreement">
        <!-- gardening agreement here -->
    </div>
    <div class="apply-payment-info">
        <!-- info about transaction here -->
    </div>
    <div class="apply-payment-method">
        <!-- payment method handling here -->
    </div>
    <div class="apply-flex">
        <div class="apply-form">
            <?php 
            # [forminator_form id="105"]
            $shortcode = get_theme_mod('apply_for_plot_form-shortcode');
            echo do_shortcode($shortcode);
            ?>
        </div>
        <div class="apply-info">
            <div class="apply-info-row apply-info-row-1">
                <div class="apply-info-col">
                    <div class="apply-col-head">
                        Full Plots
                    </div> 
                    <br>
                    <div class="apply-col-body">
                        <b>750</b> sq ft <br>
                        <b>130</b> annual fee 
                        <br>
                    </div>
                </div>
                <div class="apply-info-col">
                    <div class="apply-col-head">
                        Half Plots
                    </div>
                    <br>
                    <div class="apply-col-body">
                        <b>375</b> sq ft <br>
                        <b>80</b> annual fee 
                        <br>
                    </div>
                    
                </div>
            </div>
            <div class="apply-info-row apply-info-row-2">
                <div class="apply-info-col apply-info-col-1">
                    <div class="apply-col-head">
                        Discovery Gardens
                    </div>
                    <br>
                    <div class="apply-col-body">
                        <b>18</b> & <b>24</b> sq ft. raised bed gardens <br><br>
                        Designed for older gardeners, children, and those with limited mobility <br><br>
                        <b>$50</b> annual rental fee for a single bed <br><b>$80</b> for two beds
                    </div>
                    
                </div>
                <div class="apply-info-col apply-info-col-2">
                    <div class="apply-col-head">
                        Reduced Fee Plots
                    </div>
                    <br>
                    <div class="apply-col-body">
                        Standard plots available for a subsidized annual fee depending on need and our ability to afford subsidies. <br><br>
                        Those interested must submit the <b>regular plot application</b> as well as the <b>low-income scholarship application.</b><br>
                    </div>
                    
                </div>
            </div>
            <div class="apply-info-single">
                <div class="apply-col-body">
                    <div class="apply-single-head">
                        Mailing Address
                    </div>
                    P.O. Box 130293, Ann Arbor, MI 48113 <br><br>
                    <div class="apply-single-head">
                        Phone Number
                    </div>
                    (734) 996-3169 <br><br>
                    <div class="apply-single-head">
                        Want to Volunteer?
                    </div>
                    Email: info@projectgrowgardens.org
                </div>

            </div>
        </div>
    </div>


</div>
<?php get_footer(); ?>
