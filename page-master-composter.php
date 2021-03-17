<?php
get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<div class="master-composter-header-background">
  <div class="master-composter-header-box">
    <span class="master-composter-our-people-button-header-text">Master Composter Program</span>
    <a href="https://www.google.com" class="master-composter-no-style-link">
      <div class="master-composter-connect-button">
        Apply Now
      </div>
    </a>
  </div>
</div>
<span class="master-composter-header-text">About the CEC</span>


<div class="master-composter-main-description">
  <div style="width:82%;padding-top:3rem;padding-bottom:3rem;margin:auto;">
    The Compost Education Center (CEC) of Project Grow is charged with managing two composting-related activities, that of producing compost, and using this process for educational purposes - learning how to compost. This mission is based on the appreciation that composting is essential to community gardening.
    <br><br>
    What is composting? Composting is the managed process of speeding up the way nature recycle, by creating the ideal conditions for the rapid decomposition of organic materials by effective decomposers. For more information, read the composting guides and related literature in the Handout section below.
    <br><br>
    Our main task at CEC is to encourage all community garden sites to adopt a standard, manageable composting system.
    <br><br>
  </div>
</div>

<span class="master-composter-header-text">Handouts and Guidelines</span>
<!--
  <div class="master-composter-large-box">
    <div class="master-composter-large-box-sidebar"></div>
    <div class="master-composter-large-box-textbox">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, magnam pariatur! Commodi, laborum sint minima sed nulla accusamus autem nam libero, dolor iure reprehenderit modi? Vel minima enim excepturi sequi?
    </div>
  </div>
-->




<div class="master-composter-item-container">
  <?php
  require 'inc/section_vars.php';
  $data = get_mastcomp_data($master_composter_hg);
  if (!empty($data)) {
    foreach ($data as $k => $f) {
  ?>
    <div class="master-composter-large-box">
      <div class="master-composter-large-box-sidebar"></div>
      <div class="master-composter-large-box-textbox">
        <a href="<?php echo $f['hgpage_link'] ?>" class="master-composter-no-style-link">
          <div class="hgpage_title">
            <?php echo $f['hgpage_title'] ?>
          </div>
          <div class="hgpage_description">
            <?php echo $f['hgpage_description'] ?>
          </div>
        </a>
      </div>
    </div>
  <?php
    }
  }
  ?>
</div>

<span class="master-composter-header-text"> CEC Reports, Presentations and Special Projects</span>
<div class="master-composter-item-container">
  <?php
  require 'inc/section_vars.php';
  $data = get_mastcomp_data($master_composter_rps);
  if (!empty($data)) {
    foreach ($data as $k => $f) {
  ?>
      <div class="master-composter-large-box">
        <div class="master-composter-large-box-sidebar"></div>
        <div class="master-composter-large-box-textbox">
          <a href="<?php echo $f['rpspage_link'] ?>" class="master-composter-no-style-link">
            <div class="rpspage_title">
              <?php echo $f['rpspage_title'] ?>
            </div>
            <div class="rpspage_description">
              <?php echo $f['rpspage_description'] ?>
            </div>
          </a>
        </div>
      </div>

  <?php
    }
  }
  ?>
</div>

<span class="master-composter-header-text">Community Partners and Advisors</span>
<div class="master-composter-item-container">
  <!--
    <div class="master-composter-small-box">
      <div class="master-composter-small-box-description">
        testingggg
      </div>
      <div class="master-composter-small-box-link" >
        <div><a class="master-composter-no-style-link" style="color:white" href="https:google.com">Learn More</a></div>
      </div>
    </div>
    -->
  <?php
  require 'inc/section_vars.php';
  $data = get_mastcomp_data($master_composter_pa);
  if (!empty($data)) {
    foreach ($data as $k => $f) {
  ?>

      <div class="master-composter-small-box">
        <div class="master-composter-small-box-description">
          <?php echo $f['pa_name'] ?>
        </div>
        <div class="master-composter-small-box-link" >
          <div><a class="master-composter-no-style-link" style="color:white" href="<?php echo $f['pa_link'] ?>">Learn More</a></div>
        </div>
      </div>
  <?php
    }
  }
  ?>
</div>

<span class="master-composter-header-text">Contacts</span>
<div class="master-composter-item-container">
  <!--
    <div class="master-composter-contact-box">
      <span class="master-composter-contact-box-name"><span> JOOOOOOOOOo</span></span>
      <div class="master-composter-contact-box-description">
        <span class="master-composter-contact-box-title"><span>dude</span></span>
        <span class="master-composter-contact-box-email"><span>dude@gmail.com</span></span>
      </div>
      <div class="master-composter-contact-box-link" >
        <div><a class="master-composter-no-style-link" style="color:white" href="mailto:aaa@umich.edu">Email</a></div>
      </div>
    </div>
  -->

  <?php
  require 'inc/section_vars.php';
  $data = get_mastcomp_data($master_composter_contacts);
  if (!empty($data)) {
    foreach ($data as $k => $f) {
  ?>
    <div class="master-composter-contact-box">
      <span class="master-composter-contact-box-name"><span> <?php echo $f['contact_name'] ?></span></span>
      <div class="master-composter-contact-box-description">
        <span class="master-composter-contact-box-title"><span><?php echo $f['contact_title'] ?> </span></span>
        <span class="master-composter-contact-box-email"><span><?php echo $f['contact_email'] ?></span></span>
      </div>
      <div class="master-composter-contact-box-link" >
        <div><a class="master-composter-no-style-link" style="color:white" href="mailto:<?php echo $f['contact_email'] ?>">Email <?php echo strtok($f['contact_name'],' ') ?></a></div>
      </div>
    </div>
      <!--
      <div class="mc-contact-box">
        <div class="mc-contact-name">
          <?php echo $f['contact_name'] ?>
        </div>
        <div class="mc-contact-title">
          <?php echo $f['contact_title'] ?> 
        </div>
        <div class="mc-contact-email">
          <?php echo $f['contact_email'] ?>
        </div>
      </div>

      <a href="<?php echo $f['hgpage_link'] ?>">
        <div class="hgpage_title">
          <?php echo $f['hgpage_title'] ?>
        </div>
        <div class="hgpage_description">
          <?php echo $f['hgpage_description'] ?>
        </div>
      </a>
    -->

  <?php
    }
  }
  ?>

</div>




<?php get_footer(); ?>