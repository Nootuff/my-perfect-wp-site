<footer>
  <?php if (get_theme_mod('footer_calltoaction_visibility')) { ?>
    <!--Linked to the footer_calltoaction_visibility customizer function in the customizer file,
       if that's set to true, this section of the footer will appear, if not, it won't-->
    <div class="footer-calltoaction text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 overflow-hidden">
            <p class="sub-title">
              <?php echo esc_html(get_theme_mod('footer_sub_heading', 'Test test')); ?>
            </p>
            <!--Connects to the footer_sub_heading function in the customizer file, the second argument is the default
            placeholder text.-->
            <h2><?php echo esc_html(get_theme_mod('footer_calltoaction_heading', 'Name here')); ?></h2>
            <p class="fcta-desc">
              <?php echo esc_html(get_theme_mod('footer_calltoaction_desc', 'Description here')); ?>
            </p>
            <a href="<?php echo esc_html(get_theme_mod('footer_calltoaction_link', '#')); ?>"
              class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'footer_calltoaction_button','Sign up' ) ); ?></a>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>

  <div class="copyright text-center">
    <p>
      <?php echo wp_kses_post(get_theme_mod('footer_copyright', 'Copyright Adam 2023')); ?>
    </p>
  </div>
</footer>

<!--<script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main-script.js"></script>-->

<?php wp_footer(); ?><!-- Imports the js files tagged with "true" from functions .php -->

</body>

</html>