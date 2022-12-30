<?php
/**
 * Title Banner and subscribe bar
 * 
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */

?>

<?php

$blog_info = get_bloginfo('name'); //This is what a php variable looks like. 
//get_bloginfo() is s wp function, here it is getting the name of this blog and storing it in this variable.
$description = get_bloginfo('description', 'display');
//Get the description of the blog and filter by display.

?>

<section class="title-banner"> <!--All this is for text that will appear in the site header-->
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
                <!--<p class="tag-line sub-title">Bootstrap to WordPress Course 2.0</p>
                <h1 class="page-title">Blog</h1>-->

                <?php //These opening and closing php taks are being used to place php inside the html.
                
                if (is_page()) { //These are all worpdress functions. If this is a page...
                
                    the_title('<h1 class="page-title">', '</h1>'); //Also a wordpress function, determines that an h1 element will wrap the title.
                
                } elseif (is_single()) { //If there is a single blog post...
                
                    ?>

                    <p class="tag-line sub-title"> <?php echo get_the_date('M d, Y'); //Echo is a php function used to output data to the screen. get_the_date is a wordpress function. This piece of code gets the date that the post was posted.
                        ?>
                    </p>

                    <?php

                } elseif (!is_front_page() && is_home()) { //If it's NOT the front page and IS the homepage...
                    $b2w_blog_title = get_the_title(get_option('page_for_posts', true)); //b2w is for "bootstrap to wordpress" just a variable name, this is a php variable.  get_option is a wp function. In wordpress you can decide if wp displays latest posts or a single static page in settings, you can set a page as the posts page. Here get_option is going to return the ID of the page assigned to display the Blog Posts Index. Overall this function gets the title and the id of the page.
                
                    ?>

                    <h1 class="page-title"> <?php echo esc_html($b2w_blog_title); ?></h1>

                    <?php
                } elseif (is_home()) {

                    if ($description) { //If a description exists and there is data in the $description variable up above...
                        ?>

                        <p class="tag-line sub-title">
                            <?php echo esc_html($description)
                                ?>
                        </p>

                        <?php //contains the closing bracket within php
                    }
                    ?>

                    <h1>
                        <?php esc_html_e('Bootstrap to Wordpress Blog Test', 'bootstrap2wordpress'); ?> <!--The first argument is the text that will appear in the header-->
                    </h1>
                    <!-- esc_html escapes html in the variable, esc_html_e helps with translated text? bootstrap2wordpress is the "text domain", the name of the theme-->

                    <?php
                } elseif (is_archive()) {

                    the_archive_title('<h1 class="page-title">', '</h1>'); //
                
                } elseif (is_404()) {
                    ?>
                    <h1>
                        <?php esc_html_e('Couldn\'t be found', 'bootstrap2wordpress'); ?>
                    </h1>
                    <?php
                } elseif (is_search()) {
                    $search_title = sprintf('%s %s', __('Search results for: ', 'bootstrap2wordpress'), get_search_query()); //sprintf is a php function, returns a formatted string, lets you find what the person searched for in the search bar which you can then put as the title of the search page. The code in the activation brackets also has something to do with translation?
                    ?>
                    <h1 class="page-title">
                        <?php echo esc_html($search_title); ?>
                    </h1>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</section>

<section class="subscribe-bar">
    <div class="container">
        <div class="row flex-vertical-center">
            <div class="col-sm-6">
                <p><strong>Want to save 20% on the course?</strong> Enter your email and we'll send you the discount
                    code!</p>
            </div>
            <div class="col-sm-6">
                <form action="index.html" class="" method="post">
                    <div class="row">
                        <div class="col-lg-8">
                            <input name="test" type="text" value="">
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-invert m-0" name="button" type="button">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>