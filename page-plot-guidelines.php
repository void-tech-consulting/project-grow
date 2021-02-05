<?php 
  get_header(); 
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
  <div id="guidelines-header-img">
      <div class="guidelines-center-header-box">
          <h1 id="guidelines-header-title">Plot Guidelines</h1>
          <!--Make button actually link to other page eventually-->
          <button class="plant-guidelines-btn"><b>New? Get Started</b></button>
      </div>
  </div>
  <div class="indent main-page title"><b>Plot Usage/Guidelines</b></div>   

  <div class="indent" id="project-grow-guidelines">
    <p>
      Project Grow is committed to teaching, promoting, and practicing environmental 
      stewardship. To this end, everyone gardening with Project Grow Gardeners must use 
      organic practices as accepted by major organic certification agencies (e.g. Organic 
      Crop Improvement Association). Any gardener who does not strictly adhere to these 
      practices will have their plot revoked and will forfeit their right to garden with 
      Project Grow in the future.
    </p>
    <p id="guidelines-little-spacer">
      Please reference the guidelines listed below. We know organic gardening may not be 
      a familiar concept to all our members, so feel free to reach out to your Site 
      Coordinator for additional guidance (and maybe a tried and true tip or two).
    </p>
    <b>Click Below to learn more tips!</b>
  </div>

  <div id="guidelines-container">
    <div class="indent" id="guidelines-row">
      <div id="weed" onclick="print_guide(weed, weedGuide)" class="story-box">
        <p>
          <b>Weed Control</b></br>
          <i>Fungicides / Herbicides</i>
        </p>
      </div>
      <div id="insect" onclick="print_guide(insect, insectGuide)" class="story-box">
        <p>
          <b>Insect Control</b></br>
          <i>Insecticides / Pesticides</i>
        </p>
      </div>
      <div id="disease" onclick="print_guide(disease, diseaseGuide)" class="story-box">
        <p>
          <b>Disease Control</b></br>
          <i>Maintaining a healthy garden</i>
        </p>
      </div>
    </div>
    <!--All three expansion boxes go here-->
    <div id="weedGuide" class="guidelines-expansion hide left">
      <div id="weed-top-text">
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
        <div id="weed-bottom-text">
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
    <div id="insectGuide" class="guidelines-expansion hide middle">
      TODO
    </div>
    <div id="diseaseGuide" class="guidelines-expansion hide right">
      TODO2
    </div>
    <div class="indent" id="guidelines-row">
      <div id="fertilizer" onclick="print_guide(fertilizer, fertilizerGuide)" class="story-box">
        <p>
          <b>Fertilizer and Soil Amendments</b></br>
          <i>Improving the health of your soil</i>
        </p>
      </div>
      <div id="compost" onclick="print_guide(compost, compostGuide)" class="story-box">
        <p>
          <b>Composting</b></br>
          <!--Should this word be reuse-->
          <i>Garden refuse and protocol</i>
        </p>
      </div>
      <div id="forbidden" onclick="print_guide(forbidden, forbiddenGuide)" class="story-box">
        <p>
          <b>Forbidden Plants</b></br>
          <i>Prohibited to grow</i>
        </p>
      </div>
    </div>
    <!--All of the dropdowns go here-->
    <div id="fertilizerGuide" class="guidelines-expansion hide left">
      <div id="weed-top-text">
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
        <div id="weed-bottom-text">
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
    <div id="compostGuide" class="guidelines-expansion hide middle">
      compost
    </div>
    <div id="forbiddenGuide" class="guidelines-expansion hide right">
      forbidden
    </div>
    <div class="indent" id="guidelines-row">
      <div id="coords" onclick="print_guide(coords, coordsGuide)" class="story-box">
        <p>
          <b>Site Coordinators</b></br>
          <i>What we do</i>
        </p>
      </div>
      <div id="parties" onclick="print_guide(parties, partiesGuide)" class="story-box">
        <p>
          <b>Work Parties</b></br>
          <i>Maintaining communal areas</i>
        </p>
      </div>
      <div id="tools" onclick="print_guide(tools, toolsGuide)" class="story-box">
        <p>
          <b>Tools and Equipment</b></br>
          <i>Proper use and protocol</i>
        </p>
      </div>
    </div>
    <!--All dropdowns here-->
    <div id="coordsGuide" class="guidelines-expansion hide left">
      <div id="weed-top-text">
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
        <div id="weed-bottom-text">
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
    <div id="partiesGuide" class="guidelines-expansion hide middle">
      parties
    </div>
    <div id="toolsGuide" class="guidelines-expansion hide right">
      tools
    </div>
    <div class="indent" id="guidelines-row">
      <div id="maintenance" onclick="print_guide(maintenance, maintenanceGuide)" class="story-box">
        <p>
          <b>Plot Maintenance</b></br>
          <i>Rules to tending to your plot</i>
        </p>
      </div>
      <div id="water" onclick="print_guide(water, waterGuide)" class="story-box">
        <p>
          <b>Water</b></br>
          <i>Equipment and protocols</i>
        </p>
      </div>
      <div id="closing" onclick="print_guide(closing, closingGuide)" class="story-box">
        <p>
          <b>Closing Your Plot</b></br>
          <i>How to clean out your plot</i>
        </p>
      </div>
    </div>
    <!--Once again, put dropdowns here-->
    <div id="maintenanceGuide" class="guidelines-expansion hide left">
      <div id="weed-top-text">
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
        <div id="weed-bottom-text">
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
    <div id="waterGuide" class="guidelines-expansion hide middle">
      water
    </div>
    <div id="closingGuide" class="guidelines-expansion hide right">
      closing
    </div>
  </div>
</body>
</html>
<?php
  get_footer();
?>