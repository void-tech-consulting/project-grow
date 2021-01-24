<?php 
  get_header(); 
?>

<div class="header-img">
    <div class="center-header-box">
        <h1 id="header-title">Contact Us</h1>
        <button class="plant-catalog-btn"><b>Plant Catalog</b></button>
    </div>
</div>

<form class="contact-form" method="post">
    <label for="first-name">First Name</label>
    <input id="first-name" name="first-name" type="text">

    <label for="last-name">Last Name</label>
    <input id="last-name" name="last-name" type="text">

    <label for="from">From</label>
    <input id="from" name="from" type="text">

    <label for="to">To</label>
    <input id="to" name="to" type="text" value="info@projectgrowgardens.org">

    <label for="subject">Subject</label>
    <input id="subject" name="subject" type="text">

    <label for="message">Message</label>
    <textarea id="message" name="message"></textarea>

    <button type="submit">Submit</button>
</form>

<?php get_footer(); ?>
