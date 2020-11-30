<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Example Website Title</title>
</head>
<body>
<!-- Example navbar -->
  <div id="menu">
    <?php  
    $args = array(
      "theme_location" => "primary",
      "container" => "ul",
      "menu_class" => "nav-links"
    );
    wp_nav_menu( $args);
    ?>
  </div>
