<?php /* Template Name: Home */ get_header(); ?>

  <main role="main">

    <!-- Hero -->
    <!-- =================================== -->
    <section class="home-hero">
      <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'home-hero', 'slug' ); } ?>
    </section>

    <section class="home-statement">
      <div class="container-fluid">
        <h1><span class="emphasis">CLUNEY PHOTO</span> is Des Moines based wedding photographer, Mark Cluney.</h1>
        <p>Specializing in Wedding and Elopement Photography, we are available for travel throughout Des Moines, Iowa, Montana, and nationwide.</p>
        <div class="home-statement-cta">
          <p>For inquiries or booking, please contact us <a href="/contact/">here</a> or call <a href="tel:4065403199">+1 (406) 540-3199</a>.</p>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
