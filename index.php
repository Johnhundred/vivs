<?php

get_header(); ?>

<?php
$carousel = get_post(5);
$carouselTitle = $carousel->post_title;
$carouselContent = $carousel->post_content;
$carouselID = $carousel->post->ID;
?>

<div id="carousel" class="carousel-container full-height col-md-12">

    <div class="container">

        <div class="row center-block">
            <div id="myCarousel" class="carousel slide center-block col-md-12" data-ride="carousel" data-interval="10000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner center-block" role="listbox">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="item active">
                            <div class="upper center-block"
                                 style="background: url(<?php the_field('image1', 5); ?>);
                                     background-size: cover; background-position: center;">
                            </div>
                        </div>
                        <div class="item">
                            <div class="upper cente-block"
                                 style="background: url(<?php the_field('image2', 5); ?>);
                                     background-size: cover; background-position: center;">
                            </div>
                        </div>
                        <div class="item center-block">
                            <div class="upper"
                                 style="background: url(<?php the_field('image3', 5); ?>);
                                     background-size: cover; background-position: center;">
                            </div>
                        </div>
                    <?php endwhile; else: ?>
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

        <a class="center-block down-arrow" href="#">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>

    </div>

</div>

<?php
$about = get_post(7);
$aboutTitle = $about->post_title;
$aboutContent = apply_filters('the_content', $about->post_content);
?>

<div id="about" class="about-container full-height col-md-12">

    <div class="container">

        <h2>- <?php echo $aboutTitle; ?> -</h2>

        <div class="col-md-4 flip-images">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $img1 = the_field('about_image1'); ?>
                <div class="f1_container">
                    <div class="f1_card shadow">
                        <div class="front face">
                            <img src="<?php the_field('about_image1', 7); ?>"/>
                        </div>
                        <div class="back face center">
                            <a href="#">Read My CV</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="alt text" class="about-logo"/>

        </div>

        <div class="col-md-8 about-content">
            <?php echo $aboutContent; ?>
        </div>


    </div>

</div>

<div id="portfolio" class="portfolio-container full-height col-md-12">

    <h2>portfolio</h2>

</div>

<?php
$social = get_post(9);
$socialTitle = $social->post_title;
$socialContent = $social->post_content;
?>

<div id="social" class="social-container full-height col-md-12">

    <div class="container">

        <h2 class="center-block">- <?php echo $socialTitle; ?> -</h2>

        <div class="col-md-12 social-content">
            <?php echo $socialContent; ?>
        </div>
        
        <div class="center-block">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="alt text" class="center-block"/>
            
        </div>


        <div class="col-md-12 center-block social-media">

            <?php if( get_field('instagram_link', 9) != ''): ?>
                <a href="<?php the_field('instagram_link', 9) ?>" target="_blank" class="center-block">Instagram</a>
            <?php endif; ?>

            <?php if( get_field('pinterest_link', 9) != ''): ?>
                <a href="<?php the_field('pinterest_link', 9) ?>" target="_blank" class="center-block">Pinterest</a>
            <?php endif; ?>

            <?php if( get_field('facebook_link', 9) != ''): ?>
               <a href="<?php the_field('facebook_link', 9) ?>" target="_blank" class="center-block">Facebook</a>
            <?php endif; ?>


        </div>

        <a class="center-block down-arrow" href="#">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>

    </div>

</div>

<?php
$contact = get_post(11);
$contactTitle = $contact->post_title;
$contactContent = $contact->post_content;
?>

<div id="contact" class="contact-container full-height col-md-12">

    <div class="container">

        <h2 class="center-block">- <?php echo $contactTitle; ?> -</h2>

        <div class="col-md-12 center-block name_mail">

            <?php if( get_field('contact_name', 11) != ''): ?>
                <h3><?php the_field('contact_name', 11) ?></h3>
            <?php endif; ?>

            <?php if( get_field('contact_email', 11) != ''): ?>
                <h3><?php the_field('contact_email', 11) ?></h3>
            <?php endif; ?>

        </div>

        <div class="col-md-12 center-block nr_loc">

            <?php if( get_field('contact_phonenr', 11) != ''): ?>
                <h3><?php the_field('contact_phonenr', 11) ?></h3>
            <?php endif; ?>

            <?php if( get_field('contact_city_country', 11) != ''): ?>
                <h3><?php the_field('contact_city_country', 11) ?></h3>
            <?php endif; ?>

        </div>

        <a class="center-block down-arrow" href="#">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>


    </div>

</div>

<?php get_footer(); ?>
