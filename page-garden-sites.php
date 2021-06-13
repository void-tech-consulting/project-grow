<?php 
  get_header(); 
?>

<div id="gs-header-img">
    <div id="gs-center-header-box">
        <h1 id="gs-header-title">Garden Sites</h1>
        <!--Make button actually link to other page eventually-->
        <?php
            $slug = "apply-for-plot";
            $page_object = get_page_by_path( $slug );
            $page_id = $page_object->ID;
            $permalink = get_permalink( $page_id );
        ?>
        <a class="gs-apply-plot" href="<?php echo $permalink ?>"><b>Apply For A Plot</b></a>
    </div>
</div>

<div class="gs-flex gs-wrap">
    <div class="gs-flex-grow">
        <div class="gs-wrap-sort">
            <div id="gs-sort-box">
                <label for="plots">Sort by</label>
                <select name="plots" id="gs-sort-select">
                    <option value="number">Number</option>
                    <option value="alpha">Alphabetical</option>
                    <option value="soil-type">Soil Type</option>
                    <option value="accessibility">Accessibility</option>
                    <option value="special-conditions">Special Conditions</option>
                </select>
            </div>
            <div class="gs-extra-info-box">
                <div>
                    <img class=garden-sites-icon src=<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type-icon.png alt="soil type icon">
                </div>
                <div>Soil Type</div>
            </div>
            <div class="gs-extra-info-box">
                <div>
                    <img class=garden-sites-icon src=<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility-icon.png alt="soil type icon">
                </div>
                <div>Accessibility</div>
            </div>
            <div class="gs-extra-info-box">
                <div>
                    <img class=garden-sites-icon src=<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions-icon.png alt="soil type icon">
                </div>
                <div>Special Conditions</div>
            </div>
        </div>
        <table class="gs-table" >
            <thead>
                <tr class="gs-align-center">
                    <th></th>
                    <th id="gs-site-names">Site Names</th>
                    <th id="gs-plot-cap">Plot Capacity</th>
                    <th id="gs-location">Location</th>
                    <th id="gs-extra"></th>
                </tr>
            </thead>
            <tbody class="gs-table-body">

                <?php
            require 'inc/section_vars.php';
            $data = get_gs_data('garden-sites-repeater');
            if (!empty($data)) {
                foreach ($data as $k => $f) {
                    ?>
                    <tr class="gs-site">
                        <td class="gs-site-number">
                            <div class="gs-circle">
                                <?php echo $f['Site_Number'];?>
                            </div>
                        </td>
                        <td class="gs-site-name">
                            <?php echo $f['Site_Name'];?>
                        </td>
                        <td class="gs-plot-cap">
                            <?php echo $f['Plot_Capacity'];?>
                        </td>
                        <td class="gs-location">
                            <?php echo $f['Location'];?>
                        </td>
                        <td class="gs-sort-params">
                            <?php if ($f['Soil_Checkbox']) {
                                ?>
                            <div class="gs-param gs-flex gs-soil-type">
                                <div>
                                    <img class=garden-sites-icon src=<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type-icon.png alt="soil type icon">
                                </div>
                                <div class="gs-param-txt">
                                    <?php echo $f['Soil_Conditions'];?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($f['Access_Checkbox']) {
                                ?>
                            <div class="gs-param gs-flex gs-accessibility">
                                <div>
                                    <img class=garden-sites-icon src=<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility-icon.png alt="accessibility icon">
                                </div>
                                <div class="gs-param-txt">
                                    <?php echo $f['Accessibility'];?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($f['Special_Checkbox']) {
                                ?>
                            <div class="gs-param gs-flex gs-special-conditions">
                                <div>
                                    <img class=garden-sites-icon src=<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions-icon.png alt="extra info icon">
                                </div>
                                <div class="gs-param-txt">
                                    <?php echo $f['Special_Conditions'];?>
                                </div>
                            </div>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            <?php
            } else {
            } ?>
            </tbody>
        </table>
    </div>
    <div class="gs-right-wrap">
        <div class="gs-plot-size-wrap">
            <div class="gs-plot-size-box">
                <div class="gs-bold">
                    Full Size Plot
                </div>
                <div>750 sqft</div>
                <div>130$ annual fee</div>
            </div>
            <div class="gs-plot-size-box">
                <div class="gs-bold">
                    Full Size Plot
                </div>
                <div>750 sqft</div>
                <div>130$ annual fee</div>
            </div>
            <div class="gs-plot-size-box">
                <div class="gs-bold">
                    Full Size Plot
                </div>
                <div>750 sqft</div>
                <div>130$ annual fee</div>
            </div>
        </div>
        <div id="gs-search-bar">
            <input type="text" id="gs-search-input" placeholder="Search..">
        </div>
        <iframe id="gs-map" src="https://www.google.com/maps/d/embed?mid=1MFBILGI_78hQQAgdrjuolrgBU0-GM4JX"></iframe>
        </div>
    </div>
    <?php
  get_footer();
  ?>
