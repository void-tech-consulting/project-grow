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
    <div class="container">
        <div class="content">
        <div class="navbar">
            <div class="flex nav-flex">
            <a href="<?php echo home_url();?>">
                <div class="nav-logo"></div>
            </a>
                <?php  
                $args = array(
                "theme_location" => "primary",
                "container" => "ul",
                "menu_class" => "nav-links"
                );
                wp_nav_menu( $args);
                ?>

            </div>
        </div>
