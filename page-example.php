<?php 
  get_header(); 
?>

<h1>Add your message here</h1>

<form class="message-form" method="post">
  <input id="message-title" type="text">
  <button  type="submit">Save!</button>
</form>

<button type="button" class="collapsible">Open Collapsible</button>
<div class="collapse-content">
  <p>Lorem ipsum...</p>
</div>

<div class="editable">
    <h1 class="title"><?php echo get_theme_mod('title')?></h1>
    <p class="desc"><?php echo get_theme_mod('description')?></p>
</div>

<?php get_footer(); ?>
