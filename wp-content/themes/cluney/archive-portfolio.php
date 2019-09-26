<?php get_header(); ?>

<main role="main">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <h1 class="page-title">Portfolio</h1>
      </div>
      <div class="col-md-8">
        <ul class="portfolio-categories">
          <?php if(is_post_type_archive($post_type)) : ?>
            <li class="cat-item current-cat"><a href="/portfolio/">All</a></li>
          <?php else : ?>
            <li class="cat-item"><a href="/portfolio/">All</a></li>
          <?php endif; ?>
          <?php wp_list_categories( array(
            'orderby'            => 'name',
            'hide_empty'         => 0,
            'title_li'           => '',
            'taxonomy'            => 'portfolio-gallery',
          ) ); ?>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-8">
        <div class="archive-description">
          <?php the_field('portfolio_summary', 'option'); ?>
        </div>
      </div>
    </div>
    <div class="gallery-posts">
      <div class="row">
        <?php get_template_part('loop-portfolio'); ?>
      </div>
    </div>
	</div>
</main>


<?php get_footer(); ?>
