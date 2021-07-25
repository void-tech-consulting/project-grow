<?php
    get_header();
    require 'inc/section_vars.php';
    $header_args = array(
        "img_src" => get_theme_mod($pg_sub_head_img, "/images/header-images/plot-guidelines-header-img.png"),
        "page_title" => get_theme_mod($pg_sub_head_title, "Plot Guidelines"),
        "button_text" => get_theme_mod($pg_sub_head_button_text, "New? Get Started"), 
        "page_slug" => get_theme_mod($pg_sub_head_slug, 'garden-sites'),
        );
    get_template_part('partials/content', 'page-sub-header', $header_args);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Plot Guidelines</title>
</head>
<body>
  <div class="indent main-page title"><b>Plot Usage/Guidelines</b></div>   

  <div class="guidelines-indent" id="project-grow-guidelines">
    <p>
      Project Grow is committed to teaching, promoting, and practicing environmental 
      stewardship. To this end, everyone gardening with Project Grow Gardeners must use 
      organic practices as accepted by major organic certification agencies (e.g. Organic 
      Crop Improvement Association). Any gardener who does not strictly adhere to these 
      practices will have their plot revoked and will forfeit their guidelines-right to garden with 
      Project Grow in the future.
    </p>
    <p id="guidelines-little-spacer">
      Please reference the guidelines listed below. We know organic gardening may not be 
      a familiar concept to all our members, so feel free to reach out to your Site 
      Coordinator for additional guidance (and maybe a tried and true tip or two).
    </p>
    <b>Click Below to learn more tips!</b>
  </div>

  <div id="guidelines-container-normal">
    <div class="guidelines-indent" id="guidelines-row">
      <div id="weed" onclick="print_guide(weed, weedGuide)" class="guidelines-story-box">
        <p>
          <b>Weed Control</b></br>
          <i>Fungicides / Herbicides</i>
        </p>
      </div>
      <div id="insect" onclick="print_guide(insect, insectGuide)" class="guidelines-story-box">
        <p>
          <b>Insect Control</b></br>
          <i>Insecticides / Pesticides</i>
        </p>
      </div>
      <div id="disease" onclick="print_guide(disease, diseaseGuide)" class="guidelines-story-box">
        <p>
          <b>Disease Control</b></br>
          <i>Maintaining a healthy garden</i>
        </p>
      </div>
    </div>
    <!--All three expansion boxes go here-->
    <div id="weedGuide" class="guidelines-expansion guidelines-hide guidelines-left">
      <div class="guideline">
        <p>
          Controlling weeds not only helps your plants flourish, but it 
          prevents neighbor garden plots from becoming overrun as well
        </p>
        <p>
          <b>Recommended:</b> Use hay to mulch around established seedlings 
          then hand weed as needed (Note: many sites coordinate a hay 
          delivery by a local farmer at the beginning of the season - 
          ask your Site Coordinator for details)
        </p>
        <p>
          <b>Prohibited:</b> Herbicides of any kind as they are hazardous 
          to human health, may kill or damage desirable crops, drift into 
          neighboring gardens, or remain in the soil long after initial use
        </p>
        <div id="weed-examples">
          <div id="weed-fungicides">
            <p>
              <b>Allowed fungicides:</b></br>
              Baking soda</br>
              Liquid copper</br>
              Anything else specifically labeled organic.
            </p>
            <p>
              <b>Disallowed fungicides:</b></br>
              Anything not specifically labeled organic.
            </p>
          
          </div>
          <div id="weed-herbicides">
            <p>
              <b>Allowed herbicides:</b></br>
              Anything specifically labeled organic.
            </p>
            <p>
              <b>Disallowed herbicides:</b></br>
              Round Up (glyphosate)</br>
              Preen</br>
              Anything not specifically labeled organic.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div id="insectGuide" class="guidelines-expansion guidelines-hide guidelines-middle">
      <div class="guideline">
        <p>
          Controlling insects is important to your own garden health, 
          but also helps your neighbors prevent excessive damage as well
        </p>
        <p>
          <b>Recommended:</b> Companion planting, fabric row covers, biological 
          controls (like Bacillus thuringiensis - a bacterium that controls 
          cabbage worms), and introducing natural predator species (like 
          ladybugs and lacewings); as a last resort natural botanical pesticides 
          (like Rotenone and Pyrethrum) that break down quickly and do not 
          leave harmful residue in the soil may be used
        </p>
        <p>
          <b>Prohibited:</b> Synthetic pesticides of any kind
        </p>
      </div>
    </div>

    <div id="diseaseGuide" class="guidelines-expansion guidelines-hide guidelines-right">
      <div class="guideline">
        <p>
          Most problems can be controlled by maintaining a clean garden and a healthy soil
        </p>
        <p>
          <b>Recommended:</b> Choose disease-resistant plant varieties, water judiciously, and remove diseased plants from the garden
        </p>
      </div>
    </div>

    <div class="guidelines-indent" id="guidelines-row">
      <div id="fertilizer" onclick="print_guide(fertilizer, fertilizerGuide)" class="guidelines-story-box">
        <p>
          <b>Fertilizer and Soil Amendments</b></br>
          <i>Improving the health of your soil</i>
        </p>
      </div>
      <div id="compost" onclick="print_guide(compost, compostGuide)" class="guidelines-story-box">
        <p>
          <b>Composting</b></br>
          <i>Garden reuse and protocol</i>
        </p>
      </div>
      <div id="forbidden" onclick="print_guide(forbidden, forbiddenGuide)" class="guidelines-story-box">
        <p>
          <b>Forbidden Plants</b></br>
          <i>Prohibited to grow</i>
        </p>
      </div>
    </div>
    <!--All of the dropdowns go here-->
    <div id="fertilizerGuide" class="guidelines-expansion guidelines-hide guidelines-left">
      <div class="guideline">
        <p>
          Soil health is important not only for your plants this season, 
          but for future gardeners as well; therefore, Project Grow strongly 
          encourages adding ample organic material (i.e. compost, leaf mold, 
          manure) maintain ongoing soil fertility
        </p>
        <p>
          <b>Recommended:</b> Products of plant or animal origin - compost, 
          leaf mold, livestock manure, blood and bone meal, cover crops, fish 
          emulsion, kelp meal, liquid seaweed; commercial organic fertilizer 
          blends;  natural mineral fertilizers - greensand, granite dust, ground limestone
        </p>
        <p>
          <b>Prohibited:</b> Inorganic fertilizers (e.g. 5-1-5, Miracle Grow)
        </p>
      </div>
    </div>

    <div id="compostGuide" class="guidelines-expansion guidelines-hide guidelines-middle">
      <div class="guideline">
        <p>
          Project Grow strongly encourages composting organic material from plots, 
          but it can only be done in designated areas at garden sites
        </p>
        <p>
          <b>Recommended:</b> Check your site's addendum in the 
          <a href="google.com">Member Handbook</a>
          for the composting policy and on-site composting location (if available)
        </p>
        <p>
          <b>Prohibited:</b> Composting garden refuse at the garden site outside of specified areas
        </p>
      </div>
    </div>

    <div id="forbiddenGuide" class="guidelines-expansion guidelines-hide guidelines-right">
      <div class="guideline">
        <p>
          In the spirit of community gardens, please ensure that your plot is 
          free from unacceptable plants; if you have concerns about neighboring 
          sites, please contact your Site Coordinator or the Board
        </p>
        <p>
          <b>Recommended:</b> If you find an unacceptable plant in your plot 
          (e.g. an invasive species like Mint), do not move it - if you'd like 
          to keep it for the season, limit its spread within your plot and do not transplant
        </p>
        <p>
          <b>Prohibited:</b> Invasive species (e.g. mint, comfrey, Jerusalem artichoke); 
          trees, bushes, or other woody perennials; illegal or dangerous plants
        </p>
      </div>
    </div>

    <div class="guidelines-indent" id="guidelines-row">
      <div id="coords" onclick="print_guide(coords, coordsGuide)" class="guidelines-story-box">
        <p>
          <b>Site Coordinators</b></br>
          <i>What we do</i>
        </p>
      </div>
      <div id="parties" onclick="print_guide(parties, partiesGuide)" class="guidelines-story-box">
        <p>
          <b>Work Parties</b></br>
          <i>Maintaining communal areas</i>
        </p>
      </div>
      <div id="tools" onclick="print_guide(tools, toolsGuide)" class="guidelines-story-box">
        <p>
          <b>Tools and Equipment</b></br>
          <i>Proper use and protocol</i>
        </p>
      </div>
    </div>
    <!--All dropdowns here-->
    <div id="coordsGuide" class="guidelines-expansion guidelines-hide guidelines-left">
      <div class="guideline">
        <p>
          Site Coordinators are responsible for answering gardening questions 
          and organizing opening day, work parties, plow dates, and closing day
        </p>
        <p>
          <b>Recommended:</b> Let your Site Coordinator know the best way 
          to contact you and/or when your contact information changes
        </p>
      </div>
    </div>
    <div id="partiesGuide" class="guidelines-expansion guidelines-hide guidelines-middle">
      <div class="guideline">
        <p>
          Project Grow Community Gardens participants are encouraged 
          to actively participate in their site's community
        </p>
        <p>
          <b>Recommended:</b> Attend work parties to maintain common 
          areas, get to know your neighboring gardeners, respect fellow 
          gardeners by maintaining your own plot, help others and ask for help when you need it
        </p>
      </div>
    </div>
    <div id="toolsGuide" class="guidelines-expansion guidelines-hide guidelines-right">
      <div class="guideline">
        <p>
        Many sites supply a few gardening tools marked with a red 
        handle and "Project Grow;" all sites supply hoses
        </p>
        <p>
          <b>Recommended:</b> Use tools with care, return tools when not in use, 
          notify your Site Coordinator or the Project Grow office when tools break, 
          never discard hoses (leaks can be fixed!)
        </p>
      </div>
    </div>
    <div class="guidelines-indent" id="guidelines-row-last">
      <div id="water" onclick="print_guide(water, waterGuide)" class="guidelines-story-box">
        <p>
          <b>Water</b></br>
          <i>Equipment and protocols</i>
        </p>
      </div>
      <div id="closing" onclick="print_guide(closing, closingGuide)" class="custom-story-box">
        <p>
          <b>Closing Your Plot</b></br>
          <i>How to clean out your plot</i>
        </p>
      </div>
    </div>
    <!--Once again, put dropdowns here-->
    <div id="waterGuide" class="guidelines-expansion guidelines-hide guidelines-middle">
      <div class="guideline">
        <p>Water costs are included in plot fees</p>
        <p>
          <b>Recommended:</b> Hand-held hose attachments for precise watering, 
          mulching to conserve water by holding in moisture; contacting your 
          Site Coordinator or the  Project Grow office if there's a leak or water problem
        </p>
        <p>
          <b>Prohibited:</b> Unattended garden watering, soaker hoses, hose timers
        </p>
      </div>
    </div>
    <div id="closingGuide" class="guidelines-expansion guidelines-hide guidelines-middle">
      <div class="guideline">
        <p>
          Gardeners must clean up plots (including perennial plots) at the end of each season. 
          <i>The closing date is the third Saturday in October and ranges from the 15th to the 21st.</i>
        </p>
        <p>
          <b>Required by Closing Day:</b> Annual plots ready for plowing, free of all non-organic material 
          (e.g. fencing, stakes) with vegetation cut to 1-foot lengths and scattered around the plot; 
          perennial plots should be free from all non-organic materials that are not in use and have a neat appearance
        </p>
      </div>
    </div>
  </div>
  <!-- Start mobile layout here -->
  <div id="guidelines-container-mobile" class="guidelines-indent">
    <div id="weed" onclick="print_guide(weed, weedGuide)" class="guidelines-story-box">
      <p>
        <b>Weed Control</b></br>
        <i>Fungicides / Herbicides</i>
      </p>
    </div>
    <div id="weedGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Controlling weeds not only helps your plants flourish, but it 
          prevents neighbor garden plots from becoming overrun as well
        </p>
        <p>
          <b>Recommended:</b> Use hay to mulch around established seedlings 
          then hand weed as needed (Note: many sites coordinate a hay 
          delivery by a local farmer at the beginning of the season - 
          ask your Site Coordinator for details)
        </p>
        <p>
          <b>Prohibited:</b> Herbicides of any kind as they are hazardous 
          to human health, may kill or damage desirable crops, drift into 
          neighboring gardens, or remain in the soil long after initial use
        </p>
        <div id="weed-examples">
          <div id="weed-fungicides">
            <p>
              <b>Allowed fungicides:</b></br>
              Baking soda</br>
              Liquid copper</br>
              Anything else specifically labeled organic.
            </p>
            <p>
              <b>Disallowed fungicides:</b></br>
              Anything not specifically labeled organic.
            </p>
          
          </div>
          <div id="weed-herbicides">
            <p>
              <b>Allowed herbicides:</b></br>
              Anything specifically labeled organic.
            </p>
            <p>
              <b>Disallowed herbicides:</b></br>
              Round Up (glyphosate)</br>
              Preen</br>
              Anything not specifically labeled organic.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="insect" onclick="print_guide(insect, insectGuide)" class="guidelines-story-box">
      <p>
        <b>Insect Control</b></br>
        <i>Insecticides / Pesticides</i>
      </p>
    </div>
    <div id="insectGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Controlling insects is important to your own garden health, 
          but also helps your neighbors prevent excessive damage as well
        </p>
        <p>
          <b>Recommended:</b> Companion planting, fabric row covers, biological 
          controls (like Bacillus thuringiensis - a bacterium that controls 
          cabbage worms), and introducing natural predator species (like 
          ladybugs and lacewings); as a last resort natural botanical pesticides 
          (like Rotenone and Pyrethrum) that break down quickly and do not 
          leave harmful residue in the soil may be used
        </p>
        <p>
          <b>Prohibited:</b> Synthetic pesticides of any kind
        </p>
      </div>
    </div>
    <div id="disease" onclick="print_guide(disease, diseaseGuide)" class="guidelines-story-box">
      <p>
        <b>Disease Control</b></br>
        <i>Maintaining a healthy garden</i>
      </p>
    </div>
    <div id="diseaseGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Most problems can be controlled by maintaining a clean garden and a healthy soil
        </p>
        <p>
          <b>Recommended:</b> Choose disease-resistant plant varieties, water judiciously, and remove diseased plants from the garden
        </p>
      </div>
    </div>
    <div id="fertilizer" onclick="print_guide(fertilizer, fertilizerGuide)" class="guidelines-story-box">
      <p>
        <b>Fertilizer and Soil Amendments</b></br>
        <i>Improving the health of your soil</i>
      </p>
    </div>
    <div id="fertilizerGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Soil health is important not only for your plants this season, 
          but for future gardeners as well; therefore, Project Grow strongly 
          encourages adding ample organic material (i.e. compost, leaf mold, 
          manure) maintain ongoing soil fertility
        </p>
        <p>
          <b>Recommended:</b> Products of plant or animal origin - compost, 
          leaf mold, livestock manure, blood and bone meal, cover crops, fish 
          emulsion, kelp meal, liquid seaweed; commercial organic fertilizer 
          blends;  natural mineral fertilizers - greensand, granite dust, ground limestone
        </p>
        <p>
          <b>Prohibited:</b> Inorganic fertilizers (e.g. 5-1-5, Miracle Grow)
        </p>
      </div>
    </div>
    <div id="compost" onclick="print_guide(compost, compostGuide)" class="guidelines-story-box">
      <p>
        <b>Composting</b></br>
        <i>Garden reuse and protocol</i>
      </p>
    </div>
    <div id="compostGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Project Grow strongly encourages composting organic material from plots, 
          but it can only be done in designated areas at garden sites
        </p>
        <p>
          <b>Recommended:</b> Check your site's addendum in the 
          <a href="google.com">Member Handbook</a>
          for the composting policy and on-site composting location (if available)
        </p>
        <p>
          <b>Prohibited:</b> Composting garden refuse at the garden site outside of specified areas
        </p>
      </div>
    </div>
    <div id="forbidden" onclick="print_guide(forbidden, forbiddenGuide)" class="guidelines-story-box">
      <p>
        <b>Forbidden Plants</b></br>
        <i>Prohibited to grow</i>
      </p>
    </div>
    <div id="forbiddenGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          In the spirit of community gardens, please ensure that your plot is 
          free from unacceptable plants; if you have concerns about neighboring 
          sites, please contact your Site Coordinator or the Board
        </p>
        <p>
          <b>Recommended:</b> If you find an unacceptable plant in your plot 
          (e.g. an invasive species like Mint), do not move it - if you'd like 
          to keep it for the season, limit its spread within your plot and do not transplant
        </p>
        <p>
          <b>Prohibited:</b> Invasive species (e.g. mint, comfrey, Jerusalem artichoke); 
          trees, bushes, or other woody perennials; illegal or dangerous plants
        </p>
      </div>
    </div>
    <div id="coords" onclick="print_guide(coords, coordsGuide)" class="guidelines-story-box">
      <p>
        <b>Site Coordinators</b></br>
        <i>What we do</i>
      </p>
    </div>
    <div id="coordsGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Site Coordinators are responsible for answering gardening questions 
          and organizing opening day, work parties, plow dates, and closing day
        </p>
        <p>
          <b>Recommended:</b> Let your Site Coordinator know the best way 
          to contact you and/or when your contact information changes
        </p>
      </div>
    </div>
    <div id="parties" onclick="print_guide(parties, partiesGuide)" class="guidelines-story-box">
      <p>
        <b>Work Parties</b></br>
        <i>Maintaining communal areas</i>
      </p>
    </div>
    <div id="partiesGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Project Grow Community Gardens participants are encouraged 
          to actively participate in their site's community
        </p>
        <p>
          <b>Recommended:</b> Attend work parties to maintain common 
          areas, get to know your neighboring gardeners, respect fellow 
          gardeners by maintaining your own plot, help others and ask for help when you need it
        </p>
      </div>
    </div>
    <div id="tools" onclick="print_guide(tools, toolsGuide)" class="guidelines-story-box">
      <p>
        <b>Tools and Equipment</b></br>
        <i>Proper use and protocol</i>
      </p>
    </div>
    <div id="toolsGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
        Many sites supply a few gardening tools marked with a red 
        handle and "Project Grow;" all sites supply hoses
        </p>
        <p>
          <b>Recommended:</b> Use tools with care, return tools when not in use, 
          notify your Site Coordinator or the Project Grow office when tools break, 
          never discard hoses (leaks can be fixed!)
        </p>
      </div>
    </div>
    <div id="water" onclick="print_guide(water, waterGuide)" class="guidelines-story-box">
      <p>
        <b>Water</b></br>
        <i>Equipment and protocols</i>
      </p>
    </div>
    <div id="waterGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>Water costs are included in plot fees</p>
        <p>
          <b>Recommended:</b> Hand-held hose attachments for precise watering, 
          mulching to conserve water by holding in moisture; contacting your 
          Site Coordinator or the  Project Grow office if there's a leak or water problem
        </p>
        <p>
          <b>Prohibited:</b> Unattended garden watering, soaker hoses, hose timers
        </p>
      </div>
    </div>
    <div id="closing" onclick="print_guide(closing, closingGuide)" class="guidelines-story-box">
      <p>
        <b>Closing Your Plot</b></br>
        <i>How to clean out your plot</i>
      </p>
    </div>
    <div id="closingGuide" class="guidelines-expansion guidelines-hide guidelines-border-mobile">
      <div class="guideline">
        <p>
          Gardeners must clean up plots (including perennial plots) at the end of each season. 
          <i>The closing date is the third Saturday in October and ranges from the 15th to the 21st.</i>
        </p>
        <p>
          <b>Required by Closing Day:</b> Annual plots ready for plowing, free of all non-organic material 
          (e.g. fencing, stakes) with vegetation cut to 1-foot lengths and scattered around the plot; 
          perennial plots should be free from all non-organic materials that are not in use and have a neat appearance
        </p>
      </div>
    </div>

  </div>
  <div id="guidelines-note-to-all" class="guidelines-indent">
    <p>
      <b>PLEASE REMEMBER -</b> We are guests on all properties where garden sites are located. 
      Our members and gardeners represent Project Grow. Please be a good tenant and respectful of landowners and neighbors.
    </p>
  </div>
</body>
</html>
<?php
  get_footer();
?>