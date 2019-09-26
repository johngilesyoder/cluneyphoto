      <!-- Footer Blocks -->
      <!-- =================================== -->
      <?php get_template_part( 'includes/footer-blocks' ); ?>

      <footer class="site-footer" role="contentinfo">
        <div class="container-fluid">

          <div class="footer-copyright">
            <p>&copy; Cluney Photo <?php echo date('Y'); ?>. All rights reserved.</p>
            <nav class="links-column">
              <?php footer_menu_1(); ?>
            </nav>
          </div>

          <ul class="footer-social">
            <li><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-email.png" alt="Email us"></a></li>
            <li><a href="http://facebook.com/cluneyphoto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-facebook.png" alt="Find us on Facebook"></a></li>
            <li><a href="http://instagram.com/cluneyphoto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-instagram-1.png" alt="Follow us on Instagram"></a></li>
          </ul>
		  <div class="footer-text" style="margin-top: 40px;max-width: 700px;margin-left: auto;margin-right: auto;">
		    Des Moines Wedding Photographers and Editorial Photographer Cluney Photo specialize in Iowa Weddings and Destination Elopement Photography. We travel to Iowa City, Cedar Rapids, Davenport, Clear Lake, Okaboji, Omaha, Chicago, Minneapolis and Kansas City for Destination Weddings.
		  </div>
        </div>
      </footer>

		<?php wp_footer(); ?>

	</body>
</html>
