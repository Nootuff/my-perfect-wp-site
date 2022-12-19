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

<section class="title-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
                <!--<p class="tag-line sub-title">Bootstrap to WordPress Course 2.0</p>
                <h1 class="page-title">Blog</h1>-->

                <?php

                if (is_page()) { //If this is a page...
                
                } elseif (is_single()) {

                } elseif (!is_front_page() && is_home()) {

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