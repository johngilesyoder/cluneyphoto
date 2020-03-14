<?php /* Template Name: Home */ get_header(); ?>

  <main role="main">

    <section class="home-portfolio-callout">
      <a href="/portfolio/">View Portfolio &rarr;</a>
    </section>

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

    <section class="home-investment">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h3>Invest in a lifetime of memories</h3>
            <p>Photography is a big investment. It's one of the main expenses in your wedding.  It's worth it. You should have a well documented and intimate retelling of the most important day of your life. You aren't just investing in pictures from your wedding day when you book me; you're investing in heirloom images you'll look back on for decades. Don't settle.</p>
            <a href="/investment" class="btn btn-primary">Learn more about your investment</a>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="home-testimonials">
      Testimonials
    </section>

    <section class="home-mentoring">
      Mentoring
    </section> -->

  </main>

<?php get_footer(); ?>
