<?php

/**
 * The template for displaying a 404 page. File has to be called 404 as this si what worpdress excpects.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bootstrap2wordpress
 * @since 2.0
 */

get_header();
get_template_part('template-parts/banner', 'title');

?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">
                <div class="image-404 text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/404.jpg"
                        alt="404 Image" class="img_fluid"><!--This is how to get an internal image link in php?-->
                </div>
                <h3 class="text-center">
                    <?php esc_html_e('Could not find page', 'bootstrap2wordpress'); ?><!--This code is for translation purposes-->
                </h3>
                <div class="button-box text-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <?php esc_html_e('Back to homepage', 'bootstrap2wordpress'); ?> <!--Links to the homepage-->
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();