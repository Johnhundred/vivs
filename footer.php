</div><!-- page-container -->

		<footer class="site-footer container">

            <div class="col-md-12 footer-container">


                        <div class="col-md-6">
                            <p id="copyright">&copy; Viviana Schmidt Jewellery 2016</p>
                            <p id="pd">Designed and Developed by <a href="http://particledesigns.dk">Particle Designs</a></p>
                        </div>

                        <div class="col-md-6 footer-links ">
                            <ul class="list-inline social-buttons">
                                <li>
                                    <?php if( get_field('facebook_link', 9) != ''): ?>
                                        <a href="<?php the_field('facebook_link', 9) ?>" target="_blank" class="center-block">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/facebook.png" alt="alt text" class="center-block"/>
                                        </a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php if( get_field('instagram_link', 9) != ''): ?>
                                        <a href="<?php the_field('instagram_link', 9) ?>" target="_blank" class="center-block">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/instagram.png" alt="alt text" class="center-block"/>
                                        </a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php if( get_field('pinterest_link', 9) != ''): ?>
                                        <a href="<?php the_field('instagram_link', 9) ?>" target="_blank" class="center-block">
                                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/pinterest.png" alt="alt text" class="center-block"/>
                                        </a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>

            </div>

		</footer><!-- .site-footer -->


<?php wp_footer(); ?>
</body>
</html>
