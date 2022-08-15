<div class="footer-blocks">
  <div class="block-vendors-wrapper">
    <a href="/vendors-we-love/" class="block-vendors">
      <div class="vendors-text">
        <h3>Vendors <span>we</span> love</h3>
        <span class="block-cta">Check them out &rarr;</span>
      </div>
    </a>
  </div>

  <?php query_posts( array( 
    'post__not_in' => get_option( 'sticky_posts' ),
    'posts_per_page' => 1,
    )
  ); ?>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="block-blog">
      <div class="blog-post-img" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></div>
      <div class="blog-post-details-wrapper">
        <div class="blog-post-details">
          <span>LATEST ON THE BLOG</span>
          <h3><?php the_title(); ?></h3>
        </div>
      </div>
    </a>

  <?php endwhile; ?>

  <?php else: ?>

  <?php endif; ?>

  <?php wp_reset_query(); ?>

</div>
