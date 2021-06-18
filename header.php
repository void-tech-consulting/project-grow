<!-- If you have a navbar or html on the top of every page put it here -->
<?php 
    wp_head();
    require 'inc/section_vars.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project Grow Gardens</title>
  <script src="https://kit.fontawesome.com/79fab9bee3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="flex nav-flex">
            <div class="mobile-box">
                <a href="<?php echo home_url();?>">
                    <div class="nav-logo"></div>
                </a>
                <div class="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
                <?php  
                wp_nav_menu( $args = array(
                    'menu_class'        => "nav-links", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                    'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                    'container_id'      => "menu", // (string) The ID that is applied to the container.
                    'theme_location'    => "primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                    'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                    'menu_id'           => "menu-primary", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                ) );
                ?>
                
            </div>
        </div>
        <div class="content">
