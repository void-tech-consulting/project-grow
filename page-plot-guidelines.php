<?php 
  get_header(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
      <div id="weed" onclick="print_guide(weed)" class="story-box">
        <p>
          <b>Weed Control</b></br>
          <i>Fungicides / Herbicides</i>
        </p>
      </div>
      <div id="insect" onclick="print_guide(insect)" class="story-box">
        <p>
          <b>Insect Control</b></br>
          <i>Insecticides / Pesticides</i>
        </p>
      </div>
      <div id="disease" onclick="print_guide(disease)" class="story-box">
        <p>
          <b>Disease Control</b></br>
          <i>Maintaining a healthy garden</i>
        </p>
      </div>
    </div>
    <!--All three expansion boxes go here-->
    <div id="guidelines-expansion">
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
  </div>
</body>
</html>
<?php
  get_footer();
?>