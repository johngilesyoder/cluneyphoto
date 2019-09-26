<?php get_header(); ?>

  <div class="container-fluid">
    <h1 class="page-title"><a href="/blog/">Blog <small>Love &amp; Light</small></a></h1>
    <div class="row">
      <div class="col-md-8">
        <h2 class="archive-title"><span><?php the_archive_title( '', '' ); the_archive_description( '<span class="taxonomy-description">', '</span>' );?></span></h2>
        <main role="main">

    			<?php get_template_part('loop'); ?>

    			<?php get_template_part('pagination'); ?>

      	</main>
      </div>
      <div class="col-md-4">

        <?php get_sidebar(); ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
