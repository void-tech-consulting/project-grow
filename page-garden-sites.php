<?php 
  get_header(); 
?>

<div id="gs-header-img">
    <div id="gs-center-header-box">
        <h1 id="gs-header-title">Garden Sites</h1>
        <!--Make button actually link to other page eventually-->
        <button class="plant-catalog-btn"><b>Apply For A Plot</b></button>
    </div>
</div>
<div>Sorting and searching elements here</div>
<div id="gs-content-wrapper">
    <div id="gs-sites-wrapper">
        <div class="gs-site">
            <?php
            require 'inc/section_vars.php';
            $data = get_gs_data('garden-sites-repeater');
            if (!empty($data)) {
                echo $data;
                foreach ($data as $k => $f) {
                    ?>
                    <div class="gs-site-number">
                        <div class="gs-circle">
                            <?php echo $f['Site_Number'];?>
                        </div>
                    </div>
                    <div class="gs-site-name">
                        <?php echo $f['Site_Name'];?>
                    </div>
                    <div class="gs-plot-cap">
                        <?php echo $f['Plot_Capacity'];?>
                    </div>
                    <div class="gs-location">
                        <?php echo $f['Location'];?>
                    </div>
                    <!--
                    <div class="gs-sort-params">
                        <div class="gs-soil-type gs-flex">
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type.png alt="soil type icon">
                            </div>
                            <div>Soil type info</div>
                        </div>
                        <div class="gs-accessibility gs-flex">
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility.png alt="accessibility icon">
                            </div>
                            <div>Acessibility info</div>
                        </div>
                        <div class="gs-special-condition gs-flex">
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions.png alt="extra info icon">
                            </div>
                            <div>Special conditions info</div>
                        </div>
                    </div>
                    -->
                <?php
                }
                ?>
            <?php
            } else {
                echo "Data empty";
            } ?>
        </div>
    </div>
    <iframe id="gs-map" src="https://www.google.com/maps/d/embed?mid=1MFBILGI_78hQQAgdrjuolrgBU0-GM4JX"></iframe>
</div>
<?php
  get_footer();
?>