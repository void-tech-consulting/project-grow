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

<div class="gs-flex gs-wrap">
    <table class="gs-table" >
        <tr class="gs-align-center">
            <th></th>
            <th id="gs-site-names">Site Names</th>
            <th id="gs-plot-cap">Plot Capacity</th>
            <th id="gs-location">Location</th>
            <th id="gs-extra"></th>
        </tr>
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
                        <div class="gs-param gs-flex">
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/soil-type.png alt="soil type icon">
                            </div>
                            <div class="gs-param-txt">
                                <?php echo $f['Soil_Conditions'];?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if ($f['Access_Checkbox']) {
                            ?>
                        <div class="gs-param gs-flex">
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/accessibility.png alt="accessibility icon">
                            </div>
                            <div class="gs-param-txt">
                                <?php echo $f['Accessibility'];?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if ($f['Special_Checkbox']) {
                            ?>
                        <div class="gs-param gs-flex">
                            <div>
                                <img src=<?php echo get_template_directory_uri();?>/images/garden-sites/special-conditions.png alt="extra info icon">
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
    </table>
    <div class="gs-right-wrap">
        <div id="gs-search-bar">
            <input class="gs-search-input" type="search" name="" id="">
        </div>
        <iframe id="gs-map" src="https://www.google.com/maps/d/embed?mid=1MFBILGI_78hQQAgdrjuolrgBU0-GM4JX"></iframe>
        </div>
    </div>
    <?php
  get_footer();
  ?>
