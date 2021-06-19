<?php 
  get_header(); 
?>


<?php 
    require 'inc/section_vars.php';
    $header_args = array(
        "page_slug" => get_theme_mod($gs_sub_head_slug, "apply-for-plot"),
        "button_text" => get_theme_mod($gs_sub_head_text, "Apply For A Plot"),
        "img_src" => get_theme_mod($gs_sub_head_img, "/images/header-images/garden-sites-header-img.png"),
        "page_title" => get_theme_mod($gs_sub_head_title, "Garden Sites")
    );
    get_template_part('partials/content', 'page-sub-header', $header_args); 
?>


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
            <div class="flex gs-extra-info-box">
                <div>
                    <img class="garden-sites-icon" src="<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type-icon.png" alt="soil type icon">
                </div>
                <div>Soil Type</div>
            </div>
            <div class="flex gs-extra-info-box">
                <div>
                    <img class="garden-sites-icon" src="<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility-icon.png" alt="soil type icon">
                </div>
                <div>Accessibility</div>
            </div>
            <div class="flex gs-extra-info-box">
                <div>
                    <img class="garden-sites-icon" src="<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions-icon.png" alt="soil type icon">
                </div>
                <div>Special Conditions</div>
            </div>
        </div>
        <table class="gs-table" >
            <thead>
                <tr class="gs-align-center">
                    <th id="gs-site-names">Site Names</th>
                    <th id="gs-plot-cap">Plot Capacity</th>
                    <th id="gs-location">Location</th>
                    <th>Learn More</th>
                    <th id="gs-extra"></th>
                </tr>
            </thead>
            <tbody class="gs-table-body">

                <?php
            require 'inc/section_vars.php';
            $data = get_gs_data('garden-sites-repeater');
            if (!empty($data)) {
                foreach ($data as $k => $f) {
                    $plot_url = get_permalink(get_page_by_path($f['Plot_Slug'], OBJECT, 'plot')->ID);
                    ?>
                    <tr class="gs-site">
                        <td class="gs-site-name">
                            <a href="<?php echo $plot_url?>"> 
                            <?php echo $f['Site_Name'];?>
                            </a>
                        </td>
                        <td class="gs-plot-cap">
                            <?php echo $f['Plot_Capacity'];?>
                        </td>
                        <td class="gs-location">
                            <?php echo $f['Location'];?>
                        </td>
                        <td class="gs-site-number">
                            <a href="<?php echo $plot_url?>">
                                More Info
                            </a>
                        </td>
                        <td class="gs-sort-params">
                            <?php if ($f['Soil_Checkbox']) {
                                ?>
                            <div class="gs-param gs-flex gs-soil-type">
                                <div>
                                    <img class="garden-sites-icon" src="<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type-icon.png" alt="soil type icon">
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
                                    <img class="garden-sites-icon" src="<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility-icon.png" alt="accessibility icon">
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
                                    <img class="garden-sites-icon" src="<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions-icon.png" alt="extra info icon">
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
