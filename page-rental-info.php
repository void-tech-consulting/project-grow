<?php
    get_header();
    require 'inc/section_vars.php';
    $header_args = array(
        "img_src" => get_theme_mod($rental_info_sub_head_img, "/images/header-images/growing-tips-header-img.png"),
        "page_title" => get_theme_mod($rental_info_sub_head_title, "Rental Information"),
        "button_text" => get_theme_mod($rental_info_sub_head_button_text, "Garden Sites"), 
        "page_slug" => get_theme_mod($rental_info_sub_head_slug, 'garden-sites'),
        );
    get_template_part('partials/content', 'page-sub-header', $header_args);
?>


<div class="important-dates-header">
  <span class="rental-information-subheader important-dates-header">Important Dates</span>
</div>
<div class="important-dates-section">
    <div class="timeline-container">
        <div class="timeline-item timeline-item-medium important-dates-icons important-dates-icons-1">
            <img class="" src=" <?php echo get_template_directory_uri();?>/images/rental-info/timeline_pic_1.png" alt="">
            <div class="important-dates-text">
              <span class="important-dates-date">Jan 1, 2020</span>
              <br>
              <span class="important-dates-description plain-text">Plot application opens.</span>
            </div>
        </div>
        <div class="timeline-item timeline-item-medium important-dates-icons-2">
            <img src=" <?php echo get_template_directory_uri();?>/images/rental-info/timeline_pic_2.png" alt="">
            <div class="important-dates-text">
              <span class="important-dates-date">Feb 1, 2020</span>
              <br>
              <span class="important-dates-description plain-text">Deadline for returning gardeners to renew their plot from previous season.</span>
            </div>
        </div>
        <div class="timeline-item timeline-item-large important-dates-icons-3">
          <img src=" <?php echo get_template_directory_uri();?>/images/rental-info/timeline_pic_3.png" alt="">
          <div class="important-dates-text">
              <span class="important-dates-date">Feb 15, 2020</span>
              <br>
              <span class="important-dates-description plain-text">New applicants are assigned to open plots in order applications were received and according to preferences listed on application form.</span>
          </div>
        </div>
        <div class="timeline-item timeline-item-medium important-dates-icons-4">
            <img src=" <?php echo get_template_directory_uri();?>/images/rental-info/timeline_pic_4.png" alt="">
            <div class="important-dates-text">
              <span class="important-dates-date">Opening Day</span>
              <br>
              <span class="important-dates-description plain-text">Dry year:late April <br><br> Wet year:mid-May</span>
            </div>
        </div>
        <div class="timeline-item timeline-item-small important-dates-icons-5">
            <img src=" <?php echo get_template_directory_uri();?>/images/rental-info/timeline_pic_5.png" alt="">
            <div class="important-dates-text">
              <span class="important-dates-date">Closing Day</span>
              <br>
              <span class="important-dates-description plain-text">Midnight on the 3rd Saturday of October.</span>
            </div>
        </div>
    </div>
    <div class="green-block">
    </div>
</div>

<div class="rental-information-subsection">
  <span class="rental-information-subheader">Plot Types & Costs</span>
  <div class="plot-types-container">
      <div class="plot-types-item">
          <span class="plot-types-item-header">Full Plots</span>
          <div class="plot-type-info plain-text">
            Approximately <span class="bold">750</span> sq ft.
            <br><br>
            <span class="bolded">$130</span> annual plot rental fee
          </div>
      </div>

      <div class="plot-types-item">
        <span class="plot-types-item-header">Half Plots</span>
        <div class="plot-type-info plain-text">
          Approximately <span class="bolded">375</span> sq ft.
          <br><br>
          <span class="bolded">$80</span> annual plot rental fee
        </div>
    </div>

    <div class="plot-types-item">
        <span class="plot-types-item-header">Discovery Gardens</span>
        <div class="plot-type-info plain-text">
          <span class="bolded">18 & 24</span> sq ft. raised bed gardens
          <br><br>
          Designed for new gardeners, older gardeners, children, and those with limited mobility
          <br><br>
          <span class="bolded">$50</span> annual rental fee for a single bed <span class="bolded">$80</span> for two beds
        </div>
    </div>

    <div class="plot-types-item">
        <span class="plot-types-item-header">Reduced Fee Plots</span>
        <div class="plot-type-info plain-text">
          Standard plots available for a subsidized annual fee depending on need and our ability to afford subsidies. 
          <br><br>
          Those interested must submit the <span class="bolded">regular plot application</span> as well as the <span class="bolded">low-income scholarship application</span>.
        </div>
    </div>
  </div>
</div>

<div class="rental-information-subsection">
  <span class="rental-information-subheader">Opening/Closing Dates</span>
  <div class="open-closing-container">
    <div class="open-closing-types-item">
        <span class="plot-types-item-header">Perennial Gardens</span>
        <div class="plain-text open-closing-plain-text">
          Remain open throughout the winter.  Gardeners with perennial plots may begin or end their gardening season as early or late as weather permits.
        </div>
    </div>

    <div class="open-closing-types-item">
        <span class="plot-types-item-header">Annual Gardens</span>
        <div class="plain-text open-closing-plain-text">
          Open in the spring after "stake out". For stake out, a stake is placed in each corner of each plot and labelled with the plot number. 
        </div>
    </div>

  </div>
  <div class="plain-text">
    At most annual sites this is not done until after all the annual plots are tilled.  All of this depends on the weather.  In a dry year it might be finished by late April.  In a wet year it could be as late as mid-May.  
    <br><br>
    The closing date or deadline for cleanup is always midnight on the third Saturday in October. 
  </div>
</div>

<div class="rental-information-subsection">
    <span class="rental-information-subheader">Details</span>
    <ol>
        <li class="details-li"><span class="plain-text">To be assigned to a plot, application and payment must have been received by Project Grow</span></li>
        <br>
        <li class="details-li"><span class="plain-text">We strongly encourage applicants to use our online application form</span></li>
        <br>
        <li class="details-li"><span class="plain-text" style="font-weight:bold">The application can be submitted with a mobile device but applicants cannot pay through PayPal from a mobile device when they apply. If you want to pay with PayPal, please do not apply using a mobile device.</span></li>
        <br>
        <li class="details-li"><span class="plain-text">If preferred, applicants may download a printable application and mail the completed version with payment to Project Grow, P.O. Box 130293, Ann Arbor, MI 48113</span></li>
        <br>
        <li class="details-li"><span class="plain-text">Low-income scholarship applicants must submit the standard application as well as the need-based scholarship application</span></li>
        <br>
        <li class="details-li"><span class="plain-text">We encourage new and returning gardeners alike to read our Introduction for New Gardeners. This introduction provides basic information about what to expect, organic gardening, planning and upkeep. If you are new to Project Grow, it also includes ideas to consider when choosing our garden site.</span></li>
    </ol>
</div>


<?php get_footer(); ?>
