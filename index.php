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

            <div id="myCarousel" class="carousel slide center-block col-md-12" data-ride="carousel" data-interval="5000000000">

                <!-- Wrapper for slides -->
                <div class="carousel-inner center-block" role="listbox">
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
                </div>

                <!-- Left and right controls -->
                <!--<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>-->
            </div>
        </div>

        <a class="center-block down-arrow" href="#about">
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

        <h2><span class="strong-line"></span><?php echo $aboutTitle; ?><span class="strong-line"></span></h2>

        <div class="col-md-4 flip-images">

            <a href="#" data-toggle="modal" data-target="#about_CV"><img src="<?php the_field('about_image1', 7); ?>"/></a>

            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="alt text" class="about-logo"/>

        </div>

        <div class="portfolio-modal modal fade" id="about_CV" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <div class="col-md-12" style="padding-bottom: 15px;">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cv.jpg">
                                </div>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 about-content">
            <?php echo $aboutContent; ?>
        </div>

        <a class="center-block down-arrow" href="#ideology">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>


    </div>

</div>

<?php
$ideology = get_posts(
    array(
        'name'      => 'ideology',
        'post_type' => 'page'
    )
);
$ideologyTitle = $ideology[0]->post_title;
$ideologyContent = apply_filters('the_content', $ideology[0]->post_content);
?>

<div id="ideology" class="ideology-container full-height col-md-12">

    <div class="container">

        <h2 class="center-block"><span class="strong-line"></span><?php echo $ideologyTitle; ?><span class="strong-line"></span></h2>

        <div class="col-md-12 ideology-content center-block">
            <?php echo $ideologyContent; ?>
        </div>

        <a class="center-block down-arrow" href="#inspiration">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>

    </div>


</div>

<?php
$inspiration = get_posts(
    array(
        'name'      => 'inspiration',
        'post_type' => 'page'
    )
);
$inspirationTitle = $inspiration[0]->post_title;
$inspirationContent = apply_filters('the_content', $inspiration[0]->post_content);
?>

<div id="inspiration" class="inspiration-container full-height col-md-12">

    <div class="container">

        <h2 class="center-block"><span class="strong-line"></span><?php echo $inspirationTitle; ?><span class="strong-line"></span></h2>

        <div class="col-md-12 inspiration-content center-block">
            <?php echo $inspirationContent; ?>
        </div>

        <a class="center-block down-arrow" href="#portfolio">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>

    </div>


</div>

<?php
$portfolio = get_posts(
    array(
        'name'      => 'portfolio',
        'post_type' => 'page'
    )
);
$portfolioTitle = $portfolio[0]->post_title;
$portfolioContent = apply_filters('the_content', $portfolio[0]->post_content);
?>

<div id="portfolio" class="portfolio-container full-height col-md-12">

    <div class="container">

        <h2 class="center-block"><span class="strong-line"></span><?php echo $portfolioTitle; ?><span class="strong-line"></span></h2>

        <div class="portfolio-subtitle-container col-md-12">

            <h2 class="left col-md-5"><span class="projects-line"></span>school projects<span class="projects-line"></span></h2>

            <h2 class="right col-md-5 col-md-offset-2"><span class="projects-line"></span>personal projects<span class="projects-line"></span></h2>

        </div>

        <div class="school-projects-container col-md-5">

        <?php
            $args = array( 'category' => 2, 'post_type' =>  'post' );
            $school = get_posts( $args );
            $count = 1;
            foreach ($school as $post) :  setup_postdata($post);
            ?>

            <div class="school-pic">

                <a href="#" data-toggle="modal" data-target="#scho-<?php echo $count; ?>"><div class="tint" style="background: url(<?php echo get_field( 'display_image' ); ?>)"></div></a>

            </div>

                <div class="portfolio-modal modal fade" id="scho-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2><?php the_title(); ?></h2>
                                        <?php echo apply_filters('the_content', $post->post_content); ?>

                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            <?php $count++; ?>

        <?php endforeach; ?>

        </div>

        <div class="portfolio-logo-container col-md-2">

            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="alt text" class="about-logo"/>

        </div>

        <div class="personal-projects-container col-md-5">

        <?php
            $args = array( 'category' => 3, 'post_type' =>  'post' );
            $school = get_posts( $args );
            $count = 1;
            foreach ($school as $post) :  setup_postdata($post);
            ?>

            <div class="personal-pic">

                <a href="#" data-toggle="modal" data-target="#pers-<?php echo $count; ?>"><div class="tint" style="background: url(<?php echo get_field( 'display_image' ); ?>)"></div></a>

            </div>

                <!--<a type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#pers-1">Open Modal</a>-->

                <div class="portfolio-modal modal fade" id="pers-<?php echo $count; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here -->
                                        <h2><?php the_title(); ?></h2>
                                        <?php echo apply_filters('the_content', $post->post_content); ?>

                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            <?php $count++; ?>

        <?php endforeach; ?>

        </div>

        <a class="center-block down-arrow" href="#portfolio">
            <span class="glyphicon glyphicon-chevron-down"></span>
        </a>

    </div>

</div>

<?php
$social = get_post(9);
$socialTitle = $social->post_title;
$socialContent = $social->post_content;
?>

<div id="social" class="social-container full-height col-md-12">

    <div class="container">

        <h2 class="center-block"><span class="strong-line"></span><?php echo $socialTitle; ?><span class="strong-line"></span></h2>

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

        <a class="center-block down-arrow" href="#contact">
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

        <h2 class="center-block"><span class="strong-line"></span><?php echo $contactTitle; ?><span class="strong-line"></span></h2>

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
