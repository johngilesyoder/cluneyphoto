<!-- sidebar -->
<aside class="blog-sidebar" role="complementary">

  <div class="row">
    <div class="sidebar-widget">
      <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('global-sidebar')) ?>
    </div>
  </div>

  <!-- Tripadvisor -->
  <div class="sidebar-tripadvisor">
    <h3>Finca on Tripadvisor</h3>
    <div class="badges">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-1.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-2.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-3.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-4.svg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tripadvisor-5.svg" alt="">
    </div>
  </div>

</aside>
<!-- /sidebar -->
