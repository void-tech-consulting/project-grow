<?php 
  get_header(); 
?>

<div id="gs-header-img">
    <div id="gs-center-header-box">
        <h1 id="gs-header-title">Garden Sites</h1>
        <!--Make button actually link to other page eventually-->
        <a class="gs-apply-plot" href="https://google.com"><b>Apply For A Plot</b></a>
    </div>
</div>
<div>Sorting and searching elements here</div>
<div id="gs-search-bar">
    <!-- The way I got Col names to line up with elements is pretty ugly (does not scale down well)
         If you know of a better way to do it, please do. One solution is to use JS and on screen
         resize and load, get coords of element, and set x-coord of Col name to that x coord, but that seems equally unnecessary-->
    <div class="gs-flex gs-align-center">
        <div id="gs-site-title">Site Names</div>
        <div id="gs-plot-title">Plot Capacity</div>
        <div id="gs-location-title">Location</div>
    </div>
    <!-- Search bar -->
</div>
<div class="gs-flex">
    <div id="gs-sites-wrapper">
        <?php
        require 'inc/section_vars.php';
        $data = get_gs_data('garden-sites-repeater');
        if (!empty($data)) {
            foreach ($data as $k => $f) {
                ?>
                <div class="gs-site">
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
                    <div class="gs-sort-params">
                        <div class="gs-param gs-flex">
                        <?php if ($f['Soil_Checkbox']) {
                            ?>
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type.png alt="soil type icon">
                            </div>
                            <div class="gs-param-txt">
                                <?php echo $f['Soil_Conditions'];?>
                            </div>
                        <?php } ?>
                        </div>
                        <div class="gs-param gs-flex">
                        <?php if ($f['Access_Checkbox']) {
                            ?>
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility.png alt="accessibility icon">
                            </div>
                            <div class="gs-param-txt">
                                <?php echo $f['Accessibility'];?>
                            </div>
                        <?php } ?>
                        </div>
                        <div class="gs-param gs-flex">
                        <?php if ($f['Special_Checkbox']) {
                            ?>
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions.png alt="extra info icon">
                            </div>
                            <div class="gs-param-txt">
                                <?php echo $f['Special_Conditions'];?>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } else {
        } ?>
    </div>
    <iframe id="gs-map" src="https://www.google.com/maps/d/embed?mid=1MFBILGI_78hQQAgdrjuolrgBU0-GM4JX"></iframe>
</div>
<?php
  get_footer();
?>