<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bootstrap2wordpress
 * @since 2.0
 */

  get_header();
  get_template_part('template-parts/banner','title');
?>

<div class="content-area">
  <div class="container">
    <div class="row">

      <?php
        // are there any posts in the DB?
        if ( have_posts() ) { //If there are posts...
          while( have_posts() ) { //While there are still posts...
            the_post(); 

            if( has_post_thumbnail() ) {
              the_post_thumbnail(
                'large',
                array(
                  'class' => 'img-fluid' //This class will be added to the image, its a bootstrap class to make the image responsive. 
                )
              );
            }
      ?>
      <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php
            the_content();
          ?>

        </article>
      </div>
      <?php
          }
        } else {
          get_template_part( 'template-parts/content', 'none' ); //Display the content-none template if 
        }
      ?>

    </div>
  </div>
</div>

<?php
get_footer();