<?php

get_header(); ?>

<div class="carousel-container full-height col-md-12">

</div>

<?php
$about = get_post(7);
$aboutTitle = $about->post_title;
$aboutContent = $about->post_content;
?>

<div class="about-container full-height col-md-12">

    <h2><?php echo $aboutTitle; ?></h2>

    <?php echo $aboutContent; ?>

</div>

<div class="portfolio-container full-height col-md-12">

    <h2>portfolio</h2>

</div>

<?php
$social = get_post(9);
$socialTitle = $social->post_title;
$socialContent = $social->post_content;
?>

<div class="social-container full-height col-md-12">

    <h2><?php echo $socialTitle; ?></h2>

    <?php echo $socialContent; ?>

</div>

<?php
$contact = get_post(11);
$contactTitle = $contact->post_title;
$contactContent = $contact->post_content;
?>

<div class="contact-container full-height col-md-12">

    <h2><?php echo $contactTitle; ?></h2>

    <?php echo $contactContent; ?>

</div>

<?php get_footer(); ?>
