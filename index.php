<?
get_header();
//This is a wordpress function that looks for a a header.php file in the root of your theme file.

get_template_part('template-parts/banner', 'title');
//Another wordpress function. It pulls in banner-title, note the way the title is pulled in, you can learn more about this function in the wordpress docs.
?>

<!--<section class="title-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
          <p class="tag-line sub-title">Bootstrap to WordPress Course 2.0</p>
          <h1 class="page-title">Blog</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="subscribe-bar">
    <div class="container">
      <div class="row flex-vertical-center">
        <div class="col-sm-6">
          <p><strong>Want to save 20% on the course?</strong> Enter your email and we'll send you the discount code!</p>
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
  </section>-->

<div class="content-area">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2 overflow-hidden">

        <!-- <article class="post">
            <div class="meta">
              <span>Sep 24, 2021</span>
            </div>
            <h2><a href="#">Blog post title</a></h2>
            <p class="excerpt">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veritatis expedita molestias id, dolorem sapiente quae dolores modi hic et ea, suscipit minima eligendi magnam odio reiciendis dolorum, non placeat?
            </p>
            <a href="#" class="read-more">Read the full post -&gt;</a>
          </article>

          <article class="post my-5">
            <div class="meta">
              <span>Sep 24, 2021</span>
            </div>
            <h2><a href="#">Blog post title</a></h2>
            <p class="excerpt">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veritatis expedita molestias id, dolorem sapiente quae dolores modi hic et ea, suscipit minima eligendi magnam odio reiciendis dolorum, non placeat?
            </p>
            <a href="#" class="read-more">Read the full post -&gt;</a>
          </article>

          <article class="post my-5">
            <div class="meta">
              <span>Sep 24, 2021</span>
            </div>
            <h2><a href="#">Blog post title</a></h2>
            <p class="excerpt">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veritatis expedita molestias id, dolorem sapiente quae dolores modi hic et ea, suscipit minima eligendi magnam odio reiciendis dolorum, non placeat?
            </p>
            <a href="#" class="read-more">Read the full post -&gt;</a>
          </article>

          <article class="post my-5">
            <div class="meta">
              <span>Sep 24, 2021</span>
            </div>
            <h2><a href="#">Blog post title</a></h2>
            <p class="excerpt">
              Test Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores veritatis expedita molestias id, dolorem sapiente quae dolores modi hic et ea, suscipit minima eligendi magnam odio reiciendis dolorum, non placeat?
            </p>
            <a href="#" class="read-more">Read the full post -&gt;</a>
          </article> -->

        <?php

        if (have_posts()) { //If there are posts in the blog database...
          while (have_posts()) { //While you still have posts in the database...
        
            the_post(); //WP function, pulls each individual post's data from the loop.
        
            get_template_part('template-parts/content', 'exerpt'); //the first argument is the 'slug', this line of code takes the html template from the content-exerpt file.
        
          }
        } else {
          get_template_part('template-parts/content', 'none');
        }

        ?>

      </div>
    </div>
  </div>
</div>

<?
get_footer();
//This is a wordpress function that looks for a a footer.php file in the root of your theme file.
?>