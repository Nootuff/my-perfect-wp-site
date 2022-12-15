<?php  
/**
 * This is The Header file
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap2wordpress
 * @since Bootstrap to WordPress 2.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>><!--Will detect the language of the person viewing your site-->

<head>
  <meta charset="utf-8">
  <title>Bootstrap to WordPress 2.0</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <!--
  None of this html stuff needed, all being handled by the function up above.  
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font/flaticon.css">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">-->
</head>

<body <?php body_class() ?> class="blog">

  <div id="top-navigation">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">


        
          <!--<nav class="main-menu">
            <ul class="top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled">
              <li class="menu-item"><a href="index.html">Home</a></li>

              <li class="menu-item menu-item-has-children"><a href="index.html">Blog</a>

                <ul class="sub-menu">
                  <li class="menu-item"><a href="single.html">Single post</a></li>
                  <li class="menu-item"><a href="widgets.html">Widgets</a></li>
                  <li class="menu-item"><a href="index.html">Contact</a></li>

                  <li class="menu-item menu-item-has-children"><a href="index.html">Blog</a>
                    <ul class="sub-menu">
                      <li class="menu-item"><a href="index.html">Blog</a></li>
                      <li class="menu-item"><a href="index.html">FAQ</a></li>
                      <li class="menu-item"><a href="index.html">Contact</a></li>
                    </ul>
                  </li>

                </ul>

              </li>

              <li class="menu-item"><a href="widgets.html">Widgets</a></li>
              <li class="menu-item"><a href="index.html">Contact</a></li>
              <li class="menu-item special-menu"><a href="index.html">Join</a></li>
            </ul>
          </nav> -->

          <button type="button" class="navbar-open">
            <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
          </button>

        </div>
      </div>

      <!-- Mobile Menu -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
          <i class="flaticon flaticon-close"></i>
        </div>
        <nav class="menu-box">
          <ul class="navigation clearfix"></ul>
        </nav>
      </div>

    </div>
  </div>
