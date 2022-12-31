<?php

/*
Enqueue scripts and styles
*/

if (!function_exists('b2w_theme_setup')) { //if this function does NOT exist within functions.php

    function b2w_theme_setup()
    { //These are all wordpress functions. You can find more info in the wordpress docs aboput them.

        load_theme_textdomain('bootstrap2wordpress', get_template_directory() . '/languages'); //Used for translations?
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');

        register_nav_menus(
            array(
                'primary' => esc_html__('Primary Menu', 'MyPerfectSite')
            )
        );
    }
}

add_action('after_setup_theme', 'b2w_theme_setup');

function b2w_assets()
{

    //Enqueue CSS Files
    wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), '1.0', 'all');
    //This is php code, it is a completed version of the template taken from- https://developer.wordpress.org/reference/functions/wp_enqueue_style/ This one enqueues the google fonts you use.

    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.1.1', 'all');
    //Enqueues your bootstrap download in the css folder, v5.1.1 is the version of bootstrap you are using, this version number is also found in the bootstrap file.

    wp_enqueue_style('flaticon', get_theme_file_uri('assets/font/flaticon.css'), array(), false, 'all');
    //False means this had no version number? If there are no dependences, you put array() which creates and empty array?

    //Main Css File
    wp_enqueue_style('perfectSite-styles', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');
    //'bootstrap' means this is dependant on the bootstrap install up above.

    //Enqueue JS Files
//Don't enqueue jqury, it will be loaded onto wordpress when required. 
    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.1.1', true);
    /*This is a function template from: https://developer.wordpress.org/reference/functions/wp_enqueue_script/, 
    on this linked page read the stuff about putting this script in the footer, the true parameter means this scrip will appear in the footer false puts it in the header*/
    wp_enqueue_script('perfectSite-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {

        wp_enqueue_script('comment-reply');

    }

}

add_action('wp_enqueue_scripts', 'b2w_assets');
//Notice b2w_assets is the name of the function up above.

//All of this stuff will be sent to the wp head function

function b2w_excerpt_readmore($more)
{ //This sets the readmore link for a post excerpt to ... instead of the wp default, can be whatever you want.
    return '...';
}

add_filter('excerpt_more', 'b2w_excerpt_readmore'); //The name of the function up above.

function b2W_pagination(){ //This function allows for post pagination, to set the number of posts before the pagination occurs, go to the wp admin then settings > reading "Blog pages show at most" set the number 

    global $wp_query;
    $links = paginate_links(
        //This is a wp function
        array(
            'current' => max(1, get_query_var('paged')),
            //These are parameters for the function.
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'prev_text' => '<-',
            //This only becomes a good looking arrow if you use a certain font.
            'next_text' => '->'
        )
    );

    $links = '<nav class="b2w-pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post($links);

}