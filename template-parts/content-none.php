<?php
/**
 * This is The No posts available file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */

if (is_home() && current_user_can('publish_posts')) { //this checks if the user is logged in?

    printf(
        '<p>' . wp_kses(
            /* translators: 1: Link to WP admin new post page. */
            __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bootstrap2wordpress'),
            array(
                'a' => array(
                    'href' => array(),
                ),
            )
        ) . '</p>',
        esc_url(admin_url('post-new.php'))
    );

} elseif (is_search()) {
    ?>

    <div class="search-results-none">
        <h2>
            <?php esc_html_e('Not Found', 'bootstrap2wordpress'); ?>
        </h2>
        <p> <?php esc_html_e('The content you are looking for is no longer available.', 'bootstrap2wordpress'); ?> </p>
    </div>

    <?php
    get_search_form(); //Display search form so user can search for something else.
} else {
    ?>
    <div class="search-results-none">
        <h2>
            <?php esc_html_e('Not Found', 'bootstrap2wordpress'); ?>
        </h2>
        <p> <?php esc_html_e('The content you are looking for is no longer available.', 'bootstrap2wordpress'); ?> </p>
    </div>

    <?php
    get_search_form(); //Display search form so user can search for something else.
}
?>