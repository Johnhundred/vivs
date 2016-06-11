<?php

get_header(); ?>

<?php
$carousel = get_post(5);
$carouselTitle = $carousel->post_title;
$carouselContent = $carousel->post_content;
$carouselID = $carousel->post->ID;
$carousel->img1 = get_field('image1', $carousel->post->ID);
$carousel->img2 = get_field('image2', $carousel->post->ID);
$carousel->img3 = get_field('image3', $carousel->post->ID);
?>

<div class="carousel-container full-height col-md-12">

    <div class="row-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
            <!-- GOTOSHOP-button -->
            <a href="shop" class="btn btn-default enter-button">enter shop</a>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="upper"
                             style="background: url(<?php $carousel->img1; ?>);
                                 background-size: cover;">
                            <div class="text">
                            </div>
                        </div>
                        <div class="below"
                             style="background: url(<?php the_field('first_lower_background') ?>);
                                 background-size: cover;">
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="upper"
                             style="background: url(<?php the_field('second_upper_background') ?>);
                                 background-size: cover;">
                            <div class="text">
                            </div>
                        </div>
                        <div class="below"
                             style="background: url(<?php the_field('second_lower_background') ?>);
                                 background-size: cover;">
                            <div class="text">
                            </div>
                        </div>
                    </div>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

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
